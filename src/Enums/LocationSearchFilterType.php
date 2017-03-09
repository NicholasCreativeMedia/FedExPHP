<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for LocationSearchFilterType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the crieteria used to filter the location search results.
 * @subpackage Enumerations
 */
class LocationSearchFilterType
{
    /**
     * Constant for value 'EXCLUDE_LOCATIONS_OUTSIDE_COUNTRY'
     * @return string 'EXCLUDE_LOCATIONS_OUTSIDE_COUNTRY'
     */
    const VALUE_EXCLUDE_LOCATIONS_OUTSIDE_COUNTRY = 'EXCLUDE_LOCATIONS_OUTSIDE_COUNTRY';
    /**
     * Constant for value 'EXCLUDE_LOCATIONS_OUTSIDE_STATE_OR_PROVINCE'
     * @return string 'EXCLUDE_LOCATIONS_OUTSIDE_STATE_OR_PROVINCE'
     */
    const VALUE_EXCLUDE_LOCATIONS_OUTSIDE_STATE_OR_PROVINCE = 'EXCLUDE_LOCATIONS_OUTSIDE_STATE_OR_PROVINCE';
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
     * @uses self::VALUE_EXCLUDE_LOCATIONS_OUTSIDE_COUNTRY
     * @uses self::VALUE_EXCLUDE_LOCATIONS_OUTSIDE_STATE_OR_PROVINCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXCLUDE_LOCATIONS_OUTSIDE_COUNTRY,
            self::VALUE_EXCLUDE_LOCATIONS_OUTSIDE_STATE_OR_PROVINCE,
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
