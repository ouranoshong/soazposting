<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 11/2/16
 * Time: 11:56 AM
 */

namespace XYWL\SoazPosting;

use XYWL\SoazPosting\Base\ApiRequestObjectSoaz;
use XYWL\SoazPosting\Base\SoazPostingService;

/**
 * Class Client
 *
 * @package XYWL\SoazPosting
 */
class Client
{
    private $_apiUsername;
    private $_apiToken;
    private $_soazUsername;
    private $_wsdlUri;

    public function __construct($apiUsername = '', $apiToken = '', $soazUsername = '', $wsdlUri = '')
    {
        $this->_apiUsername = $apiUsername;
        $this->_apiToken = $apiToken;
        $this->_soazUsername = $soazUsername;
        $this->_wsdlUri = $wsdlUri;
    }


    public function setAPIUsername($name) {
        $this->_apiUsername = $name;
        return $this;
    }

    public function setAPIToken($token) {
        $this->_apiToken = $token;
        return $this;
    }

    public function setSoazUsername($name) {
        $this->_soazUsername = $name;
        return $this;
    }

    public function setWSDLUri($uri) {
        $this->_wsdlUri = $uri;
        return $this;
    }

    /**
     *
     * default demo api test username : api_demo_account
     * @return string
     */
    public function getAPIUsername()
    {
        return $this->_apiUsername;
    }

    /**
     * @return string
     */
    public function getAPIToken()
    {
        return $this->_apiToken;
    }

    /**
     * default demo api test username : tapi_demo_account
     *
     * @return string
     */
    public function getSoazUsername()
    {
        return $this->_soazUsername;
    }

    public function getWSDLUri() {
        return $this->_wsdlUri;
    }

    /**
     * @return \SoapHeader
     */
    public function generateHeader()
    {
        // Creating date using yyyy-mm-ddThh:mm:ssZ format
        $tm_created = gmdate('Y-m-d\TH:i:s\Z');
        $tm_expires = gmdate('Y-m-d\TH:i:s\Z', gmdate('U') + 180);


        // Generating, packing and encoding a random number
        $simple_nonce = mt_rand();
        $encoded_nonce = base64_encode(pack('H*', $simple_nonce));


        $username = $this->getAPIUsername();
        $password = $this->getAPIToken();
        $passdigest = base64_encode(pack('H*',sha1(pack('H*', $simple_nonce) . pack('a*', $tm_created) . pack('a*', $password))));

        // Initializing namespaces
        $ns_wsse = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
        $ns_wsu = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd';
        $password_type = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordDigest';
        $encoding_type = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-soap-message-security-1.0#Base64Binary';

        // Creating WSS identification header using SimpleXML
        $root = new \SimpleXMLElement('<root/>');

        $security = $root->addChild('wsse:Security', null, $ns_wsse);

        $usernameToken = $security->addChild('wsse:UsernameToken', null, $ns_wsse);
        $usernameToken->addChild('wsse:Username', $username, $ns_wsse);
        $usernameToken->addChild('wsse:Password', $passdigest, $ns_wsse)->addAttribute('Type', $password_type);
        $usernameToken->addChild('wsse:Nonce', $encoded_nonce, $ns_wsse)->addAttribute('EncodingType', $encoding_type);
        $usernameToken->addChild('wsu:Created', $tm_created, $ns_wsu);

        // Recovering XML value from that object
        $root->registerXPathNamespace('wsse', $ns_wsse);
        $full = $root->xpath('/root/wsse:Security');
        $auth = $full[0]->asXML();

        return new \SoapHeader($ns_wsse, 'Security', new \SoapVar($auth, XSD_ANYXML), true);
    }

    /**
     * @param \XYWL\SoazPosting\RequestInterface | ApiRequestObjectSoaz $request
     *
     * @return mixed
     */
    public function handle(RequestInterface $request) {

        $request = $this->setRequestAuth($request);
        $Service = $this->initService($request);

        $method = $this->checkApiMethod($request, $Service);
        $parameter = $request;
        if ($wrapper = $this->checkRequestWrapper($request)) {
            $parameter = new $wrapper($parameter);
        }

        $response = call_user_func([$Service, $method], $parameter);

        return $response;
    }

    /**
     * @param \XYWL\SoazPosting\RequestInterface $request
     *
     * @return \XYWL\SoazPosting\Base\SoazPostingService
     */
    protected function initService(RequestInterface $request)
    {
        $Service = new SoazPostingService($request->getHandleOptions(), $this->getWSDLUri());
        $Service->__setSoapHeaders($this->generateHeader());
        return $Service;
    }

    /**
     * @param \XYWL\SoazPosting\Base\ApiRequestObjectSoaz $request
     *
     * @return \XYWL\SoazPosting\Base\ApiRequestObjectSoaz | RequestInterface
     */
    protected function setRequestAuth(ApiRequestObjectSoaz $request)
    {
        $request->setIntegratorUsername($this->getAPIUsername());
        $request->setSoazUsername($this->getSoazUsername());
        return $request;
    }

    /**
     * @param \XYWL\SoazPosting\RequestInterface $request
     * @param \XYWL\SoazPosting\Base\SoazPostingService $Service
     *
     * @return mixed
     */
    protected function checkApiMethod(RequestInterface $request, $Service)
    {
        $method = $request->getApiMethod();

        if (!method_exists($Service, $method)) throw new \InvalidArgumentException("$method does not exists in ".get_class($Service));

        return $method;
    }

    /**
     * @param \XYWL\SoazPosting\RequestInterface $request
     *
     * @return string
     */
    protected function checkRequestWrapper(RequestInterface $request)
    {
        $wrapper = $request->getWrapper();

        if (!$wrapper) return '';

        if (!class_exists($wrapper)) throw new \InvalidArgumentException("$wrapper does not exists");

        return $wrapper;
    }

}
