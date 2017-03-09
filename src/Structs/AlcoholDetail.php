<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlcoholDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies details for a package containing alcohol
 * @subpackage Structs
 */
class AlcoholDetail extends AbstractStructBase
{
    /**
     * The RecipientType
     * Meta informations extracted from the WSDL
     * - documentation: The license type that the recipient of the alcohol package.
     * - minOccurs: 0
     * @var string
     */
    public $RecipientType;
    /**
     * Constructor method for AlcoholDetail
     * @uses AlcoholDetail::setRecipientType()
     * @param string $recipientType
     */
    public function __construct($recipientType = null)
    {
        $this
            ->setRecipientType($recipientType);
    }
    /**
     * Get RecipientType value
     * @return string|null
     */
    public function getRecipientType()
    {
        return $this->RecipientType;
    }
    /**
     * Set RecipientType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\AlcoholRecipientType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\AlcoholRecipientType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $recipientType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail
     */
    public function setRecipientType($recipientType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\AlcoholRecipientType::valueIsValid($recipientType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $recipientType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\AlcoholRecipientType::getValidValues())), __LINE__);
        }
        $this->RecipientType = $recipientType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail
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
