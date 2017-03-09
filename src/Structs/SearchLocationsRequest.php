<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchLocationsRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:SearchLocationsRequest
 * @subpackage Structs
 */
class SearchLocationsRequest extends AbstractStructBase
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
     * The EffectiveDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EffectiveDate;
    /**
     * The LocationsSearchCriterion
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the criterion that may be used to search for FedEx locations.
     * - minOccurs: 0
     * @var string
     */
    public $LocationsSearchCriterion;
    /**
     * The UniqueTrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: Tracking number to be used when searching for locations. This tracking number, along with other location search constraints, help to narrow the search for locations.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\UniqueTrackingNumber
     */
    public $UniqueTrackingNumber;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $Address;
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumber;
    /**
     * The GeographicCoordinates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GeographicCoordinates;
    /**
     * The MultipleMatchesAction
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the criterion to be used to return location results when there are mutiple matches.
     * - minOccurs: 0
     * @var string
     */
    public $MultipleMatchesAction;
    /**
     * The SortDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details on how the location search results be sorted in the reply.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\LocationSortDetail
     */
    public $SortDetail;
    /**
     * The Constraints
     * Meta informations extracted from the WSDL
     * - documentation: Contraints to be applied to location attributes.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints
     */
    public $Constraints;
    /**
     * Constructor method for SearchLocationsRequest
     * @uses SearchLocationsRequest::setWebAuthenticationDetail()
     * @uses SearchLocationsRequest::setClientDetail()
     * @uses SearchLocationsRequest::setVersion()
     * @uses SearchLocationsRequest::setTransactionDetail()
     * @uses SearchLocationsRequest::setEffectiveDate()
     * @uses SearchLocationsRequest::setLocationsSearchCriterion()
     * @uses SearchLocationsRequest::setUniqueTrackingNumber()
     * @uses SearchLocationsRequest::setAddress()
     * @uses SearchLocationsRequest::setPhoneNumber()
     * @uses SearchLocationsRequest::setGeographicCoordinates()
     * @uses SearchLocationsRequest::setMultipleMatchesAction()
     * @uses SearchLocationsRequest::setSortDetail()
     * @uses SearchLocationsRequest::setConstraints()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $effectiveDate
     * @param string $locationsSearchCriterion
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UniqueTrackingNumber $uniqueTrackingNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $address
     * @param string $phoneNumber
     * @param string $geographicCoordinates
     * @param string $multipleMatchesAction
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LocationSortDetail $sortDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints $constraints
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $effectiveDate = null, $locationsSearchCriterion = null, \NicholasCreativeMedia\FedExPHP\Structs\UniqueTrackingNumber $uniqueTrackingNumber = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $address = null, $phoneNumber = null, $geographicCoordinates = null, $multipleMatchesAction = null, \NicholasCreativeMedia\FedExPHP\Structs\LocationSortDetail $sortDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints $constraints = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setEffectiveDate($effectiveDate)
            ->setLocationsSearchCriterion($locationsSearchCriterion)
            ->setUniqueTrackingNumber($uniqueTrackingNumber)
            ->setAddress($address)
            ->setPhoneNumber($phoneNumber)
            ->setGeographicCoordinates($geographicCoordinates)
            ->setMultipleMatchesAction($multipleMatchesAction)
            ->setSortDetail($sortDetail)
            ->setConstraints($constraints);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationsRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationsRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationsRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationsRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationsRequest
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        return $this;
    }
    /**
     * Get LocationsSearchCriterion value
     * @return string|null
     */
    public function getLocationsSearchCriterion()
    {
        return $this->LocationsSearchCriterion;
    }
    /**
     * Set LocationsSearchCriterion value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationsSearchCriteriaType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationsSearchCriteriaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $locationsSearchCriterion
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationsRequest
     */
    public function setLocationsSearchCriterion($locationsSearchCriterion = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\LocationsSearchCriteriaType::valueIsValid($locationsSearchCriterion)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $locationsSearchCriterion, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LocationsSearchCriteriaType::getValidValues())), __LINE__);
        }
        $this->LocationsSearchCriterion = $locationsSearchCriterion;
        return $this;
    }
    /**
     * Get UniqueTrackingNumber value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UniqueTrackingNumber|null
     */
    public function getUniqueTrackingNumber()
    {
        return $this->UniqueTrackingNumber;
    }
    /**
     * Set UniqueTrackingNumber value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\UniqueTrackingNumber $uniqueTrackingNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationsRequest
     */
    public function setUniqueTrackingNumber(\NicholasCreativeMedia\FedExPHP\Structs\UniqueTrackingNumber $uniqueTrackingNumber = null)
    {
        $this->UniqueTrackingNumber = $uniqueTrackingNumber;
        return $this;
    }
    /**
     * Get Address value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $address
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationsRequest
     */
    public function setAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param string $phoneNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationsRequest
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get GeographicCoordinates value
     * @return string|null
     */
    public function getGeographicCoordinates()
    {
        return $this->GeographicCoordinates;
    }
    /**
     * Set GeographicCoordinates value
     * @param string $geographicCoordinates
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationsRequest
     */
    public function setGeographicCoordinates($geographicCoordinates = null)
    {
        // validation for constraint: string
        if (!is_null($geographicCoordinates) && !is_string($geographicCoordinates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($geographicCoordinates)), __LINE__);
        }
        $this->GeographicCoordinates = $geographicCoordinates;
        return $this;
    }
    /**
     * Get MultipleMatchesAction value
     * @return string|null
     */
    public function getMultipleMatchesAction()
    {
        return $this->MultipleMatchesAction;
    }
    /**
     * Set MultipleMatchesAction value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\MultipleMatchesActionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\MultipleMatchesActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $multipleMatchesAction
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationsRequest
     */
    public function setMultipleMatchesAction($multipleMatchesAction = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\MultipleMatchesActionType::valueIsValid($multipleMatchesAction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $multipleMatchesAction, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\MultipleMatchesActionType::getValidValues())), __LINE__);
        }
        $this->MultipleMatchesAction = $multipleMatchesAction;
        return $this;
    }
    /**
     * Get SortDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationSortDetail|null
     */
    public function getSortDetail()
    {
        return $this->SortDetail;
    }
    /**
     * Set SortDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LocationSortDetail $sortDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationsRequest
     */
    public function setSortDetail(\NicholasCreativeMedia\FedExPHP\Structs\LocationSortDetail $sortDetail = null)
    {
        $this->SortDetail = $sortDetail;
        return $this;
    }
    /**
     * Get Constraints value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints|null
     */
    public function getConstraints()
    {
        return $this->Constraints;
    }
    /**
     * Set Constraints value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints $constraints
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationsRequest
     */
    public function setConstraints(\NicholasCreativeMedia\FedExPHP\Structs\SearchLocationConstraints $constraints = null)
    {
        $this->Constraints = $constraints;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SearchLocationsRequest
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
