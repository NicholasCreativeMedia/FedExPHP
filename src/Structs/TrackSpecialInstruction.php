<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackSpecialInstruction Structs
 * @subpackage Structs
 */
class TrackSpecialInstruction extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The DeliveryOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryOption;
    /**
     * The StatusDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the status and status update time of the track special instructions.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SpecialInstructionStatusDetail
     */
    public $StatusDetail;
    /**
     * The OriginalEstimatedDeliveryTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the estimated delivery time that was originally estimated when the shipment was shipped.
     * - minOccurs: 0
     * @var string
     */
    public $OriginalEstimatedDeliveryTimestamp;
    /**
     * The OriginalRequestTime
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the time the customer requested a change to the shipment.
     * - minOccurs: 0
     * @var string
     */
    public $OriginalRequestTime;
    /**
     * The RequestedAppointmentTime
     * Meta informations extracted from the WSDL
     * - documentation: The requested appointment time for delivery.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AppointmentDetail
     */
    public $RequestedAppointmentTime;
    /**
     * Constructor method for TrackSpecialInstruction
     * @uses TrackSpecialInstruction::setDescription()
     * @uses TrackSpecialInstruction::setDeliveryOption()
     * @uses TrackSpecialInstruction::setStatusDetail()
     * @uses TrackSpecialInstruction::setOriginalEstimatedDeliveryTimestamp()
     * @uses TrackSpecialInstruction::setOriginalRequestTime()
     * @uses TrackSpecialInstruction::setRequestedAppointmentTime()
     * @param string $description
     * @param string $deliveryOption
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SpecialInstructionStatusDetail $statusDetail
     * @param string $originalEstimatedDeliveryTimestamp
     * @param string $originalRequestTime
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AppointmentDetail $requestedAppointmentTime
     */
    public function __construct($description = null, $deliveryOption = null, \NicholasCreativeMedia\FedExPHP\Structs\SpecialInstructionStatusDetail $statusDetail = null, $originalEstimatedDeliveryTimestamp = null, $originalRequestTime = null, \NicholasCreativeMedia\FedExPHP\Structs\AppointmentDetail $requestedAppointmentTime = null)
    {
        $this
            ->setDescription($description)
            ->setDeliveryOption($deliveryOption)
            ->setStatusDetail($statusDetail)
            ->setOriginalEstimatedDeliveryTimestamp($originalEstimatedDeliveryTimestamp)
            ->setOriginalRequestTime($originalRequestTime)
            ->setRequestedAppointmentTime($requestedAppointmentTime);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction
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
     * Get DeliveryOption value
     * @return string|null
     */
    public function getDeliveryOption()
    {
        return $this->DeliveryOption;
    }
    /**
     * Set DeliveryOption value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackDeliveryOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackDeliveryOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliveryOption
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction
     */
    public function setDeliveryOption($deliveryOption = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackDeliveryOptionType::valueIsValid($deliveryOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryOption, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackDeliveryOptionType::getValidValues())), __LINE__);
        }
        $this->DeliveryOption = $deliveryOption;
        return $this;
    }
    /**
     * Get StatusDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SpecialInstructionStatusDetail|null
     */
    public function getStatusDetail()
    {
        return $this->StatusDetail;
    }
    /**
     * Set StatusDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SpecialInstructionStatusDetail $statusDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction
     */
    public function setStatusDetail(\NicholasCreativeMedia\FedExPHP\Structs\SpecialInstructionStatusDetail $statusDetail = null)
    {
        $this->StatusDetail = $statusDetail;
        return $this;
    }
    /**
     * Get OriginalEstimatedDeliveryTimestamp value
     * @return string|null
     */
    public function getOriginalEstimatedDeliveryTimestamp()
    {
        return $this->OriginalEstimatedDeliveryTimestamp;
    }
    /**
     * Set OriginalEstimatedDeliveryTimestamp value
     * @param string $originalEstimatedDeliveryTimestamp
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction
     */
    public function setOriginalEstimatedDeliveryTimestamp($originalEstimatedDeliveryTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($originalEstimatedDeliveryTimestamp) && !is_string($originalEstimatedDeliveryTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalEstimatedDeliveryTimestamp)), __LINE__);
        }
        $this->OriginalEstimatedDeliveryTimestamp = $originalEstimatedDeliveryTimestamp;
        return $this;
    }
    /**
     * Get OriginalRequestTime value
     * @return string|null
     */
    public function getOriginalRequestTime()
    {
        return $this->OriginalRequestTime;
    }
    /**
     * Set OriginalRequestTime value
     * @param string $originalRequestTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction
     */
    public function setOriginalRequestTime($originalRequestTime = null)
    {
        // validation for constraint: string
        if (!is_null($originalRequestTime) && !is_string($originalRequestTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalRequestTime)), __LINE__);
        }
        $this->OriginalRequestTime = $originalRequestTime;
        return $this;
    }
    /**
     * Get RequestedAppointmentTime value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AppointmentDetail|null
     */
    public function getRequestedAppointmentTime()
    {
        return $this->RequestedAppointmentTime;
    }
    /**
     * Set RequestedAppointmentTime value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AppointmentDetail $requestedAppointmentTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction
     */
    public function setRequestedAppointmentTime(\NicholasCreativeMedia\FedExPHP\Structs\AppointmentDetail $requestedAppointmentTime = null)
    {
        $this->RequestedAppointmentTime = $requestedAppointmentTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction
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
