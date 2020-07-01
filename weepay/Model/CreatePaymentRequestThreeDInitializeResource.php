<?php

namespace weepay\Model;

use weepay\weepayResource;

class CreatePaymentRequestThreeDInitializeResource extends weepayResource
{
    private $threeDSecureUrl;

    /**
     * Get the value of threeDSecureUrl
     */
    public function getThreeDSecureUrl()
    {
        return $this->threeDSecureUrl;
    }

    /**
     * Set the value of threeDSecureUrl
     *
     * @return  self
     */
    public function setThreeDSecureUrl($threeDSecureUrl)
    {
        $this->threeDSecureUrl = $threeDSecureUrl;

    }
}
