<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for AssociatedAccountNumberType Enums
 * Meta informations extracted from the WSDL
 * - documentation: This enumeration represents a kind of "legacy" account number from a FedEx operating entity.
 * @subpackage Enumerations
 */
class AssociatedAccountNumberType
{
    /**
     * Constant for value 'FEDEX_EXPRESS'
     * @return string 'FEDEX_EXPRESS'
     */
    const VALUE_FEDEX_EXPRESS = 'FEDEX_EXPRESS';
    /**
     * Constant for value 'FEDEX_FREIGHT'
     * @return string 'FEDEX_FREIGHT'
     */
    const VALUE_FEDEX_FREIGHT = 'FEDEX_FREIGHT';
    /**
     * Constant for value 'FEDEX_GROUND'
     * @return string 'FEDEX_GROUND'
     */
    const VALUE_FEDEX_GROUND = 'FEDEX_GROUND';
    /**
     * Constant for value 'FEDEX_OFFICE'
     * @return string 'FEDEX_OFFICE'
     */
    const VALUE_FEDEX_OFFICE = 'FEDEX_OFFICE';
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
     * @uses self::VALUE_FEDEX_FREIGHT
     * @uses self::VALUE_FEDEX_GROUND
     * @uses self::VALUE_FEDEX_OFFICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEDEX_EXPRESS,
            self::VALUE_FEDEX_FREIGHT,
            self::VALUE_FEDEX_GROUND,
            self::VALUE_FEDEX_OFFICE,
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
