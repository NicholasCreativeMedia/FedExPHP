<?php

namespace NicholasCreativeMedia\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class AddressValidationService extends FedExService
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
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'AddressValidationService_v4.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \NicholasCreativeMedia\FedExPHP\AddressValidationClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$mode);

        $this->version = new \NicholasCreativeMedia\FedExPHP\Structs\VersionId('aval',4,0,0);
    }
    /**
     * Method to call the operation originally named addressValidation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationRequest $addressValidationRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationReply|bool
     */
    public function addressValidation(\NicholasCreativeMedia\FedExPHP\Structs\AddressValidationRequest $addressValidationRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->addressValidation($addressValidationRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationReply
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
