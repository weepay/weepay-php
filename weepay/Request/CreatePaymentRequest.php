<?php

namespace weepay\Request;

use weepay\JsonBuilder;
use weepay\Request;

class CreatePaymentRequest extends Request
{

    private $orderId;
    private $ipAddress;
    private $price;
    private $currency;
    private $locale;
    private $installmentNumber;
    private $cardHolderName;
    private $cardNumber;
    private $epireMonth;
    private $expireYear;
    private $cvcNumber;
    private $description;
    private $paymentGroup;
    private $paymentSource;
    private $paymentChannel;
    private $preAuth;
    private $cardUserKey;
    private $customer;
    private $shippingAddress;
    private $billingAddress;
    private $products;
    private $options;
    /**
     * Get the value of products
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @return  self
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get the value of billingAddress
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * Set the value of billingAddress
     *
     * @return  self
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * Get the value of shippingAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Set the value of shippingAddress
     *
     * @return  self
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * Get the value of customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set the value of customer
     *
     * @return  self
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get the value of cardUserKey
     */
    public function getCardUserKey()
    {
        return $this->cardUserKey;
    }

    /**
     * Set the value of cardUserKey
     *
     * @return  self
     */
    public function setCardUserKey($cardUserKey)
    {
        $this->cardUserKey = $cardUserKey;

        return $this;
    }

    /**
     * Get the value of preAuth
     */
    public function getPreAuth()
    {
        return $this->preAuth;
    }

    /**
     * Set the value of preAuth
     *
     * @return  self
     */
    public function setPreAuth($preAuth)
    {
        $this->preAuth = $preAuth;

        return $this;
    }

    /**
     * Get the value of paymentChannel
     */
    public function getPaymentChannel()
    {
        return $this->paymentChannel;
    }

    /**
     * Set the value of paymentChannel
     *
     * @return  self
     */
    public function setPaymentChannel($paymentChannel)
    {
        $this->paymentChannel = $paymentChannel;

        return $this;
    }

    /**
     * Get the value of paymentSource
     */
    public function getPaymentSource()
    {
        return $this->paymentSource;
    }

    /**
     * Set the value of paymentSource
     *
     * @return  self
     */
    public function setPaymentSource($paymentSource)
    {
        $this->paymentSource = $paymentSource;

        return $this;
    }

    /**
     * Get the value of paymentGroup
     */
    public function getPaymentGroup()
    {
        return $this->paymentGroup;
    }

    /**
     * Set the value of paymentGroup
     *
     * @return  self
     */
    public function setPaymentGroup($paymentGroup)
    {
        $this->paymentGroup = $paymentGroup;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of installmentNumber
     */
    public function getInstallmentNumber()
    {
        return $this->installmentNumber;
    }

    /**
     * Set the value of installmentNumber
     *
     * @return  self
     */
    public function setInstallmentNumber($installmentNumber)
    {
        $this->installmentNumber = $installmentNumber;

        return $this;
    }

    /**
     * Get the value of locale
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set the value of locale
     *
     * @return  self
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get the value of currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set the value of currency
     *
     * @return  self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of ipAddress
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set the value of ipAddress
     *
     * @return  self
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get the value of OrderId
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set the value of OrderId
     *
     * @return  self
     */
    public function setOrderId($OrderId)
    {
        $this->orderId = $OrderId;

        return $this;
    }

    /**
     * Get the value of options
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set the value of options
     *
     * @return  self
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get the value of cardHolderName
     */
    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }

    /**
     * Set the value of cardHolderName
     *
     * @return  self
     */
    public function setCardHolderName($cardHolderName)
    {
        $this->cardHolderName = $cardHolderName;

        return $this;
    }

    /**
     * Get the value of cardNumber
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * Get the value of epireMonth
     */
    public function getEpireMonth()
    {
        return $this->epireMonth;
    }

    /**
     * Set the value of epireMonth
     *
     * @return  self
     */
    public function setEpireMonth($epireMonth)
    {
        $this->epireMonth = $epireMonth;

        return $this;
    }

    /**
     * Get the value of expireYear
     */
    public function getExpireYear()
    {
        return $this->expireYear;
    }

    /**
     * Set the value of expireYear
     *
     * @return  self
     */
    public function setExpireYear($expireYear)
    {
        $this->expireYear = $expireYear;

        return $this;
    }

    /**
     * Get the value of cvcNumber
     */
    public function getCvcNumber()
    {
        return $this->cvcNumber;
    }

    /**
     * Set the value of cvcNumber
     *
     * @return  self
     */
    public function setCvcNumber($cvcNumber)
    {
        $this->cvcNumber = $cvcNumber;

        return $this;
    }
    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->add("Auth", $this->getOptions())
            ->addArray("Data", array(
                "orderId" => $this->getOrderId(),
                "ipAddress" => $this->getIpAddress(),
                "paidPrice" => $this->getPrice(),
                "currency" => $this->getCurrency(),
                "locale" => $this->getLocale(),
                "installmentNumber" => $this->getInstallmentNumber(),
                "cardHolderName" => $this->getCardHolderName(),
                "cardNumber" => $this->getCardNumber(),
                "expireMonth" => $this->getEpireMonth(),
                "expireYear" => $this->getExpireYear(),
                "cvcNumber" => $this->getCvcNumber(),
                "description" => $this->getDescription(),
                "paymentGroup" => $this->getPaymentGroup(),
                "paymentSource" => $this->getPaymentSource(),
                "paymentChannel" => $this->getPaymentChannel(),
                "preAuth" => $this->getPreAuth(),
                "cardUserKey" => $this->getCardUserKey(),
            ))
            ->add("Customer", $this->getCustomer())
            ->add("ShippingAddress", $this->getShippingAddress())
            ->add("BillingAddress", $this->getBillingAddress())
            ->addArray("Products", $this->getProducts())
            ->getObject();
    }

}
