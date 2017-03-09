<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendNotificationsReply Structs
 * Meta informations extracted from the WSDL
 * - type: ns:SendNotificationsReply
 * @subpackage Structs
 */
class SendNotificationsReply extends AbstractStructBase
{
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - documentation: This contains the severity type of the most severe Notification in the Notifications array.
     * - minOccurs: 1
     * @var string
     */
    public $HighestSeverity;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - documentation: Information about the request/reply such was the transaction successful or not, and any additional information relevant to the request and/or reply. There may be multiple Notifications in a reply.
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Notification[]
     */
    public $Notifications;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: Contains the version of the reply being used.
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains the CustomerTransactionDetail that is echoed back to the caller for matching requests and replies and a Localization element for defining the language/translation used in the reply data.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The DuplicateWaybill
     * Meta informations extracted from the WSDL
     * - documentation: True if duplicate packages (more than one package with the same tracking number) have been found, the packages array contains information about each duplicate. Use this information to determine which of the tracking numbers is the
     * one you need and resend your request using the tracking number and TrackingNumberUniqueIdentifier for that package.
     * - minOccurs: 0
     * @var bool
     */
    public $DuplicateWaybill;
    /**
     * The MoreDataAvailable
     * Meta informations extracted from the WSDL
     * - documentation: True if additional packages remain to be retrieved.
     * - minOccurs: 0
     * @var bool
     */
    public $MoreDataAvailable;
    /**
     * The PagingToken
     * Meta informations extracted from the WSDL
     * - documentation: Value that must be passed in a TrackNotification request to retrieve the next set of packages (when MoreDataAvailable = true).
     * - minOccurs: 0
     * @var string
     */
    public $PagingToken;
    /**
     * The Packages
     * Meta informations extracted from the WSDL
     * - documentation: Information about the notifications that are available for this tracking number. If there are duplicates the ship date and destination address information is returned for determining which TrackingNumberUniqueIdentifier to use on a
     * subsequent request.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackNotificationPackage[]
     */
    public $Packages;
    /**
     * Constructor method for SendNotificationsReply
     * @uses SendNotificationsReply::setHighestSeverity()
     * @uses SendNotificationsReply::setNotifications()
     * @uses SendNotificationsReply::setVersion()
     * @uses SendNotificationsReply::setTransactionDetail()
     * @uses SendNotificationsReply::setDuplicateWaybill()
     * @uses SendNotificationsReply::setMoreDataAvailable()
     * @uses SendNotificationsReply::setPagingToken()
     * @uses SendNotificationsReply::setPackages()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param bool $duplicateWaybill
     * @param bool $moreDataAvailable
     * @param string $pagingToken
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackNotificationPackage[] $packages
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $duplicateWaybill = null, $moreDataAvailable = null, $pagingToken = null, array $packages = array())
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setDuplicateWaybill($duplicateWaybill)
            ->setMoreDataAvailable($moreDataAvailable)
            ->setPagingToken($pagingToken)
            ->setPackages($packages);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $sendNotificationsReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$sendNotificationsReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($sendNotificationsReplyNotificationsItem) ? get_class($sendNotificationsReplyNotificationsItem) : gettype($sendNotificationsReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsReply
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get DuplicateWaybill value
     * @return bool|null
     */
    public function getDuplicateWaybill()
    {
        return $this->DuplicateWaybill;
    }
    /**
     * Set DuplicateWaybill value
     * @param bool $duplicateWaybill
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsReply
     */
    public function setDuplicateWaybill($duplicateWaybill = null)
    {
        $this->DuplicateWaybill = $duplicateWaybill;
        return $this;
    }
    /**
     * Get MoreDataAvailable value
     * @return bool|null
     */
    public function getMoreDataAvailable()
    {
        return $this->MoreDataAvailable;
    }
    /**
     * Set MoreDataAvailable value
     * @param bool $moreDataAvailable
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsReply
     */
    public function setMoreDataAvailable($moreDataAvailable = null)
    {
        $this->MoreDataAvailable = $moreDataAvailable;
        return $this;
    }
    /**
     * Get PagingToken value
     * @return string|null
     */
    public function getPagingToken()
    {
        return $this->PagingToken;
    }
    /**
     * Set PagingToken value
     * @param string $pagingToken
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsReply
     */
    public function setPagingToken($pagingToken = null)
    {
        // validation for constraint: string
        if (!is_null($pagingToken) && !is_string($pagingToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pagingToken)), __LINE__);
        }
        $this->PagingToken = $pagingToken;
        return $this;
    }
    /**
     * Get Packages value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackNotificationPackage[]|null
     */
    public function getPackages()
    {
        return $this->Packages;
    }
    /**
     * Set Packages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackNotificationPackage[] $packages
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsReply
     */
    public function setPackages(array $packages = array())
    {
        foreach ($packages as $sendNotificationsReplyPackagesItem) {
            // validation for constraint: itemType
            if (!$sendNotificationsReplyPackagesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackNotificationPackage) {
                throw new \InvalidArgumentException(sprintf('The Packages property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackNotificationPackage, "%s" given', is_object($sendNotificationsReplyPackagesItem) ? get_class($sendNotificationsReplyPackagesItem) : gettype($sendNotificationsReplyPackagesItem)), __LINE__);
            }
        }
        $this->Packages = $packages;
        return $this;
    }
    /**
     * Add item to Packages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackNotificationPackage $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsReply
     */
    public function addToPackages(\NicholasCreativeMedia\FedExPHP\Structs\TrackNotificationPackage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackNotificationPackage) {
            throw new \InvalidArgumentException(sprintf('The Packages property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackNotificationPackage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Packages[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SendNotificationsReply
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
