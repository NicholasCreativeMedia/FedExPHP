<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\EnumType;

/**
 * This class stands for CodCollectionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the type of funds FedEx should collect upon shipment delivery.
 * @subpackage Enumerations
 */
class CodCollectionType
{
    /**
     * Constant for value 'ANY'
     * @return string 'ANY'
     */
    const VALUE_ANY = 'ANY';
    /**
     * Constant for value 'CASH'
     * @return string 'CASH'
     */
    const VALUE_CASH = 'CASH';
    /**
     * Constant for value 'COMPANY_CHECK'
     * @return string 'COMPANY_CHECK'
     */
    const VALUE_COMPANY_CHECK = 'COMPANY_CHECK';
    /**
     * Constant for value 'GUARANTEED_FUNDS'
     * @return string 'GUARANTEED_FUNDS'
     */
    const VALUE_GUARANTEED_FUNDS = 'GUARANTEED_FUNDS';
    /**
     * Constant for value 'PERSONAL_CHECK'
     * @return string 'PERSONAL_CHECK'
     */
    const VALUE_PERSONAL_CHECK = 'PERSONAL_CHECK';
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
     * @uses self::VALUE_ANY
     * @uses self::VALUE_CASH
     * @uses self::VALUE_COMPANY_CHECK
     * @uses self::VALUE_GUARANTEED_FUNDS
     * @uses self::VALUE_PERSONAL_CHECK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ANY,
            self::VALUE_CASH,
            self::VALUE_COMPANY_CHECK,
            self::VALUE_GUARANTEED_FUNDS,
            self::VALUE_PERSONAL_CHECK,
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
