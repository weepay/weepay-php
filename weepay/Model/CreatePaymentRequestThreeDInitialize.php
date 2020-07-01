<?php

namespace weepay\Model;

use weepay\Auth;
use weepay\Model\Mapper\PaymentRequestThreeDInitializeMapper;
use weepay\Request\CreatePaymentRequestThreeD;

class CreatePaymentRequestThreeDInitialize extends CreatePaymentRequestThreeDInitializeResource
{
    public static function create(CreatePaymentRequestThreeD $request, Auth $options)
    {
        $request->setOptions($options);
        $rawResult = parent::httpClient()->post($options->getBaseUrl() . "/Payment/PaymentRequestThreeD", null, $request->toJsonString());

        return PaymentRequestThreeDInitializeMapper::create($rawResult)->jsonDecode()->mapPaymentRequestThreeDInitialize(new CreatePaymentRequestThreeDInitialize());
    }
}
