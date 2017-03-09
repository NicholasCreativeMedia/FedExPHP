<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for LabelMaskableDataType Enums
 * Meta informations extracted from the WSDL
 * - documentation: Names for data elements / areas which may be suppressed from printing on labels.
 * @subpackage Enumerations
 */
class LabelMaskableDataType
{
    /**
     * Constant for value 'CUSTOMS_VALUE'
     * @return string 'CUSTOMS_VALUE'
     */
    const VALUE_CUSTOMS_VALUE = 'CUSTOMS_VALUE';
    /**
     * Constant for value 'DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER'
     * @return string 'DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER'
     */
    const VALUE_DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER = 'DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER';
    /**
     * Constant for value 'SECONDARY_BARCODE'
     * @return string 'SECONDARY_BARCODE'
     */
    const VALUE_SECONDARY_BARCODE = 'SECONDARY_BARCODE';
    /**
     * Constant for value 'SHIPPER_ACCOUNT_NUMBER'
     * @return string 'SHIPPER_ACCOUNT_NUMBER'
     */
    const VALUE_SHIPPER_ACCOUNT_NUMBER = 'SHIPPER_ACCOUNT_NUMBER';
    /**
     * Constant for value 'TERMS_AND_CONDITIONS'
     * @return string 'TERMS_AND_CONDITIONS'
     */
    const VALUE_TERMS_AND_CONDITIONS = 'TERMS_AND_CONDITIONS';
    /**
     * Constant for value 'TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER'
     * @return string 'TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER'
     */
    const VALUE_TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER = 'TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER';
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
     * @uses self::VALUE_CUSTOMS_VALUE
     * @uses self::VALUE_DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER
     * @uses self::VALUE_SECONDARY_BARCODE
     * @uses self::VALUE_SHIPPER_ACCOUNT_NUMBER
     * @uses self::VALUE_TERMS_AND_CONDITIONS
     * @uses self::VALUE_TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CUSTOMS_VALUE,
            self::VALUE_DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER,
            self::VALUE_SECONDARY_BARCODE,
            self::VALUE_SHIPPER_ACCOUNT_NUMBER,
            self::VALUE_TERMS_AND_CONDITIONS,
            self::VALUE_TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER,
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
