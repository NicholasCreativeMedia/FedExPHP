<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociatedShipmentDetail StructType
 * @subpackage Structs
 */
class AssociatedShipmentDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Sender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party
     */
    public $Sender;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party
     */
    public $Recipient;
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The PackagingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackagingType;
    /**
     * The TrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the tracking id for the payment on the return.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId
     */
    public $TrackingId;
    /**
     * The CustomerReferences
     * Meta informations extracted from the WSDL
     * - documentation: Specifies additional customer reference data about the associated shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference[]
     */
    public $CustomerReferences;
    /**
     * The ShipmentOperationalDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies shipment level operational information.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentOperationalDetail
     */
    public $ShipmentOperationalDetail;
    /**
     * The PackageOperationalDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies package level operational information on the associated shipment. This information is not tied to an individual outbound package.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageOperationalDetail
     */
    public $PackageOperationalDetail;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocument
     */
    public $Label;
    /**
     * Constructor method for AssociatedShipmentDetail
     * @uses AssociatedShipmentDetail::setType()
     * @uses AssociatedShipmentDetail::setSender()
     * @uses AssociatedShipmentDetail::setRecipient()
     * @uses AssociatedShipmentDetail::setServiceType()
     * @uses AssociatedShipmentDetail::setPackagingType()
     * @uses AssociatedShipmentDetail::setTrackingId()
     * @uses AssociatedShipmentDetail::setCustomerReferences()
     * @uses AssociatedShipmentDetail::setShipmentOperationalDetail()
     * @uses AssociatedShipmentDetail::setPackageOperationalDetail()
     * @uses AssociatedShipmentDetail::setLabel()
     * @param string $type
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $sender
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $recipient
     * @param string $serviceType
     * @param string $packagingType
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $trackingId
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference[] $customerReferences
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentOperationalDetail $shipmentOperationalDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageOperationalDetail $packageOperationalDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocument $label
     */
    public function __construct($type = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $sender = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $recipient = null, $serviceType = null, $packagingType = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $trackingId = null, array $customerReferences = array(), \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentOperationalDetail $shipmentOperationalDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageOperationalDetail $packageOperationalDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocument $label = null)
    {
        $this
            ->setType($type)
            ->setSender($sender)
            ->setRecipient($recipient)
            ->setServiceType($serviceType)
            ->setPackagingType($packagingType)
            ->setTrackingId($trackingId)
            ->setCustomerReferences($customerReferences)
            ->setShipmentOperationalDetail($shipmentOperationalDetail)
            ->setPackageOperationalDetail($packageOperationalDetail)
            ->setLabel($label);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\AssociatedShipmentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\AssociatedShipmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\AssociatedShipmentDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\AssociatedShipmentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\AssociatedShipmentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Sender value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party|null
     */
    public function getSender()
    {
        return $this->Sender;
    }
    /**
     * Set Sender value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $sender
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\AssociatedShipmentDetail
     */
    public function setSender(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $sender = null)
    {
        $this->Sender = $sender;
        return $this;
    }
    /**
     * Get Recipient value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $recipient
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\AssociatedShipmentDetail
     */
    public function setRecipient(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $serviceType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\AssociatedShipmentDetail
     */
    public function setServiceType($serviceType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\ServiceType::valueIsValid($serviceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $serviceType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ServiceType::getValidValues())), __LINE__);
        }
        $this->ServiceType = $serviceType;
        return $this;
    }
    /**
     * Get PackagingType value
     * @return string|null
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    /**
     * Set PackagingType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PackagingType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PackagingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packagingType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\AssociatedShipmentDetail
     */
    public function setPackagingType($packagingType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\PackagingType::valueIsValid($packagingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packagingType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PackagingType::getValidValues())), __LINE__);
        }
        $this->PackagingType = $packagingType;
        return $this;
    }
    /**
     * Get TrackingId value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId|null
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }
    /**
     * Set TrackingId value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $trackingId
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\AssociatedShipmentDetail
     */
    public function setTrackingId(\NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $trackingId = null)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    /**
     * Get CustomerReferences value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference[]|null
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }
    /**
     * Set CustomerReferences value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference[] $customerReferences
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\AssociatedShipmentDetail
     */
    public function setCustomerReferences(array $customerReferences = array())
    {
        foreach ($customerReferences as $associatedShipmentDetailCustomerReferencesItem) {
            // validation for constraint: itemType
            if (!$associatedShipmentDetailCustomerReferencesItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference) {
                throw new \InvalidArgumentException(sprintf('The CustomerReferences property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference, "%s" given', is_object($associatedShipmentDetailCustomerReferencesItem) ? get_class($associatedShipmentDetailCustomerReferencesItem) : gettype($associatedShipmentDetailCustomerReferencesItem)), __LINE__);
            }
        }
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    /**
     * Add item to CustomerReferences value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\AssociatedShipmentDetail
     */
    public function addToCustomerReferences(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference) {
            throw new \InvalidArgumentException(sprintf('The CustomerReferences property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomerReferences[] = $item;
        return $this;
    }
    /**
     * Get ShipmentOperationalDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentOperationalDetail|null
     */
    public function getShipmentOperationalDetail()
    {
        return $this->ShipmentOperationalDetail;
    }
    /**
     * Set ShipmentOperationalDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentOperationalDetail $shipmentOperationalDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\AssociatedShipmentDetail
     */
    public function setShipmentOperationalDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentOperationalDetail $shipmentOperationalDetail = null)
    {
        $this->ShipmentOperationalDetail = $shipmentOperationalDetail;
        return $this;
    }
    /**
     * Get PackageOperationalDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageOperationalDetail|null
     */
    public function getPackageOperationalDetail()
    {
        return $this->PackageOperationalDetail;
    }
    /**
     * Set PackageOperationalDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageOperationalDetail $packageOperationalDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\AssociatedShipmentDetail
     */
    public function setPackageOperationalDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageOperationalDetail $packageOperationalDetail = null)
    {
        $this->PackageOperationalDetail = $packageOperationalDetail;
        return $this;
    }
    /**
     * Get Label value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocument|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocument $label
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\AssociatedShipmentDetail
     */
    public function setLabel(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocument $label = null)
    {
        $this->Label = $label;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\AssociatedShipmentDetail
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
