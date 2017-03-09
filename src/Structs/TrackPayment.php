<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackPayment Structs
 * @subpackage Structs
 */
class TrackPayment extends AbstractStructBase
{
    /**
     * The Classification
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the classification of the charges being paid.
     * - minOccurs: 0
     * @var string
     */
    public $Classification;
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
     * Constructor method for TrackPayment
     * @uses TrackPayment::setClassification()
     * @uses TrackPayment::setType()
     * @uses TrackPayment::setDescription()
     * @param string $classification
     * @param string $type
     * @param string $description
     */
    public function __construct($classification = null, $type = null, $description = null)
    {
        $this
            ->setClassification($classification)
            ->setType($type)
            ->setDescription($description);
    }
    /**
     * Get Classification value
     * @return string|null
     */
    public function getClassification()
    {
        return $this->Classification;
    }
    /**
     * Set Classification value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackChargesPaymentClassificationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackChargesPaymentClassificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $classification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackPayment
     */
    public function setClassification($classification = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackChargesPaymentClassificationType::valueIsValid($classification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $classification, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackChargesPaymentClassificationType::getValidValues())), __LINE__);
        }
        $this->Classification = $classification;
        return $this;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackPaymentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackPaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackPayment
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackPaymentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackPaymentType::getValidValues())), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackPayment
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackPayment
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
