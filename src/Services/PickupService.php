<?php

namespace NicholasCreativeMedia\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class PickupService extends FedExService
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
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl'.DIRECTORY_SEPARATOR.'PickupService_v13.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \NicholasCreativeMedia\FedExPHP\PickupClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$beta);

        $this->version = new \NicholasCreativeMedia\FedExPHP\Structs\VersionId('disp',13,0,0);
    }
    /**
     * Method to call the operation originally named getPickupAvailability
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest $pickupAvailabilityRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityReply|bool
     */
    public function getPickupAvailability(\NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest $pickupAvailabilityRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getPickupAvailability($pickupAvailabilityRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named createPickup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest $createPickupRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply|bool
     */
    public function createPickup(\NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest $createPickupRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->createPickup($createPickupRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named cancelPickup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CancelPickupRequest $cancelPickupRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CancelPickupReply|bool
     */
    public function cancelPickup(\NicholasCreativeMedia\FedExPHP\Structs\CancelPickupRequest $cancelPickupRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->cancelPickup($cancelPickupRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CancelPickupReply|\NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply|\NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityReply
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
