<?php

namespace XYWL\SoazPosting\Base;

class Api30 extends ApiResponseObject
{

    /**
     * @var string $itemNo
     */
    protected $itemNo = null;

    /**
     * @param int $status
     * @param int $statusAndErrMessage
     */
    public function __construct($status, $statusAndErrMessage)
    {
      parent::__construct($status, $statusAndErrMessage);
    }

    /**
     * @return string
     */
    public function getItemNo()
    {
      return $this->itemNo;
    }

    /**
     * @param string $itemNo
     * @return \XYWL\SoazPosting\Base\Api30
     */
    public function setItemNo($itemNo)
    {
      $this->itemNo = $itemNo;
      return $this;
    }

}
