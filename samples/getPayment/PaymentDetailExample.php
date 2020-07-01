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

    if($getPaymentRequest->paymentStatus() == 'SUCCESS'){

        echo "Ödeme Başarılı";
        
    }else if($getPaymentRequest->paymentStatus() == 'FAILURE'){
   
        echo "Ödeme Başarısız";
    }


} else {

    print_r($checkoutFormInitialize->getError());
    print_r($checkoutFormInitialize->getErrorCode());
    print_r($checkoutFormInitialize->getMessage());
}
