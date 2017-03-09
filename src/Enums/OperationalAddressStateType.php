<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for OperationalAddressStateType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how different the address returned is from the address provided. This difference can be because the address is cannonialised to match the address specification standard set by USPS.
 * @subpackage Enumerations
 */
class OperationalAddressStateType
{
    /**
     * Constant for value 'NORMALIZED'
     * @return string 'NORMALIZED'
     */
    const VALUE_NORMALIZED = 'NORMALIZED';
    /**
     * Constant for value 'RAW'
     * @return string 'RAW'
     */
    const VALUE_RAW = 'RAW';
    /**
     * Constant for value 'STANDARDIZED'
     * @return string 'STANDARDIZED'
     */
    const VALUE_STANDARDIZED = 'STANDARDIZED';
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
     * @uses self::VALUE_NORMALIZED
     * @uses self::VALUE_RAW
     * @uses self::VALUE_STANDARDIZED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NORMALIZED,
            self::VALUE_RAW,
            self::VALUE_STANDARDIZED,
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
