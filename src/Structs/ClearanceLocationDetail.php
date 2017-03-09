<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClearanceLocationDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the details about the countries supported by this location.
 * @subpackage Structs
 */
class ClearanceLocationDetail extends AbstractStructBase
{
    /**
     * The ServicesSupported
     * Meta informations extracted from the WSDL
     * - documentation: Services supported for clearance
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ServicesSupported;
    /**
     * The ConsolidationType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of consolidation for which these clearance location attributes were extracted.
     * - minOccurs: 0
     * @var string
     */
    public $ConsolidationType;
    /**
     * The ClearanceLocationType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of clearance performed at this location.
     * - minOccurs: 0
     * @var string
     */
    public $ClearanceLocationType;
    /**
     * The SpecialServicesSupported
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the constrained special services supported at this location.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialServicesSupported;
    /**
     * The ClearanceCountries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail[]
     */
    public $ClearanceCountries;
    /**
     * The ClearanceRoutingCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClearanceRoutingCode;
    /**
     * Constructor method for ClearanceLocationDetail
     * @uses ClearanceLocationDetail::setServicesSupported()
     * @uses ClearanceLocationDetail::setConsolidationType()
     * @uses ClearanceLocationDetail::setClearanceLocationType()
     * @uses ClearanceLocationDetail::setSpecialServicesSupported()
     * @uses ClearanceLocationDetail::setClearanceCountries()
     * @uses ClearanceLocationDetail::setClearanceRoutingCode()
     * @param string[] $servicesSupported
     * @param string $consolidationType
     * @param string $clearanceLocationType
     * @param string[] $specialServicesSupported
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail[] $clearanceCountries
     * @param string $clearanceRoutingCode
     */
    public function __construct(array $servicesSupported = array(), $consolidationType = null, $clearanceLocationType = null, array $specialServicesSupported = array(), array $clearanceCountries = array(), $clearanceRoutingCode = null)
    {
        $this
            ->setServicesSupported($servicesSupported)
            ->setConsolidationType($consolidationType)
            ->setClearanceLocationType($clearanceLocationType)
            ->setSpecialServicesSupported($specialServicesSupported)
            ->setClearanceCountries($clearanceCountries)
            ->setClearanceRoutingCode($clearanceRoutingCode);
    }
    /**
     * Get ServicesSupported value
     * @return string[]|null
     */
    public function getServicesSupported()
    {
        return $this->ServicesSupported;
    }
    /**
     * Set ServicesSupported value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $servicesSupported
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceLocationDetail
     */
    public function setServicesSupported(array $servicesSupported = array())
    {
        $invalidValues = array();
        foreach ($servicesSupported as $clearanceLocationDetailServicesSupportedItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\ServiceType::valueIsValid($clearanceLocationDetailServicesSupportedItem)) {
                $invalidValues[] = var_export($clearanceLocationDetailServicesSupportedItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::getValidValues())), __LINE__);
        }
        $this->ServicesSupported = $servicesSupported;
        return $this;
    }
    /**
     * Add item to ServicesSupported value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceLocationDetail
     */
    public function addToServicesSupported($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::getValidValues())), __LINE__);
        }
        $this->ServicesSupported[] = $item;
        return $this;
    }
    /**
     * Get ConsolidationType value
     * @return string|null
     */
    public function getConsolidationType()
    {
        return $this->ConsolidationType;
    }
    /**
     * Set ConsolidationType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ConsolidationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ConsolidationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $consolidationType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceLocationDetail
     */
    public function setConsolidationType($consolidationType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ConsolidationType::valueIsValid($consolidationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $consolidationType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ConsolidationType::getValidValues())), __LINE__);
        }
        $this->ConsolidationType = $consolidationType;
        return $this;
    }
    /**
     * Get ClearanceLocationType value
     * @return string|null
     */
    public function getClearanceLocationType()
    {
        return $this->ClearanceLocationType;
    }
    /**
     * Set ClearanceLocationType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DistributionClearanceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DistributionClearanceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $clearanceLocationType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceLocationDetail
     */
    public function setClearanceLocationType($clearanceLocationType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DistributionClearanceType::valueIsValid($clearanceLocationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $clearanceLocationType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DistributionClearanceType::getValidValues())), __LINE__);
        }
        $this->ClearanceLocationType = $clearanceLocationType;
        return $this;
    }
    /**
     * Get SpecialServicesSupported value
     * @return string[]|null
     */
    public function getSpecialServicesSupported()
    {
        return $this->SpecialServicesSupported;
    }
    /**
     * Set SpecialServicesSupported value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $specialServicesSupported
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceLocationDetail
     */
    public function setSpecialServicesSupported(array $specialServicesSupported = array())
    {
        $invalidValues = array();
        foreach ($specialServicesSupported as $clearanceLocationDetailSpecialServicesSupportedItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::valueIsValid($clearanceLocationDetailSpecialServicesSupportedItem)) {
                $invalidValues[] = var_export($clearanceLocationDetailSpecialServicesSupportedItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServicesSupported = $specialServicesSupported;
        return $this;
    }
    /**
     * Add item to SpecialServicesSupported value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceLocationDetail
     */
    public function addToSpecialServicesSupported($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServicesSupported[] = $item;
        return $this;
    }
    /**
     * Get ClearanceCountries value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail[]|null
     */
    public function getClearanceCountries()
    {
        return $this->ClearanceCountries;
    }
    /**
     * Set ClearanceCountries value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail[] $clearanceCountries
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceLocationDetail
     */
    public function setClearanceCountries(array $clearanceCountries = array())
    {
        foreach ($clearanceCountries as $clearanceLocationDetailClearanceCountriesItem) {
            // validation for constraint: itemType
            if (!$clearanceLocationDetailClearanceCountriesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail) {
                throw new \InvalidArgumentException(sprintf('The ClearanceCountries property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail, "%s" given', is_object($clearanceLocationDetailClearanceCountriesItem) ? get_class($clearanceLocationDetailClearanceCountriesItem) : gettype($clearanceLocationDetailClearanceCountriesItem)), __LINE__);
            }
        }
        $this->ClearanceCountries = $clearanceCountries;
        return $this;
    }
    /**
     * Add item to ClearanceCountries value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceLocationDetail
     */
    public function addToClearanceCountries(\NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail) {
            throw new \InvalidArgumentException(sprintf('The ClearanceCountries property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ClearanceCountries[] = $item;
        return $this;
    }
    /**
     * Get ClearanceRoutingCode value
     * @return string|null
     */
    public function getClearanceRoutingCode()
    {
        return $this->ClearanceRoutingCode;
    }
    /**
     * Set ClearanceRoutingCode value
     * @param string $clearanceRoutingCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceLocationDetail
     */
    public function setClearanceRoutingCode($clearanceRoutingCode = null)
    {
        // validation for constraint: string
        if (!is_null($clearanceRoutingCode) && !is_string($clearanceRoutingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clearanceRoutingCode)), __LINE__);
        }
        $this->ClearanceRoutingCode = $clearanceRoutingCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceLocationDetail
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
