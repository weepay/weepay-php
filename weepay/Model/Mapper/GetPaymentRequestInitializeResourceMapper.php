<?php

namespace weepay\Model\Mapper;

use weepay\Model\GetPaymentRequestInitializeResource;

class GetPaymentRequestInitializeResourceMapper extends weepayResourceMapper
{
    public static function create($rawResult = null)
    {
        return new GetPaymentRequestInitializeMapper($rawResult);
    }

    public function mapGetPaymentRequestResourceResponse(GetPaymentRequestInitializeResource $initialize, $jsonObject)
    {
        parent::mapResourceFrom($initialize, $jsonObject);
        if (isset($jsonObject->data->paymentStatus)) {
            $initialize->setPaymentstatus($jsonObject->data->paymentStatus);
        }
        if (isset($jsonObject->data->paymentId)) {
            $initialize->setPaymentId($jsonObject->data->paymentId);
        }
        if (isset($jsonObject->data->orderId)) {
            $initialize->setOrderId($jsonObject->data->orderId);
        }
        if (isset($jsonObject->data->price)) {
            $initialize->setPrice($jsonObject->data->price);
        }

        if (isset($jsonObject->data->currency)) {
            $initialize->setCurrency($jsonObject->data->currency);
        }
        if (isset($jsonObject->data->paymentType)) {
            $initialize->setPaymentType($jsonObject->data->paymentType);
        }
        if (isset($jsonObject->data->transactionStatus)) {
            $initialize->setTransactionStatus($jsonObject->data->transactionStatus);
        }
        if (isset($jsonObject->data->installement)) {
            $initialize->setInstallement($jsonObject->data->installement);
        }
        if (isset($jsonObject->data->preAuth)) {
            $initialize->setPreAuth($jsonObject->data->preAuth);
        }
        if (isset($jsonObject->data->preAuthAmount)) {
            $initialize->setPreAuthAmount($jsonObject->data->preAuthAmount);
        }
        if (isset($jsonObject->data->exchangeCurrency)) {
            $initialize->setExchangeCurrency($jsonObject->data->exchangeCurrency);
        }
        if (isset($jsonObject->data->exchangeRate)) {
            $initialize->setExchangeRate($jsonObject->data->exchangeRate);
        }
        if (isset($jsonObject->data->creditCardBin)) {
            $initialize->setCreditCardBin($jsonObject->data->creditCardBin);
        }
        if (isset($jsonObject->data->cardAssociation)) {
            $initialize->setCardAssociation($jsonObject->data->cardAssociation);
        }
        if (isset($jsonObject->data->cardFamily)) {
            $initialize->setCardFamily($jsonObject->data->cardFamily);
        }
        if (isset($jsonObject->data->fraudStatus)) {
            $initialize->setFraudStatus($jsonObject->data->fraudStatus);
        }
        if (isset($jsonObject->data->comission)) {
            $initialize->setComission($jsonObject->data->comission);
        }
        if (isset($jsonObject->data->paymentDate)) {
            $initialize->setPaymentDate($jsonObject->data->paymentDate);
        }
        return $initialize;
    }

    public function mapGetPaymentRequestResource(GetPaymentRequestInitializeResource $initialize)
    {
        return $this->mapGetPaymentRequestResourceResponse($initialize, $this->jsonObject);
    }
}
