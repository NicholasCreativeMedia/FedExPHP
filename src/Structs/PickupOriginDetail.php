<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupOriginDetail Structs
 * @subpackage Structs
 */
class PickupOriginDetail extends AbstractStructBase
{
    /**
     * The UseAccountAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $UseAccountAddress;
    /**
     * The AddressId
     * Meta informations extracted from the WSDL
     * - documentation: FedEx USE ONLY (with IVR client)
     * - minOccurs: 0
     * @var string
     */
    public $AddressId;
    /**
     * The PickupLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress
     */
    public $PickupLocation;
    /**
     * The PackageLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackageLocation;
    /**
     * The BuildingPart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BuildingPart;
    /**
     * The BuildingPartDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BuildingPartDescription;
    /**
     * The ReadyTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReadyTimestamp;
    /**
     * The CompanyCloseTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CompanyCloseTime;
    /**
     * The StayLate
     * Meta informations extracted from the WSDL
     * - documentation: FedEx IVR Only. Customer is willing to stay late for pickup.
     * - minOccurs: 0
     * @var bool
     */
    public $StayLate;
    /**
     * The PickupDateType
     * Meta informations extracted from the WSDL
     * - documentation: FedEx USE ONLY (with IVR client)
     * - minOccurs: 0
     * @var string
     */
    public $PickupDateType;
    /**
     * The LastAccessTime
     * Meta informations extracted from the WSDL
     * - documentation: FedEx IVR Only
     * - minOccurs: 0
     * @var string
     */
    public $LastAccessTime;
    /**
     * The GeographicalPostalCode
     * Meta informations extracted from the WSDL
     * - documentation: Alternate postal code tied to pickup location (European pickups)
     * - minOccurs: 0
     * @var string
     */
    public $GeographicalPostalCode;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - documentation: FedEx USE ONLY
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The DeleteLastUsed
     * Meta informations extracted from the WSDL
     * - documentation: FedEx USE ONLY (with IVR client)
     * - minOccurs: 0
     * @var bool
     */
    public $DeleteLastUsed;
    /**
     * The SuppliesRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SuppliesRequested;
    /**
     * The EarlyPickup
     * Meta informations extracted from the WSDL
     * - documentation: Applies only to Europe
     * - minOccurs: 0
     * @var bool
     */
    public $EarlyPickup;
    /**
     * Constructor method for PickupOriginDetail
     * @uses PickupOriginDetail::setUseAccountAddress()
     * @uses PickupOriginDetail::setAddressId()
     * @uses PickupOriginDetail::setPickupLocation()
     * @uses PickupOriginDetail::setPackageLocation()
     * @uses PickupOriginDetail::setBuildingPart()
     * @uses PickupOriginDetail::setBuildingPartDescription()
     * @uses PickupOriginDetail::setReadyTimestamp()
     * @uses PickupOriginDetail::setCompanyCloseTime()
     * @uses PickupOriginDetail::setStayLate()
     * @uses PickupOriginDetail::setPickupDateType()
     * @uses PickupOriginDetail::setLastAccessTime()
     * @uses PickupOriginDetail::setGeographicalPostalCode()
     * @uses PickupOriginDetail::setLocation()
     * @uses PickupOriginDetail::setDeleteLastUsed()
     * @uses PickupOriginDetail::setSuppliesRequested()
     * @uses PickupOriginDetail::setEarlyPickup()
     * @param bool $useAccountAddress
     * @param string $addressId
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $pickupLocation
     * @param string $packageLocation
     * @param string $buildingPart
     * @param string $buildingPartDescription
     * @param string $readyTimestamp
     * @param string $companyCloseTime
     * @param bool $stayLate
     * @param string $pickupDateType
     * @param string $lastAccessTime
     * @param string $geographicalPostalCode
     * @param string $location
     * @param bool $deleteLastUsed
     * @param string $suppliesRequested
     * @param bool $earlyPickup
     */
    public function __construct($useAccountAddress = null, $addressId = null, \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $pickupLocation = null, $packageLocation = null, $buildingPart = null, $buildingPartDescription = null, $readyTimestamp = null, $companyCloseTime = null, $stayLate = null, $pickupDateType = null, $lastAccessTime = null, $geographicalPostalCode = null, $location = null, $deleteLastUsed = null, $suppliesRequested = null, $earlyPickup = null)
    {
        $this
            ->setUseAccountAddress($useAccountAddress)
            ->setAddressId($addressId)
            ->setPickupLocation($pickupLocation)
            ->setPackageLocation($packageLocation)
            ->setBuildingPart($buildingPart)
            ->setBuildingPartDescription($buildingPartDescription)
            ->setReadyTimestamp($readyTimestamp)
            ->setCompanyCloseTime($companyCloseTime)
            ->setStayLate($stayLate)
            ->setPickupDateType($pickupDateType)
            ->setLastAccessTime($lastAccessTime)
            ->setGeographicalPostalCode($geographicalPostalCode)
            ->setLocation($location)
            ->setDeleteLastUsed($deleteLastUsed)
            ->setSuppliesRequested($suppliesRequested)
            ->setEarlyPickup($earlyPickup);
    }
    /**
     * Get UseAccountAddress value
     * @return bool|null
     */
    public function getUseAccountAddress()
    {
        return $this->UseAccountAddress;
    }
    /**
     * Set UseAccountAddress value
     * @param bool $useAccountAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setUseAccountAddress($useAccountAddress = null)
    {
        $this->UseAccountAddress = $useAccountAddress;
        return $this;
    }
    /**
     * Get AddressId value
     * @return string|null
     */
    public function getAddressId()
    {
        return $this->AddressId;
    }
    /**
     * Set AddressId value
     * @param string $addressId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setAddressId($addressId = null)
    {
        // validation for constraint: string
        if (!is_null($addressId) && !is_string($addressId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressId)), __LINE__);
        }
        $this->AddressId = $addressId;
        return $this;
    }
    /**
     * Get PickupLocation value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress|null
     */
    public function getPickupLocation()
    {
        return $this->PickupLocation;
    }
    /**
     * Set PickupLocation value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $pickupLocation
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setPickupLocation(\NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $pickupLocation = null)
    {
        $this->PickupLocation = $pickupLocation;
        return $this;
    }
    /**
     * Get PackageLocation value
     * @return string|null
     */
    public function getPackageLocation()
    {
        return $this->PackageLocation;
    }
    /**
     * Set PackageLocation value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupBuildingLocationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupBuildingLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packageLocation
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setPackageLocation($packageLocation = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PickupBuildingLocationType::valueIsValid($packageLocation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packageLocation, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PickupBuildingLocationType::getValidValues())), __LINE__);
        }
        $this->PackageLocation = $packageLocation;
        return $this;
    }
    /**
     * Get BuildingPart value
     * @return string|null
     */
    public function getBuildingPart()
    {
        return $this->BuildingPart;
    }
    /**
     * Set BuildingPart value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\BuildingPartCode::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\BuildingPartCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $buildingPart
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setBuildingPart($buildingPart = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\BuildingPartCode::valueIsValid($buildingPart)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $buildingPart, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\BuildingPartCode::getValidValues())), __LINE__);
        }
        $this->BuildingPart = $buildingPart;
        return $this;
    }
    /**
     * Get BuildingPartDescription value
     * @return string|null
     */
    public function getBuildingPartDescription()
    {
        return $this->BuildingPartDescription;
    }
    /**
     * Set BuildingPartDescription value
     * @param string $buildingPartDescription
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setBuildingPartDescription($buildingPartDescription = null)
    {
        // validation for constraint: string
        if (!is_null($buildingPartDescription) && !is_string($buildingPartDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buildingPartDescription)), __LINE__);
        }
        $this->BuildingPartDescription = $buildingPartDescription;
        return $this;
    }
    /**
     * Get ReadyTimestamp value
     * @return string|null
     */
    public function getReadyTimestamp()
    {
        return $this->ReadyTimestamp;
    }
    /**
     * Set ReadyTimestamp value
     * @param string $readyTimestamp
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setReadyTimestamp($readyTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($readyTimestamp) && !is_string($readyTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($readyTimestamp)), __LINE__);
        }
        $this->ReadyTimestamp = $readyTimestamp;
        return $this;
    }
    /**
     * Get CompanyCloseTime value
     * @return string|null
     */
    public function getCompanyCloseTime()
    {
        return $this->CompanyCloseTime;
    }
    /**
     * Set CompanyCloseTime value
     * @param string $companyCloseTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setCompanyCloseTime($companyCloseTime = null)
    {
        // validation for constraint: string
        if (!is_null($companyCloseTime) && !is_string($companyCloseTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyCloseTime)), __LINE__);
        }
        $this->CompanyCloseTime = $companyCloseTime;
        return $this;
    }
    /**
     * Get StayLate value
     * @return bool|null
     */
    public function getStayLate()
    {
        return $this->StayLate;
    }
    /**
     * Set StayLate value
     * @param bool $stayLate
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setStayLate($stayLate = null)
    {
        $this->StayLate = $stayLate;
        return $this;
    }
    /**
     * Get PickupDateType value
     * @return string|null
     */
    public function getPickupDateType()
    {
        return $this->PickupDateType;
    }
    /**
     * Set PickupDateType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pickupDateType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setPickupDateType($pickupDateType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::valueIsValid($pickupDateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pickupDateType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::getValidValues())), __LINE__);
        }
        $this->PickupDateType = $pickupDateType;
        return $this;
    }
    /**
     * Get LastAccessTime value
     * @return string|null
     */
    public function getLastAccessTime()
    {
        return $this->LastAccessTime;
    }
    /**
     * Set LastAccessTime value
     * @param string $lastAccessTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setLastAccessTime($lastAccessTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastAccessTime) && !is_string($lastAccessTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastAccessTime)), __LINE__);
        }
        $this->LastAccessTime = $lastAccessTime;
        return $this;
    }
    /**
     * Get GeographicalPostalCode value
     * @return string|null
     */
    public function getGeographicalPostalCode()
    {
        return $this->GeographicalPostalCode;
    }
    /**
     * Set GeographicalPostalCode value
     * @param string $geographicalPostalCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setGeographicalPostalCode($geographicalPostalCode = null)
    {
        // validation for constraint: string
        if (!is_null($geographicalPostalCode) && !is_string($geographicalPostalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($geographicalPostalCode)), __LINE__);
        }
        $this->GeographicalPostalCode = $geographicalPostalCode;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get DeleteLastUsed value
     * @return bool|null
     */
    public function getDeleteLastUsed()
    {
        return $this->DeleteLastUsed;
    }
    /**
     * Set DeleteLastUsed value
     * @param bool $deleteLastUsed
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setDeleteLastUsed($deleteLastUsed = null)
    {
        $this->DeleteLastUsed = $deleteLastUsed;
        return $this;
    }
    /**
     * Get SuppliesRequested value
     * @return string|null
     */
    public function getSuppliesRequested()
    {
        return $this->SuppliesRequested;
    }
    /**
     * Set SuppliesRequested value
     * @param string $suppliesRequested
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setSuppliesRequested($suppliesRequested = null)
    {
        // validation for constraint: string
        if (!is_null($suppliesRequested) && !is_string($suppliesRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($suppliesRequested)), __LINE__);
        }
        $this->SuppliesRequested = $suppliesRequested;
        return $this;
    }
    /**
     * Get EarlyPickup value
     * @return bool|null
     */
    public function getEarlyPickup()
    {
        return $this->EarlyPickup;
    }
    /**
     * Set EarlyPickup value
     * @param bool $earlyPickup
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
     */
    public function setEarlyPickup($earlyPickup = null)
    {
        $this->EarlyPickup = $earlyPickup;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupOriginDetail
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
