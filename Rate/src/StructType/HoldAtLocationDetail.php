<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HoldAtLocationDetail StructType
 * @subpackage Structs
 */
class HoldAtLocationDetail extends AbstractStructBase
{
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - documentation: Contact phone number for recipient of shipment.
     * - minOccurs: 0
     * @var string
     */
    public $PhoneNumber;
    /**
     * The LocationContactAndAddress
     * Meta informations extracted from the WSDL
     * - documentation: Contact and address of FedEx facility at which shipment is to be held.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\ContactAndAddress
     */
    public $LocationContactAndAddress;
    /**
     * The LocationType
     * Meta informations extracted from the WSDL
     * - documentation: Type of facility at which package/shipment is to be held.
     * - minOccurs: 0
     * @var string
     */
    public $LocationType;
    /**
     * The LocationId
     * Meta informations extracted from the WSDL
     * - documentation: Location identification (for facilities identified by an alphanumeric location code).
     * - minOccurs: 0
     * @var string
     */
    public $LocationId;
    /**
     * The LocationNumber
     * Meta informations extracted from the WSDL
     * - documentation: Location identification (for facilities identified by an numeric location code).
     * - minOccurs: 0
     * @var int
     */
    public $LocationNumber;
    /**
     * Constructor method for HoldAtLocationDetail
     * @uses HoldAtLocationDetail::setPhoneNumber()
     * @uses HoldAtLocationDetail::setLocationContactAndAddress()
     * @uses HoldAtLocationDetail::setLocationType()
     * @uses HoldAtLocationDetail::setLocationId()
     * @uses HoldAtLocationDetail::setLocationNumber()
     * @param string $phoneNumber
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ContactAndAddress $locationContactAndAddress
     * @param string $locationType
     * @param string $locationId
     * @param int $locationNumber
     */
    public function __construct($phoneNumber = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\ContactAndAddress $locationContactAndAddress = null, $locationType = null, $locationId = null, $locationNumber = null)
    {
        $this
            ->setPhoneNumber($phoneNumber)
            ->setLocationContactAndAddress($locationContactAndAddress)
            ->setLocationType($locationType)
            ->setLocationId($locationId)
            ->setLocationNumber($locationNumber);
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
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HoldAtLocationDetail
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
     * Get LocationContactAndAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ContactAndAddress|null
     */
    public function getLocationContactAndAddress()
    {
        return $this->LocationContactAndAddress;
    }
    /**
     * Set LocationContactAndAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ContactAndAddress $locationContactAndAddress
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HoldAtLocationDetail
     */
    public function setLocationContactAndAddress(\NicholasCreativeMedia\FedExPHP\Rate\StructType\ContactAndAddress $locationContactAndAddress = null)
    {
        $this->LocationContactAndAddress = $locationContactAndAddress;
        return $this;
    }
    /**
     * Get LocationType value
     * @return string|null
     */
    public function getLocationType()
    {
        return $this->LocationType;
    }
    /**
     * Set LocationType value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\FedExLocationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\FedExLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $locationType
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HoldAtLocationDetail
     */
    public function setLocationType($locationType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\FedExLocationType::valueIsValid($locationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $locationType, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\FedExLocationType::getValidValues())), __LINE__);
        }
        $this->LocationType = $locationType;
        return $this;
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
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HoldAtLocationDetail
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
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HoldAtLocationDetail
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HoldAtLocationDetail
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
