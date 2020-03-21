<?php

namespace weepay\Model;

use weepay\weepayResource;

class CheckoutFormInitializeResource extends weepayResource
{
    private $token;
    private $checkoutFormData;
    private $tokenExpireTime;
    private $paymentPageUrl;

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    public function getCheckoutFormData()
    {
        return $this->checkoutFormData;
    }

    public function setCheckoutFormData($checkoutFormData)
    {
        $this->checkoutFormData = $checkoutFormData;
    }

    public function getTokenExpireTime()
    {
        return $this->tokenExpireTime;
    }

    public function setTokenExpireTime($tokenExpireTime)
    {
        $this->tokenExpireTime = $tokenExpireTime;
    }

    public function getPaymentPageUrl()
    {
        return $this->paymentPageUrl;
    }

    public function setPaymentPageUrl($paymentPageUrl)
    {
        $this->paymentPageUrl = $paymentPageUrl;
    }
}
