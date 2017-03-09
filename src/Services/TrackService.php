<?php

namespace NicholasCreativeMedia\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class TrackService extends FedExService
{

    /**
     * RateService constructor.
     * @param array $wsdlOptions
     * @param bool $resetSoapClient
     * @param bool $beta
     */
    public function __construct(array $wsdlOptions = array(), $resetSoapClient = true, $beta = false)
    {
        $default_options = [
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl'.DIRECTORY_SEPARATOR.'TrackService_v12.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \NicholasCreativeMedia\FedExPHP\TrackClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$beta);

        $this->version = new \NicholasCreativeMedia\FedExPHP\Structs\VersionId('trck',12,0,0);
    }
    /**
     * Method to call the operation originally named
     * retrieveSignatureProofOfDeliveryLetter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryLetterReply|bool
     */
    public function retrieveSignatureProofOfDeliveryLetter(\NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->retrieveSignatureProofOfDeliveryLetter($signatureProofOfDeliveryLetterRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named track
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackRequest $trackRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackReply|bool
     */
    public function track(\NicholasCreativeMedia\FedExPHP\Structs\TrackRequest $trackRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->track($trackRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendSignatureProofOfDeliveryFax
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryFaxReply|bool
     */
    public function sendSignatureProofOfDeliveryFax(\NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->sendSignatureProofOfDeliveryFax($signatureProofOfDeliveryFaxRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendNotifications
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsRequest $sendNotificationsRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsReply|bool
     */
    public function sendNotifications(\NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsRequest $sendNotificationsRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->sendNotifications($sendNotificationsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsReply|\NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryFaxReply|\NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryLetterReply|\NicholasCreativeMedia\FedExPHP\Structs\TrackReply
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
