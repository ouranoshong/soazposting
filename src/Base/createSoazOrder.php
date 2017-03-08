<?php

namespace XYWL\SoazPosting\Base;

class createSoazOrder
{

    /**
     * @var Api30Request $api30Req
     */
    protected $api30Req = null;

    /**
     * @param Api30Request $api30Req
     */
    public function __construct($api30Req)
    {
      $this->api30Req = $api30Req;
    }

    /**
     * @return Api30Request
     */
    public function getApi30Req()
    {
      return $this->api30Req;
    }

    /**
     * @param Api30Request $api30Req
     * @return \XYWL\SoazPosting\Base\createSoazOrder
     */
    public function setApi30Req($api30Req)
    {
      $this->api30Req = $api30Req;
      return $this;
    }

}
