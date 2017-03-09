<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:CreatePickupReply
 * @subpackage Structs
 */
class CreatePickupReply extends AbstractStructBase
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
     * The PickupConfirmationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PickupConfirmationNumber;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The MessageCode
     * Meta informations extracted from the WSDL
     * - documentation: Coded value supplied by dispatch system.
     * - minOccurs: 0
     * @var string
     */
    public $MessageCode;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: Message supplied by dispatch system.
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The PRPControlNumber
     * Meta informations extracted from the WSDL
     * - documentation: Package Return Program control number
     * - minOccurs: 0
     * @var string
     */
    public $PRPControlNumber;
    /**
     * The LastAccessTime
     * Meta informations extracted from the WSDL
     * - documentation: Used with "stay late" requests; postal-code specific.
     * - minOccurs: 0
     * @var string
     */
    public $LastAccessTime;
    /**
     * The CompletedFreightPickupDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupDetail
     */
    public $CompletedFreightPickupDetail;
    /**
     * Constructor method for CreatePickupReply
     * @uses CreatePickupReply::setHighestSeverity()
     * @uses CreatePickupReply::setNotifications()
     * @uses CreatePickupReply::setVersion()
     * @uses CreatePickupReply::setTransactionDetail()
     * @uses CreatePickupReply::setPickupConfirmationNumber()
     * @uses CreatePickupReply::setLocation()
     * @uses CreatePickupReply::setMessageCode()
     * @uses CreatePickupReply::setMessage()
     * @uses CreatePickupReply::setPRPControlNumber()
     * @uses CreatePickupReply::setLastAccessTime()
     * @uses CreatePickupReply::setCompletedFreightPickupDetail()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $pickupConfirmationNumber
     * @param string $location
     * @param string $messageCode
     * @param string $message
     * @param string $pRPControlNumber
     * @param string $lastAccessTime
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupDetail $completedFreightPickupDetail
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $pickupConfirmationNumber = null, $location = null, $messageCode = null, $message = null, $pRPControlNumber = null, $lastAccessTime = null, \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupDetail $completedFreightPickupDetail = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setPickupConfirmationNumber($pickupConfirmationNumber)
            ->setLocation($location)
            ->setMessageCode($messageCode)
            ->setMessage($message)
            ->setPRPControlNumber($pRPControlNumber)
            ->setLastAccessTime($lastAccessTime)
            ->setCompletedFreightPickupDetail($completedFreightPickupDetail);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $createPickupReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$createPickupReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($createPickupReplyNotificationsItem) ? get_class($createPickupReplyNotificationsItem) : gettype($createPickupReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get PickupConfirmationNumber value
     * @return string|null
     */
    public function getPickupConfirmationNumber()
    {
        return $this->PickupConfirmationNumber;
    }
    /**
     * Set PickupConfirmationNumber value
     * @param string $pickupConfirmationNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($pickupConfirmationNumber) && !is_string($pickupConfirmationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickupConfirmationNumber)), __LINE__);
        }
        $this->PickupConfirmationNumber = $pickupConfirmationNumber;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get MessageCode value
     * @return string|null
     */
    public function getMessageCode()
    {
        return $this->MessageCode;
    }
    /**
     * Set MessageCode value
     * @param string $messageCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply
     */
    public function setMessageCode($messageCode = null)
    {
        // validation for constraint: string
        if (!is_null($messageCode) && !is_string($messageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageCode)), __LINE__);
        }
        $this->MessageCode = $messageCode;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get PRPControlNumber value
     * @return string|null
     */
    public function getPRPControlNumber()
    {
        return $this->PRPControlNumber;
    }
    /**
     * Set PRPControlNumber value
     * @param string $pRPControlNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply
     */
    public function setPRPControlNumber($pRPControlNumber = null)
    {
        // validation for constraint: string
        if (!is_null($pRPControlNumber) && !is_string($pRPControlNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pRPControlNumber)), __LINE__);
        }
        $this->PRPControlNumber = $pRPControlNumber;
        return $this;
    }
    /**
     * Get LastAccessTime value
     * @return string|null
     */
    public function getLastAccessTime()
    {
        return $this->LastAccessTime;
    }
    /**
     * Set LastAccessTime value
     * @param string $lastAccessTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply
     */
    public function setLastAccessTime($lastAccessTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastAccessTime) && !is_string($lastAccessTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastAccessTime)), __LINE__);
        }
        $this->LastAccessTime = $lastAccessTime;
        return $this;
    }
    /**
     * Get CompletedFreightPickupDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupDetail|null
     */
    public function getCompletedFreightPickupDetail()
    {
        return $this->CompletedFreightPickupDetail;
    }
    /**
     * Set CompletedFreightPickupDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupDetail $completedFreightPickupDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply
     */
    public function setCompletedFreightPickupDetail(\NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupDetail $completedFreightPickupDetail = null)
    {
        $this->CompletedFreightPickupDetail = $completedFreightPickupDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CreatePickupReply
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
