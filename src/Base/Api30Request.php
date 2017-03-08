<?php

namespace XYWL\SoazPosting\Base;

class Api30Request extends ApiRequestObjectSoaz
{

    /**
     * @var string $addresseeAddr1
     */
    protected $addresseeAddr1 = null;

    /**
     * @var string $addresseeAddr2
     */
    protected $addresseeAddr2 = null;

    /**
     * @var string $addresseeAddr3
     */
    protected $addresseeAddr3 = null;

    /**
     * @var string $addresseeAddr4
     */
    protected $addresseeAddr4 = null;

    /**
     * @var string $addresseeCity
     */
    protected $addresseeCity = null;

    /**
     * @var string $addresseeCompanyName
     */
    protected $addresseeCompanyName = null;

    /**
     * @var string $addresseeCountry
     */
    protected $addresseeCountry = null;

    /**
     * @var string $addresseeEmail
     */
    protected $addresseeEmail = null;

    /**
     * @var string $addresseeFaxNo
     */
    protected $addresseeFaxNo = null;

    /**
     * @var string $addresseeName
     */
    protected $addresseeName = null;

    /**
     * @var string $addresseePostalCode
     */
    protected $addresseePostalCode = null;

    /**
     * @var string $addresseeTelNo
     */
    protected $addresseeTelNo = null;

    /**
     * @var string $cn23Flag
     */
    protected $cn23Flag = null;

    /**
     * @var string $cn23ItemTypeCode
     */
    protected $cn23ItemTypeCode = null;

    /**
     * @var string $cn23ItemTypeDesc
     */
    protected $cn23ItemTypeDesc = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $custOrdRef
     */
    protected $custOrdRef = null;

    /**
     * @var string $impEmail
     */
    protected $impEmail = null;

    /**
     * @var string $impFaxNo
     */
    protected $impFaxNo = null;

    /**
     * @var string $impRef
     */
    protected $impRef = null;

    /**
     * @var string $impTelNo
     */
    protected $impTelNo = null;

    /**
     * @var float $insurAmt
     */
    protected $insurAmt = null;

    /**
     * @var string $insurFlag
     */
    protected $insurFlag = null;

    /**
     * @var string $insurRPlanName
     */
    protected $insurRPlanName = null;

    /**
     * @var string $itemCtyCode1
     */
    protected $itemCtyCode1 = null;

    /**
     * @var string $itemCtyCode2
     */
    protected $itemCtyCode2 = null;

    /**
     * @var string $itemCtyCode3
     */
    protected $itemCtyCode3 = null;

    /**
     * @var string $itemCtyCode4
     */
    protected $itemCtyCode4 = null;

    /**
     * @var string $itemCurrCode1
     */
    protected $itemCurrCode1 = null;

    /**
     * @var string $itemDesc1
     */
    protected $itemDesc1 = null;

    /**
     * @var string $itemDesc2
     */
    protected $itemDesc2 = null;

    /**
     * @var string $itemDesc3
     */
    protected $itemDesc3 = null;

    /**
     * @var string $itemDesc4
     */
    protected $itemDesc4 = null;

    /**
     * @var float $itemHSCode1
     */
    protected $itemHSCode1 = null;

    /**
     * @var float $itemHSCode2
     */
    protected $itemHSCode2 = null;

    /**
     * @var float $itemHSCode3
     */
    protected $itemHSCode3 = null;

    /**
     * @var float $itemHSCode4
     */
    protected $itemHSCode4 = null;

    /**
     * @var int $itemQty1
     */
    protected $itemQty1 = null;

    /**
     * @var int $itemQty2
     */
    protected $itemQty2 = null;

    /**
     * @var int $itemQty3
     */
    protected $itemQty3 = null;

    /**
     * @var int $itemQty4
     */
    protected $itemQty4 = null;

    /**
     * @var string $itemTypeCode
     */
    protected $itemTypeCode = null;

    /**
     * @var float $itemValue1
     */
    protected $itemValue1 = null;

    /**
     * @var float $itemValue2
     */
    protected $itemValue2 = null;

    /**
     * @var float $itemValue3
     */
    protected $itemValue3 = null;

    /**
     * @var float $itemValue4
     */
    protected $itemValue4 = null;

    /**
     * @var float $itemWgt1
     */
    protected $itemWgt1 = null;

    /**
     * @var float $itemWgt2
     */
    protected $itemWgt2 = null;

    /**
     * @var float $itemWgt3
     */
    protected $itemWgt3 = null;

    /**
     * @var float $itemWgt4
     */
    protected $itemWgt4 = null;

    /**
     * @var string $noCert
     */
    protected $noCert = null;

    /**
     * @var float $noCertInv
     */
    protected $noCertInv = null;

    /**
     * @var string $noInv
     */
    protected $noInv = null;

    /**
     * @var string $noLicence
     */
    protected $noLicence = null;

    /**
     * @var float $otherFee
     */
    protected $otherFee = null;

    /**
     * @var float $postalChrg
     */
    protected $postalChrg = null;

    /**
     * @var string $reqURL
     */
    protected $reqURL = null;

    /**
     * @var string $sendAddrTypeCode
     */
    protected $sendAddrTypeCode = null;

    /**
     * @var string $sendAddress1
     */
    protected $sendAddress1 = null;

    /**
     * @var string $sendAddress2
     */
    protected $sendAddress2 = null;

    /**
     * @var string $sendAddress3
     */
    protected $sendAddress3 = null;

    /**
     * @var string $sendAddress4
     */
    protected $sendAddress4 = null;

    /**
     * @var string $sendContactName
     */
    protected $sendContactName = null;

    /**
     * @var string $sendCustRef
     */
    protected $sendCustRef = null;

    /**
     * @var string $sendEmail
     */
    protected $sendEmail = null;

    /**
     * @var string $sendFaxNo
     */
    protected $sendFaxNo = null;

    /**
     * @var string $sendTelNo
     */
    protected $sendTelNo = null;

    /**
     * @var string $service
     */
    protected $service = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAddresseeAddr1()
    {
      return $this->addresseeAddr1;
    }

    /**
     * @param string $addresseeAddr1
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setAddresseeAddr1($addresseeAddr1)
    {
      $this->addresseeAddr1 = $addresseeAddr1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddresseeAddr2()
    {
      return $this->addresseeAddr2;
    }

    /**
     * @param string $addresseeAddr2
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setAddresseeAddr2($addresseeAddr2)
    {
      $this->addresseeAddr2 = $addresseeAddr2;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddresseeAddr3()
    {
      return $this->addresseeAddr3;
    }

    /**
     * @param string $addresseeAddr3
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setAddresseeAddr3($addresseeAddr3)
    {
      $this->addresseeAddr3 = $addresseeAddr3;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddresseeAddr4()
    {
      return $this->addresseeAddr4;
    }

    /**
     * @param string $addresseeAddr4
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setAddresseeAddr4($addresseeAddr4)
    {
      $this->addresseeAddr4 = $addresseeAddr4;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddresseeCity()
    {
      return $this->addresseeCity;
    }

    /**
     * @param string $addresseeCity
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setAddresseeCity($addresseeCity)
    {
      $this->addresseeCity = $addresseeCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddresseeCompanyName()
    {
      return $this->addresseeCompanyName;
    }

    /**
     * @param string $addresseeCompanyName
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setAddresseeCompanyName($addresseeCompanyName)
    {
      $this->addresseeCompanyName = $addresseeCompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddresseeCountry()
    {
      return $this->addresseeCountry;
    }

    /**
     * @param string $addresseeCountry
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setAddresseeCountry($addresseeCountry)
    {
      $this->addresseeCountry = $addresseeCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddresseeEmail()
    {
      return $this->addresseeEmail;
    }

    /**
     * @param string $addresseeEmail
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setAddresseeEmail($addresseeEmail)
    {
      $this->addresseeEmail = $addresseeEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddresseeFaxNo()
    {
      return $this->addresseeFaxNo;
    }

    /**
     * @param string $addresseeFaxNo
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setAddresseeFaxNo($addresseeFaxNo)
    {
      $this->addresseeFaxNo = $addresseeFaxNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddresseeName()
    {
      return $this->addresseeName;
    }

    /**
     * @param string $addresseeName
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setAddresseeName($addresseeName)
    {
      $this->addresseeName = $addresseeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddresseePostalCode()
    {
      return $this->addresseePostalCode;
    }

    /**
     * @param string $addresseePostalCode
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setAddresseePostalCode($addresseePostalCode)
    {
      $this->addresseePostalCode = $addresseePostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddresseeTelNo()
    {
      return $this->addresseeTelNo;
    }

    /**
     * @param string $addresseeTelNo
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setAddresseeTelNo($addresseeTelNo)
    {
      $this->addresseeTelNo = $addresseeTelNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getCn23Flag()
    {
      return $this->cn23Flag;
    }

    /**
     * @param string $cn23Flag
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setCn23Flag($cn23Flag)
    {
      $this->cn23Flag = $cn23Flag;
      return $this;
    }

    /**
     * @return string
     */
    public function getCn23ItemTypeCode()
    {
      return $this->cn23ItemTypeCode;
    }

    /**
     * @param string $cn23ItemTypeCode
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setCn23ItemTypeCode($cn23ItemTypeCode)
    {
      $this->cn23ItemTypeCode = $cn23ItemTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCn23ItemTypeDesc()
    {
      return $this->cn23ItemTypeDesc;
    }

    /**
     * @param string $cn23ItemTypeDesc
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setCn23ItemTypeDesc($cn23ItemTypeDesc)
    {
      $this->cn23ItemTypeDesc = $cn23ItemTypeDesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustOrdRef()
    {
      return $this->custOrdRef;
    }

    /**
     * @param string $custOrdRef
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setCustOrdRef($custOrdRef)
    {
      $this->custOrdRef = $custOrdRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getImpEmail()
    {
      return $this->impEmail;
    }

    /**
     * @param string $impEmail
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setImpEmail($impEmail)
    {
      $this->impEmail = $impEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getImpFaxNo()
    {
      return $this->impFaxNo;
    }

    /**
     * @param string $impFaxNo
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setImpFaxNo($impFaxNo)
    {
      $this->impFaxNo = $impFaxNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getImpRef()
    {
      return $this->impRef;
    }

    /**
     * @param string $impRef
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setImpRef($impRef)
    {
      $this->impRef = $impRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getImpTelNo()
    {
      return $this->impTelNo;
    }

    /**
     * @param string $impTelNo
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setImpTelNo($impTelNo)
    {
      $this->impTelNo = $impTelNo;
      return $this;
    }

    /**
     * @return float
     */
    public function getInsurAmt()
    {
      return $this->insurAmt;
    }

    /**
     * @param float $insurAmt
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setInsurAmt($insurAmt)
    {
      $this->insurAmt = $insurAmt;
      return $this;
    }

    /**
     * @return string
     */
    public function getInsurFlag()
    {
      return $this->insurFlag;
    }

    /**
     * @param string $insurFlag
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setInsurFlag($insurFlag)
    {
      $this->insurFlag = $insurFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getInsurRPlanName()
    {
      return $this->insurRPlanName;
    }

    /**
     * @param string $insurRPlanName
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setInsurRPlanName($insurRPlanName)
    {
      $this->insurRPlanName = $insurRPlanName;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemCtyCode1()
    {
      return $this->itemCtyCode1;
    }

    /**
     * @param string $itemCtyCode1
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemCtyCode1($itemCtyCode1)
    {
      $this->itemCtyCode1 = $itemCtyCode1;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemCtyCode2()
    {
      return $this->itemCtyCode2;
    }

    /**
     * @param string $itemCtyCode2
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemCtyCode2($itemCtyCode2)
    {
      $this->itemCtyCode2 = $itemCtyCode2;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemCtyCode3()
    {
      return $this->itemCtyCode3;
    }

    /**
     * @param string $itemCtyCode3
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemCtyCode3($itemCtyCode3)
    {
      $this->itemCtyCode3 = $itemCtyCode3;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemCtyCode4()
    {
      return $this->itemCtyCode4;
    }

    /**
     * @param string $itemCtyCode4
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemCtyCode4($itemCtyCode4)
    {
      $this->itemCtyCode4 = $itemCtyCode4;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemCurrCode1()
    {
      return $this->itemCurrCode1;
    }

    /**
     * @param string $itemCurrCode1
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemCurrCode1($itemCurrCode1)
    {
      $this->itemCurrCode1 = $itemCurrCode1;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDesc1()
    {
      return $this->itemDesc1;
    }

    /**
     * @param string $itemDesc1
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemDesc1($itemDesc1)
    {
      $this->itemDesc1 = $itemDesc1;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDesc2()
    {
      return $this->itemDesc2;
    }

    /**
     * @param string $itemDesc2
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemDesc2($itemDesc2)
    {
      $this->itemDesc2 = $itemDesc2;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDesc3()
    {
      return $this->itemDesc3;
    }

    /**
     * @param string $itemDesc3
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemDesc3($itemDesc3)
    {
      $this->itemDesc3 = $itemDesc3;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemDesc4()
    {
      return $this->itemDesc4;
    }

    /**
     * @param string $itemDesc4
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemDesc4($itemDesc4)
    {
      $this->itemDesc4 = $itemDesc4;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemHSCode1()
    {
      return $this->itemHSCode1;
    }

    /**
     * @param float $itemHSCode1
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemHSCode1($itemHSCode1)
    {
      $this->itemHSCode1 = $itemHSCode1;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemHSCode2()
    {
      return $this->itemHSCode2;
    }

    /**
     * @param float $itemHSCode2
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemHSCode2($itemHSCode2)
    {
      $this->itemHSCode2 = $itemHSCode2;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemHSCode3()
    {
      return $this->itemHSCode3;
    }

    /**
     * @param float $itemHSCode3
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemHSCode3($itemHSCode3)
    {
      $this->itemHSCode3 = $itemHSCode3;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemHSCode4()
    {
      return $this->itemHSCode4;
    }

    /**
     * @param float $itemHSCode4
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemHSCode4($itemHSCode4)
    {
      $this->itemHSCode4 = $itemHSCode4;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemQty1()
    {
      return $this->itemQty1;
    }

    /**
     * @param int $itemQty1
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemQty1($itemQty1)
    {
      $this->itemQty1 = $itemQty1;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemQty2()
    {
      return $this->itemQty2;
    }

    /**
     * @param int $itemQty2
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemQty2($itemQty2)
    {
      $this->itemQty2 = $itemQty2;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemQty3()
    {
      return $this->itemQty3;
    }

    /**
     * @param int $itemQty3
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemQty3($itemQty3)
    {
      $this->itemQty3 = $itemQty3;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemQty4()
    {
      return $this->itemQty4;
    }

    /**
     * @param int $itemQty4
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemQty4($itemQty4)
    {
      $this->itemQty4 = $itemQty4;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemTypeCode()
    {
      return $this->itemTypeCode;
    }

    /**
     * @param string $itemTypeCode
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemTypeCode($itemTypeCode)
    {
      $this->itemTypeCode = $itemTypeCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemValue1()
    {
      return $this->itemValue1;
    }

    /**
     * @param float $itemValue1
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemValue1($itemValue1)
    {
      $this->itemValue1 = $itemValue1;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemValue2()
    {
      return $this->itemValue2;
    }

    /**
     * @param float $itemValue2
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemValue2($itemValue2)
    {
      $this->itemValue2 = $itemValue2;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemValue3()
    {
      return $this->itemValue3;
    }

    /**
     * @param float $itemValue3
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemValue3($itemValue3)
    {
      $this->itemValue3 = $itemValue3;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemValue4()
    {
      return $this->itemValue4;
    }

    /**
     * @param float $itemValue4
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemValue4($itemValue4)
    {
      $this->itemValue4 = $itemValue4;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemWgt1()
    {
      return $this->itemWgt1;
    }

    /**
     * @param float $itemWgt1
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemWgt1($itemWgt1)
    {
      $this->itemWgt1 = $itemWgt1;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemWgt2()
    {
      return $this->itemWgt2;
    }

    /**
     * @param float $itemWgt2
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemWgt2($itemWgt2)
    {
      $this->itemWgt2 = $itemWgt2;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemWgt3()
    {
      return $this->itemWgt3;
    }

    /**
     * @param float $itemWgt3
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemWgt3($itemWgt3)
    {
      $this->itemWgt3 = $itemWgt3;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemWgt4()
    {
      return $this->itemWgt4;
    }

    /**
     * @param float $itemWgt4
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setItemWgt4($itemWgt4)
    {
      $this->itemWgt4 = $itemWgt4;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoCert()
    {
      return $this->noCert;
    }

    /**
     * @param string $noCert
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setNoCert($noCert)
    {
      $this->noCert = $noCert;
      return $this;
    }

    /**
     * @return float
     */
    public function getNoCertInv()
    {
      return $this->noCertInv;
    }

    /**
     * @param float $noCertInv
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setNoCertInv($noCertInv)
    {
      $this->noCertInv = $noCertInv;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoInv()
    {
      return $this->noInv;
    }

    /**
     * @param string $noInv
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setNoInv($noInv)
    {
      $this->noInv = $noInv;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoLicence()
    {
      return $this->noLicence;
    }

    /**
     * @param string $noLicence
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setNoLicence($noLicence)
    {
      $this->noLicence = $noLicence;
      return $this;
    }

    /**
     * @return float
     */
    public function getOtherFee()
    {
      return $this->otherFee;
    }

    /**
     * @param float $otherFee
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setOtherFee($otherFee)
    {
      $this->otherFee = $otherFee;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostalChrg()
    {
      return $this->postalChrg;
    }

    /**
     * @param float $postalChrg
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setPostalChrg($postalChrg)
    {
      $this->postalChrg = $postalChrg;
      return $this;
    }

    /**
     * @return string
     */
    public function getReqURL()
    {
      return $this->reqURL;
    }

    /**
     * @param string $reqURL
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setReqURL($reqURL)
    {
      $this->reqURL = $reqURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendAddrTypeCode()
    {
      return $this->sendAddrTypeCode;
    }

    /**
     * @param string $sendAddrTypeCode
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setSendAddrTypeCode($sendAddrTypeCode)
    {
      $this->sendAddrTypeCode = $sendAddrTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendAddress1()
    {
      return $this->sendAddress1;
    }

    /**
     * @param string $sendAddress1
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setSendAddress1($sendAddress1)
    {
      $this->sendAddress1 = $sendAddress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendAddress2()
    {
      return $this->sendAddress2;
    }

    /**
     * @param string $sendAddress2
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setSendAddress2($sendAddress2)
    {
      $this->sendAddress2 = $sendAddress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendAddress3()
    {
      return $this->sendAddress3;
    }

    /**
     * @param string $sendAddress3
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setSendAddress3($sendAddress3)
    {
      $this->sendAddress3 = $sendAddress3;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendAddress4()
    {
      return $this->sendAddress4;
    }

    /**
     * @param string $sendAddress4
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setSendAddress4($sendAddress4)
    {
      $this->sendAddress4 = $sendAddress4;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendContactName()
    {
      return $this->sendContactName;
    }

    /**
     * @param string $sendContactName
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setSendContactName($sendContactName)
    {
      $this->sendContactName = $sendContactName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendCustRef()
    {
      return $this->sendCustRef;
    }

    /**
     * @param string $sendCustRef
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setSendCustRef($sendCustRef)
    {
      $this->sendCustRef = $sendCustRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendEmail()
    {
      return $this->sendEmail;
    }

    /**
     * @param string $sendEmail
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setSendEmail($sendEmail)
    {
      $this->sendEmail = $sendEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendFaxNo()
    {
      return $this->sendFaxNo;
    }

    /**
     * @param string $sendFaxNo
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setSendFaxNo($sendFaxNo)
    {
      $this->sendFaxNo = $sendFaxNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendTelNo()
    {
      return $this->sendTelNo;
    }

    /**
     * @param string $sendTelNo
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setSendTelNo($sendTelNo)
    {
      $this->sendTelNo = $sendTelNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
      return $this->service;
    }

    /**
     * @param string $service
     * @return \XYWL\SoazPosting\Base\Api30Request
     */
    public function setService($service)
    {
      $this->service = $service;
      return $this;
    }

}
