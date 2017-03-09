<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for PickupBuildingLocationType Enums
 * @subpackage Enumerations
 */
class PickupBuildingLocationType
{
    /**
     * Constant for value 'FRONT'
     * @return string 'FRONT'
     */
    const VALUE_FRONT = 'FRONT';
    /**
     * Constant for value 'NONE'
     * @return string 'NONE'
     */
    const VALUE_NONE = 'NONE';
    /**
     * Constant for value 'REAR'
     * @return string 'REAR'
     */
    const VALUE_REAR = 'REAR';
    /**
     * Constant for value 'SIDE'
     * @return string 'SIDE'
     */
    const VALUE_SIDE = 'SIDE';
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
     * @uses self::VALUE_FRONT
     * @uses self::VALUE_NONE
     * @uses self::VALUE_REAR
     * @uses self::VALUE_SIDE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FRONT,
            self::VALUE_NONE,
            self::VALUE_REAR,
            self::VALUE_SIDE,
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
