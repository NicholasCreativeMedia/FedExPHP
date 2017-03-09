<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for LocationSortCriteriaType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the criterion to be used to sort the location details.
 * @subpackage Enumerations
 */
class LocationSortCriteriaType
{
    /**
     * Constant for value 'DISTANCE'
     * @return string 'DISTANCE'
     */
    const VALUE_DISTANCE = 'DISTANCE';
    /**
     * Constant for value 'LATEST_EXPRESS_DROPOFF_TIME'
     * @return string 'LATEST_EXPRESS_DROPOFF_TIME'
     */
    const VALUE_LATEST_EXPRESS_DROPOFF_TIME = 'LATEST_EXPRESS_DROPOFF_TIME';
    /**
     * Constant for value 'LATEST_GROUND_DROPOFF_TIME'
     * @return string 'LATEST_GROUND_DROPOFF_TIME'
     */
    const VALUE_LATEST_GROUND_DROPOFF_TIME = 'LATEST_GROUND_DROPOFF_TIME';
    /**
     * Constant for value 'LOCATION_TYPE'
     * @return string 'LOCATION_TYPE'
     */
    const VALUE_LOCATION_TYPE = 'LOCATION_TYPE';
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
     * @uses self::VALUE_DISTANCE
     * @uses self::VALUE_LATEST_EXPRESS_DROPOFF_TIME
     * @uses self::VALUE_LATEST_GROUND_DROPOFF_TIME
     * @uses self::VALUE_LOCATION_TYPE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISTANCE,
            self::VALUE_LATEST_EXPRESS_DROPOFF_TIME,
            self::VALUE_LATEST_GROUND_DROPOFF_TIME,
            self::VALUE_LOCATION_TYPE,
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
