<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payment StructType
 * @subpackage Structs
 */
class Payment extends AbstractStructBase
{
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PaymentType;
    /**
     * The Payor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Payor
     */
    public $Payor;
    /**
     * Constructor method for Payment
     * @uses Payment::setPaymentType()
     * @uses Payment::setPayor()
     * @param string $paymentType
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Payor $payor
     */
    public function __construct($paymentType = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\Payor $payor = null)
    {
        $this
            ->setPaymentType($paymentType)
            ->setPayor($payor);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\PaymentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\PaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Payment
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\PaymentType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\PaymentType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get Payor value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Payor|null
     */
    public function getPayor()
    {
        return $this->Payor;
    }
    /**
     * Set Payor value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Payor $payor
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Payment
     */
    public function setPayor(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Payor $payor = null)
    {
        $this->Payor = $payor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Payment
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
