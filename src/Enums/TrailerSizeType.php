<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for TrailerSizeType Enums
 * @subpackage Enumerations
 */
class TrailerSizeType
{
    /**
     * Constant for value 'TRAILER_28_FT'
     * @return string 'TRAILER_28_FT'
     */
    const VALUE_TRAILER_28_FT = 'TRAILER_28_FT';
    /**
     * Constant for value 'TRAILER_48_FT'
     * @return string 'TRAILER_48_FT'
     */
    const VALUE_TRAILER_48_FT = 'TRAILER_48_FT';
    /**
     * Constant for value 'TRAILER_53_FT'
     * @return string 'TRAILER_53_FT'
     */
    const VALUE_TRAILER_53_FT = 'TRAILER_53_FT';
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
     * @uses self::VALUE_TRAILER_28_FT
     * @uses self::VALUE_TRAILER_48_FT
     * @uses self::VALUE_TRAILER_53_FT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TRAILER_28_FT,
            self::VALUE_TRAILER_48_FT,
            self::VALUE_TRAILER_53_FT,
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
