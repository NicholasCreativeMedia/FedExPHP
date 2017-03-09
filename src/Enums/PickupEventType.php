<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for PickupEventType Enums
 * @subpackage Enumerations
 */
class PickupEventType
{
    /**
     * Constant for value 'ASSIGNED_TO_DRIVER'
     * @return string 'ASSIGNED_TO_DRIVER'
     */
    const VALUE_ASSIGNED_TO_DRIVER = 'ASSIGNED_TO_DRIVER';
    /**
     * Constant for value 'CANCELED'
     * @return string 'CANCELED'
     */
    const VALUE_CANCELED = 'CANCELED';
    /**
     * Constant for value 'EXCEPTION'
     * @return string 'EXCEPTION'
     */
    const VALUE_EXCEPTION = 'EXCEPTION';
    /**
     * Constant for value 'PICKED_UP'
     * @return string 'PICKED_UP'
     */
    const VALUE_PICKED_UP = 'PICKED_UP';
    /**
     * Constant for value 'SCHEDULED'
     * @return string 'SCHEDULED'
     */
    const VALUE_SCHEDULED = 'SCHEDULED';
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
     * @uses self::VALUE_ASSIGNED_TO_DRIVER
     * @uses self::VALUE_CANCELED
     * @uses self::VALUE_EXCEPTION
     * @uses self::VALUE_PICKED_UP
     * @uses self::VALUE_SCHEDULED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ASSIGNED_TO_DRIVER,
            self::VALUE_CANCELED,
            self::VALUE_EXCEPTION,
            self::VALUE_PICKED_UP,
            self::VALUE_SCHEDULED,
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
