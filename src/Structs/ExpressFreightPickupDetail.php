<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpressFreightPickupDetail Structs
 * @subpackage Structs
 */
class ExpressFreightPickupDetail extends AbstractStructBase
{
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Service;
    /**
     * The BookingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BookingNumber;
    /**
     * The Dimensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Dimensions
     */
    public $Dimensions;
    /**
     * The TruckType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TruckType;
    /**
     * The TrailerSize
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TrailerSize;
    /**
     * Constructor method for ExpressFreightPickupDetail
     * @uses ExpressFreightPickupDetail::setService()
     * @uses ExpressFreightPickupDetail::setBookingNumber()
     * @uses ExpressFreightPickupDetail::setDimensions()
     * @uses ExpressFreightPickupDetail::setTruckType()
     * @uses ExpressFreightPickupDetail::setTrailerSize()
     * @param string $service
     * @param string $bookingNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $dimensions
     * @param string $truckType
     * @param string $trailerSize
     */
    public function __construct($service = null, $bookingNumber = null, \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $dimensions = null, $truckType = null, $trailerSize = null)
    {
        $this
            ->setService($service)
            ->setBookingNumber($bookingNumber)
            ->setDimensions($dimensions)
            ->setTruckType($truckType)
            ->setTrailerSize($trailerSize);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightPickupDetail
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
     * Get BookingNumber value
     * @return string|null
     */
    public function getBookingNumber()
    {
        return $this->BookingNumber;
    }
    /**
     * Set BookingNumber value
     * @param string $bookingNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightPickupDetail
     */
    public function setBookingNumber($bookingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bookingNumber) && !is_string($bookingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingNumber)), __LINE__);
        }
        $this->BookingNumber = $bookingNumber;
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Dimensions|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $dimensions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightPickupDetail
     */
    public function setDimensions(\NicholasCreativeMedia\FedExPHP\Structs\Dimensions $dimensions = null)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    /**
     * Get TruckType value
     * @return string|null
     */
    public function getTruckType()
    {
        return $this->TruckType;
    }
    /**
     * Set TruckType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TruckType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TruckType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $truckType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightPickupDetail
     */
    public function setTruckType($truckType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TruckType::valueIsValid($truckType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $truckType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TruckType::getValidValues())), __LINE__);
        }
        $this->TruckType = $truckType;
        return $this;
    }
    /**
     * Get TrailerSize value
     * @return string|null
     */
    public function getTrailerSize()
    {
        return $this->TrailerSize;
    }
    /**
     * Set TrailerSize value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrailerSizeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrailerSizeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $trailerSize
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightPickupDetail
     */
    public function setTrailerSize($trailerSize = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TrailerSizeType::valueIsValid($trailerSize)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $trailerSize, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrailerSizeType::getValidValues())), __LINE__);
        }
        $this->TrailerSize = $trailerSize;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ExpressFreightPickupDetail
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
