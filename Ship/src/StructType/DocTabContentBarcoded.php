<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocTabContentBarcoded StructType
 * @subpackage Structs
 */
class DocTabContentBarcoded extends AbstractStructBase
{
    /**
     * The Specification
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabZoneSpecification
     */
    public $Specification;
    /**
     * The Symbology
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Symbology;
    /**
     * Constructor method for DocTabContentBarcoded
     * @uses DocTabContentBarcoded::setSpecification()
     * @uses DocTabContentBarcoded::setSymbology()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabZoneSpecification $specification
     * @param string $symbology
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabZoneSpecification $specification = null, $symbology = null)
    {
        $this
            ->setSpecification($specification)
            ->setSymbology($symbology);
    }
    /**
     * Get Specification value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabZoneSpecification
     */
    public function getSpecification()
    {
        return $this->Specification;
    }
    /**
     * Set Specification value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabZoneSpecification $specification
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabContentBarcoded
     */
    public function setSpecification(\NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabZoneSpecification $specification = null)
    {
        $this->Specification = $specification;
        return $this;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\BarcodeSymbologyType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\BarcodeSymbologyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $symbology
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabContentBarcoded
     */
    public function setSymbology($symbology = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\BarcodeSymbologyType::valueIsValid($symbology)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $symbology, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\BarcodeSymbologyType::getValidValues())), __LINE__);
        }
        $this->Symbology = $symbology;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabContentBarcoded
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
