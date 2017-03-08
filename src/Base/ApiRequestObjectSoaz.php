<?php

namespace XYWL\SoazPosting\Base;

class ApiRequestObjectSoaz
{

    /**
     * @var string $integratorUsername
     */
    protected $integratorUsername = null;

    /**
     * @var string $soazUsername
     */
    protected $soazUsername = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getIntegratorUsername()
    {
      return $this->integratorUsername;
    }

    /**
     * @param string $integratorUsername
     * @return \XYWL\SoazPosting\Base\ApiRequestObjectSoaz
     */
    public function setIntegratorUsername($integratorUsername)
    {
      $this->integratorUsername = $integratorUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getSoazUsername()
    {
      return $this->soazUsername;
    }

    /**
     * @param string $soazUsername
     * @return \XYWL\SoazPosting\Base\ApiRequestObjectSoaz
     */
    public function setSoazUsername($soazUsername)
    {
      $this->soazUsername = $soazUsername;
      return $this;
    }

}
