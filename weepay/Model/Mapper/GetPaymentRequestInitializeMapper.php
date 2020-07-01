<?php

namespace weepay\Model\Mapper;

use weepay\Model\GetPaymentRequestInitialize;

class GetPaymentRequestInitializeMapper extends GetPaymentRequestInitializeResourceMapper
{
    public static function create($rawResult = null)
    {
        return new GetPaymentRequestInitializeMapper($rawResult);
    }

    public function mapGetPaymentRequestResponse(GetPaymentRequestInitialize $initialize, $jsonObject)
    {
        parent::mapGetPaymentRequestResource($initialize, $jsonObject);
        return $initialize;
    }

    public function mapGetPaymentRequest(GetPaymentRequestInitialize $initialize)
    {
        return $this->mapGetPaymentRequestResponse($initialize, $this->jsonObject);
    }
}
