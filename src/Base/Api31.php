<?php

namespace XYWL\SoazPosting\Base;

class Api31 extends ApiResponseObject
{

    /**
     * @var string $COP
     */
    protected $COP = null;

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
    public function getCOP()
    {
      return $this->COP;
    }

    /**
     * @param string $COP
     * @return \XYWL\SoazPosting\Base\Api31
     */
    public function setCOP($COP)
    {
      $this->COP = $COP;
      return $this;
    }

}
