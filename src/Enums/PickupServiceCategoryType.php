<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for PickupServiceCategoryType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the service category for the pick up being scheduled.
 * @subpackage Enumerations
 */
class PickupServiceCategoryType
{
    /**
     * Constant for value 'FEDEX_DISTANCE_DEFERRED'
     * @return string 'FEDEX_DISTANCE_DEFERRED'
     */
    const VALUE_FEDEX_DISTANCE_DEFERRED = 'FEDEX_DISTANCE_DEFERRED';
    /**
     * Constant for value 'FEDEX_NEXT_DAY_AFTERNOON'
     * @return string 'FEDEX_NEXT_DAY_AFTERNOON'
     */
    const VALUE_FEDEX_NEXT_DAY_AFTERNOON = 'FEDEX_NEXT_DAY_AFTERNOON';
    /**
     * Constant for value 'FEDEX_NEXT_DAY_EARLY_MORNING'
     * @return string 'FEDEX_NEXT_DAY_EARLY_MORNING'
     */
    const VALUE_FEDEX_NEXT_DAY_EARLY_MORNING = 'FEDEX_NEXT_DAY_EARLY_MORNING';
    /**
     * Constant for value 'FEDEX_NEXT_DAY_END_OF_DAY'
     * @return string 'FEDEX_NEXT_DAY_END_OF_DAY'
     */
    const VALUE_FEDEX_NEXT_DAY_END_OF_DAY = 'FEDEX_NEXT_DAY_END_OF_DAY';
    /**
     * Constant for value 'FEDEX_NEXT_DAY_FREIGHT'
     * @return string 'FEDEX_NEXT_DAY_FREIGHT'
     */
    const VALUE_FEDEX_NEXT_DAY_FREIGHT = 'FEDEX_NEXT_DAY_FREIGHT';
    /**
     * Constant for value 'FEDEX_NEXT_DAY_MID_MORNING'
     * @return string 'FEDEX_NEXT_DAY_MID_MORNING'
     */
    const VALUE_FEDEX_NEXT_DAY_MID_MORNING = 'FEDEX_NEXT_DAY_MID_MORNING';
    /**
     * Constant for value 'SAME_DAY'
     * @return string 'SAME_DAY'
     */
    const VALUE_SAME_DAY = 'SAME_DAY';
    /**
     * Constant for value 'SAME_DAY_CITY'
     * @return string 'SAME_DAY_CITY'
     */
    const VALUE_SAME_DAY_CITY = 'SAME_DAY_CITY';
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
     * @uses self::VALUE_FEDEX_DISTANCE_DEFERRED
     * @uses self::VALUE_FEDEX_NEXT_DAY_AFTERNOON
     * @uses self::VALUE_FEDEX_NEXT_DAY_EARLY_MORNING
     * @uses self::VALUE_FEDEX_NEXT_DAY_END_OF_DAY
     * @uses self::VALUE_FEDEX_NEXT_DAY_FREIGHT
     * @uses self::VALUE_FEDEX_NEXT_DAY_MID_MORNING
     * @uses self::VALUE_SAME_DAY
     * @uses self::VALUE_SAME_DAY_CITY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEDEX_DISTANCE_DEFERRED,
            self::VALUE_FEDEX_NEXT_DAY_AFTERNOON,
            self::VALUE_FEDEX_NEXT_DAY_EARLY_MORNING,
            self::VALUE_FEDEX_NEXT_DAY_END_OF_DAY,
            self::VALUE_FEDEX_NEXT_DAY_FREIGHT,
            self::VALUE_FEDEX_NEXT_DAY_MID_MORNING,
            self::VALUE_SAME_DAY,
            self::VALUE_SAME_DAY_CITY,
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
