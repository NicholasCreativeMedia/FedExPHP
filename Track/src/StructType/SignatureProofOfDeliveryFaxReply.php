<?php

namespace NicholasCreativeMedia\FedExPHP\Track\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureProofOfDeliveryFaxReply StructType
 * Meta informations extracted from the WSDL
 * - type: ns:SignatureProofOfDeliveryFaxReply
 * @subpackage Structs
 */
class SignatureProofOfDeliveryFaxReply extends AbstractStructBase
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
     * @var \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification[]
     */
    public $Notifications;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: Contains the version of the reply being used.
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Track\StructType\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains the CustomerTransactionDetail that is echoed back to the caller for matching requests and replies and a Localization element for defining the language/translation used in the reply data.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Track\StructType\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The FaxConfirmationNumber
     * Meta informations extracted from the WSDL
     * - documentation: Confirmation of fax transmission.
     * - minOccurs: 0
     * @var string
     */
    public $FaxConfirmationNumber;
    /**
     * Constructor method for SignatureProofOfDeliveryFaxReply
     * @uses SignatureProofOfDeliveryFaxReply::setHighestSeverity()
     * @uses SignatureProofOfDeliveryFaxReply::setNotifications()
     * @uses SignatureProofOfDeliveryFaxReply::setVersion()
     * @uses SignatureProofOfDeliveryFaxReply::setTransactionDetail()
     * @uses SignatureProofOfDeliveryFaxReply::setFaxConfirmationNumber()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\TransactionDetail $transactionDetail
     * @param string $faxConfirmationNumber
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Track\StructType\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Track\StructType\TransactionDetail $transactionDetail = null, $faxConfirmationNumber = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setFaxConfirmationNumber($faxConfirmationNumber);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationSeverityType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationSeverityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highestSeverity
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryFaxReply
     */
    public function setHighestSeverity($highestSeverity = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationSeverityType::valueIsValid($highestSeverity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highestSeverity, implode(', ', \NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification[] $notifications
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryFaxReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $signatureProofOfDeliveryFaxReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$signatureProofOfDeliveryFaxReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification, "%s" given', is_object($signatureProofOfDeliveryFaxReplyNotificationsItem) ? get_class($signatureProofOfDeliveryFaxReplyNotificationsItem) : gettype($signatureProofOfDeliveryFaxReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryFaxReply
     */
    public function addToNotifications(\NicholasCreativeMedia\FedExPHP\Track\StructType\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification) {
            throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notifications[] = $item;
        return $this;
    }
    /**
     * Get Version value
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\VersionId $version
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryFaxReply
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Track\StructType\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\TransactionDetail $transactionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryFaxReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Track\StructType\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get FaxConfirmationNumber value
     * @return string|null
     */
    public function getFaxConfirmationNumber()
    {
        return $this->FaxConfirmationNumber;
    }
    /**
     * Set FaxConfirmationNumber value
     * @param string $faxConfirmationNumber
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryFaxReply
     */
    public function setFaxConfirmationNumber($faxConfirmationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($faxConfirmationNumber) && !is_string($faxConfirmationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($faxConfirmationNumber)), __LINE__);
        }
        $this->FaxConfirmationNumber = $faxConfirmationNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryFaxReply
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
