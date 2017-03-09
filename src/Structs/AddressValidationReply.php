<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressValidationReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:AddressValidationReply
 * @subpackage Structs
 */
class AddressValidationReply extends AbstractStructBase
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
     * The ReplyTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReplyTimestamp;
    /**
     * The AddressResults
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult[]
     */
    public $AddressResults;
    /**
     * Constructor method for AddressValidationReply
     * @uses AddressValidationReply::setHighestSeverity()
     * @uses AddressValidationReply::setNotifications()
     * @uses AddressValidationReply::setVersion()
     * @uses AddressValidationReply::setTransactionDetail()
     * @uses AddressValidationReply::setReplyTimestamp()
     * @uses AddressValidationReply::setAddressResults()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $replyTimestamp
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult[] $addressResults
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $replyTimestamp = null, array $addressResults = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setReplyTimestamp($replyTimestamp)
            ->setAddressResults($addressResults);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $addressValidationReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$addressValidationReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($addressValidationReplyNotificationsItem) ? get_class($addressValidationReplyNotificationsItem) : gettype($addressValidationReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ReplyTimestamp value
     * @return string|null
     */
    public function getReplyTimestamp()
    {
        return $this->ReplyTimestamp;
    }
    /**
     * Set ReplyTimestamp value
     * @param string $replyTimestamp
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationReply
     */
    public function setReplyTimestamp($replyTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($replyTimestamp) && !is_string($replyTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($replyTimestamp)), __LINE__);
        }
        $this->ReplyTimestamp = $replyTimestamp;
        return $this;
    }
    /**
     * Get AddressResults value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult[]|null
     */
    public function getAddressResults()
    {
        return $this->AddressResults;
    }
    /**
     * Set AddressResults value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult[] $addressResults
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationReply
     */
    public function setAddressResults(array $addressResults = array())
    {
        foreach ($addressResults as $addressValidationReplyAddressResultsItem) {
            // validation for constraint: itemType
            if (!$addressValidationReplyAddressResultsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult) {
                throw new \InvalidArgumentException(sprintf('The AddressResults property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult, "%s" given', is_object($addressValidationReplyAddressResultsItem) ? get_class($addressValidationReplyAddressResultsItem) : gettype($addressValidationReplyAddressResultsItem)), __LINE__);
            }
        }
        $this->AddressResults = $addressResults;
        return $this;
    }
    /**
     * Add item to AddressResults value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationReply
     */
    public function addToAddressResults(\NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult) {
            throw new \InvalidArgumentException(sprintf('The AddressResults property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationResult, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressResults[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressValidationReply
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
