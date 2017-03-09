<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for CountryRelationshipType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Describes relationship between origin and destination countries.
 * @subpackage Enumerations
 */
class CountryRelationshipType
{
    /**
     * Constant for value 'DOMESTIC'
     * @return string 'DOMESTIC'
     */
    const VALUE_DOMESTIC = 'DOMESTIC';
    /**
     * Constant for value 'INTERNATIONAL'
     * @return string 'INTERNATIONAL'
     */
    const VALUE_INTERNATIONAL = 'INTERNATIONAL';
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
     * @uses self::VALUE_DOMESTIC
     * @uses self::VALUE_INTERNATIONAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DOMESTIC,
            self::VALUE_INTERNATIONAL,
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
