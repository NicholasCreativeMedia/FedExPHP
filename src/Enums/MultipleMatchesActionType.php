<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for MultipleMatchesActionType Enums
 * @subpackage Enumerations
 */
class MultipleMatchesActionType
{
    /**
     * Constant for value 'RETURN_ALL'
     * @return string 'RETURN_ALL'
     */
    const VALUE_RETURN_ALL = 'RETURN_ALL';
    /**
     * Constant for value 'RETURN_ERROR'
     * @return string 'RETURN_ERROR'
     */
    const VALUE_RETURN_ERROR = 'RETURN_ERROR';
    /**
     * Constant for value 'RETURN_FIRST'
     * @return string 'RETURN_FIRST'
     */
    const VALUE_RETURN_FIRST = 'RETURN_FIRST';
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
     * @uses self::VALUE_RETURN_ALL
     * @uses self::VALUE_RETURN_ERROR
     * @uses self::VALUE_RETURN_FIRST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RETURN_ALL,
            self::VALUE_RETURN_ERROR,
            self::VALUE_RETURN_FIRST,
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
