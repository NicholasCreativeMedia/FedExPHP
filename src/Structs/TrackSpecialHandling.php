<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackSpecialHandling Structs
 * @subpackage Structs
 */
class TrackSpecialHandling extends AbstractStructBase
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
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * Constructor method for TrackSpecialHandling
     * @uses TrackSpecialHandling::setType()
     * @uses TrackSpecialHandling::setDescription()
     * @uses TrackSpecialHandling::setPaymentType()
     * @param string $type
     * @param string $description
     * @param string $paymentType
     */
    public function __construct($type = null, $description = null, $paymentType = null)
    {
        $this
            ->setType($type)
            ->setDescription($description)
            ->setPaymentType($paymentType);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackSpecialHandlingType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackSpecialHandlingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialHandling
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackSpecialHandlingType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackSpecialHandlingType::getValidValues())), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialHandling
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
     * Get PaymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackPaymentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackPaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialHandling
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackPaymentType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackPaymentType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialHandling
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
