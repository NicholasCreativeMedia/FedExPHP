<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for SpecialEquipmentType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies types of special equipment used in loading/unloading Freight shipments
 * @subpackage Enumerations
 */
class SpecialEquipmentType
{
    /**
     * Constant for value 'FORK_LIFT'
     * @return string 'FORK_LIFT'
     */
    const VALUE_FORK_LIFT = 'FORK_LIFT';
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
     * @uses self::VALUE_FORK_LIFT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FORK_LIFT,
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
