<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClearanceCountryDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the special services supported at the clearance location for an individual destination country.
 * @subpackage Structs
 */
class ClearanceCountryDetail extends AbstractStructBase
{
    /**
     * The ClearanceCountry
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the country whose special services are specified below.
     * - minOccurs: 0
     * @var string
     */
    public $ClearanceCountry;
    /**
     * The SpecialServicesSupported
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the constrained special services supported for the country above.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialServicesSupported;
    /**
     * Constructor method for ClearanceCountryDetail
     * @uses ClearanceCountryDetail::setClearanceCountry()
     * @uses ClearanceCountryDetail::setSpecialServicesSupported()
     * @param string $clearanceCountry
     * @param string[] $specialServicesSupported
     */
    public function __construct($clearanceCountry = null, array $specialServicesSupported = array())
    {
        $this
            ->setClearanceCountry($clearanceCountry)
            ->setSpecialServicesSupported($specialServicesSupported);
    }
    /**
     * Get ClearanceCountry value
     * @return string|null
     */
    public function getClearanceCountry()
    {
        return $this->ClearanceCountry;
    }
    /**
     * Set ClearanceCountry value
     * @param string $clearanceCountry
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail
     */
    public function setClearanceCountry($clearanceCountry = null)
    {
        // validation for constraint: string
        if (!is_null($clearanceCountry) && !is_string($clearanceCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clearanceCountry)), __LINE__);
        }
        $this->ClearanceCountry = $clearanceCountry;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail
     */
    public function setSpecialServicesSupported(array $specialServicesSupported = array())
    {
        $invalidValues = array();
        foreach ($specialServicesSupported as $clearanceCountryDetailSpecialServicesSupportedItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::valueIsValid($clearanceCountryDetailSpecialServicesSupportedItem)) {
                $invalidValues[] = var_export($clearanceCountryDetailSpecialServicesSupportedItem);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClearanceCountryDetail
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
