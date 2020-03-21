<?php
namespace weepay\Model;

use weepay\BaseModel;

class DataForm extends BaseModel
{
    private $OutSourceID;
    private $IpAddress;
    private $Price;
    private $Currency;
    private $InstallmentNumber;
    private $Locale;
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

    public function getIpAddress()
    {
        return $this->IpAddress;
    }

    public function setIpAddress($IpAddress)
    {
        $this->IpAddress = $IpAddress;
    }

    public function getPrice()
    {
        return $this->Price;
    }

    public function setPrice($Price)
    {
        $this->Price = $Price;
    }

    public function getCurrency()
    {
        return $this->Currency;
    }

    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;
    }

    public function getInstallmentNumber()
    {
        return $this->InstallmentNumber;
    }

    public function setInstallmentNumber($InstallmentNumber)
    {
        $this->InstallmentNumber = $InstallmentNumber;
    }

    public function getLocale()
    {
        return $this->Locale;
    }

    public function setLocale($Locale)
    {
        $this->Locale = $Locale;
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
            ->add("IpAddress", $this->getIpAddress())
            ->addPrice("Price", $this->getPrice())
            ->add("Currency", $this->getCurrency())
            ->add("InstallmentNumber", $this->getInstallmentNumber())
            ->add("Locale", $this->getLocale())
            ->add("Description", $this->getDescription())
            ->add("CallBackUrl", $this->getCallBackUrl())
            ->add("PaymentGroup", $this->getPaymentGroup())
            ->add("PaymentSource", $this->getPaymentSource())
            ->add("PaymentChannel", $this->getPaymentChannel())
            ->add("PreAuth", $this->getPreAuth())
            ->getObject();
    }

}
