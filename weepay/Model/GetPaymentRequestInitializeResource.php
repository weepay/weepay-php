<?php

namespace weepay\Model;

use weepay\weepayResource;

class GetPaymentRequestInitializeResource extends weepayResource
{
    private $paymentStatus;
    private $paymentId;
    private $orderId;
    private $price;
    private $currency;
    private $paymentType;
    private $transactionStatus;
    private $installement;
    private $preAuth;
    private $preAuthAmount;
    private $exchangeCurrency;
    private $exchangeRate;
    private $refundAmount;
    private $creditCardBin;
    private $cardAssociation;
    private $cardFamily;
    private $fraudStatus;
    private $comission;
    private $paymentDate;

    /**
     * Get the value of paymentStatus
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Set the value of paymentStatus
     *
     * @return  self
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;

    }

    /**
     * Get the value of paymentId
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * Set the value of paymentId
     *
     * @return  self
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;

    }

    /**
     * Get the value of orderId
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set the value of orderId
     *
     * @return  self
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

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

    }

    /**
     * Get the value of paymentType
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set the value of paymentType
     *
     * @return  self
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

    }

    /**
     * Get the value of transactionStatus
     */
    public function getTransactionStatus()
    {
        return $this->transactionStatus;
    }

    /**
     * Set the value of transactionStatus
     *
     * @return  self
     */
    public function setTransactionStatus($transactionStatus)
    {
        $this->transactionStatus = $transactionStatus;

    }

    /**
     * Get the value of installement
     */
    public function getInstallement()
    {
        return $this->installement;
    }

    /**
     * Set the value of installement
     *
     * @return  self
     */
    public function setInstallement($installement)
    {
        $this->installement = $installement;

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

    }

    /**
     * Get the value of preAuthAmount
     */
    public function getPreAuthAmount()
    {
        return $this->preAuthAmount;
    }

    /**
     * Set the value of preAuthAmount
     *
     * @return  self
     */
    public function setPreAuthAmount($preAuthAmount)
    {
        $this->preAuthAmount = $preAuthAmount;
    }

    /**
     * Get the value of exchangeCurrency
     */
    public function getExchangeCurrency()
    {
        return $this->exchangeCurrency;
    }

    /**
     * Set the value of exchangeCurrency
     *
     * @return  self
     */
    public function setExchangeCurrency($exchangeCurrency)
    {
        $this->exchangeCurrency = $exchangeCurrency;
    }

    /**
     * Get the value of exchangeRate
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Set the value of exchangeRate
     *
     * @return  self
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;

    }

    /**
     * Get the value of refundAmount
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * Set the value of refundAmount
     *
     * @return  self
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;

    }

    /**
     * Get the value of creditCardBin
     */
    public function getCreditCardBin()
    {
        return $this->creditCardBin;
    }

    /**
     * Set the value of creditCardBin
     *
     * @return  self
     */
    public function setCreditCardBin($creditCardBin)
    {
        $this->creditCardBin = $creditCardBin;
    }

    /**
     * Get the value of cardAssociation
     */
    public function getCardAssociation()
    {
        return $this->cardAssociation;
    }

    /**
     * Set the value of cardAssociation
     *
     * @return  self
     */
    public function setCardAssociation($cardAssociation)
    {
        $this->cardAssociation = $cardAssociation;
    }

    /**
     * Get the value of cardFamily
     */
    public function getCardFamily()
    {
        return $this->cardFamily;
    }

    /**
     * Set the value of cardFamily
     *
     * @return  self
     */
    public function setCardFamily($cardFamily)
    {
        $this->cardFamily = $cardFamily;
    }

    /**
     * Get the value of fraudStatus
     */
    public function getFraudStatus()
    {
        return $this->fraudStatus;
    }

    /**
     * Set the value of fraudStatus
     *
     * @return  self
     */
    public function setFraudStatus($fraudStatus)
    {
        $this->fraudStatus = $fraudStatus;
    }

    /**
     * Get the value of comission
     */
    public function getComission()
    {
        return $this->comission;
    }

    /**
     * Set the value of comission
     *
     * @return  self
     */
    public function setComission($comission)
    {
        $this->comission = $comission;
    }

    /**
     * Get the value of comission
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Set the value of comission
     *
     * @return  self
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;
    }
}
