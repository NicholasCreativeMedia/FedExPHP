<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressValidationRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:AddressValidationRequest
 * @subpackage Structs
 */
class AddressValidationRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public $ClientDetail;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The InEffectAsOfTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InEffectAsOfTimestamp;
    /**
     * The AddressesToValidate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AddressToValidate[]
     */
    public $AddressesToValidate;
    /**
     * Constructor method for AddressValidationRequest
     * @uses AddressValidationRequest::setWebAuthenticationDetail()
     * @uses AddressValidationRequest::setClientDetail()
     * @uses AddressValidationRequest::setVersion()
     * @uses AddressValidationRequest::setTransactionDetail()
     * @uses AddressValidationRequest::setInEffectAsOfTimestamp()
     * @uses AddressValidationRequest::setAddressesToValidate()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $inEffectAsOfTimestamp
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AddressToValidate[] $addressesToValidate
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $inEffectAsOfTimestamp = null, array $addressesToValidate = array())
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setInEffectAsOfTimestamp($inEffectAsOfTimestamp)
            ->setAddressesToValidate($addressesToValidate);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationRequest
     */
    public function setWebAuthenticationDetail(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationRequest
     */
    public function setClientDetail(\NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    /**
     * Get Version value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationRequest
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get InEffectAsOfTimestamp value
     * @return string|null
     */
    public function getInEffectAsOfTimestamp()
    {
        return $this->InEffectAsOfTimestamp;
    }
    /**
     * Set InEffectAsOfTimestamp value
     * @param string $inEffectAsOfTimestamp
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationRequest
     */
    public function setInEffectAsOfTimestamp($inEffectAsOfTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($inEffectAsOfTimestamp) && !is_string($inEffectAsOfTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inEffectAsOfTimestamp)), __LINE__);
        }
        $this->InEffectAsOfTimestamp = $inEffectAsOfTimestamp;
        return $this;
    }
    /**
     * Get AddressesToValidate value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressToValidate[]|null
     */
    public function getAddressesToValidate()
    {
        return $this->AddressesToValidate;
    }
    /**
     * Set AddressesToValidate value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AddressToValidate[] $addressesToValidate
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationRequest
     */
    public function setAddressesToValidate(array $addressesToValidate = array())
    {
        foreach ($addressesToValidate as $addressValidationRequestAddressesToValidateItem) {
            // validation for constraint: itemType
            if (!$addressValidationRequestAddressesToValidateItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\AddressToValidate) {
                throw new \InvalidArgumentException(sprintf('The AddressesToValidate property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AddressToValidate, "%s" given', is_object($addressValidationRequestAddressesToValidateItem) ? get_class($addressValidationRequestAddressesToValidateItem) : gettype($addressValidationRequestAddressesToValidateItem)), __LINE__);
            }
        }
        $this->AddressesToValidate = $addressesToValidate;
        return $this;
    }
    /**
     * Add item to AddressesToValidate value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AddressToValidate $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationRequest
     */
    public function addToAddressesToValidate(\NicholasCreativeMedia\FedExPHP\Structs\AddressToValidate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\AddressToValidate) {
            throw new \InvalidArgumentException(sprintf('The AddressesToValidate property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AddressToValidate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressesToValidate[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationRequest
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
