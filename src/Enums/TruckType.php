<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for TruckType Enums
 * @subpackage Enumerations
 */
class TruckType
{
    /**
     * Constant for value 'DROP_TRAILER_AGREEMENT'
     * @return string 'DROP_TRAILER_AGREEMENT'
     */
    const VALUE_DROP_TRAILER_AGREEMENT = 'DROP_TRAILER_AGREEMENT';
    /**
     * Constant for value 'LIFTGATE'
     * @return string 'LIFTGATE'
     */
    const VALUE_LIFTGATE = 'LIFTGATE';
    /**
     * Constant for value 'TRACTOR_TRAILER_ACCESS'
     * @return string 'TRACTOR_TRAILER_ACCESS'
     */
    const VALUE_TRACTOR_TRAILER_ACCESS = 'TRACTOR_TRAILER_ACCESS';
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
     * @uses self::VALUE_DROP_TRAILER_AGREEMENT
     * @uses self::VALUE_LIFTGATE
     * @uses self::VALUE_TRACTOR_TRAILER_ACCESS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DROP_TRAILER_AGREEMENT,
            self::VALUE_LIFTGATE,
            self::VALUE_TRACTOR_TRAILER_ACCESS,
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
