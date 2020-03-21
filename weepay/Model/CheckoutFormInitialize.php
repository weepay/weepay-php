<?php

namespace weepay\Model;

use weepay\Auth;
use weepay\Model\Mapper\CheckoutFormInitializeMapper;
use weepay\Request\FormInitializeRequest;

class CheckoutFormInitialize extends CheckoutFormInitializeResource
{
    public static function create(FormInitializeRequest $request, Auth $options)
    {
        $request->setOptions($options);
        $rawResult = parent::httpClient()->post($options->getBaseUrl() . "/Payment/PaymentCreate", null, $request->toJsonString());

        return CheckoutFormInitializeMapper::create($rawResult)->jsonDecode()->mapCheckoutFormInitialize(new CheckoutFormInitialize());
    }
}
