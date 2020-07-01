<?php

namespace weepay\Model;

use weepay\weepayResource;

class CreatePaymentRequestInitializeResource extends weepayResource
{
    private $secretKey;
    private $paymentStatus;
    private $paymentId;

    /**
     * Get the value of secretKey
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * Set the value of secretKey
     *
     * @return  self
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;

        return $this;
    }

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

        return $this;
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
}
