<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'wsdls/TrackService_v12.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 * ################################################################################
 * Don't forget to add wsdltophp/packagebase:dev-master to your main composer.json.
 * ################################################################################
 */
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'wsdls/TrackService_v12.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \NicholasCreativeMedia\FedExPHP\Track\ClassMap::get(),
);
/**
 * Samples for Service ServiceType
 */
$service = new \NicholasCreativeMedia\FedExPHP\Track\ServiceType\Service($options);
/**
 * Sample call for retrieveSignatureProofOfDeliveryLetter operation/method
 */
if ($service->retrieveSignatureProofOfDeliveryLetter(new \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryLetterRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for track operation/method
 */
if ($service->track(new \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for sendSignatureProofOfDeliveryFax operation/method
 */
if ($service->sendSignatureProofOfDeliveryFax(new \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryFaxRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
/**
 * Sample call for sendNotifications operation/method
 */
if ($service->sendNotifications(new \NicholasCreativeMedia\FedExPHP\Track\StructType\SendNotificationsRequest()) !== false) {
    print_r($service->getResult());
} else {
    print_r($service->getLastError());
}
