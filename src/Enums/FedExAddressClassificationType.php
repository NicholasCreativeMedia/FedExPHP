<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for FedExAddressClassificationType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the address classification (business vs. residential)
 * @subpackage Enumerations
 */
class FedExAddressClassificationType
{
    /**
     * Constant for value 'BUSINESS'
     * @return string 'BUSINESS'
     */
    const VALUE_BUSINESS = 'BUSINESS';
    /**
     * Constant for value 'MIXED'
     * @return string 'MIXED'
     */
    const VALUE_MIXED = 'MIXED';
    /**
     * Constant for value 'RESIDENTIAL'
     * @return string 'RESIDENTIAL'
     */
    const VALUE_RESIDENTIAL = 'RESIDENTIAL';
    /**
     * Constant for value 'UNKNOWN'
     * @return string 'UNKNOWN'
     */
    const VALUE_UNKNOWN = 'UNKNOWN';
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
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_MIXED
     * @uses self::VALUE_RESIDENTIAL
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUSINESS,
            self::VALUE_MIXED,
            self::VALUE_RESIDENTIAL,
            self::VALUE_UNKNOWN,
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
