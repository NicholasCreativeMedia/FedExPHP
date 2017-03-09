<?php

namespace NicholasCreativeMedia\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class ValidationAvailabilityAndCommitmentService extends FedExService
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
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl'.DIRECTORY_SEPARATOR.'ValidationAvailabilityAndCommitmentService_v6.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \NicholasCreativeMedia\FedExPHP\ValidationAvailabilityAndCommitmentClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$beta);

        $this->version = new \NicholasCreativeMedia\FedExPHP\Structs\VersionId('vacs',6,0,0);
    }
    /**
     * Method to call the operation originally named serviceAvailability
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest $serviceAvailabilityRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityReply|bool
     */
    public function serviceAvailability(\NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest $serviceAvailabilityRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->serviceAvailability($serviceAvailabilityRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityReply
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
