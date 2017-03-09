<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for LocationAccessibilityType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Indicates how this can be accessed.
 * @subpackage Enumerations
 */
class LocationAccessibilityType
{
    /**
     * Constant for value 'INSIDE'
     * @return string 'INSIDE'
     */
    const VALUE_INSIDE = 'INSIDE';
    /**
     * Constant for value 'OUTSIDE'
     * @return string 'OUTSIDE'
     */
    const VALUE_OUTSIDE = 'OUTSIDE';
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
     * @uses self::VALUE_INSIDE
     * @uses self::VALUE_OUTSIDE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INSIDE,
            self::VALUE_OUTSIDE,
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
