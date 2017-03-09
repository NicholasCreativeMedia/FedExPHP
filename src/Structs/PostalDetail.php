<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PostalDetail Structs
 * @subpackage Structs
 */
class PostalDetail extends AbstractStructBase
{
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
     * The CityFirstInitials
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CityFirstInitials;
    /**
     * The CleanedPostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CleanedPostalCode;
    /**
     * The LocationDescriptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription[]
     */
    public $LocationDescriptions;
    /**
     * Constructor method for PostalDetail
     * @uses PostalDetail::setCountryCode()
     * @uses PostalDetail::setStateOrProvinceCode()
     * @uses PostalDetail::setCityFirstInitials()
     * @uses PostalDetail::setCleanedPostalCode()
     * @uses PostalDetail::setLocationDescriptions()
     * @param string $countryCode
     * @param string $stateOrProvinceCode
     * @param string $cityFirstInitials
     * @param string $cleanedPostalCode
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription[] $locationDescriptions
     */
    public function __construct($countryCode = null, $stateOrProvinceCode = null, $cityFirstInitials = null, $cleanedPostalCode = null, array $locationDescriptions = array())
    {
        $this
            ->setCountryCode($countryCode)
            ->setStateOrProvinceCode($stateOrProvinceCode)
            ->setCityFirstInitials($cityFirstInitials)
            ->setCleanedPostalCode($cleanedPostalCode)
            ->setLocationDescriptions($locationDescriptions);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PostalDetail
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PostalDetail
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
     * Get CityFirstInitials value
     * @return string|null
     */
    public function getCityFirstInitials()
    {
        return $this->CityFirstInitials;
    }
    /**
     * Set CityFirstInitials value
     * @param string $cityFirstInitials
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PostalDetail
     */
    public function setCityFirstInitials($cityFirstInitials = null)
    {
        // validation for constraint: string
        if (!is_null($cityFirstInitials) && !is_string($cityFirstInitials)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityFirstInitials)), __LINE__);
        }
        $this->CityFirstInitials = $cityFirstInitials;
        return $this;
    }
    /**
     * Get CleanedPostalCode value
     * @return string|null
     */
    public function getCleanedPostalCode()
    {
        return $this->CleanedPostalCode;
    }
    /**
     * Set CleanedPostalCode value
     * @param string $cleanedPostalCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PostalDetail
     */
    public function setCleanedPostalCode($cleanedPostalCode = null)
    {
        // validation for constraint: string
        if (!is_null($cleanedPostalCode) && !is_string($cleanedPostalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cleanedPostalCode)), __LINE__);
        }
        $this->CleanedPostalCode = $cleanedPostalCode;
        return $this;
    }
    /**
     * Get LocationDescriptions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription[]|null
     */
    public function getLocationDescriptions()
    {
        return $this->LocationDescriptions;
    }
    /**
     * Set LocationDescriptions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription[] $locationDescriptions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PostalDetail
     */
    public function setLocationDescriptions(array $locationDescriptions = array())
    {
        foreach ($locationDescriptions as $postalDetailLocationDescriptionsItem) {
            // validation for constraint: itemType
            if (!$postalDetailLocationDescriptionsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription) {
                throw new \InvalidArgumentException(sprintf('The LocationDescriptions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription, "%s" given', is_object($postalDetailLocationDescriptionsItem) ? get_class($postalDetailLocationDescriptionsItem) : gettype($postalDetailLocationDescriptionsItem)), __LINE__);
            }
        }
        $this->LocationDescriptions = $locationDescriptions;
        return $this;
    }
    /**
     * Add item to LocationDescriptions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PostalDetail
     */
    public function addToLocationDescriptions(\NicholasCreativeMedia\FedExPHP\Structs\LocationDescription $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription) {
            throw new \InvalidArgumentException(sprintf('The LocationDescriptions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\LocationDescription, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LocationDescriptions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PostalDetail
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
