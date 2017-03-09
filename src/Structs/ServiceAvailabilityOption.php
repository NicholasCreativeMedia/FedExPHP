<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceAvailabilityOption Structs
 * @subpackage Structs
 */
class ServiceAvailabilityOption extends AbstractStructBase
{
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Service;
    /**
     * The DeliveryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryDate;
    /**
     * The DeliveryDay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryDay;
    /**
     * The DestinationStationId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationStationId;
    /**
     * The DestinationAirportId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationAirportId;
    /**
     * The TransitTime
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the commit time for a FedEx Ground shipment.
     * - minOccurs: 0
     * @var string
     */
    public $TransitTime;
    /**
     * Constructor method for ServiceAvailabilityOption
     * @uses ServiceAvailabilityOption::setService()
     * @uses ServiceAvailabilityOption::setDeliveryDate()
     * @uses ServiceAvailabilityOption::setDeliveryDay()
     * @uses ServiceAvailabilityOption::setDestinationStationId()
     * @uses ServiceAvailabilityOption::setDestinationAirportId()
     * @uses ServiceAvailabilityOption::setTransitTime()
     * @param string $service
     * @param string $deliveryDate
     * @param string $deliveryDay
     * @param string $destinationStationId
     * @param string $destinationAirportId
     * @param string $transitTime
     */
    public function __construct($service = null, $deliveryDate = null, $deliveryDay = null, $destinationStationId = null, $destinationAirportId = null, $transitTime = null)
    {
        $this
            ->setService($service)
            ->setDeliveryDate($deliveryDate)
            ->setDeliveryDay($deliveryDay)
            ->setDestinationStationId($destinationStationId)
            ->setDestinationAirportId($destinationAirportId)
            ->setTransitTime($transitTime);
    }
    /**
     * Get Service value
     * @return string|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $service
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityOption
     */
    public function setService($service = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ServiceType::valueIsValid($service)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $service, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::getValidValues())), __LINE__);
        }
        $this->Service = $service;
        return $this;
    }
    /**
     * Get DeliveryDate value
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param string $deliveryDate
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityOption
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Get DeliveryDay value
     * @return string|null
     */
    public function getDeliveryDay()
    {
        return $this->DeliveryDay;
    }
    /**
     * Set DeliveryDay value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliveryDay
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityOption
     */
    public function setDeliveryDay($deliveryDay = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid($deliveryDay)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryDay, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DeliveryDay = $deliveryDay;
        return $this;
    }
    /**
     * Get DestinationStationId value
     * @return string|null
     */
    public function getDestinationStationId()
    {
        return $this->DestinationStationId;
    }
    /**
     * Set DestinationStationId value
     * @param string $destinationStationId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityOption
     */
    public function setDestinationStationId($destinationStationId = null)
    {
        // validation for constraint: string
        if (!is_null($destinationStationId) && !is_string($destinationStationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationStationId)), __LINE__);
        }
        $this->DestinationStationId = $destinationStationId;
        return $this;
    }
    /**
     * Get DestinationAirportId value
     * @return string|null
     */
    public function getDestinationAirportId()
    {
        return $this->DestinationAirportId;
    }
    /**
     * Set DestinationAirportId value
     * @param string $destinationAirportId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityOption
     */
    public function setDestinationAirportId($destinationAirportId = null)
    {
        // validation for constraint: string
        if (!is_null($destinationAirportId) && !is_string($destinationAirportId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationAirportId)), __LINE__);
        }
        $this->DestinationAirportId = $destinationAirportId;
        return $this;
    }
    /**
     * Get TransitTime value
     * @return string|null
     */
    public function getTransitTime()
    {
        return $this->TransitTime;
    }
    /**
     * Set TransitTime value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TransitTimeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TransitTimeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transitTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityOption
     */
    public function setTransitTime($transitTime = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TransitTimeType::valueIsValid($transitTime)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $transitTime, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TransitTimeType::getValidValues())), __LINE__);
        }
        $this->TransitTime = $transitTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityOption
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
