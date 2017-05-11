<?php

namespace NicholasCreativeMedia\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class ShipService extends FedExService
{

    /**
     * RateService constructor.
     * @param array $wsdlOptions
     * @param bool $resetSoapClient
     * @param bool $beta
     */
    public function __construct(array $wsdlOptions = array(), $resetSoapClient = true, $mode = 'test')
    {
        if ($mode === false) $mode = 'test';
        if ($mode === true) $mode = 'live';
        $default_options = [
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'ShipService_v19.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \NicholasCreativeMedia\FedExPHP\ShipClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$mode);

        $this->version = new \NicholasCreativeMedia\FedExPHP\Structs\VersionId('ship',19,0,0);
    }
    /**
     * Method to call the operation originally named processTag
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ProcessTagRequest $processTagRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessTagReply|bool
     */
    public function processTag(\NicholasCreativeMedia\FedExPHP\Structs\ProcessTagRequest $processTagRequest)
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ProcessShipmentRequest $processShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessShipmentReply|bool
     */
    public function processShipment(\NicholasCreativeMedia\FedExPHP\Structs\ProcessShipmentRequest $processShipmentRequest)
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeleteTagRequest $deleteTagRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentReply|bool
     */
    public function deleteTag(\NicholasCreativeMedia\FedExPHP\Structs\DeleteTagRequest $deleteTagRequest)
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeleteShipmentRequest $deleteShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentReply|bool
     */
    public function deleteShipment(\NicholasCreativeMedia\FedExPHP\Structs\DeleteShipmentRequest $deleteShipmentRequest)
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
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ValidateShipmentRequest $validateShipmentRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentReply|bool
     */
    public function validateShipment(\NicholasCreativeMedia\FedExPHP\Structs\ValidateShipmentRequest $validateShipmentRequest)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ProcessShipmentReply|\NicholasCreativeMedia\FedExPHP\Structs\ProcessTagReply|\NicholasCreativeMedia\FedExPHP\Structs\ShipmentReply
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
