<?php

namespace weepay\Model\Mapper;

use weepay\Model\CreatePaymentRequestThreeDInitialize;

class PaymentRequestThreeDInitializeMapper extends PaymentRequestThreeDInitializeResourceMapper
{
    public static function create($rawResult = null)
    {
        return new PaymentRequestThreeDInitializeMapper($rawResult);
    }

    public function mapPaymentRequestThreeDInitializeFrom(CreatePaymentRequestThreeDInitialize $initialize, $jsonObject)
    {
        parent::mapPaymentRequestThreeDInitializeResourceFrom($initialize, $jsonObject);
        return $initialize;
    }

    public function mapPaymentRequestThreeDInitialize(CreatePaymentRequestThreeDInitialize $initialize)
    {
        return $this->mapPaymentRequestThreeDInitializeFrom($initialize, $this->jsonObject);
    }
}
