<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmsDetail Structs
 * @subpackage Structs
 */
class SmsDetail extends AbstractStructBase
{
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumber;
    /**
     * The PhoneNumberCountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumberCountryCode;
    /**
     * Constructor method for SmsDetail
     * @uses SmsDetail::setPhoneNumber()
     * @uses SmsDetail::setPhoneNumberCountryCode()
     * @param string $phoneNumber
     * @param string $phoneNumberCountryCode
     */
    public function __construct($phoneNumber = null, $phoneNumberCountryCode = null)
    {
        $this
            ->setPhoneNumber($phoneNumber)
            ->setPhoneNumberCountryCode($phoneNumberCountryCode);
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmsDetail
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get PhoneNumberCountryCode value
     * @return string|null
     */
    public function getPhoneNumberCountryCode()
    {
        return $this->PhoneNumberCountryCode;
    }
    /**
     * Set PhoneNumberCountryCode value
     * @param string $phoneNumberCountryCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmsDetail
     */
    public function setPhoneNumberCountryCode($phoneNumberCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumberCountryCode) && !is_string($phoneNumberCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumberCountryCode)), __LINE__);
        }
        $this->PhoneNumberCountryCode = $phoneNumberCountryCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SmsDetail
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
