<?php

namespace XYWL\SoazPosting\Base;

class SoazPostingService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'createSoazOrder' => 'XYWL\\SoazPosting\\Base\\createSoazOrder',
      'createSoazOrderResponse' => 'XYWL\\SoazPosting\\Base\\createSoazOrderResponse',
      'getSoazAddressPack' => 'XYWL\\SoazPosting\\Base\\getSoazAddressPack',
      'getSoazAddressPackResponse' => 'XYWL\\SoazPosting\\Base\\getSoazAddressPackResponse',
      'ApiRequestObjectSoaz' => 'XYWL\\SoazPosting\\Base\\ApiRequestObjectSoaz',
      'Api30Request' => 'XYWL\\SoazPosting\\Base\\Api30Request',
      'ApiResponseObject' => 'XYWL\\SoazPosting\\Base\\ApiResponseObject',
      'Api30' => 'XYWL\\SoazPosting\\Base\\Api30',
      'Api31Request' => 'XYWL\\SoazPosting\\Base\\Api31Request',
      'Api31' => 'XYWL\\SoazPosting\\Base\\Api31',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://www.ec-ship.hk/API-trial/services/SoazPosting?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param createSoazOrder $parameters
     * @return createSoazOrderResponse
     */
    public function createSoazOrder(createSoazOrder $parameters)
    {
      return $this->__soapCall('createSoazOrder', array($parameters));
    }

    /**
     * @param getSoazAddressPack $parameters
     * @return getSoazAddressPackResponse
     */
    public function getSoazAddressPack(getSoazAddressPack $parameters)
    {
      return $this->__soapCall('getSoazAddressPack', array($parameters));
    }

}
