<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for SupportedRedirectToHoldServiceType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the types of services supported by a FedEx location for redirect to hold.
 * @subpackage Enumerations
 */
class SupportedRedirectToHoldServiceType
{
    /**
     * Constant for value 'FEDEX_EXPRESS'
     * @return string 'FEDEX_EXPRESS'
     */
    const VALUE_FEDEX_EXPRESS = 'FEDEX_EXPRESS';
    /**
     * Constant for value 'FEDEX_GROUND'
     * @return string 'FEDEX_GROUND'
     */
    const VALUE_FEDEX_GROUND = 'FEDEX_GROUND';
    /**
     * Constant for value 'FEDEX_GROUND_HOME_DELIVERY'
     * @return string 'FEDEX_GROUND_HOME_DELIVERY'
     */
    const VALUE_FEDEX_GROUND_HOME_DELIVERY = 'FEDEX_GROUND_HOME_DELIVERY';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_FEDEX_EXPRESS
     * @uses self::VALUE_FEDEX_GROUND
     * @uses self::VALUE_FEDEX_GROUND_HOME_DELIVERY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEDEX_EXPRESS,
            self::VALUE_FEDEX_GROUND,
            self::VALUE_FEDEX_GROUND_HOME_DELIVERY,
        );
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
