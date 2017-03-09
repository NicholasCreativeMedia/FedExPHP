<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data applicable to shipments using FEDEX_FREIGHT_ECONOMY and FEDEX_FREIGHT_PRIORITY services.
 * @subpackage Structs
 */
class FreightShipmentDetail extends AbstractStructBase
{
    /**
     * The FedExFreightAccountNumber
     * Meta informations extracted from the WSDL
     * - documentation: Account number used with FEDEX_FREIGHT service.
     * - minOccurs: 0
     * @var string
     */
    public $FedExFreightAccountNumber;
    /**
     * The FedExFreightBillingContactAndAddress
     * Meta informations extracted from the WSDL
     * - documentation: Used for validating FedEx Freight account number and (optionally) identifying third party payment on the bill of lading.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress
     */
    public $FedExFreightBillingContactAndAddress;
    /**
     * The AlternateBilling
     * Meta informations extracted from the WSDL
     * - documentation: Used in connection with "Send Bill To" (SBT) identification of customer's account used for billing.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Party
     */
    public $AlternateBilling;
    /**
     * The PrintedReferences
     * Meta informations extracted from the WSDL
     * - documentation: Identification values to be printed during creation of a Freight bill of lading.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PrintedReference[]
     */
    public $PrintedReferences;
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the role of the party submitting the transaction.
     * - minOccurs: 0
     * @var string
     */
    public $Role;
    /**
     * The CollectTermsType
     * Meta informations extracted from the WSDL
     * - documentation: Designates the terms of the "collect" payment for a Freight Shipment.
     * - minOccurs: 0
     * @var string
     */
    public $CollectTermsType;
    /**
     * The DeclaredValuePerUnit
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the declared value for the shipment
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $DeclaredValuePerUnit;
    /**
     * The DeclaredValueUnits
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the declared value units corresponding to the above defined declared value
     * - minOccurs: 0
     * @var string
     */
    public $DeclaredValueUnits;
    /**
     * The LiabilityCoverageDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\LiabilityCoverageDetail
     */
    public $LiabilityCoverageDetail;
    /**
     * The Coupons
     * Meta informations extracted from the WSDL
     * - documentation: Identifiers for promotional discounts offered to customers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Coupons;
    /**
     * The TotalHandlingUnits
     * Meta informations extracted from the WSDL
     * - documentation: Total number of individual handling units in the entire shipment (for unit pricing).
     * - minOccurs: 0
     * @var int
     */
    public $TotalHandlingUnits;
    /**
     * The ClientDiscountPercent
     * Meta informations extracted from the WSDL
     * - documentation: Estimated discount rate provided by client for unsecured rate quote.
     * - minOccurs: 0
     * @var float
     */
    public $ClientDiscountPercent;
    /**
     * The PalletWeight
     * Meta informations extracted from the WSDL
     * - documentation: Total weight of pallets used in shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $PalletWeight;
    /**
     * The ShipmentDimensions
     * Meta informations extracted from the WSDL
     * - documentation: Overall shipment dimensions.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Dimensions
     */
    public $ShipmentDimensions;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - documentation: Description for the shipment.
     * - minOccurs: 0
     * @var string
     */
    public $Comment;
    /**
     * The SpecialServicePayments
     * Meta informations extracted from the WSDL
     * - documentation: Specifies which party will pay surcharges for any special services which support split billing.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\FreightSpecialServicePayment[]
     */
    public $SpecialServicePayments;
    /**
     * The HazardousMaterialsEmergencyContactNumber
     * Meta informations extracted from the WSDL
     * - documentation: Must be populated if any line items contain hazardous materials.
     * - minOccurs: 0
     * @var string
     */
    public $HazardousMaterialsEmergencyContactNumber;
    /**
     * The HazardousMaterialsOfferor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HazardousMaterialsOfferor;
    /**
     * The LineItems
     * Meta informations extracted from the WSDL
     * - documentation: Details of the commodities in the shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentLineItem[]
     */
    public $LineItems;
    /**
     * Constructor method for FreightShipmentDetail
     * @uses FreightShipmentDetail::setFedExFreightAccountNumber()
     * @uses FreightShipmentDetail::setFedExFreightBillingContactAndAddress()
     * @uses FreightShipmentDetail::setAlternateBilling()
     * @uses FreightShipmentDetail::setPrintedReferences()
     * @uses FreightShipmentDetail::setRole()
     * @uses FreightShipmentDetail::setCollectTermsType()
     * @uses FreightShipmentDetail::setDeclaredValuePerUnit()
     * @uses FreightShipmentDetail::setDeclaredValueUnits()
     * @uses FreightShipmentDetail::setLiabilityCoverageDetail()
     * @uses FreightShipmentDetail::setCoupons()
     * @uses FreightShipmentDetail::setTotalHandlingUnits()
     * @uses FreightShipmentDetail::setClientDiscountPercent()
     * @uses FreightShipmentDetail::setPalletWeight()
     * @uses FreightShipmentDetail::setShipmentDimensions()
     * @uses FreightShipmentDetail::setComment()
     * @uses FreightShipmentDetail::setSpecialServicePayments()
     * @uses FreightShipmentDetail::setHazardousMaterialsEmergencyContactNumber()
     * @uses FreightShipmentDetail::setHazardousMaterialsOfferor()
     * @uses FreightShipmentDetail::setLineItems()
     * @param string $fedExFreightAccountNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $fedExFreightBillingContactAndAddress
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $alternateBilling
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PrintedReference[] $printedReferences
     * @param string $role
     * @param string $collectTermsType
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $declaredValuePerUnit
     * @param string $declaredValueUnits
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LiabilityCoverageDetail $liabilityCoverageDetail
     * @param string[] $coupons
     * @param int $totalHandlingUnits
     * @param float $clientDiscountPercent
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $palletWeight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $shipmentDimensions
     * @param string $comment
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightSpecialServicePayment[] $specialServicePayments
     * @param string $hazardousMaterialsEmergencyContactNumber
     * @param string $hazardousMaterialsOfferor
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentLineItem[] $lineItems
     */
    public function __construct($fedExFreightAccountNumber = null, \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $fedExFreightBillingContactAndAddress = null, \NicholasCreativeMedia\FedExPHP\Structs\Party $alternateBilling = null, array $printedReferences = array(), $role = null, $collectTermsType = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $declaredValuePerUnit = null, $declaredValueUnits = null, \NicholasCreativeMedia\FedExPHP\Structs\LiabilityCoverageDetail $liabilityCoverageDetail = null, array $coupons = array(), $totalHandlingUnits = null, $clientDiscountPercent = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $palletWeight = null, \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $shipmentDimensions = null, $comment = null, array $specialServicePayments = array(), $hazardousMaterialsEmergencyContactNumber = null, $hazardousMaterialsOfferor = null, array $lineItems = array())
    {
        $this
            ->setFedExFreightAccountNumber($fedExFreightAccountNumber)
            ->setFedExFreightBillingContactAndAddress($fedExFreightBillingContactAndAddress)
            ->setAlternateBilling($alternateBilling)
            ->setPrintedReferences($printedReferences)
            ->setRole($role)
            ->setCollectTermsType($collectTermsType)
            ->setDeclaredValuePerUnit($declaredValuePerUnit)
            ->setDeclaredValueUnits($declaredValueUnits)
            ->setLiabilityCoverageDetail($liabilityCoverageDetail)
            ->setCoupons($coupons)
            ->setTotalHandlingUnits($totalHandlingUnits)
            ->setClientDiscountPercent($clientDiscountPercent)
            ->setPalletWeight($palletWeight)
            ->setShipmentDimensions($shipmentDimensions)
            ->setComment($comment)
            ->setSpecialServicePayments($specialServicePayments)
            ->setHazardousMaterialsEmergencyContactNumber($hazardousMaterialsEmergencyContactNumber)
            ->setHazardousMaterialsOfferor($hazardousMaterialsOfferor)
            ->setLineItems($lineItems);
    }
    /**
     * Get FedExFreightAccountNumber value
     * @return string|null
     */
    public function getFedExFreightAccountNumber()
    {
        return $this->FedExFreightAccountNumber;
    }
    /**
     * Set FedExFreightAccountNumber value
     * @param string $fedExFreightAccountNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setFedExFreightAccountNumber($fedExFreightAccountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($fedExFreightAccountNumber) && !is_string($fedExFreightAccountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fedExFreightAccountNumber)), __LINE__);
        }
        $this->FedExFreightAccountNumber = $fedExFreightAccountNumber;
        return $this;
    }
    /**
     * Get FedExFreightBillingContactAndAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress|null
     */
    public function getFedExFreightBillingContactAndAddress()
    {
        return $this->FedExFreightBillingContactAndAddress;
    }
    /**
     * Set FedExFreightBillingContactAndAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $fedExFreightBillingContactAndAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setFedExFreightBillingContactAndAddress(\NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $fedExFreightBillingContactAndAddress = null)
    {
        $this->FedExFreightBillingContactAndAddress = $fedExFreightBillingContactAndAddress;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setAlternateBilling(\NicholasCreativeMedia\FedExPHP\Structs\Party $alternateBilling = null)
    {
        $this->AlternateBilling = $alternateBilling;
        return $this;
    }
    /**
     * Get PrintedReferences value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PrintedReference[]|null
     */
    public function getPrintedReferences()
    {
        return $this->PrintedReferences;
    }
    /**
     * Set PrintedReferences value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PrintedReference[] $printedReferences
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setPrintedReferences(array $printedReferences = array())
    {
        foreach ($printedReferences as $freightShipmentDetailPrintedReferencesItem) {
            // validation for constraint: itemType
            if (!$freightShipmentDetailPrintedReferencesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\PrintedReference) {
                throw new \InvalidArgumentException(sprintf('The PrintedReferences property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\PrintedReference, "%s" given', is_object($freightShipmentDetailPrintedReferencesItem) ? get_class($freightShipmentDetailPrintedReferencesItem) : gettype($freightShipmentDetailPrintedReferencesItem)), __LINE__);
            }
        }
        $this->PrintedReferences = $printedReferences;
        return $this;
    }
    /**
     * Add item to PrintedReferences value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PrintedReference $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function addToPrintedReferences(\NicholasCreativeMedia\FedExPHP\Structs\PrintedReference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\PrintedReference) {
            throw new \InvalidArgumentException(sprintf('The PrintedReferences property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\PrintedReference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PrintedReferences[] = $item;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
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
     * Get CollectTermsType value
     * @return string|null
     */
    public function getCollectTermsType()
    {
        return $this->CollectTermsType;
    }
    /**
     * Set CollectTermsType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\FreightCollectTermsType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\FreightCollectTermsType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $collectTermsType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setCollectTermsType($collectTermsType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\FreightCollectTermsType::valueIsValid($collectTermsType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $collectTermsType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\FreightCollectTermsType::getValidValues())), __LINE__);
        }
        $this->CollectTermsType = $collectTermsType;
        return $this;
    }
    /**
     * Get DeclaredValuePerUnit value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getDeclaredValuePerUnit()
    {
        return $this->DeclaredValuePerUnit;
    }
    /**
     * Set DeclaredValuePerUnit value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $declaredValuePerUnit
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setDeclaredValuePerUnit(\NicholasCreativeMedia\FedExPHP\Structs\Money $declaredValuePerUnit = null)
    {
        $this->DeclaredValuePerUnit = $declaredValuePerUnit;
        return $this;
    }
    /**
     * Get DeclaredValueUnits value
     * @return string|null
     */
    public function getDeclaredValueUnits()
    {
        return $this->DeclaredValueUnits;
    }
    /**
     * Set DeclaredValueUnits value
     * @param string $declaredValueUnits
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setDeclaredValueUnits($declaredValueUnits = null)
    {
        // validation for constraint: string
        if (!is_null($declaredValueUnits) && !is_string($declaredValueUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($declaredValueUnits)), __LINE__);
        }
        $this->DeclaredValueUnits = $declaredValueUnits;
        return $this;
    }
    /**
     * Get LiabilityCoverageDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LiabilityCoverageDetail|null
     */
    public function getLiabilityCoverageDetail()
    {
        return $this->LiabilityCoverageDetail;
    }
    /**
     * Set LiabilityCoverageDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LiabilityCoverageDetail $liabilityCoverageDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setLiabilityCoverageDetail(\NicholasCreativeMedia\FedExPHP\Structs\LiabilityCoverageDetail $liabilityCoverageDetail = null)
    {
        $this->LiabilityCoverageDetail = $liabilityCoverageDetail;
        return $this;
    }
    /**
     * Get Coupons value
     * @return string[]|null
     */
    public function getCoupons()
    {
        return $this->Coupons;
    }
    /**
     * Set Coupons value
     * @throws \InvalidArgumentException
     * @param string[] $coupons
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setCoupons(array $coupons = array())
    {
        foreach ($coupons as $freightShipmentDetailCouponsItem) {
            // validation for constraint: itemType
            if (!is_string($freightShipmentDetailCouponsItem)) {
                throw new \InvalidArgumentException(sprintf('The Coupons property can only contain items of string, "%s" given', is_object($freightShipmentDetailCouponsItem) ? get_class($freightShipmentDetailCouponsItem) : gettype($freightShipmentDetailCouponsItem)), __LINE__);
            }
        }
        $this->Coupons = $coupons;
        return $this;
    }
    /**
     * Add item to Coupons value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function addToCoupons($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Coupons property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Coupons[] = $item;
        return $this;
    }
    /**
     * Get TotalHandlingUnits value
     * @return int|null
     */
    public function getTotalHandlingUnits()
    {
        return $this->TotalHandlingUnits;
    }
    /**
     * Set TotalHandlingUnits value
     * @param int $totalHandlingUnits
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setTotalHandlingUnits($totalHandlingUnits = null)
    {
        // validation for constraint: int
        if (!is_null($totalHandlingUnits) && !is_numeric($totalHandlingUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalHandlingUnits)), __LINE__);
        }
        $this->TotalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    /**
     * Get ClientDiscountPercent value
     * @return float|null
     */
    public function getClientDiscountPercent()
    {
        return $this->ClientDiscountPercent;
    }
    /**
     * Set ClientDiscountPercent value
     * @param float $clientDiscountPercent
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setClientDiscountPercent($clientDiscountPercent = null)
    {
        $this->ClientDiscountPercent = $clientDiscountPercent;
        return $this;
    }
    /**
     * Get PalletWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getPalletWeight()
    {
        return $this->PalletWeight;
    }
    /**
     * Set PalletWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $palletWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setPalletWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $palletWeight = null)
    {
        $this->PalletWeight = $palletWeight;
        return $this;
    }
    /**
     * Get ShipmentDimensions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Dimensions|null
     */
    public function getShipmentDimensions()
    {
        return $this->ShipmentDimensions;
    }
    /**
     * Set ShipmentDimensions value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $shipmentDimensions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setShipmentDimensions(\NicholasCreativeMedia\FedExPHP\Structs\Dimensions $shipmentDimensions = null)
    {
        $this->ShipmentDimensions = $shipmentDimensions;
        return $this;
    }
    /**
     * Get Comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param string $comment
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get SpecialServicePayments value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightSpecialServicePayment[]|null
     */
    public function getSpecialServicePayments()
    {
        return $this->SpecialServicePayments;
    }
    /**
     * Set SpecialServicePayments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightSpecialServicePayment[] $specialServicePayments
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setSpecialServicePayments(array $specialServicePayments = array())
    {
        foreach ($specialServicePayments as $freightShipmentDetailSpecialServicePaymentsItem) {
            // validation for constraint: itemType
            if (!$freightShipmentDetailSpecialServicePaymentsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\FreightSpecialServicePayment) {
                throw new \InvalidArgumentException(sprintf('The SpecialServicePayments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\FreightSpecialServicePayment, "%s" given', is_object($freightShipmentDetailSpecialServicePaymentsItem) ? get_class($freightShipmentDetailSpecialServicePaymentsItem) : gettype($freightShipmentDetailSpecialServicePaymentsItem)), __LINE__);
            }
        }
        $this->SpecialServicePayments = $specialServicePayments;
        return $this;
    }
    /**
     * Add item to SpecialServicePayments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightSpecialServicePayment $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function addToSpecialServicePayments(\NicholasCreativeMedia\FedExPHP\Structs\FreightSpecialServicePayment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\FreightSpecialServicePayment) {
            throw new \InvalidArgumentException(sprintf('The SpecialServicePayments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\FreightSpecialServicePayment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialServicePayments[] = $item;
        return $this;
    }
    /**
     * Get HazardousMaterialsEmergencyContactNumber value
     * @return string|null
     */
    public function getHazardousMaterialsEmergencyContactNumber()
    {
        return $this->HazardousMaterialsEmergencyContactNumber;
    }
    /**
     * Set HazardousMaterialsEmergencyContactNumber value
     * @param string $hazardousMaterialsEmergencyContactNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setHazardousMaterialsEmergencyContactNumber($hazardousMaterialsEmergencyContactNumber = null)
    {
        // validation for constraint: string
        if (!is_null($hazardousMaterialsEmergencyContactNumber) && !is_string($hazardousMaterialsEmergencyContactNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hazardousMaterialsEmergencyContactNumber)), __LINE__);
        }
        $this->HazardousMaterialsEmergencyContactNumber = $hazardousMaterialsEmergencyContactNumber;
        return $this;
    }
    /**
     * Get HazardousMaterialsOfferor value
     * @return string|null
     */
    public function getHazardousMaterialsOfferor()
    {
        return $this->HazardousMaterialsOfferor;
    }
    /**
     * Set HazardousMaterialsOfferor value
     * @param string $hazardousMaterialsOfferor
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setHazardousMaterialsOfferor($hazardousMaterialsOfferor = null)
    {
        // validation for constraint: string
        if (!is_null($hazardousMaterialsOfferor) && !is_string($hazardousMaterialsOfferor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hazardousMaterialsOfferor)), __LINE__);
        }
        $this->HazardousMaterialsOfferor = $hazardousMaterialsOfferor;
        return $this;
    }
    /**
     * Get LineItems value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentLineItem[]|null
     */
    public function getLineItems()
    {
        return $this->LineItems;
    }
    /**
     * Set LineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentLineItem[] $lineItems
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function setLineItems(array $lineItems = array())
    {
        foreach ($lineItems as $freightShipmentDetailLineItemsItem) {
            // validation for constraint: itemType
            if (!$freightShipmentDetailLineItemsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentLineItem) {
                throw new \InvalidArgumentException(sprintf('The LineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentLineItem, "%s" given', is_object($freightShipmentDetailLineItemsItem) ? get_class($freightShipmentDetailLineItemsItem) : gettype($freightShipmentDetailLineItemsItem)), __LINE__);
            }
        }
        $this->LineItems = $lineItems;
        return $this;
    }
    /**
     * Add item to LineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentLineItem $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
     */
    public function addToLineItems(\NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentLineItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentLineItem) {
            throw new \InvalidArgumentException(sprintf('The LineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentLineItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightShipmentDetail
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
