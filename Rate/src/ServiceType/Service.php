<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for all operations
 * @subpackage Services
 */
class Service extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getRates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\RateRequest $rateRequest
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\RateReply|bool
     */
    public function getRates(\NicholasCreativeMedia\FedExPHP\Rate\StructType\RateRequest $rateRequest)
    {
        try {
            $this->setResult(self::getSoapClient()->getRates($rateRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\RateReply
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
