<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:CreatePickupRequest
 * @subpackage Structs
 */
class CreatePickupRequest extends AbstractStructBase
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
     * The AssociatedAccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount
     */
    public $AssociatedAccountNumber;
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the tracking number to be used for processing a pickup for a return shipment.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * The OriginDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public $OriginDetail;
    /**
     * The PickupServiceCategory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PickupServiceCategory;
    /**
     * The FreightPickupDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupDetail
     */
    public $FreightPickupDetail;
    /**
     * The ExpressFreightDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightPickupDetail
     */
    public $ExpressFreightDetail;
    /**
     * The PackageCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PackageCount;
    /**
     * The TotalWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $TotalWeight;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The OversizePackageCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OversizePackageCount;
    /**
     * The Remarks
     * Meta informations extracted from the WSDL
     * - documentation: This field is being deprecated and will not be removed in the June 2014 load.
     * - minOccurs: 0
     * @var string
     */
    public $Remarks;
    /**
     * The CommodityDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CommodityDescription;
    /**
     * The CountryRelationship
     * Meta informations extracted from the WSDL
     * - documentation: Describes the country relationship (domestic and/or international) among the shipments being picked up.
     * - minOccurs: 0
     * @var string
     */
    public $CountryRelationship;
    /**
     * Constructor method for CreatePickupRequest
     * @uses CreatePickupRequest::setWebAuthenticationDetail()
     * @uses CreatePickupRequest::setClientDetail()
     * @uses CreatePickupRequest::setVersion()
     * @uses CreatePickupRequest::setTransactionDetail()
     * @uses CreatePickupRequest::setAssociatedAccountNumber()
     * @uses CreatePickupRequest::setTrackingNumber()
     * @uses CreatePickupRequest::setOriginDetail()
     * @uses CreatePickupRequest::setPickupServiceCategory()
     * @uses CreatePickupRequest::setFreightPickupDetail()
     * @uses CreatePickupRequest::setExpressFreightDetail()
     * @uses CreatePickupRequest::setPackageCount()
     * @uses CreatePickupRequest::setTotalWeight()
     * @uses CreatePickupRequest::setCarrierCode()
     * @uses CreatePickupRequest::setOversizePackageCount()
     * @uses CreatePickupRequest::setRemarks()
     * @uses CreatePickupRequest::setCommodityDescription()
     * @uses CreatePickupRequest::setCountryRelationship()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount $associatedAccountNumber
     * @param string $trackingNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail $originDetail
     * @param string $pickupServiceCategory
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupDetail $freightPickupDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightPickupDetail $expressFreightDetail
     * @param int $packageCount
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight
     * @param string $carrierCode
     * @param int $oversizePackageCount
     * @param string $remarks
     * @param string $commodityDescription
     * @param string $countryRelationship
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount $associatedAccountNumber = null, $trackingNumber = null, \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail $originDetail = null, $pickupServiceCategory = null, \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupDetail $freightPickupDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightPickupDetail $expressFreightDetail = null, $packageCount = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight = null, $carrierCode = null, $oversizePackageCount = null, $remarks = null, $commodityDescription = null, $countryRelationship = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setAssociatedAccountNumber($associatedAccountNumber)
            ->setTrackingNumber($trackingNumber)
            ->setOriginDetail($originDetail)
            ->setPickupServiceCategory($pickupServiceCategory)
            ->setFreightPickupDetail($freightPickupDetail)
            ->setExpressFreightDetail($expressFreightDetail)
            ->setPackageCount($packageCount)
            ->setTotalWeight($totalWeight)
            ->setCarrierCode($carrierCode)
            ->setOversizePackageCount($oversizePackageCount)
            ->setRemarks($remarks)
            ->setCommodityDescription($commodityDescription)
            ->setCountryRelationship($countryRelationship);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get AssociatedAccountNumber value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount|null
     */
    public function getAssociatedAccountNumber()
    {
        return $this->AssociatedAccountNumber;
    }
    /**
     * Set AssociatedAccountNumber value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount $associatedAccountNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
     */
    public function setAssociatedAccountNumber(\NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount $associatedAccountNumber = null)
    {
        $this->AssociatedAccountNumber = $associatedAccountNumber;
        return $this;
    }
    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumber)), __LINE__);
        }
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Get OriginDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail|null
     */
    public function getOriginDetail()
    {
        return $this->OriginDetail;
    }
    /**
     * Set OriginDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail $originDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
     */
    public function setOriginDetail(\NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail $originDetail = null)
    {
        $this->OriginDetail = $originDetail;
        return $this;
    }
    /**
     * Get PickupServiceCategory value
     * @return string|null
     */
    public function getPickupServiceCategory()
    {
        return $this->PickupServiceCategory;
    }
    /**
     * Set PickupServiceCategory value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupServiceCategoryType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupServiceCategoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pickupServiceCategory
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
     */
    public function setPickupServiceCategory($pickupServiceCategory = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PickupServiceCategoryType::valueIsValid($pickupServiceCategory)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pickupServiceCategory, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PickupServiceCategoryType::getValidValues())), __LINE__);
        }
        $this->PickupServiceCategory = $pickupServiceCategory;
        return $this;
    }
    /**
     * Get FreightPickupDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupDetail|null
     */
    public function getFreightPickupDetail()
    {
        return $this->FreightPickupDetail;
    }
    /**
     * Set FreightPickupDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupDetail $freightPickupDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
     */
    public function setFreightPickupDetail(\NicholasCreativeMedia\FedExPHP\Structs\FreightPickupDetail $freightPickupDetail = null)
    {
        $this->FreightPickupDetail = $freightPickupDetail;
        return $this;
    }
    /**
     * Get ExpressFreightDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightPickupDetail|null
     */
    public function getExpressFreightDetail()
    {
        return $this->ExpressFreightDetail;
    }
    /**
     * Set ExpressFreightDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightPickupDetail $expressFreightDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
     */
    public function setExpressFreightDetail(\NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightPickupDetail $expressFreightDetail = null)
    {
        $this->ExpressFreightDetail = $expressFreightDetail;
        return $this;
    }
    /**
     * Get PackageCount value
     * @return int|null
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    /**
     * Set PackageCount value
     * @param int $packageCount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
     */
    public function setPackageCount($packageCount = null)
    {
        // validation for constraint: int
        if (!is_null($packageCount) && !is_numeric($packageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packageCount)), __LINE__);
        }
        $this->PackageCount = $packageCount;
        return $this;
    }
    /**
     * Get TotalWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    /**
     * Set TotalWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
     */
    public function setTotalWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight = null)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get OversizePackageCount value
     * @return int|null
     */
    public function getOversizePackageCount()
    {
        return $this->OversizePackageCount;
    }
    /**
     * Set OversizePackageCount value
     * @param int $oversizePackageCount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
     */
    public function setOversizePackageCount($oversizePackageCount = null)
    {
        // validation for constraint: int
        if (!is_null($oversizePackageCount) && !is_numeric($oversizePackageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($oversizePackageCount)), __LINE__);
        }
        $this->OversizePackageCount = $oversizePackageCount;
        return $this;
    }
    /**
     * Get Remarks value
     * @return string|null
     */
    public function getRemarks()
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param string $remarks
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
     */
    public function setRemarks($remarks = null)
    {
        // validation for constraint: string
        if (!is_null($remarks) && !is_string($remarks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remarks)), __LINE__);
        }
        $this->Remarks = $remarks;
        return $this;
    }
    /**
     * Get CommodityDescription value
     * @return string|null
     */
    public function getCommodityDescription()
    {
        return $this->CommodityDescription;
    }
    /**
     * Set CommodityDescription value
     * @param string $commodityDescription
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
     */
    public function setCommodityDescription($commodityDescription = null)
    {
        // validation for constraint: string
        if (!is_null($commodityDescription) && !is_string($commodityDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commodityDescription)), __LINE__);
        }
        $this->CommodityDescription = $commodityDescription;
        return $this;
    }
    /**
     * Get CountryRelationship value
     * @return string|null
     */
    public function getCountryRelationship()
    {
        return $this->CountryRelationship;
    }
    /**
     * Set CountryRelationship value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CountryRelationshipType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CountryRelationshipType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $countryRelationship
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
     */
    public function setCountryRelationship($countryRelationship = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CountryRelationshipType::valueIsValid($countryRelationship)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $countryRelationship, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CountryRelationshipType::getValidValues())), __LINE__);
        }
        $this->CountryRelationship = $countryRelationship;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupRequest
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
