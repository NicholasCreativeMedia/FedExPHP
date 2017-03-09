<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Surcharge StructType
 * @subpackage Structs
 */
class Surcharge extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
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
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $amount
     * @param string $surchargeType
     * @param string $level
     * @param string $description
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $amount = null, $surchargeType = null, $level = null, $description = null)
    {
        $this
            ->setAmount($amount)
            ->setSurchargeType($surchargeType)
            ->setLevel($level)
            ->setDescription($description);
    }
    /**
     * Get Amount value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $amount
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge
     */
    public function setAmount(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $amount = null)
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
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SurchargeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SurchargeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $surchargeType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge
     */
    public function setSurchargeType($surchargeType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\SurchargeType::valueIsValid($surchargeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $surchargeType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SurchargeType::getValidValues())), __LINE__);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SurchargeLevelType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SurchargeLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $level
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge
     */
    public function setLevel($level = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\SurchargeLevelType::valueIsValid($level)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $level, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SurchargeLevelType::getValidValues())), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge
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
