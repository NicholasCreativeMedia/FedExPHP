<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedShipmentDetail Structs
 * @subpackage Structs
 */
class CompletedShipmentDetail extends AbstractStructBase
{
    /**
     * The UsDomestic
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $UsDomestic;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The MasterTrackingId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingId
     */
    public $MasterTrackingId;
    /**
     * The ServiceTypeDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ServiceTypeDescription;
    /**
     * The PackagingDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackagingDescription;
    /**
     * The OperationalDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentOperationalDetail
     */
    public $OperationalDetail;
    /**
     * The AccessDetail
     * Meta informations extracted from the WSDL
     * - documentation: Only used with pending shipments.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PendingShipmentAccessDetail
     */
    public $AccessDetail;
    /**
     * The TagDetail
     * Meta informations extracted from the WSDL
     * - documentation: Only used in the reply to tag requests.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedTagDetail
     */
    public $TagDetail;
    /**
     * The SmartPostDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedSmartPostDetail
     */
    public $SmartPostDetail;
    /**
     * The HazardousShipmentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Computed shipment level information about hazarous commodities.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousShipmentDetail
     */
    public $HazardousShipmentDetail;
    /**
     * The ShipmentRating
     * Meta informations extracted from the WSDL
     * - documentation: All shipment-level rating data for this shipment, which may include data for multiple rate types.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentRating
     */
    public $ShipmentRating;
    /**
     * The CompletedHoldAtLocationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Returns the default holding location information when HOLD_AT_LOCATION special service is requested and the client does not specify the hold location address.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedHoldAtLocationDetail
     */
    public $CompletedHoldAtLocationDetail;
    /**
     * The ExportComplianceStatement
     * Meta informations extracted from the WSDL
     * - documentation: Returns any defaults or updates applied to RequestedShipment.exportDetail.exportComplianceStatement.
     * - minOccurs: 0
     * @var string
     */
    public $ExportComplianceStatement;
    /**
     * The CompletedEtdDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedEtdDetail
     */
    public $CompletedEtdDetail;
    /**
     * The ShipmentDocuments
     * Meta informations extracted from the WSDL
     * - documentation: All shipment-level shipping documents (other than labels and barcodes).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[]
     */
    public $ShipmentDocuments;
    /**
     * The AssociatedShipments
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AssociatedShipmentDetail[]
     */
    public $AssociatedShipments;
    /**
     * The CompletedCodDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedCodDetail
     */
    public $CompletedCodDetail;
    /**
     * The CompletedPackageDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail[]
     */
    public $CompletedPackageDetails;
    /**
     * Constructor method for CompletedShipmentDetail
     * @uses CompletedShipmentDetail::setUsDomestic()
     * @uses CompletedShipmentDetail::setCarrierCode()
     * @uses CompletedShipmentDetail::setMasterTrackingId()
     * @uses CompletedShipmentDetail::setServiceTypeDescription()
     * @uses CompletedShipmentDetail::setPackagingDescription()
     * @uses CompletedShipmentDetail::setOperationalDetail()
     * @uses CompletedShipmentDetail::setAccessDetail()
     * @uses CompletedShipmentDetail::setTagDetail()
     * @uses CompletedShipmentDetail::setSmartPostDetail()
     * @uses CompletedShipmentDetail::setHazardousShipmentDetail()
     * @uses CompletedShipmentDetail::setShipmentRating()
     * @uses CompletedShipmentDetail::setCompletedHoldAtLocationDetail()
     * @uses CompletedShipmentDetail::setExportComplianceStatement()
     * @uses CompletedShipmentDetail::setCompletedEtdDetail()
     * @uses CompletedShipmentDetail::setShipmentDocuments()
     * @uses CompletedShipmentDetail::setAssociatedShipments()
     * @uses CompletedShipmentDetail::setCompletedCodDetail()
     * @uses CompletedShipmentDetail::setCompletedPackageDetails()
     * @param bool $usDomestic
     * @param string $carrierCode
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $masterTrackingId
     * @param string $serviceTypeDescription
     * @param string $packagingDescription
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentOperationalDetail $operationalDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PendingShipmentAccessDetail $accessDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedTagDetail $tagDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedSmartPostDetail $smartPostDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousShipmentDetail $hazardousShipmentDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentRating $shipmentRating
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedHoldAtLocationDetail $completedHoldAtLocationDetail
     * @param string $exportComplianceStatement
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedEtdDetail $completedEtdDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[] $shipmentDocuments
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedShipmentDetail[] $associatedShipments
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedCodDetail $completedCodDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail[] $completedPackageDetails
     */
    public function __construct($usDomestic = null, $carrierCode = null, \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $masterTrackingId = null, $serviceTypeDescription = null, $packagingDescription = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentOperationalDetail $operationalDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\PendingShipmentAccessDetail $accessDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\CompletedTagDetail $tagDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\CompletedSmartPostDetail $smartPostDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousShipmentDetail $hazardousShipmentDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentRating $shipmentRating = null, \NicholasCreativeMedia\FedExPHP\Structs\CompletedHoldAtLocationDetail $completedHoldAtLocationDetail = null, $exportComplianceStatement = null, \NicholasCreativeMedia\FedExPHP\Structs\CompletedEtdDetail $completedEtdDetail = null, array $shipmentDocuments = array(), array $associatedShipments = array(), \NicholasCreativeMedia\FedExPHP\Structs\CompletedCodDetail $completedCodDetail = null, array $completedPackageDetails = array())
    {
        $this
            ->setUsDomestic($usDomestic)
            ->setCarrierCode($carrierCode)
            ->setMasterTrackingId($masterTrackingId)
            ->setServiceTypeDescription($serviceTypeDescription)
            ->setPackagingDescription($packagingDescription)
            ->setOperationalDetail($operationalDetail)
            ->setAccessDetail($accessDetail)
            ->setTagDetail($tagDetail)
            ->setSmartPostDetail($smartPostDetail)
            ->setHazardousShipmentDetail($hazardousShipmentDetail)
            ->setShipmentRating($shipmentRating)
            ->setCompletedHoldAtLocationDetail($completedHoldAtLocationDetail)
            ->setExportComplianceStatement($exportComplianceStatement)
            ->setCompletedEtdDetail($completedEtdDetail)
            ->setShipmentDocuments($shipmentDocuments)
            ->setAssociatedShipments($associatedShipments)
            ->setCompletedCodDetail($completedCodDetail)
            ->setCompletedPackageDetails($completedPackageDetails);
    }
    /**
     * Get UsDomestic value
     * @return bool|null
     */
    public function getUsDomestic()
    {
        return $this->UsDomestic;
    }
    /**
     * Set UsDomestic value
     * @param bool $usDomestic
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setUsDomestic($usDomestic = null)
    {
        $this->UsDomestic = $usDomestic;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get MasterTrackingId value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingId|null
     */
    public function getMasterTrackingId()
    {
        return $this->MasterTrackingId;
    }
    /**
     * Set MasterTrackingId value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $masterTrackingId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setMasterTrackingId(\NicholasCreativeMedia\FedExPHP\Structs\TrackingId $masterTrackingId = null)
    {
        $this->MasterTrackingId = $masterTrackingId;
        return $this;
    }
    /**
     * Get ServiceTypeDescription value
     * @return string|null
     */
    public function getServiceTypeDescription()
    {
        return $this->ServiceTypeDescription;
    }
    /**
     * Set ServiceTypeDescription value
     * @param string $serviceTypeDescription
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setServiceTypeDescription($serviceTypeDescription = null)
    {
        // validation for constraint: string
        if (!is_null($serviceTypeDescription) && !is_string($serviceTypeDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceTypeDescription)), __LINE__);
        }
        $this->ServiceTypeDescription = $serviceTypeDescription;
        return $this;
    }
    /**
     * Get PackagingDescription value
     * @return string|null
     */
    public function getPackagingDescription()
    {
        return $this->PackagingDescription;
    }
    /**
     * Set PackagingDescription value
     * @param string $packagingDescription
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setPackagingDescription($packagingDescription = null)
    {
        // validation for constraint: string
        if (!is_null($packagingDescription) && !is_string($packagingDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packagingDescription)), __LINE__);
        }
        $this->PackagingDescription = $packagingDescription;
        return $this;
    }
    /**
     * Get OperationalDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentOperationalDetail|null
     */
    public function getOperationalDetail()
    {
        return $this->OperationalDetail;
    }
    /**
     * Set OperationalDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentOperationalDetail $operationalDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setOperationalDetail(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentOperationalDetail $operationalDetail = null)
    {
        $this->OperationalDetail = $operationalDetail;
        return $this;
    }
    /**
     * Get AccessDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PendingShipmentAccessDetail|null
     */
    public function getAccessDetail()
    {
        return $this->AccessDetail;
    }
    /**
     * Set AccessDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PendingShipmentAccessDetail $accessDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setAccessDetail(\NicholasCreativeMedia\FedExPHP\Structs\PendingShipmentAccessDetail $accessDetail = null)
    {
        $this->AccessDetail = $accessDetail;
        return $this;
    }
    /**
     * Get TagDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedTagDetail|null
     */
    public function getTagDetail()
    {
        return $this->TagDetail;
    }
    /**
     * Set TagDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedTagDetail $tagDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setTagDetail(\NicholasCreativeMedia\FedExPHP\Structs\CompletedTagDetail $tagDetail = null)
    {
        $this->TagDetail = $tagDetail;
        return $this;
    }
    /**
     * Get SmartPostDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedSmartPostDetail|null
     */
    public function getSmartPostDetail()
    {
        return $this->SmartPostDetail;
    }
    /**
     * Set SmartPostDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedSmartPostDetail $smartPostDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setSmartPostDetail(\NicholasCreativeMedia\FedExPHP\Structs\CompletedSmartPostDetail $smartPostDetail = null)
    {
        $this->SmartPostDetail = $smartPostDetail;
        return $this;
    }
    /**
     * Get HazardousShipmentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousShipmentDetail|null
     */
    public function getHazardousShipmentDetail()
    {
        return $this->HazardousShipmentDetail;
    }
    /**
     * Set HazardousShipmentDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousShipmentDetail $hazardousShipmentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setHazardousShipmentDetail(\NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousShipmentDetail $hazardousShipmentDetail = null)
    {
        $this->HazardousShipmentDetail = $hazardousShipmentDetail;
        return $this;
    }
    /**
     * Get ShipmentRating value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentRating|null
     */
    public function getShipmentRating()
    {
        return $this->ShipmentRating;
    }
    /**
     * Set ShipmentRating value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentRating $shipmentRating
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setShipmentRating(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentRating $shipmentRating = null)
    {
        $this->ShipmentRating = $shipmentRating;
        return $this;
    }
    /**
     * Get CompletedHoldAtLocationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedHoldAtLocationDetail|null
     */
    public function getCompletedHoldAtLocationDetail()
    {
        return $this->CompletedHoldAtLocationDetail;
    }
    /**
     * Set CompletedHoldAtLocationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedHoldAtLocationDetail $completedHoldAtLocationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setCompletedHoldAtLocationDetail(\NicholasCreativeMedia\FedExPHP\Structs\CompletedHoldAtLocationDetail $completedHoldAtLocationDetail = null)
    {
        $this->CompletedHoldAtLocationDetail = $completedHoldAtLocationDetail;
        return $this;
    }
    /**
     * Get ExportComplianceStatement value
     * @return string|null
     */
    public function getExportComplianceStatement()
    {
        return $this->ExportComplianceStatement;
    }
    /**
     * Set ExportComplianceStatement value
     * @param string $exportComplianceStatement
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setExportComplianceStatement($exportComplianceStatement = null)
    {
        // validation for constraint: string
        if (!is_null($exportComplianceStatement) && !is_string($exportComplianceStatement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exportComplianceStatement)), __LINE__);
        }
        $this->ExportComplianceStatement = $exportComplianceStatement;
        return $this;
    }
    /**
     * Get CompletedEtdDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedEtdDetail|null
     */
    public function getCompletedEtdDetail()
    {
        return $this->CompletedEtdDetail;
    }
    /**
     * Set CompletedEtdDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedEtdDetail $completedEtdDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setCompletedEtdDetail(\NicholasCreativeMedia\FedExPHP\Structs\CompletedEtdDetail $completedEtdDetail = null)
    {
        $this->CompletedEtdDetail = $completedEtdDetail;
        return $this;
    }
    /**
     * Get ShipmentDocuments value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[]|null
     */
    public function getShipmentDocuments()
    {
        return $this->ShipmentDocuments;
    }
    /**
     * Set ShipmentDocuments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[] $shipmentDocuments
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setShipmentDocuments(array $shipmentDocuments = array())
    {
        foreach ($shipmentDocuments as $completedShipmentDetailShipmentDocumentsItem) {
            // validation for constraint: itemType
            if (!$completedShipmentDetailShipmentDocumentsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument) {
                throw new \InvalidArgumentException(sprintf('The ShipmentDocuments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument, "%s" given', is_object($completedShipmentDetailShipmentDocumentsItem) ? get_class($completedShipmentDetailShipmentDocumentsItem) : gettype($completedShipmentDetailShipmentDocumentsItem)), __LINE__);
            }
        }
        $this->ShipmentDocuments = $shipmentDocuments;
        return $this;
    }
    /**
     * Add item to ShipmentDocuments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function addToShipmentDocuments(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument) {
            throw new \InvalidArgumentException(sprintf('The ShipmentDocuments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipmentDocuments[] = $item;
        return $this;
    }
    /**
     * Get AssociatedShipments value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AssociatedShipmentDetail[]|null
     */
    public function getAssociatedShipments()
    {
        return $this->AssociatedShipments;
    }
    /**
     * Set AssociatedShipments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedShipmentDetail[] $associatedShipments
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setAssociatedShipments(array $associatedShipments = array())
    {
        foreach ($associatedShipments as $completedShipmentDetailAssociatedShipmentsItem) {
            // validation for constraint: itemType
            if (!$completedShipmentDetailAssociatedShipmentsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\AssociatedShipmentDetail) {
                throw new \InvalidArgumentException(sprintf('The AssociatedShipments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AssociatedShipmentDetail, "%s" given', is_object($completedShipmentDetailAssociatedShipmentsItem) ? get_class($completedShipmentDetailAssociatedShipmentsItem) : gettype($completedShipmentDetailAssociatedShipmentsItem)), __LINE__);
            }
        }
        $this->AssociatedShipments = $associatedShipments;
        return $this;
    }
    /**
     * Add item to AssociatedShipments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedShipmentDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function addToAssociatedShipments(\NicholasCreativeMedia\FedExPHP\Structs\AssociatedShipmentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\AssociatedShipmentDetail) {
            throw new \InvalidArgumentException(sprintf('The AssociatedShipments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AssociatedShipmentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AssociatedShipments[] = $item;
        return $this;
    }
    /**
     * Get CompletedCodDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedCodDetail|null
     */
    public function getCompletedCodDetail()
    {
        return $this->CompletedCodDetail;
    }
    /**
     * Set CompletedCodDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedCodDetail $completedCodDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setCompletedCodDetail(\NicholasCreativeMedia\FedExPHP\Structs\CompletedCodDetail $completedCodDetail = null)
    {
        $this->CompletedCodDetail = $completedCodDetail;
        return $this;
    }
    /**
     * Get CompletedPackageDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail[]|null
     */
    public function getCompletedPackageDetails()
    {
        return $this->CompletedPackageDetails;
    }
    /**
     * Set CompletedPackageDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail[] $completedPackageDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function setCompletedPackageDetails(array $completedPackageDetails = array())
    {
        foreach ($completedPackageDetails as $completedShipmentDetailCompletedPackageDetailsItem) {
            // validation for constraint: itemType
            if (!$completedShipmentDetailCompletedPackageDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail) {
                throw new \InvalidArgumentException(sprintf('The CompletedPackageDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail, "%s" given', is_object($completedShipmentDetailCompletedPackageDetailsItem) ? get_class($completedShipmentDetailCompletedPackageDetailsItem) : gettype($completedShipmentDetailCompletedPackageDetailsItem)), __LINE__);
            }
        }
        $this->CompletedPackageDetails = $completedPackageDetails;
        return $this;
    }
    /**
     * Add item to CompletedPackageDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
     */
    public function addToCompletedPackageDetails(\NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail) {
            throw new \InvalidArgumentException(sprintf('The CompletedPackageDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CompletedPackageDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedShipmentDetail
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
