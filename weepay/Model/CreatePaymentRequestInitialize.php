<?php

namespace weepay\Model;

use weepay\Auth;
use weepay\Model\Mapper\PaymentRequestInitializeMapper;
use weepay\Request\CreatePaymentRequest;

class CreatePaymentRequestInitialize extends CreatePaymentRequestInitializeResource
{
    public static function create(CreatePaymentRequest $request, Auth $options)
    {
        $request->setOptions($options);
        $rawResult = parent::httpClient()->post($options->getBaseUrl() . "/Payment/PaymentRequest", null, $request->toJsonString());

        return PaymentRequestInitializeMapper::create($rawResult)->jsonDecode()->mapPaymentRequestInitialize(new CreatePaymentRequestInitialize());
    }
}
