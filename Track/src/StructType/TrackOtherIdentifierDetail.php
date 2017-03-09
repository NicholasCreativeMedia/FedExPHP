<?php

namespace NicholasCreativeMedia\FedExPHP\Track\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackOtherIdentifierDetail StructType
 * @subpackage Structs
 */
class TrackOtherIdentifierDetail extends AbstractStructBase
{
    /**
     * The PackageIdentifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackPackageIdentifier
     */
    public $PackageIdentifier;
    /**
     * The TrackingNumberUniqueIdentifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumberUniqueIdentifier;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * Constructor method for TrackOtherIdentifierDetail
     * @uses TrackOtherIdentifierDetail::setPackageIdentifier()
     * @uses TrackOtherIdentifierDetail::setTrackingNumberUniqueIdentifier()
     * @uses TrackOtherIdentifierDetail::setCarrierCode()
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackPackageIdentifier $packageIdentifier
     * @param string $trackingNumberUniqueIdentifier
     * @param string $carrierCode
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Track\StructType\TrackPackageIdentifier $packageIdentifier = null, $trackingNumberUniqueIdentifier = null, $carrierCode = null)
    {
        $this
            ->setPackageIdentifier($packageIdentifier)
            ->setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
            ->setCarrierCode($carrierCode);
    }
    /**
     * Get PackageIdentifier value
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackPackageIdentifier|null
     */
    public function getPackageIdentifier()
    {
        return $this->PackageIdentifier;
    }
    /**
     * Set PackageIdentifier value
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackPackageIdentifier $packageIdentifier
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackOtherIdentifierDetail
     */
    public function setPackageIdentifier(\NicholasCreativeMedia\FedExPHP\Track\StructType\TrackPackageIdentifier $packageIdentifier = null)
    {
        $this->PackageIdentifier = $packageIdentifier;
        return $this;
    }
    /**
     * Get TrackingNumberUniqueIdentifier value
     * @return string|null
     */
    public function getTrackingNumberUniqueIdentifier()
    {
        return $this->TrackingNumberUniqueIdentifier;
    }
    /**
     * Set TrackingNumberUniqueIdentifier value
     * @param string $trackingNumberUniqueIdentifier
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackOtherIdentifierDetail
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumberUniqueIdentifier) && !is_string($trackingNumberUniqueIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumberUniqueIdentifier)), __LINE__);
        }
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierCode
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackOtherIdentifierDetail
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Track\EnumType\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \NicholasCreativeMedia\FedExPHP\Track\EnumType\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackOtherIdentifierDetail
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
