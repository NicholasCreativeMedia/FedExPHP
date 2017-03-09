<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentEMailDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies how to e-mail shipping documents.
 * @subpackage Structs
 */
class ShippingDocumentEMailDetail extends AbstractStructBase
{
    /**
     * The EMailRecipients
     * Meta informations extracted from the WSDL
     * - documentation: Provides the roles and email addresses for e-mail recipients.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailRecipient[]
     */
    public $EMailRecipients;
    /**
     * The Grouping
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the convention by which documents are to be grouped as e-mail attachments.
     * - minOccurs: 0
     * @var string
     */
    public $Grouping;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the language in which the email containing the document is requested to be composed.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Localization
     */
    public $Localization;
    /**
     * Constructor method for ShippingDocumentEMailDetail
     * @uses ShippingDocumentEMailDetail::setEMailRecipients()
     * @uses ShippingDocumentEMailDetail::setGrouping()
     * @uses ShippingDocumentEMailDetail::setLocalization()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailRecipient[] $eMailRecipients
     * @param string $grouping
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Localization $localization
     */
    public function __construct(array $eMailRecipients = array(), $grouping = null, \NicholasCreativeMedia\FedExPHP\Structs\Localization $localization = null)
    {
        $this
            ->setEMailRecipients($eMailRecipients)
            ->setGrouping($grouping)
            ->setLocalization($localization);
    }
    /**
     * Get EMailRecipients value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailRecipient[]|null
     */
    public function getEMailRecipients()
    {
        return $this->EMailRecipients;
    }
    /**
     * Set EMailRecipients value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailRecipient[] $eMailRecipients
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailDetail
     */
    public function setEMailRecipients(array $eMailRecipients = array())
    {
        foreach ($eMailRecipients as $shippingDocumentEMailDetailEMailRecipientsItem) {
            // validation for constraint: itemType
            if (!$shippingDocumentEMailDetailEMailRecipientsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailRecipient) {
                throw new \InvalidArgumentException(sprintf('The EMailRecipients property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailRecipient, "%s" given', is_object($shippingDocumentEMailDetailEMailRecipientsItem) ? get_class($shippingDocumentEMailDetailEMailRecipientsItem) : gettype($shippingDocumentEMailDetailEMailRecipientsItem)), __LINE__);
            }
        }
        $this->EMailRecipients = $eMailRecipients;
        return $this;
    }
    /**
     * Add item to EMailRecipients value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailRecipient $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailDetail
     */
    public function addToEMailRecipients(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailRecipient $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailRecipient) {
            throw new \InvalidArgumentException(sprintf('The EMailRecipients property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailRecipient, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EMailRecipients[] = $item;
        return $this;
    }
    /**
     * Get Grouping value
     * @return string|null
     */
    public function getGrouping()
    {
        return $this->Grouping;
    }
    /**
     * Set Grouping value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentEMailGroupingType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentEMailGroupingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $grouping
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailDetail
     */
    public function setGrouping($grouping = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentEMailGroupingType::valueIsValid($grouping)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $grouping, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentEMailGroupingType::getValidValues())), __LINE__);
        }
        $this->Grouping = $grouping;
        return $this;
    }
    /**
     * Get Localization value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Localization $localization
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailDetail
     */
    public function setLocalization(\NicholasCreativeMedia\FedExPHP\Structs\Localization $localization = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentEMailDetail
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
