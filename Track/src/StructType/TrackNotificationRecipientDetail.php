<?php

namespace NicholasCreativeMedia\FedExPHP\Track\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackNotificationRecipientDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Options available for a tracking notification recipient.
 * @subpackage Structs
 */
class TrackNotificationRecipientDetail extends AbstractStructBase
{
    /**
     * The NotificationEventsAvailable
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $NotificationEventsAvailable;
    /**
     * Constructor method for TrackNotificationRecipientDetail
     * @uses TrackNotificationRecipientDetail::setNotificationEventsAvailable()
     * @param string[] $notificationEventsAvailable
     */
    public function __construct(array $notificationEventsAvailable = array())
    {
        $this
            ->setNotificationEventsAvailable($notificationEventsAvailable);
    }
    /**
     * Get NotificationEventsAvailable value
     * @return string[]|null
     */
    public function getNotificationEventsAvailable()
    {
        return $this->NotificationEventsAvailable;
    }
    /**
     * Set NotificationEventsAvailable value
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationEventType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationEventType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $notificationEventsAvailable
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackNotificationRecipientDetail
     */
    public function setNotificationEventsAvailable(array $notificationEventsAvailable = array())
    {
        $invalidValues = array();
        foreach ($notificationEventsAvailable as $trackNotificationRecipientDetailNotificationEventsAvailableItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationEventType::valueIsValid($trackNotificationRecipientDetailNotificationEventsAvailableItem)) {
                $invalidValues[] = var_export($trackNotificationRecipientDetailNotificationEventsAvailableItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationEventType::getValidValues())), __LINE__);
        }
        $this->NotificationEventsAvailable = $notificationEventsAvailable;
        return $this;
    }
    /**
     * Add item to NotificationEventsAvailable value
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationEventType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationEventType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackNotificationRecipientDetail
     */
    public function addToNotificationEventsAvailable($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationEventType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationEventType::getValidValues())), __LINE__);
        }
        $this->NotificationEventsAvailable[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackNotificationRecipientDetail
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
