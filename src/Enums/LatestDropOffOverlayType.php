<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for LatestDropOffOverlayType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the reason for the overlay of the daily last drop off time for a carrier.
 * @subpackage Enumerations
 */
class LatestDropOffOverlayType
{
    /**
     * Constant for value 'US_WEST_COAST'
     * @return string 'US_WEST_COAST'
     */
    const VALUE_US_WEST_COAST = 'US_WEST_COAST';
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
     * @uses self::VALUE_US_WEST_COAST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_US_WEST_COAST,
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
