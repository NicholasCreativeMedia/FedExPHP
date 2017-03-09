<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address Structs
 * Meta informations extracted from the WSDL
 * - documentation: Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within
 * the US).
 * @subpackage Structs
 */
class Address extends AbstractStructBase
{
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - documentation: The two-letter code used to identify a country.
     * - minOccurs: 1
     * @var string
     */
    public $CountryCode;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - documentation: Identification of a region (usually small) for mail/package delivery. Format and presence of this field will vary, depending on country.
     * - minOccurs: 0
     * @var string
     */
    public $PostalCode;
    /**
     * Constructor method for Address
     * @uses Address::setCountryCode()
     * @uses Address::setPostalCode()
     * @param string $countryCode
     * @param string $postalCode
     */
    public function __construct($countryCode = null, $postalCode = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setPostalCode($postalCode);
    }
    /**
     * Get CountryCode value
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address
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
