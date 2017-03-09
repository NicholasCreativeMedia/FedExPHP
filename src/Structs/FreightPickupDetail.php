<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightPickupDetail Structs
 * @subpackage Structs
 */
class FreightPickupDetail extends AbstractStructBase
{
    /**
     * The ApprovedBy
     * Meta informations extracted from the WSDL
     * - documentation: Contact Information of origin service center representative that authorized the pickup
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Contact
     */
    public $ApprovedBy;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Payment;
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Role;
    /**
     * The AlternateBilling
     * Meta informations extracted from the WSDL
     * - documentation: Used in connection with "Send Bill To" (SBT) identification of customer's account used for billing.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Party
     */
    public $AlternateBilling;
    /**
     * The SubmittedBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Contact
     */
    public $SubmittedBy;
    /**
     * The LineItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem[]
     */
    public $LineItems;
    /**
     * Constructor method for FreightPickupDetail
     * @uses FreightPickupDetail::setApprovedBy()
     * @uses FreightPickupDetail::setPayment()
     * @uses FreightPickupDetail::setRole()
     * @uses FreightPickupDetail::setAlternateBilling()
     * @uses FreightPickupDetail::setSubmittedBy()
     * @uses FreightPickupDetail::setLineItems()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Contact $approvedBy
     * @param string $payment
     * @param string $role
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $alternateBilling
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Contact $submittedBy
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem[] $lineItems
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\Contact $approvedBy = null, $payment = null, $role = null, \NicholasCreativeMedia\FedExPHP\Structs\Party $alternateBilling = null, \NicholasCreativeMedia\FedExPHP\Structs\Contact $submittedBy = null, array $lineItems = array())
    {
        $this
            ->setApprovedBy($approvedBy)
            ->setPayment($payment)
            ->setRole($role)
            ->setAlternateBilling($alternateBilling)
            ->setSubmittedBy($submittedBy)
            ->setLineItems($lineItems);
    }
    /**
     * Get ApprovedBy value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Contact|null
     */
    public function getApprovedBy()
    {
        return $this->ApprovedBy;
    }
    /**
     * Set ApprovedBy value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Contact $approvedBy
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupDetail
     */
    public function setApprovedBy(\NicholasCreativeMedia\FedExPHP\Structs\Contact $approvedBy = null)
    {
        $this->ApprovedBy = $approvedBy;
        return $this;
    }
    /**
     * Get Payment value
     * @return string|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PaymentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $payment
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupDetail
     */
    public function setPayment($payment = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PaymentType::valueIsValid($payment)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $payment, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PaymentType::getValidValues())), __LINE__);
        }
        $this->Payment = $payment;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\FreightShipmentRoleType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\FreightShipmentRoleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $role
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupDetail
     */
    public function setRole($role = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\FreightShipmentRoleType::valueIsValid($role)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $role, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\FreightShipmentRoleType::getValidValues())), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Get AlternateBilling value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Party|null
     */
    public function getAlternateBilling()
    {
        return $this->AlternateBilling;
    }
    /**
     * Set AlternateBilling value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $alternateBilling
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupDetail
     */
    public function setAlternateBilling(\NicholasCreativeMedia\FedExPHP\Structs\Party $alternateBilling = null)
    {
        $this->AlternateBilling = $alternateBilling;
        return $this;
    }
    /**
     * Get SubmittedBy value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Contact|null
     */
    public function getSubmittedBy()
    {
        return $this->SubmittedBy;
    }
    /**
     * Set SubmittedBy value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Contact $submittedBy
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupDetail
     */
    public function setSubmittedBy(\NicholasCreativeMedia\FedExPHP\Structs\Contact $submittedBy = null)
    {
        $this->SubmittedBy = $submittedBy;
        return $this;
    }
    /**
     * Get LineItems value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem[]|null
     */
    public function getLineItems()
    {
        return $this->LineItems;
    }
    /**
     * Set LineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem[] $lineItems
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupDetail
     */
    public function setLineItems(array $lineItems = array())
    {
        foreach ($lineItems as $freightPickupDetailLineItemsItem) {
            // validation for constraint: itemType
            if (!$freightPickupDetailLineItemsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem) {
                throw new \InvalidArgumentException(sprintf('The LineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem, "%s" given', is_object($freightPickupDetailLineItemsItem) ? get_class($freightPickupDetailLineItemsItem) : gettype($freightPickupDetailLineItemsItem)), __LINE__);
            }
        }
        $this->LineItems = $lineItems;
        return $this;
    }
    /**
     * Add item to LineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupDetail
     */
    public function addToLineItems(\NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem) {
            throw new \InvalidArgumentException(sprintf('The LineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LineItems[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupDetail
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
