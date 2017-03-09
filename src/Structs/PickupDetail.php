<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: This class describes the pickup characteristics of a shipment (e.g. for use in a tag request).
 * @subpackage Structs
 */
class PickupDetail extends AbstractStructBase
{
    /**
     * The ReadyDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReadyDateTime;
    /**
     * The LatestPickupDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LatestPickupDateTime;
    /**
     * The CourierInstructions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CourierInstructions;
    /**
     * The RequestType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RequestType;
    /**
     * The RequestSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RequestSource;
    /**
     * Constructor method for PickupDetail
     * @uses PickupDetail::setReadyDateTime()
     * @uses PickupDetail::setLatestPickupDateTime()
     * @uses PickupDetail::setCourierInstructions()
     * @uses PickupDetail::setRequestType()
     * @uses PickupDetail::setRequestSource()
     * @param string $readyDateTime
     * @param string $latestPickupDateTime
     * @param string $courierInstructions
     * @param string $requestType
     * @param string $requestSource
     */
    public function __construct($readyDateTime = null, $latestPickupDateTime = null, $courierInstructions = null, $requestType = null, $requestSource = null)
    {
        $this
            ->setReadyDateTime($readyDateTime)
            ->setLatestPickupDateTime($latestPickupDateTime)
            ->setCourierInstructions($courierInstructions)
            ->setRequestType($requestType)
            ->setRequestSource($requestSource);
    }
    /**
     * Get ReadyDateTime value
     * @return string|null
     */
    public function getReadyDateTime()
    {
        return $this->ReadyDateTime;
    }
    /**
     * Set ReadyDateTime value
     * @param string $readyDateTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupDetail
     */
    public function setReadyDateTime($readyDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($readyDateTime) && !is_string($readyDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($readyDateTime)), __LINE__);
        }
        $this->ReadyDateTime = $readyDateTime;
        return $this;
    }
    /**
     * Get LatestPickupDateTime value
     * @return string|null
     */
    public function getLatestPickupDateTime()
    {
        return $this->LatestPickupDateTime;
    }
    /**
     * Set LatestPickupDateTime value
     * @param string $latestPickupDateTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupDetail
     */
    public function setLatestPickupDateTime($latestPickupDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($latestPickupDateTime) && !is_string($latestPickupDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($latestPickupDateTime)), __LINE__);
        }
        $this->LatestPickupDateTime = $latestPickupDateTime;
        return $this;
    }
    /**
     * Get CourierInstructions value
     * @return string|null
     */
    public function getCourierInstructions()
    {
        return $this->CourierInstructions;
    }
    /**
     * Set CourierInstructions value
     * @param string $courierInstructions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupDetail
     */
    public function setCourierInstructions($courierInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($courierInstructions) && !is_string($courierInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($courierInstructions)), __LINE__);
        }
        $this->CourierInstructions = $courierInstructions;
        return $this;
    }
    /**
     * Get RequestType value
     * @return string|null
     */
    public function getRequestType()
    {
        return $this->RequestType;
    }
    /**
     * Set RequestType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $requestType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupDetail
     */
    public function setRequestType($requestType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::valueIsValid($requestType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $requestType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::getValidValues())), __LINE__);
        }
        $this->RequestType = $requestType;
        return $this;
    }
    /**
     * Get RequestSource value
     * @return string|null
     */
    public function getRequestSource()
    {
        return $this->RequestSource;
    }
    /**
     * Set RequestSource value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestSourceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestSourceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $requestSource
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupDetail
     */
    public function setRequestSource($requestSource = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PickupRequestSourceType::valueIsValid($requestSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $requestSource, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestSourceType::getValidValues())), __LINE__);
        }
        $this->RequestSource = $requestSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupDetail
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
