<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for AutoConfigurationType Enums
 * @subpackage Enumerations
 */
class AutoConfigurationType
{
    /**
     * Constant for value 'ENTERPRISE'
     * @return string 'ENTERPRISE'
     */
    const VALUE_ENTERPRISE = 'ENTERPRISE';
    /**
     * Constant for value 'SHIPPING_SERVICE_PROVIDER'
     * @return string 'SHIPPING_SERVICE_PROVIDER'
     */
    const VALUE_SHIPPING_SERVICE_PROVIDER = 'SHIPPING_SERVICE_PROVIDER';
    /**
     * Constant for value 'SOFTWARE_ONLY'
     * @return string 'SOFTWARE_ONLY'
     */
    const VALUE_SOFTWARE_ONLY = 'SOFTWARE_ONLY';
    /**
     * Constant for value 'TRADITIONAL'
     * @return string 'TRADITIONAL'
     */
    const VALUE_TRADITIONAL = 'TRADITIONAL';
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
     * @uses self::VALUE_ENTERPRISE
     * @uses self::VALUE_SHIPPING_SERVICE_PROVIDER
     * @uses self::VALUE_SOFTWARE_ONLY
     * @uses self::VALUE_TRADITIONAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ENTERPRISE,
            self::VALUE_SHIPPING_SERVICE_PROVIDER,
            self::VALUE_SOFTWARE_ONLY,
            self::VALUE_TRADITIONAL,
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
