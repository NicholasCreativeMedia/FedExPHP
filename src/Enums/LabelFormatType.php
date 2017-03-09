<?php

namespace NicholasCreativeMedia\FedExPHP\Enums;

/**
 * This class stands for LabelFormatType Enums
 * @subpackage Enumerations
 */
class LabelFormatType
{
    /**
     * Constant for value 'COMMON2D'
     * @return string 'COMMON2D'
     */
    const VALUE_COMMON_2_D = 'COMMON2D';
    /**
     * Constant for value 'FEDEX_FREIGHT_STRAIGHT_BILL_OF_LADING'
     * @return string 'FEDEX_FREIGHT_STRAIGHT_BILL_OF_LADING'
     */
    const VALUE_FEDEX_FREIGHT_STRAIGHT_BILL_OF_LADING = 'FEDEX_FREIGHT_STRAIGHT_BILL_OF_LADING';
    /**
     * Constant for value 'LABEL_DATA_ONLY'
     * @return string 'LABEL_DATA_ONLY'
     */
    const VALUE_LABEL_DATA_ONLY = 'LABEL_DATA_ONLY';
    /**
     * Constant for value 'VICS_BILL_OF_LADING'
     * @return string 'VICS_BILL_OF_LADING'
     */
    const VALUE_VICS_BILL_OF_LADING = 'VICS_BILL_OF_LADING';
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
     * @uses self::VALUE_COMMON_2_D
     * @uses self::VALUE_FEDEX_FREIGHT_STRAIGHT_BILL_OF_LADING
     * @uses self::VALUE_LABEL_DATA_ONLY
     * @uses self::VALUE_VICS_BILL_OF_LADING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMMON_2_D,
            self::VALUE_FEDEX_FREIGHT_STRAIGHT_BILL_OF_LADING,
            self::VALUE_LABEL_DATA_ONLY,
            self::VALUE_VICS_BILL_OF_LADING,
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
