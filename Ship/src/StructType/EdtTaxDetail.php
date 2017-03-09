<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EdtTaxDetail StructType
 * @subpackage Structs
 */
class EdtTaxDetail extends AbstractStructBase
{
    /**
     * The TaxType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TaxType;
    /**
     * The EffectiveDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EffectiveDate;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The TaxableValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $TaxableValue;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Formula
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Formula;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $Amount;
    /**
     * Constructor method for EdtTaxDetail
     * @uses EdtTaxDetail::setTaxType()
     * @uses EdtTaxDetail::setEffectiveDate()
     * @uses EdtTaxDetail::setName()
     * @uses EdtTaxDetail::setTaxableValue()
     * @uses EdtTaxDetail::setDescription()
     * @uses EdtTaxDetail::setFormula()
     * @uses EdtTaxDetail::setAmount()
     * @param string $taxType
     * @param string $effectiveDate
     * @param string $name
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $taxableValue
     * @param string $description
     * @param string $formula
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $amount
     */
    public function __construct($taxType = null, $effectiveDate = null, $name = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $taxableValue = null, $description = null, $formula = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $amount = null)
    {
        $this
            ->setTaxType($taxType)
            ->setEffectiveDate($effectiveDate)
            ->setName($name)
            ->setTaxableValue($taxableValue)
            ->setDescription($description)
            ->setFormula($formula)
            ->setAmount($amount);
    }
    /**
     * Get TaxType value
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }
    /**
     * Set TaxType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\EdtTaxType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\EdtTaxType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $taxType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtTaxDetail
     */
    public function setTaxType($taxType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\EdtTaxType::valueIsValid($taxType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $taxType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\EdtTaxType::getValidValues())), __LINE__);
        }
        $this->TaxType = $taxType;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtTaxDetail
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtTaxDetail
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get TaxableValue value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getTaxableValue()
    {
        return $this->TaxableValue;
    }
    /**
     * Set TaxableValue value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $taxableValue
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtTaxDetail
     */
    public function setTaxableValue(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $taxableValue = null)
    {
        $this->TaxableValue = $taxableValue;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtTaxDetail
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Formula value
     * @return string|null
     */
    public function getFormula()
    {
        return $this->Formula;
    }
    /**
     * Set Formula value
     * @param string $formula
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtTaxDetail
     */
    public function setFormula($formula = null)
    {
        // validation for constraint: string
        if (!is_null($formula) && !is_string($formula)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formula)), __LINE__);
        }
        $this->Formula = $formula;
        return $this;
    }
    /**
     * Get Amount value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $amount
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtTaxDetail
     */
    public function setAmount(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtTaxDetail
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
