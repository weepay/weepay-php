<?php
require_once '../Options.php';

//Request
$request = new \weepay\Request\GetPaymentRequest();
$request->setOrderId('1');
// $request->setPaymentId("");
$request->setLocale(\weepay\Model\Locale::TR);

$getPaymentRequest = \weepay\Model\GetPaymentRequestInitialize::create($request, Options::Auth());

print_r($getPaymentRequest);

if ($getPaymentRequest->getStatus() == 'success') {

    if($getPaymentRequest->getPaymentStatus() == 'SUCCESS'){

        echo "Ödeme Başarılı";
        
    }else if($getPaymentRequest->getPaymentStatus() == 'FAILURE'){
   
        echo "Ödeme Başarısız";
    }


} else {

    print_r($getPaymentRequest->getError());
    print_r($getPaymentRequest->getErrorCode());
    print_r($getPaymentRequest->getMessage());
}
