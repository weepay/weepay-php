<?php

namespace weepay\Model\Mapper;

use weepay\Model\CreatePaymentRequestInitialize;

class PaymentRequestInitializeMapper extends PaymentRequestInitializeResourceMapper
{
    public static function create($rawResult = null)
    {
        return new PaymentRequestInitializeMapper($rawResult);
    }

    public function mapPaymentRequestInitializeFrom(CreatePaymentRequestInitialize $initialize, $jsonObject)
    {
        parent::mapPaymentRequestInitializeResourceFrom($initialize, $jsonObject);
        return $initialize;
    }

    public function mapPaymentRequestInitialize(CreatePaymentRequestInitialize $initialize)
    {
        return $this->mapPaymentRequestInitializeFrom($initialize, $this->jsonObject);
    }
}
