<?php

namespace XYWL\SoazPosting\Base;

class getSoazAddressPack
{

    /**
     * @var Api31Request $api31Req
     */
    protected $api31Req = null;

    /**
     * @param Api31Request $api31Req
     */
    public function __construct($api31Req)
    {
      $this->api31Req = $api31Req;
    }

    /**
     * @return Api31Request
     */
    public function getApi31Req()
    {
      return $this->api31Req;
    }

    /**
     * @param Api31Request $api31Req
     * @return \XYWL\SoazPosting\Base\getSoazAddressPack
     */
    public function setApi31Req($api31Req)
    {
      $this->api31Req = $api31Req;
      return $this;
    }

}
