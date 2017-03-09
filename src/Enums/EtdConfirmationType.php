<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for EtdConfirmationType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Specifies whether to confirm documents prior to processing a shipment with the ELECTRONIC_TRADE_DOCUMENTS special service.
 * @subpackage Enumerations
 */
class EtdConfirmationType
{
    /**
     * Constant for value 'CONFIRMED'
     * @return string 'CONFIRMED'
     */
    const VALUE_CONFIRMED = 'CONFIRMED';
    /**
     * Constant for value 'DEFERRED'
     * @return string 'DEFERRED'
     */
    const VALUE_DEFERRED = 'DEFERRED';
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
     * @uses self::VALUE_CONFIRMED
     * @uses self::VALUE_DEFERRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONFIRMED,
            self::VALUE_DEFERRED,
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
