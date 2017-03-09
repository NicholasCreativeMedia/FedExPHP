<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressValidationResult Structs
 * @subpackage Structs
 */
class AddressValidationResult extends AbstractStructBase
{
    /**
     * The ClientReferenceId
     * Meta informations extracted from the WSDL
     * - documentation: The client reference id for the validated address.
     * - minOccurs: 0
     * @var string
     */
    public $ClientReferenceId;
    /**
     * The State
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the degree to SHARE service was able to cannonicalise the address provided, as per USPS standards and match it to an address already in the internal FedEx address repository.
     * - minOccurs: 0
     * @var string
     */
    public $State;
    /**
     * The Classification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Classification;
    /**
     * The EffectiveContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Contact
     */
    public $EffectiveContact;
    /**
     * The EffectiveAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $EffectiveAddress;
    /**
     * The ParsedAddressPartsDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ParsedAddressPartsDetail
     */
    public $ParsedAddressPartsDetail;
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - documentation: Additional attributes about the validated address from FedEx address respository..
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AddressAttribute[]
     */
    public $Attributes;
    /**
     * Constructor method for AddressValidationResult
     * @uses AddressValidationResult::setClientReferenceId()
     * @uses AddressValidationResult::setState()
     * @uses AddressValidationResult::setClassification()
     * @uses AddressValidationResult::setEffectiveContact()
     * @uses AddressValidationResult::setEffectiveAddress()
     * @uses AddressValidationResult::setParsedAddressPartsDetail()
     * @uses AddressValidationResult::setAttributes()
     * @param string $clientReferenceId
     * @param string $state
     * @param string $classification
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Contact $effectiveContact
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $effectiveAddress
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ParsedAddressPartsDetail $parsedAddressPartsDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AddressAttribute[] $attributes
     */
    public function __construct($clientReferenceId = null, $state = null, $classification = null, \NicholasCreativeMedia\FedExPHP\Structs\Contact $effectiveContact = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $effectiveAddress = null, \NicholasCreativeMedia\FedExPHP\Structs\ParsedAddressPartsDetail $parsedAddressPartsDetail = null, array $attributes = array())
    {
        $this
            ->setClientReferenceId($clientReferenceId)
            ->setState($state)
            ->setClassification($classification)
            ->setEffectiveContact($effectiveContact)
            ->setEffectiveAddress($effectiveAddress)
            ->setParsedAddressPartsDetail($parsedAddressPartsDetail)
            ->setAttributes($attributes);
    }
    /**
     * Get ClientReferenceId value
     * @return string|null
     */
    public function getClientReferenceId()
    {
        return $this->ClientReferenceId;
    }
    /**
     * Set ClientReferenceId value
     * @param string $clientReferenceId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult
     */
    public function setClientReferenceId($clientReferenceId = null)
    {
        // validation for constraint: string
        if (!is_null($clientReferenceId) && !is_string($clientReferenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientReferenceId)), __LINE__);
        }
        $this->ClientReferenceId = $clientReferenceId;
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\OperationalAddressStateType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\OperationalAddressStateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $state
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult
     */
    public function setState($state = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\OperationalAddressStateType::valueIsValid($state)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $state, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\OperationalAddressStateType::getValidValues())), __LINE__);
        }
        $this->State = $state;
        return $this;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\FedExAddressClassificationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\FedExAddressClassificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $classification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult
     */
    public function setClassification($classification = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\FedExAddressClassificationType::valueIsValid($classification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $classification, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\FedExAddressClassificationType::getValidValues())), __LINE__);
        }
        $this->Classification = $classification;
        return $this;
    }
    /**
     * Get EffectiveContact value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Contact|null
     */
    public function getEffectiveContact()
    {
        return $this->EffectiveContact;
    }
    /**
     * Set EffectiveContact value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Contact $effectiveContact
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult
     */
    public function setEffectiveContact(\NicholasCreativeMedia\FedExPHP\Structs\Contact $effectiveContact = null)
    {
        $this->EffectiveContact = $effectiveContact;
        return $this;
    }
    /**
     * Get EffectiveAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getEffectiveAddress()
    {
        return $this->EffectiveAddress;
    }
    /**
     * Set EffectiveAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $effectiveAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult
     */
    public function setEffectiveAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $effectiveAddress = null)
    {
        $this->EffectiveAddress = $effectiveAddress;
        return $this;
    }
    /**
     * Get ParsedAddressPartsDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedAddressPartsDetail|null
     */
    public function getParsedAddressPartsDetail()
    {
        return $this->ParsedAddressPartsDetail;
    }
    /**
     * Set ParsedAddressPartsDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ParsedAddressPartsDetail $parsedAddressPartsDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult
     */
    public function setParsedAddressPartsDetail(\NicholasCreativeMedia\FedExPHP\Structs\ParsedAddressPartsDetail $parsedAddressPartsDetail = null)
    {
        $this->ParsedAddressPartsDetail = $parsedAddressPartsDetail;
        return $this;
    }
    /**
     * Get Attributes value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressAttribute[]|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AddressAttribute[] $attributes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult
     */
    public function setAttributes(array $attributes = array())
    {
        foreach ($attributes as $addressValidationResultAttributesItem) {
            // validation for constraint: itemType
            if (!$addressValidationResultAttributesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\AddressAttribute) {
                throw new \InvalidArgumentException(sprintf('The Attributes property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AddressAttribute, "%s" given', is_object($addressValidationResultAttributesItem) ? get_class($addressValidationResultAttributesItem) : gettype($addressValidationResultAttributesItem)), __LINE__);
            }
        }
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Add item to Attributes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AddressAttribute $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult
     */
    public function addToAttributes(\NicholasCreativeMedia\FedExPHP\Structs\AddressAttribute $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\AddressAttribute) {
            throw new \InvalidArgumentException(sprintf('The Attributes property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AddressAttribute, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Attributes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult
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
