<?php
namespace weepay\Model;

use weepay\BaseModel;

class DataApi extends BaseModel
{
    private $OutSourceID;
    private $Currency;
    private $Locale;
    private $PaidPrice;
    private $ClientIP;
    private $CardHolderName;
    private $CardNumber;
    private $ExpireMonth;
    private $ExpireYear;
    private $InstallmentNumber;
    private $Description;
    private $CallBackUrl;
    private $PaymentGroup;
    private $PaymentSource;
    private $PaymentChannel;
    private $PreAuth;

    public function getOutSourceID()
    {
        return $this->OutSourceID;
    }

    public function setOutSourceID($OutSourceID)
    {
        $this->OutSourceID = $OutSourceID;
    }

    public function getCurrency()
    {
        return $this->Currency;
    }

    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;
    }

    public function getLocale()
    {
        return $this->Locale;
    }

    public function setLocale($Locale)
    {
        $this->Locale = $Locale;
    }

    public function getPaidPrice()
    {
        return $this->PaidPrice;
    }

    public function setPaidPrice($PaidPrice)
    {
        $this->PaidPrice = $PaidPrice;
    }

    public function getClientIP()
    {
        return $this->ClientIP;
    }

    public function setClientIP($ClientIP)
    {
        $this->ClientIP = $ClientIP;
    }

    public function getCardHolderName()
    {
        return $this->CardHolderName;
    }

    public function setCardHolderName($CardHolderName)
    {
        $this->CardHolderName = $CardHolderName;
    }

    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    public function setCardNumber($CardNumber)
    {
        $this->CardNumber = $CardNumber;
    }

    public function getExpireMonth()
    {
        return $this->ExpireMonth;
    }

    public function setExpireMonth($ExpireMonth)
    {
        $this->ExpireMonth = $ExpireMonth;
    }

    public function getExpireYear()
    {
        return $this->ExpireYear;
    }

    public function setExpireYear($ExpireYear)
    {
        $this->ExpireYear = $ExpireYear;
    }

    public function getInstallmentNumber()
    {
        return $this->InstallmentNumber;
    }

    public function setInstallmentNumber($InstallmentNumber)
    {
        $this->InstallmentNumber = $InstallmentNumber;
    }

    public function getDescription()
    {
        return $this->Description;
    }

    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    public function getCallBackUrl()
    {
        return $this->CallBackUrl;
    }

    public function setCallBackUrl($CallBackUrl)
    {
        $this->CallBackUrl = $CallBackUrl;
    }
    public function getPaymentGroup()
    {
        return $this->PaymentGroup;
    }

    public function setPaymentGroup($PaymentGroup)
    {
        $this->PaymentGroup = $PaymentGroup;
    }
    public function getPaymentSource()
    {
        return $this->PaymentSource;
    }

    public function setPaymentSource($PaymentSource)
    {
        $this->PaymentSource = $PaymentSource;
    }
    public function getPaymentChannel()
    {
        return $this->PaymentChannel;
    }

    public function setPaymentChannel($PaymentChannel)
    {
        $this->PaymentChannel = $PaymentChannel;
    }

    public function getPreAuth()
    {
        return $this->PreAuth;
    }

    public function setPreAuth($PreAuth)
    {
        $this->PreAuth = $PreAuth;
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->add("OutSourceID", $this->getOutSourceID())
            ->add("Currency", $this->getCurrency())
            ->add("Locale", $this->getLocale())
            ->addPrice("PaidPrice", $this->getPaidPrice())
            ->add("ClientIP", $this->getClientIP())
            ->add("CardHolderName", $this->getCardHolderName())
            ->add("CardNumber", $this->getCardNumber())
            ->add("ExpireMonth", $this->getExpireMonth())
            ->add("ExpireYear", $this->getExpireYear())
            ->add("InstallmentNumber", $this->getInstallmentNumber())
            ->add("Description", $this->getDescription())
            ->add("CallBackUrl", $this->getCallBackUrl())
            ->add("PaymentGroup", $this->getPaymentGroup())
            ->add("PaymentSource", $this->getPaymentSource())
            ->add("PaymentChannel", $this->getPaymentChannel())
            ->add("PreAuth", $this->getPreAuth())
            ->getObject();
    }

}
