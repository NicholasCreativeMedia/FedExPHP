<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named processTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagRequest $processTagRequest
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagReply|bool
     */
    public function processTag(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagRequest $processTagRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->processTag($processTagRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named processShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessShipmentRequest $processShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessShipmentReply|bool
     */
    public function processShipment(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessShipmentRequest $processShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->processShipment($processShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteTagRequest $deleteTagRequest
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentReply|bool
     */
    public function deleteTag(\NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteTagRequest $deleteTagRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteTag($deleteTagRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteShipmentRequest $deleteShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentReply|bool
     */
    public function deleteShipment(\NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteShipmentRequest $deleteShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->deleteShipment($deleteShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidateShipmentRequest $validateShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentReply|bool
     */
    public function validateShipment(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidateShipmentRequest $validateShipmentRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->validateShipment($validateShipmentRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessShipmentReply|\NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagReply|\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentReply
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
