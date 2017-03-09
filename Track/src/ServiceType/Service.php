<?php

namespace NicholasCreativeMedia\FedExPHP\Track\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named
     * retrieveSignatureProofOfDeliveryLetter
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryLetterReply|bool
     */
    public function retrieveSignatureProofOfDeliveryLetter(\NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest)
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
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackRequest $trackRequest
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackReply|bool
     */
    public function track(\NicholasCreativeMedia\FedExPHP\Track\StructType\TrackRequest $trackRequest)
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
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryFaxReply|bool
     */
    public function sendSignatureProofOfDeliveryFax(\NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest)
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
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\SendNotificationsRequest $sendNotificationsRequest
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SendNotificationsReply|bool
     */
    public function sendNotifications(\NicholasCreativeMedia\FedExPHP\Track\StructType\SendNotificationsRequest $sendNotificationsRequest)
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
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SendNotificationsReply|\NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryFaxReply|\NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryLetterReply|\NicholasCreativeMedia\FedExPHP\Track\StructType\TrackReply
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
