<?php

namespace NicholasCreativeMedia\FedExPHP\Track\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackChargeDetail StructType
 * @subpackage Structs
 */
class TrackChargeDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The ChargeAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Track\StructType\Money
     */
    public $ChargeAmount;
    /**
     * Constructor method for TrackChargeDetail
     * @uses TrackChargeDetail::setType()
     * @uses TrackChargeDetail::setChargeAmount()
     * @param string $type
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Money $chargeAmount
     */
    public function __construct($type = null, \NicholasCreativeMedia\FedExPHP\Track\StructType\Money $chargeAmount = null)
    {
        $this
            ->setType($type)
            ->setChargeAmount($chargeAmount);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackChargeDetailType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackChargeDetailType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackChargeDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackChargeDetailType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackChargeDetailType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ChargeAmount value
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\Money|null
     */
    public function getChargeAmount()
    {
        return $this->ChargeAmount;
    }
    /**
     * Set ChargeAmount value
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Money $chargeAmount
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackChargeDetail
     */
    public function setChargeAmount(\NicholasCreativeMedia\FedExPHP\Track\StructType\Money $chargeAmount = null)
    {
        $this->ChargeAmount = $chargeAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackChargeDetail
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
