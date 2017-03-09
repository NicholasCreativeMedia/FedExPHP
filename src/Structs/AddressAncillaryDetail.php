<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressAncillaryDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Additional information about a physical location, such as suite number, cross street, floor number in a building. These details are not typically a part of a standard address definition; however, these details might help locate the
 * address.
 * @subpackage Structs
 */
class AddressAncillaryDetail extends AbstractStructBase
{
    /**
     * The LocationInCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LocationInCity;
    /**
     * The LocationInProperty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LocationInProperty;
    /**
     * The Accessibility
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether how this location can be accessed.
     * - minOccurs: 0
     * @var string
     */
    public $Accessibility;
    /**
     * The Building
     * Meta informations extracted from the WSDL
     * - documentation: Specifies building number or name.
     * - minOccurs: 0
     * @var string
     */
    public $Building;
    /**
     * The Department
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a department in the company or retail store.
     * - minOccurs: 0
     * @var string
     */
    public $Department;
    /**
     * The RoomFloor
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the floor number.
     * - minOccurs: 0
     * @var string
     */
    public $RoomFloor;
    /**
     * The Suite
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Suite;
    /**
     * The Apartment
     * Meta informations extracted from the WSDL
     * - documentation: Specifies apartment number.
     * - minOccurs: 0
     * @var string
     */
    public $Apartment;
    /**
     * The Room
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the room number, if one is specified.
     * - minOccurs: 0
     * @var string
     */
    public $Room;
    /**
     * The CrossStreet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CrossStreet;
    /**
     * The AdditionalDescriptions
     * Meta informations extracted from the WSDL
     * - documentation: This is used to specify additional details about the address such as landmark. For e.g. This field is used to capture details such as an address being inside a facility such as, Chilli's Care Center, St. Jude - Inside.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AdditionalDescriptions;
    /**
     * Constructor method for AddressAncillaryDetail
     * @uses AddressAncillaryDetail::setLocationInCity()
     * @uses AddressAncillaryDetail::setLocationInProperty()
     * @uses AddressAncillaryDetail::setAccessibility()
     * @uses AddressAncillaryDetail::setBuilding()
     * @uses AddressAncillaryDetail::setDepartment()
     * @uses AddressAncillaryDetail::setRoomFloor()
     * @uses AddressAncillaryDetail::setSuite()
     * @uses AddressAncillaryDetail::setApartment()
     * @uses AddressAncillaryDetail::setRoom()
     * @uses AddressAncillaryDetail::setCrossStreet()
     * @uses AddressAncillaryDetail::setAdditionalDescriptions()
     * @param string $locationInCity
     * @param string $locationInProperty
     * @param string $accessibility
     * @param string $building
     * @param string $department
     * @param string $roomFloor
     * @param string $suite
     * @param string $apartment
     * @param string $room
     * @param string $crossStreet
     * @param string[] $additionalDescriptions
     */
    public function __construct($locationInCity = null, $locationInProperty = null, $accessibility = null, $building = null, $department = null, $roomFloor = null, $suite = null, $apartment = null, $room = null, $crossStreet = null, array $additionalDescriptions = array())
    {
        $this
            ->setLocationInCity($locationInCity)
            ->setLocationInProperty($locationInProperty)
            ->setAccessibility($accessibility)
            ->setBuilding($building)
            ->setDepartment($department)
            ->setRoomFloor($roomFloor)
            ->setSuite($suite)
            ->setApartment($apartment)
            ->setRoom($room)
            ->setCrossStreet($crossStreet)
            ->setAdditionalDescriptions($additionalDescriptions);
    }
    /**
     * Get LocationInCity value
     * @return string|null
     */
    public function getLocationInCity()
    {
        return $this->LocationInCity;
    }
    /**
     * Set LocationInCity value
     * @param string $locationInCity
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressAncillaryDetail
     */
    public function setLocationInCity($locationInCity = null)
    {
        // validation for constraint: string
        if (!is_null($locationInCity) && !is_string($locationInCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationInCity)), __LINE__);
        }
        $this->LocationInCity = $locationInCity;
        return $this;
    }
    /**
     * Get LocationInProperty value
     * @return string|null
     */
    public function getLocationInProperty()
    {
        return $this->LocationInProperty;
    }
    /**
     * Set LocationInProperty value
     * @param string $locationInProperty
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressAncillaryDetail
     */
    public function setLocationInProperty($locationInProperty = null)
    {
        // validation for constraint: string
        if (!is_null($locationInProperty) && !is_string($locationInProperty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationInProperty)), __LINE__);
        }
        $this->LocationInProperty = $locationInProperty;
        return $this;
    }
    /**
     * Get Accessibility value
     * @return string|null
     */
    public function getAccessibility()
    {
        return $this->Accessibility;
    }
    /**
     * Set Accessibility value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationAccessibilityType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationAccessibilityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accessibility
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressAncillaryDetail
     */
    public function setAccessibility($accessibility = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\LocationAccessibilityType::valueIsValid($accessibility)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accessibility, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LocationAccessibilityType::getValidValues())), __LINE__);
        }
        $this->Accessibility = $accessibility;
        return $this;
    }
    /**
     * Get Building value
     * @return string|null
     */
    public function getBuilding()
    {
        return $this->Building;
    }
    /**
     * Set Building value
     * @param string $building
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressAncillaryDetail
     */
    public function setBuilding($building = null)
    {
        // validation for constraint: string
        if (!is_null($building) && !is_string($building)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($building)), __LINE__);
        }
        $this->Building = $building;
        return $this;
    }
    /**
     * Get Department value
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->Department;
    }
    /**
     * Set Department value
     * @param string $department
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressAncillaryDetail
     */
    public function setDepartment($department = null)
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($department)), __LINE__);
        }
        $this->Department = $department;
        return $this;
    }
    /**
     * Get RoomFloor value
     * @return string|null
     */
    public function getRoomFloor()
    {
        return $this->RoomFloor;
    }
    /**
     * Set RoomFloor value
     * @param string $roomFloor
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressAncillaryDetail
     */
    public function setRoomFloor($roomFloor = null)
    {
        // validation for constraint: string
        if (!is_null($roomFloor) && !is_string($roomFloor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomFloor)), __LINE__);
        }
        $this->RoomFloor = $roomFloor;
        return $this;
    }
    /**
     * Get Suite value
     * @return string|null
     */
    public function getSuite()
    {
        return $this->Suite;
    }
    /**
     * Set Suite value
     * @param string $suite
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressAncillaryDetail
     */
    public function setSuite($suite = null)
    {
        // validation for constraint: string
        if (!is_null($suite) && !is_string($suite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($suite)), __LINE__);
        }
        $this->Suite = $suite;
        return $this;
    }
    /**
     * Get Apartment value
     * @return string|null
     */
    public function getApartment()
    {
        return $this->Apartment;
    }
    /**
     * Set Apartment value
     * @param string $apartment
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressAncillaryDetail
     */
    public function setApartment($apartment = null)
    {
        // validation for constraint: string
        if (!is_null($apartment) && !is_string($apartment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($apartment)), __LINE__);
        }
        $this->Apartment = $apartment;
        return $this;
    }
    /**
     * Get Room value
     * @return string|null
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @param string $room
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressAncillaryDetail
     */
    public function setRoom($room = null)
    {
        // validation for constraint: string
        if (!is_null($room) && !is_string($room)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($room)), __LINE__);
        }
        $this->Room = $room;
        return $this;
    }
    /**
     * Get CrossStreet value
     * @return string|null
     */
    public function getCrossStreet()
    {
        return $this->CrossStreet;
    }
    /**
     * Set CrossStreet value
     * @param string $crossStreet
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressAncillaryDetail
     */
    public function setCrossStreet($crossStreet = null)
    {
        // validation for constraint: string
        if (!is_null($crossStreet) && !is_string($crossStreet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($crossStreet)), __LINE__);
        }
        $this->CrossStreet = $crossStreet;
        return $this;
    }
    /**
     * Get AdditionalDescriptions value
     * @return string[]|null
     */
    public function getAdditionalDescriptions()
    {
        return $this->AdditionalDescriptions;
    }
    /**
     * Set AdditionalDescriptions value
     * @throws \InvalidArgumentException
     * @param string[] $additionalDescriptions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressAncillaryDetail
     */
    public function setAdditionalDescriptions(array $additionalDescriptions = array())
    {
        foreach ($additionalDescriptions as $addressAncillaryDetailAdditionalDescriptionsItem) {
            // validation for constraint: itemType
            if (!is_string($addressAncillaryDetailAdditionalDescriptionsItem)) {
                throw new \InvalidArgumentException(sprintf('The AdditionalDescriptions property can only contain items of string, "%s" given', is_object($addressAncillaryDetailAdditionalDescriptionsItem) ? get_class($addressAncillaryDetailAdditionalDescriptionsItem) : gettype($addressAncillaryDetailAdditionalDescriptionsItem)), __LINE__);
            }
        }
        $this->AdditionalDescriptions = $additionalDescriptions;
        return $this;
    }
    /**
     * Add item to AdditionalDescriptions value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressAncillaryDetail
     */
    public function addToAdditionalDescriptions($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The AdditionalDescriptions property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalDescriptions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressAncillaryDetail
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
