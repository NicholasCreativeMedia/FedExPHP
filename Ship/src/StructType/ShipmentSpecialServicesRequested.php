<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentSpecialServicesRequested StructType
 * Meta informations extracted from the WSDL
 * - documentation: These special services are available at the shipment level for some or all service types. If the shipper is requesting a special service which requires additional data (such as the COD amount), the shipment special service type must
 * be present in the specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 * @subpackage Structs
 */
class ShipmentSpecialServicesRequested extends AbstractStructBase
{
    /**
     * The SpecialServiceTypes
     * Meta informations extracted from the WSDL
     * - documentation: The types of all special services requested for the enclosing shipment (or other shipment-level transaction).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialServiceTypes;
    /**
     * The CodDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CodDetail
     */
    public $CodDetail;
    /**
     * The DeliveryOnInvoiceAcceptanceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeliveryOnInvoiceAcceptanceDetail
     */
    public $DeliveryOnInvoiceAcceptanceDetail;
    /**
     * The HoldAtLocationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\HoldAtLocationDetail
     */
    public $HoldAtLocationDetail;
    /**
     * The EventNotificationDetail
     * Meta informations extracted from the WSDL
     * - documentation: This replaces eMailNotificationDetail
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentEventNotificationDetail
     */
    public $EventNotificationDetail;
    /**
     * The ReturnShipmentDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnShipmentDetail
     */
    public $ReturnShipmentDetail;
    /**
     * The PendingShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: This field should be populated for pending shipments (e.g. e-mail label) It is required by a PENDING_SHIPMENT special service type.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentDetail
     */
    public $PendingShipmentDetail;
    /**
     * The InternationalControlledExportDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\InternationalControlledExportDetail
     */
    public $InternationalControlledExportDetail;
    /**
     * The InternationalTrafficInArmsRegulationsDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\InternationalTrafficInArmsRegulationsDetail
     */
    public $InternationalTrafficInArmsRegulationsDetail;
    /**
     * The ShipmentDryIceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentDryIceDetail
     */
    public $ShipmentDryIceDetail;
    /**
     * The HomeDeliveryPremiumDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\HomeDeliveryPremiumDetail
     */
    public $HomeDeliveryPremiumDetail;
    /**
     * The FreightGuaranteeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightGuaranteeDetail
     */
    public $FreightGuaranteeDetail;
    /**
     * The EtdDetail
     * Meta informations extracted from the WSDL
     * - documentation: Electronic Trade document references.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\EtdDetail
     */
    public $EtdDetail;
    /**
     * The CustomDeliveryWindowDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specification for date or range of dates on which delivery is to be attempted.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDeliveryWindowDetail
     */
    public $CustomDeliveryWindowDetail;
    /**
     * Constructor method for ShipmentSpecialServicesRequested
     * @uses ShipmentSpecialServicesRequested::setSpecialServiceTypes()
     * @uses ShipmentSpecialServicesRequested::setCodDetail()
     * @uses ShipmentSpecialServicesRequested::setDeliveryOnInvoiceAcceptanceDetail()
     * @uses ShipmentSpecialServicesRequested::setHoldAtLocationDetail()
     * @uses ShipmentSpecialServicesRequested::setEventNotificationDetail()
     * @uses ShipmentSpecialServicesRequested::setReturnShipmentDetail()
     * @uses ShipmentSpecialServicesRequested::setPendingShipmentDetail()
     * @uses ShipmentSpecialServicesRequested::setInternationalControlledExportDetail()
     * @uses ShipmentSpecialServicesRequested::setInternationalTrafficInArmsRegulationsDetail()
     * @uses ShipmentSpecialServicesRequested::setShipmentDryIceDetail()
     * @uses ShipmentSpecialServicesRequested::setHomeDeliveryPremiumDetail()
     * @uses ShipmentSpecialServicesRequested::setFreightGuaranteeDetail()
     * @uses ShipmentSpecialServicesRequested::setEtdDetail()
     * @uses ShipmentSpecialServicesRequested::setCustomDeliveryWindowDetail()
     * @param string[] $specialServiceTypes
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CodDetail $codDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HoldAtLocationDetail $holdAtLocationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentEventNotificationDetail $eventNotificationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnShipmentDetail $returnShipmentDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentDetail $pendingShipmentDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\InternationalControlledExportDetail $internationalControlledExportDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentDryIceDetail $shipmentDryIceDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightGuaranteeDetail $freightGuaranteeDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EtdDetail $etdDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDeliveryWindowDetail $customDeliveryWindowDetail
     */
    public function __construct(array $specialServiceTypes = array(), \NicholasCreativeMedia\FedExPHP\Ship\StructType\CodDetail $codDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\HoldAtLocationDetail $holdAtLocationDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentEventNotificationDetail $eventNotificationDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnShipmentDetail $returnShipmentDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentDetail $pendingShipmentDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\InternationalControlledExportDetail $internationalControlledExportDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentDryIceDetail $shipmentDryIceDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightGuaranteeDetail $freightGuaranteeDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\EtdDetail $etdDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDeliveryWindowDetail $customDeliveryWindowDetail = null)
    {
        $this
            ->setSpecialServiceTypes($specialServiceTypes)
            ->setCodDetail($codDetail)
            ->setDeliveryOnInvoiceAcceptanceDetail($deliveryOnInvoiceAcceptanceDetail)
            ->setHoldAtLocationDetail($holdAtLocationDetail)
            ->setEventNotificationDetail($eventNotificationDetail)
            ->setReturnShipmentDetail($returnShipmentDetail)
            ->setPendingShipmentDetail($pendingShipmentDetail)
            ->setInternationalControlledExportDetail($internationalControlledExportDetail)
            ->setInternationalTrafficInArmsRegulationsDetail($internationalTrafficInArmsRegulationsDetail)
            ->setShipmentDryIceDetail($shipmentDryIceDetail)
            ->setHomeDeliveryPremiumDetail($homeDeliveryPremiumDetail)
            ->setFreightGuaranteeDetail($freightGuaranteeDetail)
            ->setEtdDetail($etdDetail)
            ->setCustomDeliveryWindowDetail($customDeliveryWindowDetail);
    }
    /**
     * Get SpecialServiceTypes value
     * @return string[]|null
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }
    /**
     * Set SpecialServiceTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShipmentSpecialServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShipmentSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $specialServiceTypes
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes = array())
    {
        $invalidValues = array();
        foreach ($specialServiceTypes as $shipmentSpecialServicesRequestedSpecialServiceTypesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShipmentSpecialServiceType::valueIsValid($shipmentSpecialServicesRequestedSpecialServiceTypesItem)) {
                $invalidValues[] = var_export($shipmentSpecialServicesRequestedSpecialServiceTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShipmentSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Add item to SpecialServiceTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShipmentSpecialServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShipmentSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function addToSpecialServiceTypes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShipmentSpecialServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ShipmentSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes[] = $item;
        return $this;
    }
    /**
     * Get CodDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CodDetail|null
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }
    /**
     * Set CodDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CodDetail $codDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function setCodDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CodDetail $codDetail = null)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    /**
     * Get DeliveryOnInvoiceAcceptanceDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeliveryOnInvoiceAcceptanceDetail|null
     */
    public function getDeliveryOnInvoiceAcceptanceDetail()
    {
        return $this->DeliveryOnInvoiceAcceptanceDetail;
    }
    /**
     * Set DeliveryOnInvoiceAcceptanceDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function setDeliveryOnInvoiceAcceptanceDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\DeliveryOnInvoiceAcceptanceDetail $deliveryOnInvoiceAcceptanceDetail = null)
    {
        $this->DeliveryOnInvoiceAcceptanceDetail = $deliveryOnInvoiceAcceptanceDetail;
        return $this;
    }
    /**
     * Get HoldAtLocationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\HoldAtLocationDetail|null
     */
    public function getHoldAtLocationDetail()
    {
        return $this->HoldAtLocationDetail;
    }
    /**
     * Set HoldAtLocationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HoldAtLocationDetail $holdAtLocationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function setHoldAtLocationDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\HoldAtLocationDetail $holdAtLocationDetail = null)
    {
        $this->HoldAtLocationDetail = $holdAtLocationDetail;
        return $this;
    }
    /**
     * Get EventNotificationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentEventNotificationDetail|null
     */
    public function getEventNotificationDetail()
    {
        return $this->EventNotificationDetail;
    }
    /**
     * Set EventNotificationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentEventNotificationDetail $eventNotificationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function setEventNotificationDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentEventNotificationDetail $eventNotificationDetail = null)
    {
        $this->EventNotificationDetail = $eventNotificationDetail;
        return $this;
    }
    /**
     * Get ReturnShipmentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnShipmentDetail|null
     */
    public function getReturnShipmentDetail()
    {
        return $this->ReturnShipmentDetail;
    }
    /**
     * Set ReturnShipmentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnShipmentDetail $returnShipmentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function setReturnShipmentDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnShipmentDetail $returnShipmentDetail = null)
    {
        $this->ReturnShipmentDetail = $returnShipmentDetail;
        return $this;
    }
    /**
     * Get PendingShipmentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentDetail|null
     */
    public function getPendingShipmentDetail()
    {
        return $this->PendingShipmentDetail;
    }
    /**
     * Set PendingShipmentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentDetail $pendingShipmentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function setPendingShipmentDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentDetail $pendingShipmentDetail = null)
    {
        $this->PendingShipmentDetail = $pendingShipmentDetail;
        return $this;
    }
    /**
     * Get InternationalControlledExportDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\InternationalControlledExportDetail|null
     */
    public function getInternationalControlledExportDetail()
    {
        return $this->InternationalControlledExportDetail;
    }
    /**
     * Set InternationalControlledExportDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\InternationalControlledExportDetail $internationalControlledExportDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function setInternationalControlledExportDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\InternationalControlledExportDetail $internationalControlledExportDetail = null)
    {
        $this->InternationalControlledExportDetail = $internationalControlledExportDetail;
        return $this;
    }
    /**
     * Get InternationalTrafficInArmsRegulationsDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\InternationalTrafficInArmsRegulationsDetail|null
     */
    public function getInternationalTrafficInArmsRegulationsDetail()
    {
        return $this->InternationalTrafficInArmsRegulationsDetail;
    }
    /**
     * Set InternationalTrafficInArmsRegulationsDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function setInternationalTrafficInArmsRegulationsDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\InternationalTrafficInArmsRegulationsDetail $internationalTrafficInArmsRegulationsDetail = null)
    {
        $this->InternationalTrafficInArmsRegulationsDetail = $internationalTrafficInArmsRegulationsDetail;
        return $this;
    }
    /**
     * Get ShipmentDryIceDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentDryIceDetail|null
     */
    public function getShipmentDryIceDetail()
    {
        return $this->ShipmentDryIceDetail;
    }
    /**
     * Set ShipmentDryIceDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentDryIceDetail $shipmentDryIceDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function setShipmentDryIceDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentDryIceDetail $shipmentDryIceDetail = null)
    {
        $this->ShipmentDryIceDetail = $shipmentDryIceDetail;
        return $this;
    }
    /**
     * Get HomeDeliveryPremiumDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\HomeDeliveryPremiumDetail|null
     */
    public function getHomeDeliveryPremiumDetail()
    {
        return $this->HomeDeliveryPremiumDetail;
    }
    /**
     * Set HomeDeliveryPremiumDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function setHomeDeliveryPremiumDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\HomeDeliveryPremiumDetail $homeDeliveryPremiumDetail = null)
    {
        $this->HomeDeliveryPremiumDetail = $homeDeliveryPremiumDetail;
        return $this;
    }
    /**
     * Get FreightGuaranteeDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightGuaranteeDetail|null
     */
    public function getFreightGuaranteeDetail()
    {
        return $this->FreightGuaranteeDetail;
    }
    /**
     * Set FreightGuaranteeDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightGuaranteeDetail $freightGuaranteeDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function setFreightGuaranteeDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightGuaranteeDetail $freightGuaranteeDetail = null)
    {
        $this->FreightGuaranteeDetail = $freightGuaranteeDetail;
        return $this;
    }
    /**
     * Get EtdDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EtdDetail|null
     */
    public function getEtdDetail()
    {
        return $this->EtdDetail;
    }
    /**
     * Set EtdDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EtdDetail $etdDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function setEtdDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\EtdDetail $etdDetail = null)
    {
        $this->EtdDetail = $etdDetail;
        return $this;
    }
    /**
     * Get CustomDeliveryWindowDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDeliveryWindowDetail|null
     */
    public function getCustomDeliveryWindowDetail()
    {
        return $this->CustomDeliveryWindowDetail;
    }
    /**
     * Set CustomDeliveryWindowDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDeliveryWindowDetail $customDeliveryWindowDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public function setCustomDeliveryWindowDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDeliveryWindowDetail $customDeliveryWindowDetail = null)
    {
        $this->CustomDeliveryWindowDetail = $customDeliveryWindowDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
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