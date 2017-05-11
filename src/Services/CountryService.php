<?php

namespace NicholasCreativeMedia\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class CountryService extends FedExService
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
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => dirname(__FILE__).DIRECTORY_SEPARATOR.'wsdl-'.$mode.DIRECTORY_SEPARATOR.'CountryService_v5.wsdl',
           \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \NicholasCreativeMedia\FedExPHP\CountryClassMap::get(),
        ];
        $options = array_merge($default_options,$wsdlOptions);
        parent::__construct($options,$resetSoapClient,$mode);

        $this->version = new \NicholasCreativeMedia\FedExPHP\Structs\VersionId('cnty',5,0,1);
    }
    /**
     * Method to call the operation originally named validatePostal
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ValidatePostalRequest $validatePostalRequest
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatePostalReply|bool
     */
    public function validatePostal(\NicholasCreativeMedia\FedExPHP\Structs\ValidatePostalRequest $validatePostalRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->validatePostal($validatePostalRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatePostalReply
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
