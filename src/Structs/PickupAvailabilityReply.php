<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupAvailabilityReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:PickupAvailabilityReply
 * @subpackage Structs
 */
class PickupAvailabilityReply extends AbstractStructBase
{
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $HighestSeverity;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Notification[]
     */
    public $Notifications;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The RequestTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RequestTimestamp;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption[]
     */
    public $Options;
    /**
     * The CloseTimeType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies whether the close time is specified by the customer or is the default time.
     * - minOccurs: 0
     * @var string
     */
    public $CloseTimeType;
    /**
     * The CloseTime
     * Meta informations extracted from the WSDL
     * - documentation: Close time corresponding to the above specified type
     * - minOccurs: 0
     * @var string
     */
    public $CloseTime;
    /**
     * The LocalTime
     * Meta informations extracted from the WSDL
     * - documentation: Local time of the service center that will service the pickup
     * - minOccurs: 0
     * @var string
     */
    public $LocalTime;
    /**
     * Constructor method for PickupAvailabilityReply
     * @uses PickupAvailabilityReply::setHighestSeverity()
     * @uses PickupAvailabilityReply::setNotifications()
     * @uses PickupAvailabilityReply::setVersion()
     * @uses PickupAvailabilityReply::setTransactionDetail()
     * @uses PickupAvailabilityReply::setRequestTimestamp()
     * @uses PickupAvailabilityReply::setOptions()
     * @uses PickupAvailabilityReply::setCloseTimeType()
     * @uses PickupAvailabilityReply::setCloseTime()
     * @uses PickupAvailabilityReply::setLocalTime()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $requestTimestamp
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption[] $options
     * @param string $closeTimeType
     * @param string $closeTime
     * @param string $localTime
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $requestTimestamp = null, array $options = array(), $closeTimeType = null, $closeTime = null, $localTime = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setRequestTimestamp($requestTimestamp)
            ->setOptions($options)
            ->setCloseTimeType($closeTimeType)
            ->setCloseTime($closeTime)
            ->setLocalTime($localTime);
    }
    /**
     * Get HighestSeverity value
     * @return string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    /**
     * Set HighestSeverity value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highestSeverity
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityReply
     */
    public function setHighestSeverity($highestSeverity = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::valueIsValid($highestSeverity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highestSeverity, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $pickupAvailabilityReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$pickupAvailabilityReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($pickupAvailabilityReplyNotificationsItem) ? get_class($pickupAvailabilityReplyNotificationsItem) : gettype($pickupAvailabilityReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityReply
     */
    public function addToNotifications(\NicholasCreativeMedia\FedExPHP\Structs\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
            throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notifications[] = $item;
        return $this;
    }
    /**
     * Get Version value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityReply
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get RequestTimestamp value
     * @return string|null
     */
    public function getRequestTimestamp()
    {
        return $this->RequestTimestamp;
    }
    /**
     * Set RequestTimestamp value
     * @param string $requestTimestamp
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityReply
     */
    public function setRequestTimestamp($requestTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($requestTimestamp) && !is_string($requestTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestTimestamp)), __LINE__);
        }
        $this->RequestTimestamp = $requestTimestamp;
        return $this;
    }
    /**
     * Get Options value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption[]|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption[] $options
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityReply
     */
    public function setOptions(array $options = array())
    {
        foreach ($options as $pickupAvailabilityReplyOptionsItem) {
            // validation for constraint: itemType
            if (!$pickupAvailabilityReplyOptionsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption) {
                throw new \InvalidArgumentException(sprintf('The Options property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption, "%s" given', is_object($pickupAvailabilityReplyOptionsItem) ? get_class($pickupAvailabilityReplyOptionsItem) : gettype($pickupAvailabilityReplyOptionsItem)), __LINE__);
            }
        }
        $this->Options = $options;
        return $this;
    }
    /**
     * Add item to Options value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityReply
     */
    public function addToOptions(\NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption) {
            throw new \InvalidArgumentException(sprintf('The Options property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\PickupScheduleOption, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Options[] = $item;
        return $this;
    }
    /**
     * Get CloseTimeType value
     * @return string|null
     */
    public function getCloseTimeType()
    {
        return $this->CloseTimeType;
    }
    /**
     * Set CloseTimeType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CloseTimeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CloseTimeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $closeTimeType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityReply
     */
    public function setCloseTimeType($closeTimeType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CloseTimeType::valueIsValid($closeTimeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $closeTimeType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CloseTimeType::getValidValues())), __LINE__);
        }
        $this->CloseTimeType = $closeTimeType;
        return $this;
    }
    /**
     * Get CloseTime value
     * @return string|null
     */
    public function getCloseTime()
    {
        return $this->CloseTime;
    }
    /**
     * Set CloseTime value
     * @param string $closeTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityReply
     */
    public function setCloseTime($closeTime = null)
    {
        // validation for constraint: string
        if (!is_null($closeTime) && !is_string($closeTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($closeTime)), __LINE__);
        }
        $this->CloseTime = $closeTime;
        return $this;
    }
    /**
     * Get LocalTime value
     * @return string|null
     */
    public function getLocalTime()
    {
        return $this->LocalTime;
    }
    /**
     * Set LocalTime value
     * @param string $localTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityReply
     */
    public function setLocalTime($localTime = null)
    {
        // validation for constraint: string
        if (!is_null($localTime) && !is_string($localTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($localTime)), __LINE__);
        }
        $this->LocalTime = $localTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityReply
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
