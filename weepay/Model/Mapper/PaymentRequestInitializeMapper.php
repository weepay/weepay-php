<?php

namespace weepay\Model\Mapper;

use weepay\Model\CreatePaymentRequestInitialize;

class PaymentRequestInitializeMapper extends PaymentRequestInitializeResourceMapper
{
    public static function create($rawResult = null)
    {
        return new PaymentRequestInitializeMapper($rawResult);
    }

    public function mapCheckoutFormInitializeFrom(CreatePaymentRequestInitialize $initialize, $jsonObject)
    {
        parent::mapCheckoutFormInitializeResourceFrom($initialize, $jsonObject);
        return $initialize;
    }

    public function mapCheckoutFormInitialize(CreatePaymentRequestInitialize $initialize)
    {
        return $this->mapCheckoutFormInitializeFrom($initialize, $this->jsonObject);
    }
}
