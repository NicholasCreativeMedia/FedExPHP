<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for ShippingActionType Enums
 * @subpackage Enumerations
 */
class ShippingActionType
{
    /**
     * Constant for value 'DELIVERIES'
     * @return string 'DELIVERIES'
     */
    const VALUE_DELIVERIES = 'DELIVERIES';
    /**
     * Constant for value 'PICKUPS'
     * @return string 'PICKUPS'
     */
    const VALUE_PICKUPS = 'PICKUPS';
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
     * @uses self::VALUE_DELIVERIES
     * @uses self::VALUE_PICKUPS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DELIVERIES,
            self::VALUE_PICKUPS,
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
