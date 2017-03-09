<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for LocationSortOrderType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies sort order of the location details.
 * @subpackage Enumerations
 */
class LocationSortOrderType
{
    /**
     * Constant for value 'HIGHEST_TO_LOWEST'
     * @return string 'HIGHEST_TO_LOWEST'
     */
    const VALUE_HIGHEST_TO_LOWEST = 'HIGHEST_TO_LOWEST';
    /**
     * Constant for value 'LOWEST_TO_HIGHEST'
     * @return string 'LOWEST_TO_HIGHEST'
     */
    const VALUE_LOWEST_TO_HIGHEST = 'LOWEST_TO_HIGHEST';
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
     * @uses self::VALUE_HIGHEST_TO_LOWEST
     * @uses self::VALUE_LOWEST_TO_HIGHEST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HIGHEST_TO_LOWEST,
            self::VALUE_LOWEST_TO_HIGHEST,
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
