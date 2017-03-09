<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for CloseTimeType Enums
 * @subpackage Enumerations
 */
class CloseTimeType
{
    /**
     * Constant for value 'CUSTOMER_SPECIFIED'
     * @return string 'CUSTOMER_SPECIFIED'
     */
    const VALUE_CUSTOMER_SPECIFIED = 'CUSTOMER_SPECIFIED';
    /**
     * Constant for value 'DEFAULT'
     * @return string 'DEFAULT'
     */
    const VALUE_DEFAULT = 'DEFAULT';
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
     * @uses self::VALUE_CUSTOMER_SPECIFIED
     * @uses self::VALUE_DEFAULT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOMER_SPECIFIED,
            self::VALUE_DEFAULT,
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
