<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for BuildingPartCode Enums
 * @subpackage Enumerations
 */
class BuildingPartCode
{
    /**
     * Constant for value 'APARTMENT'
     * @return string 'APARTMENT'
     */
    const VALUE_APARTMENT = 'APARTMENT';
    /**
     * Constant for value 'BUILDING'
     * @return string 'BUILDING'
     */
    const VALUE_BUILDING = 'BUILDING';
    /**
     * Constant for value 'DEPARTMENT'
     * @return string 'DEPARTMENT'
     */
    const VALUE_DEPARTMENT = 'DEPARTMENT';
    /**
     * Constant for value 'FLOOR'
     * @return string 'FLOOR'
     */
    const VALUE_FLOOR = 'FLOOR';
    /**
     * Constant for value 'ROOM'
     * @return string 'ROOM'
     */
    const VALUE_ROOM = 'ROOM';
    /**
     * Constant for value 'SUITE'
     * @return string 'SUITE'
     */
    const VALUE_SUITE = 'SUITE';
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
     * @uses self::VALUE_APARTMENT
     * @uses self::VALUE_BUILDING
     * @uses self::VALUE_DEPARTMENT
     * @uses self::VALUE_FLOOR
     * @uses self::VALUE_ROOM
     * @uses self::VALUE_SUITE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APARTMENT,
            self::VALUE_BUILDING,
            self::VALUE_DEPARTMENT,
            self::VALUE_FLOOR,
            self::VALUE_ROOM,
            self::VALUE_SUITE,
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
