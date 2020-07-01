<?php

namespace weepay\Request;

use weepay\JsonBuilder;
use weepay\Request;

class GetPaymentRequest extends Request
{

    private $orderId;
    private $paymentId;
    private $locale;
    private $options;
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
    public function setPaymentId(INT $paymentId)
    {
        $this->paymentId = $paymentId;

        return $this;
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

    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->add("Auth", $this->getOptions())
            ->addArray("Data", array(
                "orderId" => $this->getOrderId(),
                "paymentId" => (INT) $this->getPaymentId(),
                "locale" => $this->getLocale(),
            ))
            ->getObject();
    }

}
