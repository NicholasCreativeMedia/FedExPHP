<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestedShipment StructType
 * @subpackage Structs
 */
class RequestedShipment extends AbstractStructBase
{
    /**
     * The ShipTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $ShipTimestamp;
    /**
     * The DropoffType
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $DropoffType;
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $ServiceType;
    /**
     * The PackagingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $PackagingType;
    /**
     * The Shipper
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party
     */
    public $Shipper;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party
     */
    public $Recipient;
    /**
     * The LabelSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\LabelSpecification
     */
    public $LabelSpecification;
    /**
     * The PackageCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of packages in the entire shipment (even when the shipment spans multiple transactions.)
     * - minOccurs: 1
     * @var int
     */
    public $PackageCount;
    /**
     * The ManifestDetail
     * Meta informations extracted from the WSDL
     * - documentation: This specifies information related to the manifest associated with the shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentManifestDetail
     */
    public $ManifestDetail;
    /**
     * The TotalWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight
     */
    public $TotalWeight;
    /**
     * The TotalInsuredValue
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the total declared value for carriage of the shipment. The declared value for carriage represents the maximum liability of FedEx in connection with a shipment, including, but not limited to, any loss, damage, delay,
     * mis-delivery, nondelivery, misinformation, any failure to provide information, or mis-delivery of information relating to the shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $TotalInsuredValue;
    /**
     * The PreferredCurrency
     * Meta informations extracted from the WSDL
     * - documentation: This attribute indicates the currency the caller requests to have used in all returned monetary values (when a choice is possible).
     * - minOccurs: 0
     * @var string
     */
    public $PreferredCurrency;
    /**
     * The ShipmentAuthorizationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies details about the entity responsible for the shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentAuthorizationDetail
     */
    public $ShipmentAuthorizationDetail;
    /**
     * The RecipientLocationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RecipientLocationNumber;
    /**
     * The Origin
     * Meta informations extracted from the WSDL
     * - documentation: Physical starting address for the shipment, if different from shipper's address.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContactAndAddress
     */
    public $Origin;
    /**
     * The SoldTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party
     */
    public $SoldTo;
    /**
     * The ShippingChargesPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment
     */
    public $ShippingChargesPayment;
    /**
     * The SpecialServicesRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested
     */
    public $SpecialServicesRequested;
    /**
     * The ExpressFreightDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExpressFreightDetail
     */
    public $ExpressFreightDetail;
    /**
     * The FreightShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Data applicable to shipments using FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentDetail
     */
    public $FreightShipmentDetail;
    /**
     * The DeliveryInstructions
     * Meta informations extracted from the WSDL
     * - documentation: Used with Ground Home Delivery and Freight.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryInstructions;
    /**
     * The VariableHandlingChargeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingChargeDetail
     */
    public $VariableHandlingChargeDetail;
    /**
     * The CustomsClearanceDetail
     * Meta informations extracted from the WSDL
     * - documentation: Customs clearance data, used for both international and intra-country shipping.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public $CustomsClearanceDetail;
    /**
     * The PickupDetail
     * Meta informations extracted from the WSDL
     * - documentation: For use in "process tag" transaction.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\PickupDetail
     */
    public $PickupDetail;
    /**
     * The SmartPostDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the characteristics of a shipment pertaining to SmartPost services.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentDetail
     */
    public $SmartPostDetail;
    /**
     * The BlockInsightVisibility
     * Meta informations extracted from the WSDL
     * - documentation: If true, only the shipper/payor will have visibility of this shipment.
     * - minOccurs: 0
     * @var bool
     */
    public $BlockInsightVisibility;
    /**
     * The ShippingDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Contains data used to create additional (non-label) shipping documents.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public $ShippingDocumentSpecification;
    /**
     * The RateRequestTypes
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether and what kind of rates the customer wishes to have quoted on this shipment. The reply will also be constrained by other data on the shipment and customer.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RateRequestTypes;
    /**
     * The EdtRequestType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies whether the customer wishes to have Estimated Duties and Taxes provided with the rate quotation on this shipment. Only applies with shipments moving under international services.
     * - minOccurs: 0
     * @var string
     */
    public $EdtRequestType;
    /**
     * The MasterTrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Only used with multiple-transaction shipments, to identify the master package in a multi-piece shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId
     */
    public $MasterTrackingId;
    /**
     * The ConfigurationData
     * Meta informations extracted from the WSDL
     * - documentation: Specifies data structures that may be re-used multiple times with s single shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentConfigurationData
     */
    public $ConfigurationData;
    /**
     * The RequestedPackageLineItems
     * Meta informations extracted from the WSDL
     * - documentation: One or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics all packages in the shipment.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem[]
     */
    public $RequestedPackageLineItems;
    /**
     * Constructor method for RequestedShipment
     * @uses RequestedShipment::setShipTimestamp()
     * @uses RequestedShipment::setDropoffType()
     * @uses RequestedShipment::setServiceType()
     * @uses RequestedShipment::setPackagingType()
     * @uses RequestedShipment::setShipper()
     * @uses RequestedShipment::setRecipient()
     * @uses RequestedShipment::setLabelSpecification()
     * @uses RequestedShipment::setPackageCount()
     * @uses RequestedShipment::setManifestDetail()
     * @uses RequestedShipment::setTotalWeight()
     * @uses RequestedShipment::setTotalInsuredValue()
     * @uses RequestedShipment::setPreferredCurrency()
     * @uses RequestedShipment::setShipmentAuthorizationDetail()
     * @uses RequestedShipment::setRecipientLocationNumber()
     * @uses RequestedShipment::setOrigin()
     * @uses RequestedShipment::setSoldTo()
     * @uses RequestedShipment::setShippingChargesPayment()
     * @uses RequestedShipment::setSpecialServicesRequested()
     * @uses RequestedShipment::setExpressFreightDetail()
     * @uses RequestedShipment::setFreightShipmentDetail()
     * @uses RequestedShipment::setDeliveryInstructions()
     * @uses RequestedShipment::setVariableHandlingChargeDetail()
     * @uses RequestedShipment::setCustomsClearanceDetail()
     * @uses RequestedShipment::setPickupDetail()
     * @uses RequestedShipment::setSmartPostDetail()
     * @uses RequestedShipment::setBlockInsightVisibility()
     * @uses RequestedShipment::setShippingDocumentSpecification()
     * @uses RequestedShipment::setRateRequestTypes()
     * @uses RequestedShipment::setEdtRequestType()
     * @uses RequestedShipment::setMasterTrackingId()
     * @uses RequestedShipment::setConfigurationData()
     * @uses RequestedShipment::setRequestedPackageLineItems()
     * @param string $shipTimestamp
     * @param string $dropoffType
     * @param string $serviceType
     * @param string $packagingType
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $shipper
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $recipient
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\LabelSpecification $labelSpecification
     * @param int $packageCount
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentManifestDetail $manifestDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $totalWeight
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalInsuredValue
     * @param string $preferredCurrency
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentAuthorizationDetail $shipmentAuthorizationDetail
     * @param string $recipientLocationNumber
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContactAndAddress $origin
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $soldTo
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment $shippingChargesPayment
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested $specialServicesRequested
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExpressFreightDetail $expressFreightDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentDetail $freightShipmentDetail
     * @param string $deliveryInstructions
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail $customsClearanceDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\PickupDetail $pickupDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentDetail $smartPostDetail
     * @param bool $blockInsightVisibility
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification $shippingDocumentSpecification
     * @param string[] $rateRequestTypes
     * @param string $edtRequestType
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $masterTrackingId
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentConfigurationData $configurationData
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem[] $requestedPackageLineItems
     */
    public function __construct($shipTimestamp = null, $dropoffType = null, $serviceType = null, $packagingType = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $shipper = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $recipient = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\LabelSpecification $labelSpecification = null, $packageCount = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentManifestDetail $manifestDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $totalWeight = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalInsuredValue = null, $preferredCurrency = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentAuthorizationDetail $shipmentAuthorizationDetail = null, $recipientLocationNumber = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContactAndAddress $origin = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $soldTo = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment $shippingChargesPayment = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested $specialServicesRequested = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExpressFreightDetail $expressFreightDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentDetail $freightShipmentDetail = null, $deliveryInstructions = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingChargeDetail $variableHandlingChargeDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail $customsClearanceDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\PickupDetail $pickupDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentDetail $smartPostDetail = null, $blockInsightVisibility = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification $shippingDocumentSpecification = null, array $rateRequestTypes = array(), $edtRequestType = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $masterTrackingId = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentConfigurationData $configurationData = null, array $requestedPackageLineItems = array())
    {
        $this
            ->setShipTimestamp($shipTimestamp)
            ->setDropoffType($dropoffType)
            ->setServiceType($serviceType)
            ->setPackagingType($packagingType)
            ->setShipper($shipper)
            ->setRecipient($recipient)
            ->setLabelSpecification($labelSpecification)
            ->setPackageCount($packageCount)
            ->setManifestDetail($manifestDetail)
            ->setTotalWeight($totalWeight)
            ->setTotalInsuredValue($totalInsuredValue)
            ->setPreferredCurrency($preferredCurrency)
            ->setShipmentAuthorizationDetail($shipmentAuthorizationDetail)
            ->setRecipientLocationNumber($recipientLocationNumber)
            ->setOrigin($origin)
            ->setSoldTo($soldTo)
            ->setShippingChargesPayment($shippingChargesPayment)
            ->setSpecialServicesRequested($specialServicesRequested)
            ->setExpressFreightDetail($expressFreightDetail)
            ->setFreightShipmentDetail($freightShipmentDetail)
            ->setDeliveryInstructions($deliveryInstructions)
            ->setVariableHandlingChargeDetail($variableHandlingChargeDetail)
            ->setCustomsClearanceDetail($customsClearanceDetail)
            ->setPickupDetail($pickupDetail)
            ->setSmartPostDetail($smartPostDetail)
            ->setBlockInsightVisibility($blockInsightVisibility)
            ->setShippingDocumentSpecification($shippingDocumentSpecification)
            ->setRateRequestTypes($rateRequestTypes)
            ->setEdtRequestType($edtRequestType)
            ->setMasterTrackingId($masterTrackingId)
            ->setConfigurationData($configurationData)
            ->setRequestedPackageLineItems($requestedPackageLineItems);
    }
    /**
     * Get ShipTimestamp value
     * @return string
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }
    /**
     * Set ShipTimestamp value
     * @param string $shipTimestamp
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setShipTimestamp($shipTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($shipTimestamp) && !is_string($shipTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipTimestamp)), __LINE__);
        }
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    /**
     * Get DropoffType value
     * @return string
     */
    public function getDropoffType()
    {
        return $this->DropoffType;
    }
    /**
     * Set DropoffType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\DropoffType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\DropoffType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dropoffType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setDropoffType($dropoffType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\DropoffType::valueIsValid($dropoffType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dropoffType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\DropoffType::getValidValues())), __LINE__);
        }
        $this->DropoffType = $dropoffType;
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
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
     * @return string
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
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
     * Get Shipper value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party
     */
    public function getShipper()
    {
        return $this->Shipper;
    }
    /**
     * Set Shipper value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $shipper
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setShipper(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $shipper = null)
    {
        $this->Shipper = $shipper;
        return $this;
    }
    /**
     * Get Recipient value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $recipient
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setRecipient(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get LabelSpecification value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\LabelSpecification
     */
    public function getLabelSpecification()
    {
        return $this->LabelSpecification;
    }
    /**
     * Set LabelSpecification value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\LabelSpecification $labelSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setLabelSpecification(\NicholasCreativeMedia\FedExPHP\Ship\StructType\LabelSpecification $labelSpecification = null)
    {
        $this->LabelSpecification = $labelSpecification;
        return $this;
    }
    /**
     * Get PackageCount value
     * @return int
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    /**
     * Set PackageCount value
     * @param int $packageCount
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setPackageCount($packageCount = null)
    {
        // validation for constraint: int
        if (!is_null($packageCount) && !is_numeric($packageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packageCount)), __LINE__);
        }
        $this->PackageCount = $packageCount;
        return $this;
    }
    /**
     * Get ManifestDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentManifestDetail|null
     */
    public function getManifestDetail()
    {
        return $this->ManifestDetail;
    }
    /**
     * Set ManifestDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentManifestDetail $manifestDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setManifestDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentManifestDetail $manifestDetail = null)
    {
        $this->ManifestDetail = $manifestDetail;
        return $this;
    }
    /**
     * Get TotalWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight|null
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    /**
     * Set TotalWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $totalWeight
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setTotalWeight(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $totalWeight = null)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    /**
     * Get TotalInsuredValue value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getTotalInsuredValue()
    {
        return $this->TotalInsuredValue;
    }
    /**
     * Set TotalInsuredValue value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalInsuredValue
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setTotalInsuredValue(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalInsuredValue = null)
    {
        $this->TotalInsuredValue = $totalInsuredValue;
        return $this;
    }
    /**
     * Get PreferredCurrency value
     * @return string|null
     */
    public function getPreferredCurrency()
    {
        return $this->PreferredCurrency;
    }
    /**
     * Set PreferredCurrency value
     * @param string $preferredCurrency
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setPreferredCurrency($preferredCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($preferredCurrency) && !is_string($preferredCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preferredCurrency)), __LINE__);
        }
        $this->PreferredCurrency = $preferredCurrency;
        return $this;
    }
    /**
     * Get ShipmentAuthorizationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentAuthorizationDetail|null
     */
    public function getShipmentAuthorizationDetail()
    {
        return $this->ShipmentAuthorizationDetail;
    }
    /**
     * Set ShipmentAuthorizationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentAuthorizationDetail $shipmentAuthorizationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setShipmentAuthorizationDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentAuthorizationDetail $shipmentAuthorizationDetail = null)
    {
        $this->ShipmentAuthorizationDetail = $shipmentAuthorizationDetail;
        return $this;
    }
    /**
     * Get RecipientLocationNumber value
     * @return string|null
     */
    public function getRecipientLocationNumber()
    {
        return $this->RecipientLocationNumber;
    }
    /**
     * Set RecipientLocationNumber value
     * @param string $recipientLocationNumber
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setRecipientLocationNumber($recipientLocationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($recipientLocationNumber) && !is_string($recipientLocationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recipientLocationNumber)), __LINE__);
        }
        $this->RecipientLocationNumber = $recipientLocationNumber;
        return $this;
    }
    /**
     * Get Origin value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContactAndAddress|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContactAndAddress $origin
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setOrigin(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ContactAndAddress $origin = null)
    {
        $this->Origin = $origin;
        return $this;
    }
    /**
     * Get SoldTo value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party|null
     */
    public function getSoldTo()
    {
        return $this->SoldTo;
    }
    /**
     * Set SoldTo value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $soldTo
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setSoldTo(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $soldTo = null)
    {
        $this->SoldTo = $soldTo;
        return $this;
    }
    /**
     * Get ShippingChargesPayment value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment|null
     */
    public function getShippingChargesPayment()
    {
        return $this->ShippingChargesPayment;
    }
    /**
     * Set ShippingChargesPayment value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment $shippingChargesPayment
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setShippingChargesPayment(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment $shippingChargesPayment = null)
    {
        $this->ShippingChargesPayment = $shippingChargesPayment;
        return $this;
    }
    /**
     * Get SpecialServicesRequested value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested|null
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    /**
     * Set SpecialServicesRequested value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested $specialServicesRequested
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setSpecialServicesRequested(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    /**
     * Get ExpressFreightDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExpressFreightDetail|null
     */
    public function getExpressFreightDetail()
    {
        return $this->ExpressFreightDetail;
    }
    /**
     * Set ExpressFreightDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExpressFreightDetail $expressFreightDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setExpressFreightDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ExpressFreightDetail $expressFreightDetail = null)
    {
        $this->ExpressFreightDetail = $expressFreightDetail;
        return $this;
    }
    /**
     * Get FreightShipmentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentDetail|null
     */
    public function getFreightShipmentDetail()
    {
        return $this->FreightShipmentDetail;
    }
    /**
     * Set FreightShipmentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentDetail $freightShipmentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setFreightShipmentDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentDetail $freightShipmentDetail = null)
    {
        $this->FreightShipmentDetail = $freightShipmentDetail;
        return $this;
    }
    /**
     * Get DeliveryInstructions value
     * @return string|null
     */
    public function getDeliveryInstructions()
    {
        return $this->DeliveryInstructions;
    }
    /**
     * Set DeliveryInstructions value
     * @param string $deliveryInstructions
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setDeliveryInstructions($deliveryInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryInstructions) && !is_string($deliveryInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryInstructions)), __LINE__);
        }
        $this->DeliveryInstructions = $deliveryInstructions;
        return $this;
    }
    /**
     * Get VariableHandlingChargeDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingChargeDetail|null
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->VariableHandlingChargeDetail;
    }
    /**
     * Set VariableHandlingChargeDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setVariableHandlingChargeDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingChargeDetail $variableHandlingChargeDetail = null)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * Get CustomsClearanceDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail|null
     */
    public function getCustomsClearanceDetail()
    {
        return $this->CustomsClearanceDetail;
    }
    /**
     * Set CustomsClearanceDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail $customsClearanceDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setCustomsClearanceDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail $customsClearanceDetail = null)
    {
        $this->CustomsClearanceDetail = $customsClearanceDetail;
        return $this;
    }
    /**
     * Get PickupDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PickupDetail|null
     */
    public function getPickupDetail()
    {
        return $this->PickupDetail;
    }
    /**
     * Set PickupDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\PickupDetail $pickupDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setPickupDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\PickupDetail $pickupDetail = null)
    {
        $this->PickupDetail = $pickupDetail;
        return $this;
    }
    /**
     * Get SmartPostDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentDetail|null
     */
    public function getSmartPostDetail()
    {
        return $this->SmartPostDetail;
    }
    /**
     * Set SmartPostDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentDetail $smartPostDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setSmartPostDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentDetail $smartPostDetail = null)
    {
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    /**
     * Get BlockInsightVisibility value
     * @return bool|null
     */
    public function getBlockInsightVisibility()
    {
        return $this->BlockInsightVisibility;
    }
    /**
     * Set BlockInsightVisibility value
     * @param bool $blockInsightVisibility
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setBlockInsightVisibility($blockInsightVisibility = null)
    {
        $this->BlockInsightVisibility = $blockInsightVisibility;
        return $this;
    }
    /**
     * Get ShippingDocumentSpecification value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification|null
     */
    public function getShippingDocumentSpecification()
    {
        return $this->ShippingDocumentSpecification;
    }
    /**
     * Set ShippingDocumentSpecification value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification $shippingDocumentSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setShippingDocumentSpecification(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification $shippingDocumentSpecification = null)
    {
        $this->ShippingDocumentSpecification = $shippingDocumentSpecification;
        return $this;
    }
    /**
     * Get RateRequestTypes value
     * @return string[]|null
     */
    public function getRateRequestTypes()
    {
        return $this->RateRequestTypes;
    }
    /**
     * Set RateRequestTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RateRequestType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RateRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $rateRequestTypes
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setRateRequestTypes(array $rateRequestTypes = array())
    {
        $invalidValues = array();
        foreach ($rateRequestTypes as $requestedShipmentRateRequestTypesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\RateRequestType::valueIsValid($requestedShipmentRateRequestTypesItem)) {
                $invalidValues[] = var_export($requestedShipmentRateRequestTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RateRequestType::getValidValues())), __LINE__);
        }
        $this->RateRequestTypes = $rateRequestTypes;
        return $this;
    }
    /**
     * Add item to RateRequestTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RateRequestType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RateRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function addToRateRequestTypes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\RateRequestType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RateRequestType::getValidValues())), __LINE__);
        }
        $this->RateRequestTypes[] = $item;
        return $this;
    }
    /**
     * Get EdtRequestType value
     * @return string|null
     */
    public function getEdtRequestType()
    {
        return $this->EdtRequestType;
    }
    /**
     * Set EdtRequestType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\EdtRequestType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\EdtRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $edtRequestType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setEdtRequestType($edtRequestType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\EdtRequestType::valueIsValid($edtRequestType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $edtRequestType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\EdtRequestType::getValidValues())), __LINE__);
        }
        $this->EdtRequestType = $edtRequestType;
        return $this;
    }
    /**
     * Get MasterTrackingId value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId|null
     */
    public function getMasterTrackingId()
    {
        return $this->MasterTrackingId;
    }
    /**
     * Set MasterTrackingId value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $masterTrackingId
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setMasterTrackingId(\NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $masterTrackingId = null)
    {
        $this->MasterTrackingId = $masterTrackingId;
        return $this;
    }
    /**
     * Get ConfigurationData value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentConfigurationData|null
     */
    public function getConfigurationData()
    {
        return $this->ConfigurationData;
    }
    /**
     * Set ConfigurationData value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentConfigurationData $configurationData
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setConfigurationData(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentConfigurationData $configurationData = null)
    {
        $this->ConfigurationData = $configurationData;
        return $this;
    }
    /**
     * Get RequestedPackageLineItems value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem[]|null
     */
    public function getRequestedPackageLineItems()
    {
        return $this->RequestedPackageLineItems;
    }
    /**
     * Set RequestedPackageLineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem[] $requestedPackageLineItems
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems = array())
    {
        foreach ($requestedPackageLineItems as $requestedShipmentRequestedPackageLineItemsItem) {
            // validation for constraint: itemType
            if (!$requestedShipmentRequestedPackageLineItemsItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem) {
                throw new \InvalidArgumentException(sprintf('The RequestedPackageLineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem, "%s" given', is_object($requestedShipmentRequestedPackageLineItemsItem) ? get_class($requestedShipmentRequestedPackageLineItemsItem) : gettype($requestedShipmentRequestedPackageLineItemsItem)), __LINE__);
            }
        }
        $this->RequestedPackageLineItems = $requestedPackageLineItems;
        return $this;
    }
    /**
     * Add item to RequestedPackageLineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function addToRequestedPackageLineItems(\NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem) {
            throw new \InvalidArgumentException(sprintf('The RequestedPackageLineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RequestedPackageLineItems[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
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
