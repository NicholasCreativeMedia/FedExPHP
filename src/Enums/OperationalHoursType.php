<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for OperationalHoursType Enums
 * @subpackage Enumerations
 */
class OperationalHoursType
{
    /**
     * Constant for value 'CLOSED_ALL_DAY'
     * @return string 'CLOSED_ALL_DAY'
     */
    const VALUE_CLOSED_ALL_DAY = 'CLOSED_ALL_DAY';
    /**
     * Constant for value 'OPEN_ALL_DAY'
     * @return string 'OPEN_ALL_DAY'
     */
    const VALUE_OPEN_ALL_DAY = 'OPEN_ALL_DAY';
    /**
     * Constant for value 'OPEN_BY_HOURS'
     * @return string 'OPEN_BY_HOURS'
     */
    const VALUE_OPEN_BY_HOURS = 'OPEN_BY_HOURS';
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
     * @uses self::VALUE_CLOSED_ALL_DAY
     * @uses self::VALUE_OPEN_ALL_DAY
     * @uses self::VALUE_OPEN_BY_HOURS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CLOSED_ALL_DAY,
            self::VALUE_OPEN_ALL_DAY,
            self::VALUE_OPEN_BY_HOURS,
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
