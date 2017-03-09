<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for PaymentType Enums
 * @subpackage Enumerations
 */
class PaymentType
{
    /**
     * Constant for value 'ACCOUNT'
     * @return string 'ACCOUNT'
     */
    const VALUE_ACCOUNT = 'ACCOUNT';
    /**
     * Constant for value 'COLLECT'
     * @return string 'COLLECT'
     */
    const VALUE_COLLECT = 'COLLECT';
    /**
     * Constant for value 'RECIPIENT'
     * @return string 'RECIPIENT'
     */
    const VALUE_RECIPIENT = 'RECIPIENT';
    /**
     * Constant for value 'SENDER'
     * @return string 'SENDER'
     */
    const VALUE_SENDER = 'SENDER';
    /**
     * Constant for value 'THIRD_PARTY'
     * @return string 'THIRD_PARTY'
     */
    const VALUE_THIRD_PARTY = 'THIRD_PARTY';
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
     * @uses self::VALUE_ACCOUNT
     * @uses self::VALUE_COLLECT
     * @uses self::VALUE_RECIPIENT
     * @uses self::VALUE_SENDER
     * @uses self::VALUE_THIRD_PARTY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACCOUNT,
            self::VALUE_COLLECT,
            self::VALUE_RECIPIENT,
            self::VALUE_SENDER,
            self::VALUE_THIRD_PARTY,
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
