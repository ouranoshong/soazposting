<?php

namespace XYWL\SoazPosting\Base;

class Api31Request extends ApiRequestObjectSoaz
{

    /**
     * @var int $cn22NoOfCopy
     */
    protected $cn22NoOfCopy = null;

    /**
     * @var int $cn23NoOfCopy
     */
    protected $cn23NoOfCopy = null;

    /**
     * @var string $createDate
     */
    protected $createDate = null;

    /**
     * @var string $itemNo
     */
    protected $itemNo = null;

    /**
     * @var string $printMode
     */
    protected $printMode = null;

    /**
     * @var string $signature
     */
    protected $signature = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getCn22NoOfCopy()
    {
      return $this->cn22NoOfCopy;
    }

    /**
     * @param int $cn22NoOfCopy
     * @return \XYWL\SoazPosting\Base\Api31Request
     */
    public function setCn22NoOfCopy($cn22NoOfCopy)
    {
      $this->cn22NoOfCopy = $cn22NoOfCopy;
      return $this;
    }

    /**
     * @return int
     */
    public function getCn23NoOfCopy()
    {
      return $this->cn23NoOfCopy;
    }

    /**
     * @param int $cn23NoOfCopy
     * @return \XYWL\SoazPosting\Base\Api31Request
     */
    public function setCn23NoOfCopy($cn23NoOfCopy)
    {
      $this->cn23NoOfCopy = $cn23NoOfCopy;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
      return $this->createDate;
    }

    /**
     * @param string $createDate
     * @return \XYWL\SoazPosting\Base\Api31Request
     */
    public function setCreateDate($createDate)
    {
      $this->createDate = $createDate;
      return $this;
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
     * @return \XYWL\SoazPosting\Base\Api31Request
     */
    public function setItemNo($itemNo)
    {
      $this->itemNo = $itemNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrintMode()
    {
      return $this->printMode;
    }

    /**
     * @param string $printMode
     * @return \XYWL\SoazPosting\Base\Api31Request
     */
    public function setPrintMode($printMode)
    {
      $this->printMode = $printMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
      return $this->signature;
    }

    /**
     * @param string $signature
     * @return \XYWL\SoazPosting\Base\Api31Request
     */
    public function setSignature($signature)
    {
      $this->signature = $signature;
      return $this;
    }

}
