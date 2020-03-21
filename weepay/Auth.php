<?php
namespace weepay;

class Auth extends Request
{
    private $bayiID;
    private $apiKey;
    private $secretKey;
    private $baseUrl;

    public function getBayiID()
    {
        return $this->bayiID;
    }

    public function setBayiID($bayiID)
    {
        $this->bayiID = $bayiID;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
    }
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }
    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->add("bayiId", $this->getBayiID())
            ->add("apiKey", $this->getApiKey())
            ->add("secretKey", $this->getSecretKey())
            ->getObject();
    }

}
