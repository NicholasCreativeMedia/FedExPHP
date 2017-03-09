<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocTabContentBarcoded StructType
 * @subpackage Structs
 */
class DocTabContentBarcoded extends AbstractStructBase
{
    /**
     * The Symbology
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Symbology;
    /**
     * The Specification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\DocTabZoneSpecification
     */
    public $Specification;
    /**
     * Constructor method for DocTabContentBarcoded
     * @uses DocTabContentBarcoded::setSymbology()
     * @uses DocTabContentBarcoded::setSpecification()
     * @param string $symbology
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\DocTabZoneSpecification $specification
     */
    public function __construct($symbology = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\DocTabZoneSpecification $specification = null)
    {
        $this
            ->setSymbology($symbology)
            ->setSpecification($specification);
    }
    /**
     * Get Symbology value
     * @return string|null
     */
    public function getSymbology()
    {
        return $this->Symbology;
    }
    /**
     * Set Symbology value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\BarcodeSymbologyType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\BarcodeSymbologyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $symbology
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DocTabContentBarcoded
     */
    public function setSymbology($symbology = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\BarcodeSymbologyType::valueIsValid($symbology)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $symbology, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\BarcodeSymbologyType::getValidValues())), __LINE__);
        }
        $this->Symbology = $symbology;
        return $this;
    }
    /**
     * Get Specification value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DocTabZoneSpecification|null
     */
    public function getSpecification()
    {
        return $this->Specification;
    }
    /**
     * Set Specification value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\DocTabZoneSpecification $specification
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DocTabContentBarcoded
     */
    public function setSpecification(\NicholasCreativeMedia\FedExPHP\Rate\StructType\DocTabZoneSpecification $specification = null)
    {
        $this->Specification = $specification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DocTabContentBarcoded
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
