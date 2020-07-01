<?php

require_once dirname(__DIR__) . '/weepayBootstrap.php';

weepayBootstrap::initialize();

class Options
{
    public static function Auth()
    {
        $options = new \weepay\Auth();
        $options->setBayiID('bayi-id');
        $options->setApiKey('api-key');
        $options->setSecretKey('secret-key');
        $options->setBaseUrl("https://api.weepay.co/");
        return $options;
    }
}
