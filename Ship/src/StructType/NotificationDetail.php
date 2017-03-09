<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationDetail StructType
 * @subpackage Structs
 */
class NotificationDetail extends AbstractStructBase
{
    /**
     * The NotificationType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of notification that will be sent.
     * - minOccurs: 0
     * @var string
     */
    public $NotificationType;
    /**
     * The EmailDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the email notification details.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailDetail
     */
    public $EmailDetail;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the localization for this notification.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization
     */
    public $Localization;
    /**
     * Constructor method for NotificationDetail
     * @uses NotificationDetail::setNotificationType()
     * @uses NotificationDetail::setEmailDetail()
     * @uses NotificationDetail::setLocalization()
     * @param string $notificationType
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailDetail $emailDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization $localization
     */
    public function __construct($notificationType = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailDetail $emailDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization $localization = null)
    {
        $this
            ->setNotificationType($notificationType)
            ->setEmailDetail($emailDetail)
            ->setLocalization($localization);
    }
    /**
     * Get NotificationType value
     * @return string|null
     */
    public function getNotificationType()
    {
        return $this->NotificationType;
    }
    /**
     * Set NotificationType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\NotificationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\NotificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $notificationType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\NotificationDetail
     */
    public function setNotificationType($notificationType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\NotificationType::valueIsValid($notificationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $notificationType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\NotificationType::getValidValues())), __LINE__);
        }
        $this->NotificationType = $notificationType;
        return $this;
    }
    /**
     * Get EmailDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailDetail|null
     */
    public function getEmailDetail()
    {
        return $this->EmailDetail;
    }
    /**
     * Set EmailDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailDetail $emailDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\NotificationDetail
     */
    public function setEmailDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailDetail $emailDetail = null)
    {
        $this->EmailDetail = $emailDetail;
        return $this;
    }
    /**
     * Get Localization value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization $localization
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\NotificationDetail
     */
    public function setLocalization(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization $localization = null)
    {
        $this->Localization = $localization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\NotificationDetail
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
