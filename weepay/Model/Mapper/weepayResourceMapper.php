<?php

namespace weepay\Model\Mapper;

use weepay\JsonBuilder;
use weepay\weepayResource;

class weepayResourceMapper
{
    protected $rawResult;
    protected $jsonObject;

    public function __construct($rawResult)
    {
        $this->rawResult = $rawResult;
    }

    public static function create($rawResult = null)
    {
        return new weepayResourceMapper($rawResult);
    }

    public function jsonDecode()
    {
        $this->jsonObject = JsonBuilder::jsonDecode($this->rawResult);
        return $this;
    }

    public function mapResourceFrom(weepayResource $resource, $jsonObject)
    {
        if (isset($jsonObject->status)) {
            $resource->setStatus($jsonObject->status);
        }
        if (isset($jsonObject->errorCode)) {
            $resource->setErrorCode($jsonObject->errorCode);
        }
        if (isset($jsonObject->message)) {
            $resource->setMessage($jsonObject->message);
        }
        if (isset($jsonObject->error)) {

            $resource->setError($jsonObject->error);
        }
        if (isset($jsonObject->locale)) {
            $resource->setLocale($jsonObject->locale);
        }
        if (isset($jsonObject->systemTime)) {
            $resource->setSystemTime($jsonObject->systemTime);
        }
        if (isset($this->rawResult)) {
            $resource->setRawResult($this->rawResult);
        }
        return $resource;
    }

    public function mapResource(weepayResource $resource)
    {
        return $this->mapResourceFrom($resource, $this->jsonObject);
    }
}
