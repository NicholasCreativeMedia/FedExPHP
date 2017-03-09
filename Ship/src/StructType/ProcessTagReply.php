<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessTagReply StructType
 * Meta informations extracted from the WSDL
 * - type: ns:ProcessTagReply
 * @subpackage Structs
 */
class ProcessTagReply extends AbstractStructBase
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
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Notification[]
     */
    public $Notifications;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The CompletedShipmentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedShipmentDetail
     */
    public $CompletedShipmentDetail;
    /**
     * Constructor method for ProcessTagReply
     * @uses ProcessTagReply::setHighestSeverity()
     * @uses ProcessTagReply::setNotifications()
     * @uses ProcessTagReply::setVersion()
     * @uses ProcessTagReply::setTransactionDetail()
     * @uses ProcessTagReply::setCompletedShipmentDetail()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail $transactionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedShipmentDetail $completedShipmentDetail
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail $transactionDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedShipmentDetail $completedShipmentDetail = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setCompletedShipmentDetail($completedShipmentDetail);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\NotificationSeverityType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\NotificationSeverityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highestSeverity
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagReply
     */
    public function setHighestSeverity($highestSeverity = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\NotificationSeverityType::valueIsValid($highestSeverity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highestSeverity, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Notification[] $notifications
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $processTagReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$processTagReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\Notification, "%s" given', is_object($processTagReplyNotificationsItem) ? get_class($processTagReplyNotificationsItem) : gettype($processTagReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagReply
     */
    public function addToNotifications(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\Notification) {
            throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notifications[] = $item;
        return $this;
    }
    /**
     * Get Version value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId $version
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagReply
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail $transactionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get CompletedShipmentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedShipmentDetail|null
     */
    public function getCompletedShipmentDetail()
    {
        return $this->CompletedShipmentDetail;
    }
    /**
     * Set CompletedShipmentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedShipmentDetail $completedShipmentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagReply
     */
    public function setCompletedShipmentDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedShipmentDetail $completedShipmentDetail = null)
    {
        $this->CompletedShipmentDetail = $completedShipmentDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagReply
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
