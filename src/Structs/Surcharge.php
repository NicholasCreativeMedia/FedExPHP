<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Surcharge Structs
 * @subpackage Structs
 */
class Surcharge extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $Amount;
    /**
     * The SurchargeType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SurchargeType;
    /**
     * The Level
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Level;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for Surcharge
     * @uses Surcharge::setAmount()
     * @uses Surcharge::setSurchargeType()
     * @uses Surcharge::setLevel()
     * @uses Surcharge::setDescription()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $amount
     * @param string $surchargeType
     * @param string $level
     * @param string $description
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\Money $amount = null, $surchargeType = null, $level = null, $description = null)
    {
        $this
            ->setAmount($amount)
            ->setSurchargeType($surchargeType)
            ->setLevel($level)
            ->setDescription($description);
    }
    /**
     * Get Amount value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $amount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Surcharge
     */
    public function setAmount(\NicholasCreativeMedia\FedExPHP\Structs\Money $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get SurchargeType value
     * @return string|null
     */
    public function getSurchargeType()
    {
        return $this->SurchargeType;
    }
    /**
     * Set SurchargeType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\SurchargeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\SurchargeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $surchargeType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Surcharge
     */
    public function setSurchargeType($surchargeType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\SurchargeType::valueIsValid($surchargeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $surchargeType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\SurchargeType::getValidValues())), __LINE__);
        }
        $this->SurchargeType = $surchargeType;
        return $this;
    }
    /**
     * Get Level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\SurchargeLevelType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\SurchargeLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $level
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Surcharge
     */
    public function setLevel($level = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\SurchargeLevelType::valueIsValid($level)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $level, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\SurchargeLevelType::getValidValues())), __LINE__);
        }
        $this->Level = $level;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Surcharge
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Surcharge
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
