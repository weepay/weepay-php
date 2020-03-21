<?php

namespace weepay;

class weepayResource extends ApiResource
{
    private $status;
    private $errorCode;
    private $message;
    private $error;
    private $locale;
    private $systemTime;

    protected static function getHttpHeaders(Request $request, Options $options)
    {

    }

    protected static function getHttpHeadersV2($uri, Request $request = null, Options $options)
    {

    }

    protected static function prepareAuthorizationString(Request $request, Options $options, $rnd)
    {

    }

    protected static function prepareAuthorizationStringV2($uri, Request $request = null, Options $options, $rnd)
    {

    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getErrorCode()
    {
        return $this->errorCode;
    }

    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getError()
    {
        return $this->error;
    }

    public function setError($error)
    {
        $this->error = $error;
    }

    public function getLocale()
    {
        return $this->locale;
    }

    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    public function getSystemTime()
    {
        return $this->systemTime;
    }

    public function setSystemTime($systemTime)
    {
        $this->systemTime = $systemTime;
    }

}
