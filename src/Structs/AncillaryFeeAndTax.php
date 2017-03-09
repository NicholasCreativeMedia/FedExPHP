<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryFeeAndTax Structs
 * @subpackage Structs
 */
class AncillaryFeeAndTax extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $Amount;
    /**
     * Constructor method for AncillaryFeeAndTax
     * @uses AncillaryFeeAndTax::setType()
     * @uses AncillaryFeeAndTax::setDescription()
     * @uses AncillaryFeeAndTax::setAmount()
     * @param string $type
     * @param string $description
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $amount
     */
    public function __construct($type = null, $description = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $amount = null)
    {
        $this
            ->setType($type)
            ->setDescription($description)
            ->setAmount($amount);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\AncillaryFeeAndTaxType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\AncillaryFeeAndTaxType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AncillaryFeeAndTax
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\AncillaryFeeAndTaxType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\AncillaryFeeAndTaxType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AncillaryFeeAndTax
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
     * Get Amount value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $amount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AncillaryFeeAndTax
     */
    public function setAmount(\NicholasCreativeMedia\FedExPHP\Structs\Money $amount = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AncillaryFeeAndTax
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
