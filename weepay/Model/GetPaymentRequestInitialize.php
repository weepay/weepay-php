<?php

namespace weepay\Model;

use weepay\Auth;
use weepay\Model\Mapper\GetPaymentRequestInitializeMapper;
use weepay\Request\GetPaymentRequest;

class GetPaymentRequestInitialize extends GetPaymentRequestInitializeResource
{
    public static function create(GetPaymentRequest $request, Auth $options)
    {
        $request->setOptions($options);
        $rawResult = parent::httpClient()->post($options->getBaseUrl() . "/GetPayment/Detail", null, $request->toJsonString());

        return GetPaymentRequestInitializeMapper::create($rawResult)->jsonDecode()->mapGetPaymentRequest(new GetPaymentRequestInitialize());
    }
}
