<?php

namespace weepay\Model\Mapper;

use weepay\Model\CreatePaymentRequestInitializeResource;

class PaymentRequestInitializeResourceMapper extends weepayResourceMapper
{
    public static function create($rawResult = null)
    {
        return new PaymentRequestInitializeMapper($rawResult);
    }

    public function mapCheckoutFormInitializeResourceFrom(CreatePaymentRequestInitializeResource $initialize, $jsonObject)
    {
        parent::mapResourceFrom($initialize, $jsonObject);

        if (isset($jsonObject->secretKey)) {
            $initialize->setSecretKey($jsonObject->secretKey);
        }
        if (isset($jsonObject->paymentStatus)) {
            $initialize->setPaymentStatus($jsonObject->paymentStatus);
        }
        if (isset($jsonObject->paymentId)) {
            $initialize->setPaymentId($jsonObject->paymentId);
        }

        return $initialize;
    }

    public function mapCheckoutFormInitializeResource(CreatePaymentRequestInitializeResource $initialize)
    {
        return $this->mapCheckoutFormInitializeResourceFrom($initialize, $this->jsonObject);
    }
}
