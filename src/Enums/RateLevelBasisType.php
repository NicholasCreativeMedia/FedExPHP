<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for RateLevelBasisType Enums
 * @subpackage Enumerations
 */
class RateLevelBasisType
{
    /**
     * Constant for value 'BUNDLED_RATE'
     * @return string 'BUNDLED_RATE'
     */
    const VALUE_BUNDLED_RATE = 'BUNDLED_RATE';
    /**
     * Constant for value 'INDIVIDUAL_PACKAGE_RATE'
     * @return string 'INDIVIDUAL_PACKAGE_RATE'
     */
    const VALUE_INDIVIDUAL_PACKAGE_RATE = 'INDIVIDUAL_PACKAGE_RATE';
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
     * @uses self::VALUE_BUNDLED_RATE
     * @uses self::VALUE_INDIVIDUAL_PACKAGE_RATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUNDLED_RATE,
            self::VALUE_INDIVIDUAL_PACKAGE_RATE,
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
