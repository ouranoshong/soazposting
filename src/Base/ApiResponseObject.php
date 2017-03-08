<?php

namespace XYWL\SoazPosting\Base;

class ApiResponseObject
{

    /**
     * @var string $errMessage
     */
    protected $errMessage = null;

    /**
     * @var int $status
     */
    protected $status = null;

    /**
     * @var int $statusAndErrMessage
     */
    protected $statusAndErrMessage = null;

    /**
     * @param int $status
     * @param int $statusAndErrMessage
     */
    public function __construct($status, $statusAndErrMessage)
    {
      $this->status = $status;
      $this->statusAndErrMessage = $statusAndErrMessage;
    }

    /**
     * @return string
     */
    public function getErrMessage()
    {
      return $this->errMessage;
    }

    /**
     * @param string $errMessage
     * @return \XYWL\SoazPosting\Base\ApiResponseObject
     */
    public function setErrMessage($errMessage)
    {
      $this->errMessage = $errMessage;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param int $status
     * @return \XYWL\SoazPosting\Base\ApiResponseObject
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusAndErrMessage()
    {
      return $this->statusAndErrMessage;
    }

    /**
     * @param int $statusAndErrMessage
     * @return \XYWL\SoazPosting\Base\ApiResponseObject
     */
    public function setStatusAndErrMessage($statusAndErrMessage)
    {
      $this->statusAndErrMessage = $statusAndErrMessage;
      return $this;
    }

}
