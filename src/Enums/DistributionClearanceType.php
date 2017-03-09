<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for DistributionClearanceType Enums
 * @subpackage Enumerations
 */
class DistributionClearanceType
{
    /**
     * Constant for value 'DESTINATION_COUNTRY_CLEARANCE'
     * @return string 'DESTINATION_COUNTRY_CLEARANCE'
     */
    const VALUE_DESTINATION_COUNTRY_CLEARANCE = 'DESTINATION_COUNTRY_CLEARANCE';
    /**
     * Constant for value 'SINGLE_POINT_OF_CLEARANCE'
     * @return string 'SINGLE_POINT_OF_CLEARANCE'
     */
    const VALUE_SINGLE_POINT_OF_CLEARANCE = 'SINGLE_POINT_OF_CLEARANCE';
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
     * @uses self::VALUE_DESTINATION_COUNTRY_CLEARANCE
     * @uses self::VALUE_SINGLE_POINT_OF_CLEARANCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DESTINATION_COUNTRY_CLEARANCE,
            self::VALUE_SINGLE_POINT_OF_CLEARANCE,
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
