<?php

namespace XYWL\SoazPosting\Base;

class getSoazAddressPackResponse
{

    /**
     * @var Api31 $getSoazAddressPackReturn
     */
    protected $getSoazAddressPackReturn = null;

    /**
     * @param Api31 $getSoazAddressPackReturn
     */
    public function __construct($getSoazAddressPackReturn)
    {
      $this->getSoazAddressPackReturn = $getSoazAddressPackReturn;
    }

    /**
     * @return Api31
     */
    public function getGetSoazAddressPackReturn()
    {
      return $this->getSoazAddressPackReturn;
    }

    /**
     * @param Api31 $getSoazAddressPackReturn
     * @return \XYWL\SoazPosting\Base\getSoazAddressPackResponse
     */
    public function setGetSoazAddressPackReturn($getSoazAddressPackReturn)
    {
      $this->getSoazAddressPackReturn = $getSoazAddressPackReturn;
      return $this;
    }

}
