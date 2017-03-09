<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupScheduleOption Structs
 * @subpackage Structs
 */
class PickupScheduleOption extends AbstractStructBase
{
    /**
     * The Carrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Carrier;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The ScheduleDay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ScheduleDay;
    /**
     * The Available
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Available;
    /**
     * The PickupDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PickupDate;
    /**
     * The CutOffTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CutOffTime;
    /**
     * The AccessTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccessTime;
    /**
     * The ResidentialAvailable
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether residential pickup is available for the requested postal code.
     * - minOccurs: 0
     * @var bool
     */
    public $ResidentialAvailable;
    /**
     * The CountryRelationship
     * Meta informations extracted from the WSDL
     * - documentation: Describes the country relationship (domestic and/or international) among the shipments being picked up.
     * - minOccurs: 0
     * @var string
     */
    public $CountryRelationship;
    /**
     * Constructor method for PickupScheduleOption
     * @uses PickupScheduleOption::setCarrier()
     * @uses PickupScheduleOption::setDescription()
     * @uses PickupScheduleOption::setScheduleDay()
     * @uses PickupScheduleOption::setAvailable()
     * @uses PickupScheduleOption::setPickupDate()
     * @uses PickupScheduleOption::setCutOffTime()
     * @uses PickupScheduleOption::setAccessTime()
     * @uses PickupScheduleOption::setResidentialAvailable()
     * @uses PickupScheduleOption::setCountryRelationship()
     * @param string $carrier
     * @param string $description
     * @param string $scheduleDay
     * @param bool $available
     * @param string $pickupDate
     * @param string $cutOffTime
     * @param string $accessTime
     * @param bool $residentialAvailable
     * @param string $countryRelationship
     */
    public function __construct($carrier = null, $description = null, $scheduleDay = null, $available = null, $pickupDate = null, $cutOffTime = null, $accessTime = null, $residentialAvailable = null, $countryRelationship = null)
    {
        $this
            ->setCarrier($carrier)
            ->setDescription($description)
            ->setScheduleDay($scheduleDay)
            ->setAvailable($available)
            ->setPickupDate($pickupDate)
            ->setCutOffTime($cutOffTime)
            ->setAccessTime($accessTime)
            ->setResidentialAvailable($residentialAvailable)
            ->setCountryRelationship($countryRelationship);
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrier
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption
     */
    public function setCarrier($carrier = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid($carrier)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrier, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->Carrier = $carrier;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ScheduleDay value
     * @return string|null
     */
    public function getScheduleDay()
    {
        return $this->ScheduleDay;
    }
    /**
     * Set ScheduleDay value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $scheduleDay
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption
     */
    public function setScheduleDay($scheduleDay = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::valueIsValid($scheduleDay)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $scheduleDay, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::getValidValues())), __LINE__);
        }
        $this->ScheduleDay = $scheduleDay;
        return $this;
    }
    /**
     * Get Available value
     * @return bool|null
     */
    public function getAvailable()
    {
        return $this->Available;
    }
    /**
     * Set Available value
     * @param bool $available
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption
     */
    public function setAvailable($available = null)
    {
        $this->Available = $available;
        return $this;
    }
    /**
     * Get PickupDate value
     * @return string|null
     */
    public function getPickupDate()
    {
        return $this->PickupDate;
    }
    /**
     * Set PickupDate value
     * @param string $pickupDate
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption
     */
    public function setPickupDate($pickupDate = null)
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupDate)), __LINE__);
        }
        $this->PickupDate = $pickupDate;
        return $this;
    }
    /**
     * Get CutOffTime value
     * @return string|null
     */
    public function getCutOffTime()
    {
        return $this->CutOffTime;
    }
    /**
     * Set CutOffTime value
     * @param string $cutOffTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption
     */
    public function setCutOffTime($cutOffTime = null)
    {
        // validation for constraint: string
        if (!is_null($cutOffTime) && !is_string($cutOffTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cutOffTime)), __LINE__);
        }
        $this->CutOffTime = $cutOffTime;
        return $this;
    }
    /**
     * Get AccessTime value
     * @return string|null
     */
    public function getAccessTime()
    {
        return $this->AccessTime;
    }
    /**
     * Set AccessTime value
     * @param string $accessTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption
     */
    public function setAccessTime($accessTime = null)
    {
        // validation for constraint: string
        if (!is_null($accessTime) && !is_string($accessTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessTime)), __LINE__);
        }
        $this->AccessTime = $accessTime;
        return $this;
    }
    /**
     * Get ResidentialAvailable value
     * @return bool|null
     */
    public function getResidentialAvailable()
    {
        return $this->ResidentialAvailable;
    }
    /**
     * Set ResidentialAvailable value
     * @param bool $residentialAvailable
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption
     */
    public function setResidentialAvailable($residentialAvailable = null)
    {
        $this->ResidentialAvailable = $residentialAvailable;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption
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
