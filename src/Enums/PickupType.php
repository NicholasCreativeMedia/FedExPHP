<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for PickupType Enums
 * Meta informations extracted from the WSDL
 * - documentation: These values indicate the type of pickup being requested.
 * @subpackage Enumerations
 */
class PickupType
{
    /**
     * Constant for value 'ON_CALL'
     * @return string 'ON_CALL'
     */
    const VALUE_ON_CALL = 'ON_CALL';
    /**
     * Constant for value 'TAG'
     * @return string 'TAG'
     */
    const VALUE_TAG = 'TAG';
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
     * @uses self::VALUE_ON_CALL
     * @uses self::VALUE_TAG
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ON_CALL,
            self::VALUE_TAG,
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
