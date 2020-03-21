<?php

namespace weepay\Model\Mapper;

use weepay\Model\CreatePaymentRequestThreeDInitialize;

class PaymentRequestThreeDInitializeMapper extends PaymentRequestThreeDInitializeResourceMapper
{
    public static function create($rawResult = null)
    {
        return new PaymentRequestThreeDInitializeMapper($rawResult);
    }

    public function mapCheckoutFormInitializeFrom(CreatePaymentRequestThreeDInitialize $initialize, $jsonObject)
    {
        parent::mapCheckoutFormInitializeResourceFrom($initialize, $jsonObject);
        return $initialize;
    }

    public function mapCheckoutFormInitialize(CreatePaymentRequestThreeDInitialize $initialize)
    {
        return $this->mapCheckoutFormInitializeFrom($initialize, $this->jsonObject);
    }
}
