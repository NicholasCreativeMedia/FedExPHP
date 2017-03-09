<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LiabilityCoverageDetail StructType
 * @subpackage Structs
 */
class LiabilityCoverageDetail extends AbstractStructBase
{
    /**
     * The CoverageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CoverageType;
    /**
     * The CoverageAmount
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the Liability Coverage Amount. For Jan 2010 this value represents coverage amount per pound
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $CoverageAmount;
    /**
     * Constructor method for LiabilityCoverageDetail
     * @uses LiabilityCoverageDetail::setCoverageType()
     * @uses LiabilityCoverageDetail::setCoverageAmount()
     * @param string $coverageType
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $coverageAmount
     */
    public function __construct($coverageType = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $coverageAmount = null)
    {
        $this
            ->setCoverageType($coverageType)
            ->setCoverageAmount($coverageAmount);
    }
    /**
     * Get CoverageType value
     * @return string|null
     */
    public function getCoverageType()
    {
        return $this->CoverageType;
    }
    /**
     * Set CoverageType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\LiabilityCoverageType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\LiabilityCoverageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $coverageType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\LiabilityCoverageDetail
     */
    public function setCoverageType($coverageType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\LiabilityCoverageType::valueIsValid($coverageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $coverageType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\LiabilityCoverageType::getValidValues())), __LINE__);
        }
        $this->CoverageType = $coverageType;
        return $this;
    }
    /**
     * Get CoverageAmount value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getCoverageAmount()
    {
        return $this->CoverageAmount;
    }
    /**
     * Set CoverageAmount value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $coverageAmount
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\LiabilityCoverageDetail
     */
    public function setCoverageAmount(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $coverageAmount = null)
    {
        $this->CoverageAmount = $coverageAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\LiabilityCoverageDetail
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
