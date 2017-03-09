<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMailRecipient StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information describing the address of of the email recipient, role of the email recipient and languages that are requested to be supported.
 * @subpackage Structs
 */
class EMailRecipient extends AbstractStructBase
{
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - documentation: EMail address of the recipient.
     * - minOccurs: 0
     * @var string
     */
    public $EmailAddress;
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - documentation: The relationship that the customer has to the pending shipment.
     * - minOccurs: 0
     * @var string
     */
    public $Role;
    /**
     * The OptionsRequested
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how the email notification for the pending shipment need to be processed.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\EmailOptionsRequested
     */
    public $OptionsRequested;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Localization and language details specified by the recipient of the EMail.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization
     */
    public $Localization;
    /**
     * Constructor method for EMailRecipient
     * @uses EMailRecipient::setEmailAddress()
     * @uses EMailRecipient::setRole()
     * @uses EMailRecipient::setOptionsRequested()
     * @uses EMailRecipient::setLocalization()
     * @param string $emailAddress
     * @param string $role
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EmailOptionsRequested $optionsRequested
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization $localization
     */
    public function __construct($emailAddress = null, $role = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\EmailOptionsRequested $optionsRequested = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Localization $localization = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setRole($role)
            ->setOptionsRequested($optionsRequested)
            ->setLocalization($localization);
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get Role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\AccessorRoleType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\AccessorRoleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $role
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient
     */
    public function setRole($role = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\AccessorRoleType::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $role, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\AccessorRoleType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Get OptionsRequested value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EmailOptionsRequested|null
     */
    public function getOptionsRequested()
    {
        return $this->OptionsRequested;
    }
    /**
     * Set OptionsRequested value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EmailOptionsRequested $optionsRequested
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient
     */
    public function setOptionsRequested(\NicholasCreativeMedia\FedExPHP\Ship\StructType\EmailOptionsRequested $optionsRequested = null)
    {
        $this->OptionsRequested = $optionsRequested;
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient
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
