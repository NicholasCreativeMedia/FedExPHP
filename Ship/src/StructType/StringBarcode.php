<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StringBarcode StructType
 * Meta informations extracted from the WSDL
 * - documentation: Each instance of this data type represents a barcode whose content must be represented as ASCII text (i.e. not binary data).
 * @subpackage Structs
 */
class StringBarcode extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: The kind of barcode data in this instance.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: The data content of this instance.
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * Constructor method for StringBarcode
     * @uses StringBarcode::setType()
     * @uses StringBarcode::setValue()
     * @param string $type
     * @param string $value
     */
    public function __construct($type = null, $value = null)
    {
        $this
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\StringBarcodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\StringBarcodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\StringBarcode
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\StringBarcodeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\StringBarcodeType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\StringBarcode
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\StringBarcode
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
