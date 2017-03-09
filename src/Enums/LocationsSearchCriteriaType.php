<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for LocationsSearchCriteriaType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the criteria types that may be used to search for FedEx locations.
 * @subpackage Enumerations
 */
class LocationsSearchCriteriaType
{
    /**
     * Constant for value 'ADDRESS'
     * @return string 'ADDRESS'
     */
    const VALUE_ADDRESS = 'ADDRESS';
    /**
     * Constant for value 'GEOGRAPHIC_COORDINATES'
     * @return string 'GEOGRAPHIC_COORDINATES'
     */
    const VALUE_GEOGRAPHIC_COORDINATES = 'GEOGRAPHIC_COORDINATES';
    /**
     * Constant for value 'PHONE_NUMBER'
     * @return string 'PHONE_NUMBER'
     */
    const VALUE_PHONE_NUMBER = 'PHONE_NUMBER';
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
     * @uses self::VALUE_ADDRESS
     * @uses self::VALUE_GEOGRAPHIC_COORDINATES
     * @uses self::VALUE_PHONE_NUMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADDRESS,
            self::VALUE_GEOGRAPHIC_COORDINATES,
            self::VALUE_PHONE_NUMBER,
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
