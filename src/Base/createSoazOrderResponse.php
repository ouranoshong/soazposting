<?php

namespace XYWL\SoazPosting\Base;

class createSoazOrderResponse
{

    /**
     * @var Api30 $createSoazOrderReturn
     */
    protected $createSoazOrderReturn = null;

    /**
     * @param Api30 $createSoazOrderReturn
     */
    public function __construct($createSoazOrderReturn)
    {
      $this->createSoazOrderReturn = $createSoazOrderReturn;
    }

    /**
     * @return Api30
     */
    public function getCreateSoazOrderReturn()
    {
      return $this->createSoazOrderReturn;
    }

    /**
     * @param Api30 $createSoazOrderReturn
     * @return \XYWL\SoazPosting\Base\createSoazOrderResponse
     */
    public function setCreateSoazOrderReturn($createSoazOrderReturn)
    {
      $this->createSoazOrderReturn = $createSoazOrderReturn;
      return $this;
    }

}
