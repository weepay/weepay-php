<?php

namespace weepay\Model\Mapper;

use weepay\Model\CreatePaymentRequestThreeDInitializeResource;

class PaymentRequestThreeDInitializeResourceMapper extends weepayResourceMapper
{
    public static function create($rawResult = null)
    {
        return new PaymentRequestThreeDInitializeMapper($rawResult);
    }

    public function mapPaymentRequestThreeDInitializeResourceFrom(CreatePaymentRequestThreeDInitializeResource $initialize, $jsonObject)
    {
        parent::mapResourceFrom($initialize, $jsonObject);

        if (isset($jsonObject->threeDSecureUrl)) {
            $initialize->setThreeDSecureUrl($jsonObject->threeDSecureUrl);
        }

        return $initialize;
    }

    public function mapPaymentRequestThreeDInitializeResource(CreatePaymentRequestThreeDInitializeResource $initialize)
    {
        return $this->mapPaymentRequestThreeDInitializeResourceFrom($initialize, $this->jsonObject);
    }
}
