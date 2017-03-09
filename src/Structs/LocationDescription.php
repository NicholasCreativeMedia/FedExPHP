<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationDescription Structs
 * @subpackage Structs
 */
class LocationDescription extends AbstractStructBase
{
    /**
     * The LocationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LocationId;
    /**
     * The LocationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LocationNumber;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CountryCode;
    /**
     * The StateOrProvinceCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StateOrProvinceCode;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * The ServiceArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceArea;
    /**
     * The AirportId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AirportId;
    /**
     * The RestrictedPackageSpecialServices
     * Meta informations extracted from the WSDL
     * - documentation: Package special services prohibited for this location for operational reasons. (Other package special services may or may not be available per shipment for other reasons.)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RestrictedPackageSpecialServices;
    /**
     * The RestrictedShipmentSpecialServices
     * Meta informations extracted from the WSDL
     * - documentation: Shipment special services prohibited for this location for operational reasons. (Other shipment special services may or may not be available per shipment for other reasons.)
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RestrictedShipmentSpecialServices;
    /**
     * The FedExEuropeFirstOrigin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FedExEuropeFirstOrigin;
    /**
     * Constructor method for LocationDescription
     * @uses LocationDescription::setLocationId()
     * @uses LocationDescription::setLocationNumber()
     * @uses LocationDescription::setCountryCode()
     * @uses LocationDescription::setStateOrProvinceCode()
     * @uses LocationDescription::setPostalCode()
     * @uses LocationDescription::setServiceArea()
     * @uses LocationDescription::setAirportId()
     * @uses LocationDescription::setRestrictedPackageSpecialServices()
     * @uses LocationDescription::setRestrictedShipmentSpecialServices()
     * @uses LocationDescription::setFedExEuropeFirstOrigin()
     * @param string $locationId
     * @param int $locationNumber
     * @param string $countryCode
     * @param string $stateOrProvinceCode
     * @param string $postalCode
     * @param string $serviceArea
     * @param string $airportId
     * @param string[] $restrictedPackageSpecialServices
     * @param string[] $restrictedShipmentSpecialServices
     * @param bool $fedExEuropeFirstOrigin
     */
    public function __construct($locationId = null, $locationNumber = null, $countryCode = null, $stateOrProvinceCode = null, $postalCode = null, $serviceArea = null, $airportId = null, array $restrictedPackageSpecialServices = array(), array $restrictedShipmentSpecialServices = array(), $fedExEuropeFirstOrigin = null)
    {
        $this
            ->setLocationId($locationId)
            ->setLocationNumber($locationNumber)
            ->setCountryCode($countryCode)
            ->setStateOrProvinceCode($stateOrProvinceCode)
            ->setPostalCode($postalCode)
            ->setServiceArea($serviceArea)
            ->setAirportId($airportId)
            ->setRestrictedPackageSpecialServices($restrictedPackageSpecialServices)
            ->setRestrictedShipmentSpecialServices($restrictedShipmentSpecialServices)
            ->setFedExEuropeFirstOrigin($fedExEuropeFirstOrigin);
    }
    /**
     * Get LocationId value
     * @return string|null
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }
    /**
     * Set LocationId value
     * @param string $locationId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription
     */
    public function setLocationId($locationId = null)
    {
        // validation for constraint: string
        if (!is_null($locationId) && !is_string($locationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationId)), __LINE__);
        }
        $this->LocationId = $locationId;
        return $this;
    }
    /**
     * Get LocationNumber value
     * @return int|null
     */
    public function getLocationNumber()
    {
        return $this->LocationNumber;
    }
    /**
     * Set LocationNumber value
     * @param int $locationNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription
     */
    public function setLocationNumber($locationNumber = null)
    {
        // validation for constraint: int
        if (!is_null($locationNumber) && !is_numeric($locationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($locationNumber)), __LINE__);
        }
        $this->LocationNumber = $locationNumber;
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get StateOrProvinceCode value
     * @return string|null
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }
    /**
     * Set StateOrProvinceCode value
     * @param string $stateOrProvinceCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription
     */
    public function setStateOrProvinceCode($stateOrProvinceCode = null)
    {
        // validation for constraint: string
        if (!is_null($stateOrProvinceCode) && !is_string($stateOrProvinceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateOrProvinceCode)), __LINE__);
        }
        $this->StateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }
    /**
     * Get PostalCode value
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
    }
    /**
     * Set PostalCode value
     * @param string $postalCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        $this->PostalCode = $postalCode;
        return $this;
    }
    /**
     * Get ServiceArea value
     * @return string|null
     */
    public function getServiceArea()
    {
        return $this->ServiceArea;
    }
    /**
     * Set ServiceArea value
     * @param string $serviceArea
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription
     */
    public function setServiceArea($serviceArea = null)
    {
        // validation for constraint: string
        if (!is_null($serviceArea) && !is_string($serviceArea)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceArea)), __LINE__);
        }
        $this->ServiceArea = $serviceArea;
        return $this;
    }
    /**
     * Get AirportId value
     * @return string|null
     */
    public function getAirportId()
    {
        return $this->AirportId;
    }
    /**
     * Set AirportId value
     * @param string $airportId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription
     */
    public function setAirportId($airportId = null)
    {
        // validation for constraint: string
        if (!is_null($airportId) && !is_string($airportId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airportId)), __LINE__);
        }
        $this->AirportId = $airportId;
        return $this;
    }
    /**
     * Get RestrictedPackageSpecialServices value
     * @return string[]|null
     */
    public function getRestrictedPackageSpecialServices()
    {
        return $this->RestrictedPackageSpecialServices;
    }
    /**
     * Set RestrictedPackageSpecialServices value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $restrictedPackageSpecialServices
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription
     */
    public function setRestrictedPackageSpecialServices(array $restrictedPackageSpecialServices = array())
    {
        $invalidValues = array();
        foreach ($restrictedPackageSpecialServices as $locationDescriptionRestrictedPackageSpecialServicesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::valueIsValid($locationDescriptionRestrictedPackageSpecialServicesItem)) {
                $invalidValues[] = var_export($locationDescriptionRestrictedPackageSpecialServicesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->RestrictedPackageSpecialServices = $restrictedPackageSpecialServices;
        return $this;
    }
    /**
     * Add item to RestrictedPackageSpecialServices value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription
     */
    public function addToRestrictedPackageSpecialServices($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->RestrictedPackageSpecialServices[] = $item;
        return $this;
    }
    /**
     * Get RestrictedShipmentSpecialServices value
     * @return string[]|null
     */
    public function getRestrictedShipmentSpecialServices()
    {
        return $this->RestrictedShipmentSpecialServices;
    }
    /**
     * Set RestrictedShipmentSpecialServices value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentSpecialServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $restrictedShipmentSpecialServices
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription
     */
    public function setRestrictedShipmentSpecialServices(array $restrictedShipmentSpecialServices = array())
    {
        $invalidValues = array();
        foreach ($restrictedShipmentSpecialServices as $locationDescriptionRestrictedShipmentSpecialServicesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\ShipmentSpecialServiceType::valueIsValid($locationDescriptionRestrictedShipmentSpecialServicesItem)) {
                $invalidValues[] = var_export($locationDescriptionRestrictedShipmentSpecialServicesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ShipmentSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->RestrictedShipmentSpecialServices = $restrictedShipmentSpecialServices;
        return $this;
    }
    /**
     * Add item to RestrictedShipmentSpecialServices value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentSpecialServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShipmentSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription
     */
    public function addToRestrictedShipmentSpecialServices($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ShipmentSpecialServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ShipmentSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->RestrictedShipmentSpecialServices[] = $item;
        return $this;
    }
    /**
     * Get FedExEuropeFirstOrigin value
     * @return bool|null
     */
    public function getFedExEuropeFirstOrigin()
    {
        return $this->FedExEuropeFirstOrigin;
    }
    /**
     * Set FedExEuropeFirstOrigin value
     * @param bool $fedExEuropeFirstOrigin
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription
     */
    public function setFedExEuropeFirstOrigin($fedExEuropeFirstOrigin = null)
    {
        $this->FedExEuropeFirstOrigin = $fedExEuropeFirstOrigin;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription
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
