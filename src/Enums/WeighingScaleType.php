<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for WeighingScaleType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Identifies types of scales used in weighing Freight shipments
 * @subpackage Enumerations
 */
class WeighingScaleType
{
    /**
     * Constant for value 'FEDEX_SCALE'
     * @return string 'FEDEX_SCALE'
     */
    const VALUE_FEDEX_SCALE = 'FEDEX_SCALE';
    /**
     * Constant for value 'PUBLIC_SCALE'
     * @return string 'PUBLIC_SCALE'
     */
    const VALUE_PUBLIC_SCALE = 'PUBLIC_SCALE';
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
     * @uses self::VALUE_FEDEX_SCALE
     * @uses self::VALUE_PUBLIC_SCALE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEDEX_SCALE,
            self::VALUE_PUBLIC_SCALE,
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
