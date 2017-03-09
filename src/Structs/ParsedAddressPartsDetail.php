<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParsedAddressPartsDetail Structs
 * @subpackage Structs
 */
class ParsedAddressPartsDetail extends AbstractStructBase
{
    /**
     * The ParsedStreetLine
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail
     */
    public $ParsedStreetLine;
    /**
     * The ParsedPostalCode
     * Meta informations extracted from the WSDL
     * - documentation: The postal code specified in a form that is supported by USPS as base, secondary and tertiary.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ParsedPostalCodeDetail
     */
    public $ParsedPostalCode;
    /**
     * Constructor method for ParsedAddressPartsDetail
     * @uses ParsedAddressPartsDetail::setParsedStreetLine()
     * @uses ParsedAddressPartsDetail::setParsedPostalCode()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail $parsedStreetLine
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ParsedPostalCodeDetail $parsedPostalCode
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail $parsedStreetLine = null, \NicholasCreativeMedia\FedExPHP\Structs\ParsedPostalCodeDetail $parsedPostalCode = null)
    {
        $this
            ->setParsedStreetLine($parsedStreetLine)
            ->setParsedPostalCode($parsedPostalCode);
    }
    /**
     * Get ParsedStreetLine value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail|null
     */
    public function getParsedStreetLine()
    {
        return $this->ParsedStreetLine;
    }
    /**
     * Set ParsedStreetLine value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail $parsedStreetLine
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedAddressPartsDetail
     */
    public function setParsedStreetLine(\NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail $parsedStreetLine = null)
    {
        $this->ParsedStreetLine = $parsedStreetLine;
        return $this;
    }
    /**
     * Get ParsedPostalCode value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedPostalCodeDetail|null
     */
    public function getParsedPostalCode()
    {
        return $this->ParsedPostalCode;
    }
    /**
     * Set ParsedPostalCode value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ParsedPostalCodeDetail $parsedPostalCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedAddressPartsDetail
     */
    public function setParsedPostalCode(\NicholasCreativeMedia\FedExPHP\Structs\ParsedPostalCodeDetail $parsedPostalCode = null)
    {
        $this->ParsedPostalCode = $parsedPostalCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedAddressPartsDetail
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
