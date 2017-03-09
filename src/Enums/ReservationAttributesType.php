<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for ReservationAttributesType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Attributes about a reservation at a FedEx location.
 * @subpackage Enumerations
 */
class ReservationAttributesType
{
    /**
     * Constant for value 'RESERVATION_AVAILABLE'
     * @return string 'RESERVATION_AVAILABLE'
     */
    const VALUE_RESERVATION_AVAILABLE = 'RESERVATION_AVAILABLE';
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
     * @uses self::VALUE_RESERVATION_AVAILABLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RESERVATION_AVAILABLE,
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
