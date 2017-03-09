<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackDetail Structs
 * @subpackage Structs
 */
class TrackDetail extends AbstractStructBase
{
    /**
     * The Notification
     * Meta informations extracted from the WSDL
     * - documentation: To report soft error on an individual track detail.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Notification
     */
    public $Notification;
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: The FedEx package identifier.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * The Barcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\StringBarcode
     */
    public $Barcode;
    /**
     * The TrackingNumberUniqueIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: When duplicate tracking numbers exist this data is returned with summary information for each of the duplicates. The summary information is used to determine which of the duplicates the intended tracking number is. This identifier is
     * used on a subsequent track request to retrieve the tracking data for the desired tracking number.
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumberUniqueIdentifier;
    /**
     * The StatusDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies details about the status of the shipment being tracked.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusDetail
     */
    public $StatusDetail;
    /**
     * The InformationNotes
     * Meta informations extracted from the WSDL
     * - documentation: Notifications to the end user that provide additional information relevant to the tracked shipment. For example, a notification may indicate that a change in behavior has occurred.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackInformationNoteDetail[]
     */
    public $InformationNotes;
    /**
     * The CustomerExceptionRequests
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomerExceptionRequestDetail[]
     */
    public $CustomerExceptionRequests;
    /**
     * The Reconciliation
     * Meta informations extracted from the WSDL
     * - documentation: Used to report the status of a piece of a multiple piece shipment which is no longer traveling with the rest of the packages in the shipment or has not been accounted for.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackReconciliation
     */
    public $Reconciliation;
    /**
     * The ServiceCommitMessage
     * Meta informations extracted from the WSDL
     * - documentation: Used to convey information such as. 1. FedEx has received information about a package but has not yet taken possession of it. 2. FedEx has handed the package off to a third party for final delivery. 3. The package delivery has been
     * cancelled
     * - minOccurs: 0
     * @var string
     */
    public $ServiceCommitMessage;
    /**
     * The DestinationServiceArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationServiceArea;
    /**
     * The DestinationServiceAreaDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationServiceAreaDescription;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a FedEx operating company (transportation).
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The OperatingCompany
     * Meta informations extracted from the WSDL
     * - documentation: Identifies operating transportation company that is the specific to the carrier code.
     * - minOccurs: 0
     * @var string
     */
    public $OperatingCompany;
    /**
     * The OperatingCompanyOrCarrierDescription
     * Meta informations extracted from the WSDL
     * - documentation: Specifies a detailed description about the carrier or the operating company.
     * - minOccurs: 0
     * @var string
     */
    public $OperatingCompanyOrCarrierDescription;
    /**
     * The CartageAgentCompanyName
     * Meta informations extracted from the WSDL
     * - documentation: If the package was interlined to a cartage agent, this is the name of the cartage agent. (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $CartageAgentCompanyName;
    /**
     * The ProductionLocationContactAndAddress
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the FXO production centre contact and address.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress
     */
    public $ProductionLocationContactAndAddress;
    /**
     * The OtherIdentifiers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackOtherIdentifierDetail[]
     */
    public $OtherIdentifiers;
    /**
     * The FormId
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $FormId;
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - documentation: Specifies details about service such as service description and type.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackServiceDescriptionDetail
     */
    public $Service;
    /**
     * The PackageWeight
     * Meta informations extracted from the WSDL
     * - documentation: The weight of this package.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $PackageWeight;
    /**
     * The PackageDimensions
     * Meta informations extracted from the WSDL
     * - documentation: Physical dimensions of the package.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Dimensions
     */
    public $PackageDimensions;
    /**
     * The PackageDimensionalWeight
     * Meta informations extracted from the WSDL
     * - documentation: The dimensional weight of the package.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $PackageDimensionalWeight;
    /**
     * The ShipmentWeight
     * Meta informations extracted from the WSDL
     * - documentation: The weight of the entire shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $ShipmentWeight;
    /**
     * The Packaging
     * Meta informations extracted from the WSDL
     * - documentation: Retained for legacy compatibility only.
     * - minOccurs: 0
     * @var string
     */
    public $Packaging;
    /**
     * The PackagingType
     * Meta informations extracted from the WSDL
     * - documentation: Strict representation of the Packaging type (e.g. FEDEX_BOX, YOUR_PACKAGING).
     * - minOccurs: 0
     * @var string
     */
    public $PackagingType;
    /**
     * The PhysicalPackagingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhysicalPackagingType;
    /**
     * The PackageSequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: The sequence number of this package in a shipment. This would be 2 if it was package number 2 of 4.
     * - minOccurs: 0
     * @var int
     */
    public $PackageSequenceNumber;
    /**
     * The PackageCount
     * Meta informations extracted from the WSDL
     * - documentation: The number of packages in this shipment.
     * - minOccurs: 0
     * @var int
     */
    public $PackageCount;
    /**
     * The CreatorSoftwareId
     * Meta informations extracted from the WSDL
     * - documentation: FOR FEDEX INTERNAL USE ONLY: Specifies the software id of the device that was used to create this tracked shipment.
     * - minOccurs: 0
     * @var string
     */
    public $CreatorSoftwareId;
    /**
     * The Charges
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the SPOC details.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackChargeDetail[]
     */
    public $Charges;
    /**
     * The NickName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NickName;
    /**
     * The Notes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Attributes;
    /**
     * The ShipmentContents
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord[]
     */
    public $ShipmentContents;
    /**
     * The PackageContents
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PackageContents;
    /**
     * The ClearanceLocationCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClearanceLocationCode;
    /**
     * The Commodities
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Commodity[]
     */
    public $Commodities;
    /**
     * The ReturnDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackReturnDetail
     */
    public $ReturnDetail;
    /**
     * The CustomsOptionDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the reason for return.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomsOptionDetail[]
     */
    public $CustomsOptionDetails;
    /**
     * The AdvanceNotificationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackAdvanceNotificationDetail
     */
    public $AdvanceNotificationDetail;
    /**
     * The SpecialHandlings
     * Meta informations extracted from the WSDL
     * - documentation: List of special handlings that applied to this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialHandling[]
     */
    public $SpecialHandlings;
    /**
     * The Payments
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the payments for the shipment being tracked.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackPayment[]
     */
    public $Payments;
    /**
     * The Shipper
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Contact
     */
    public $Shipper;
    /**
     * The PossessionStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates last-known possession of package (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $PossessionStatus;
    /**
     * The ShipperAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $ShipperAddress;
    /**
     * The OriginLocationAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address of the FedEx pickup location/facility.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $OriginLocationAddress;
    /**
     * The OriginStationId
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $OriginStationId;
    /**
     * The DatesOrTimes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingDateOrTimestamp[]
     */
    public $DatesOrTimes;
    /**
     * The TotalTransitDistance
     * Meta informations extracted from the WSDL
     * - documentation: The distance from the origin to the destination. Returned for Custom Critical shipments.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Distance
     */
    public $TotalTransitDistance;
    /**
     * The DistanceToDestination
     * Meta informations extracted from the WSDL
     * - documentation: Total distance package still has to travel. Returned for Custom Critical shipments.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Distance
     */
    public $DistanceToDestination;
    /**
     * The SpecialInstructions
     * Meta informations extracted from the WSDL
     * - documentation: Provides additional details about package delivery.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction[]
     */
    public $SpecialInstructions;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Contact
     */
    public $Recipient;
    /**
     * The LastUpdatedDestinationAddress
     * Meta informations extracted from the WSDL
     * - documentation: This is the latest updated destination address.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $LastUpdatedDestinationAddress;
    /**
     * The DestinationAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address this package is to be (or has been) delivered.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $DestinationAddress;
    /**
     * The HoldAtLocationContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Contact
     */
    public $HoldAtLocationContact;
    /**
     * The HoldAtLocationAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address this package is requested to placed on hold.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $HoldAtLocationAddress;
    /**
     * The DestinationStationId
     * Meta informations extracted from the WSDL
     * - documentation: (Returned for CSR SL only.)
     * - minOccurs: 0
     * @var string
     */
    public $DestinationStationId;
    /**
     * The DestinationLocationAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address of the FedEx delivery location/facility.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $DestinationLocationAddress;
    /**
     * The DestinationLocationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationLocationType;
    /**
     * The DestinationLocationTimeZoneOffset
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DestinationLocationTimeZoneOffset;
    /**
     * The ActualDeliveryAddress
     * Meta informations extracted from the WSDL
     * - documentation: Actual address where package was delivered. Differs from destinationAddress, which indicates where the package was to be delivered; This field tells where delivery actually occurred (next door, at station, etc.)
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $ActualDeliveryAddress;
    /**
     * The OfficeOrderDeliveryMethod
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the method of office order delivery.
     * - minOccurs: 0
     * @var string
     */
    public $OfficeOrderDeliveryMethod;
    /**
     * The DeliveryLocationType
     * Meta informations extracted from the WSDL
     * - documentation: Strict text indicating the delivery location at the delivered to address.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryLocationType;
    /**
     * The DeliveryLocationDescription
     * Meta informations extracted from the WSDL
     * - documentation: User/screen friendly representation of the DeliveryLocationType (delivery location at the delivered to address). Can be returned in localized text.
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryLocationDescription;
    /**
     * The DeliveryAttempts
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the number of delivery attempts made to deliver the shipment.
     * - minOccurs: 0
     * @var int
     */
    public $DeliveryAttempts;
    /**
     * The DeliverySignatureName
     * Meta informations extracted from the WSDL
     * - documentation: This is either the name of the person that signed for the package or "Signature not requested" or "Signature on file".
     * - minOccurs: 0
     * @var string
     */
    public $DeliverySignatureName;
    /**
     * The PieceCountVerificationDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the count of the packages delivered at the delivery location and the count of the packages at the origin.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PieceCountVerificationDetail[]
     */
    public $PieceCountVerificationDetails;
    /**
     * The TotalUniqueAddressCountInConsolidation
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the total number of unique addresses on the CRNs in a consolidation.
     * - minOccurs: 0
     * @var int
     */
    public $TotalUniqueAddressCountInConsolidation;
    /**
     * The AvailableImages
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AvailableImagesDetail[]
     */
    public $AvailableImages;
    /**
     * The Signature
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SignatureImageDetail
     */
    public $Signature;
    /**
     * The NotificationEventsAvailable
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $NotificationEventsAvailable;
    /**
     * The SplitShipmentParts
     * Meta informations extracted from the WSDL
     * - documentation: Returned for cargo shipments only when they are currently split across vehicles.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackSplitShipmentPart[]
     */
    public $SplitShipmentParts;
    /**
     * The DeliveryOptionEligibilityDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details about the eligibility for different delivery options.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DeliveryOptionEligibilityDetail[]
     */
    public $DeliveryOptionEligibilityDetails;
    /**
     * The Events
     * Meta informations extracted from the WSDL
     * - documentation: Event information for a tracking number.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackEvent[]
     */
    public $Events;
    /**
     * Constructor method for TrackDetail
     * @uses TrackDetail::setNotification()
     * @uses TrackDetail::setTrackingNumber()
     * @uses TrackDetail::setBarcode()
     * @uses TrackDetail::setTrackingNumberUniqueIdentifier()
     * @uses TrackDetail::setStatusDetail()
     * @uses TrackDetail::setInformationNotes()
     * @uses TrackDetail::setCustomerExceptionRequests()
     * @uses TrackDetail::setReconciliation()
     * @uses TrackDetail::setServiceCommitMessage()
     * @uses TrackDetail::setDestinationServiceArea()
     * @uses TrackDetail::setDestinationServiceAreaDescription()
     * @uses TrackDetail::setCarrierCode()
     * @uses TrackDetail::setOperatingCompany()
     * @uses TrackDetail::setOperatingCompanyOrCarrierDescription()
     * @uses TrackDetail::setCartageAgentCompanyName()
     * @uses TrackDetail::setProductionLocationContactAndAddress()
     * @uses TrackDetail::setOtherIdentifiers()
     * @uses TrackDetail::setFormId()
     * @uses TrackDetail::setService()
     * @uses TrackDetail::setPackageWeight()
     * @uses TrackDetail::setPackageDimensions()
     * @uses TrackDetail::setPackageDimensionalWeight()
     * @uses TrackDetail::setShipmentWeight()
     * @uses TrackDetail::setPackaging()
     * @uses TrackDetail::setPackagingType()
     * @uses TrackDetail::setPhysicalPackagingType()
     * @uses TrackDetail::setPackageSequenceNumber()
     * @uses TrackDetail::setPackageCount()
     * @uses TrackDetail::setCreatorSoftwareId()
     * @uses TrackDetail::setCharges()
     * @uses TrackDetail::setNickName()
     * @uses TrackDetail::setNotes()
     * @uses TrackDetail::setAttributes()
     * @uses TrackDetail::setShipmentContents()
     * @uses TrackDetail::setPackageContents()
     * @uses TrackDetail::setClearanceLocationCode()
     * @uses TrackDetail::setCommodities()
     * @uses TrackDetail::setReturnDetail()
     * @uses TrackDetail::setCustomsOptionDetails()
     * @uses TrackDetail::setAdvanceNotificationDetail()
     * @uses TrackDetail::setSpecialHandlings()
     * @uses TrackDetail::setPayments()
     * @uses TrackDetail::setShipper()
     * @uses TrackDetail::setPossessionStatus()
     * @uses TrackDetail::setShipperAddress()
     * @uses TrackDetail::setOriginLocationAddress()
     * @uses TrackDetail::setOriginStationId()
     * @uses TrackDetail::setDatesOrTimes()
     * @uses TrackDetail::setTotalTransitDistance()
     * @uses TrackDetail::setDistanceToDestination()
     * @uses TrackDetail::setSpecialInstructions()
     * @uses TrackDetail::setRecipient()
     * @uses TrackDetail::setLastUpdatedDestinationAddress()
     * @uses TrackDetail::setDestinationAddress()
     * @uses TrackDetail::setHoldAtLocationContact()
     * @uses TrackDetail::setHoldAtLocationAddress()
     * @uses TrackDetail::setDestinationStationId()
     * @uses TrackDetail::setDestinationLocationAddress()
     * @uses TrackDetail::setDestinationLocationType()
     * @uses TrackDetail::setDestinationLocationTimeZoneOffset()
     * @uses TrackDetail::setActualDeliveryAddress()
     * @uses TrackDetail::setOfficeOrderDeliveryMethod()
     * @uses TrackDetail::setDeliveryLocationType()
     * @uses TrackDetail::setDeliveryLocationDescription()
     * @uses TrackDetail::setDeliveryAttempts()
     * @uses TrackDetail::setDeliverySignatureName()
     * @uses TrackDetail::setPieceCountVerificationDetails()
     * @uses TrackDetail::setTotalUniqueAddressCountInConsolidation()
     * @uses TrackDetail::setAvailableImages()
     * @uses TrackDetail::setSignature()
     * @uses TrackDetail::setNotificationEventsAvailable()
     * @uses TrackDetail::setSplitShipmentParts()
     * @uses TrackDetail::setDeliveryOptionEligibilityDetails()
     * @uses TrackDetail::setEvents()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $notification
     * @param string $trackingNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\StringBarcode $barcode
     * @param string $trackingNumberUniqueIdentifier
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusDetail $statusDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackInformationNoteDetail[] $informationNotes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerExceptionRequestDetail[] $customerExceptionRequests
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackReconciliation $reconciliation
     * @param string $serviceCommitMessage
     * @param string $destinationServiceArea
     * @param string $destinationServiceAreaDescription
     * @param string $carrierCode
     * @param string $operatingCompany
     * @param string $operatingCompanyOrCarrierDescription
     * @param string $cartageAgentCompanyName
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $productionLocationContactAndAddress
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackOtherIdentifierDetail[] $otherIdentifiers
     * @param string $formId
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackServiceDescriptionDetail $service
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $packageWeight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $packageDimensions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $packageDimensionalWeight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $shipmentWeight
     * @param string $packaging
     * @param string $packagingType
     * @param string $physicalPackagingType
     * @param int $packageSequenceNumber
     * @param int $packageCount
     * @param string $creatorSoftwareId
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackChargeDetail[] $charges
     * @param string $nickName
     * @param string $notes
     * @param string[] $attributes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord[] $shipmentContents
     * @param string[] $packageContents
     * @param string $clearanceLocationCode
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Commodity[] $commodities
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackReturnDetail $returnDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomsOptionDetail[] $customsOptionDetails
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackAdvanceNotificationDetail $advanceNotificationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialHandling[] $specialHandlings
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackPayment[] $payments
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Contact $shipper
     * @param string $possessionStatus
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $shipperAddress
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $originLocationAddress
     * @param string $originStationId
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingDateOrTimestamp[] $datesOrTimes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Distance $totalTransitDistance
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Distance $distanceToDestination
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction[] $specialInstructions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Contact $recipient
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $lastUpdatedDestinationAddress
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $destinationAddress
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Contact $holdAtLocationContact
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $holdAtLocationAddress
     * @param string $destinationStationId
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $destinationLocationAddress
     * @param string $destinationLocationType
     * @param string $destinationLocationTimeZoneOffset
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $actualDeliveryAddress
     * @param string $officeOrderDeliveryMethod
     * @param string $deliveryLocationType
     * @param string $deliveryLocationDescription
     * @param int $deliveryAttempts
     * @param string $deliverySignatureName
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PieceCountVerificationDetail[] $pieceCountVerificationDetails
     * @param int $totalUniqueAddressCountInConsolidation
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AvailableImagesDetail[] $availableImages
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureImageDetail $signature
     * @param string[] $notificationEventsAvailable
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSplitShipmentPart[] $splitShipmentParts
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeliveryOptionEligibilityDetail[] $deliveryOptionEligibilityDetails
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackEvent[] $events
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\Notification $notification = null, $trackingNumber = null, \NicholasCreativeMedia\FedExPHP\Structs\StringBarcode $barcode = null, $trackingNumberUniqueIdentifier = null, \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusDetail $statusDetail = null, array $informationNotes = array(), array $customerExceptionRequests = array(), \NicholasCreativeMedia\FedExPHP\Structs\TrackReconciliation $reconciliation = null, $serviceCommitMessage = null, $destinationServiceArea = null, $destinationServiceAreaDescription = null, $carrierCode = null, $operatingCompany = null, $operatingCompanyOrCarrierDescription = null, $cartageAgentCompanyName = null, \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $productionLocationContactAndAddress = null, array $otherIdentifiers = array(), $formId = null, \NicholasCreativeMedia\FedExPHP\Structs\TrackServiceDescriptionDetail $service = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $packageWeight = null, \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $packageDimensions = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $packageDimensionalWeight = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $shipmentWeight = null, $packaging = null, $packagingType = null, $physicalPackagingType = null, $packageSequenceNumber = null, $packageCount = null, $creatorSoftwareId = null, array $charges = array(), $nickName = null, $notes = null, array $attributes = array(), array $shipmentContents = array(), array $packageContents = array(), $clearanceLocationCode = null, array $commodities = array(), \NicholasCreativeMedia\FedExPHP\Structs\TrackReturnDetail $returnDetail = null, array $customsOptionDetails = array(), \NicholasCreativeMedia\FedExPHP\Structs\TrackAdvanceNotificationDetail $advanceNotificationDetail = null, array $specialHandlings = array(), array $payments = array(), \NicholasCreativeMedia\FedExPHP\Structs\Contact $shipper = null, $possessionStatus = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $shipperAddress = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $originLocationAddress = null, $originStationId = null, array $datesOrTimes = array(), \NicholasCreativeMedia\FedExPHP\Structs\Distance $totalTransitDistance = null, \NicholasCreativeMedia\FedExPHP\Structs\Distance $distanceToDestination = null, array $specialInstructions = array(), \NicholasCreativeMedia\FedExPHP\Structs\Contact $recipient = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $lastUpdatedDestinationAddress = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $destinationAddress = null, \NicholasCreativeMedia\FedExPHP\Structs\Contact $holdAtLocationContact = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $holdAtLocationAddress = null, $destinationStationId = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $destinationLocationAddress = null, $destinationLocationType = null, $destinationLocationTimeZoneOffset = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $actualDeliveryAddress = null, $officeOrderDeliveryMethod = null, $deliveryLocationType = null, $deliveryLocationDescription = null, $deliveryAttempts = null, $deliverySignatureName = null, array $pieceCountVerificationDetails = array(), $totalUniqueAddressCountInConsolidation = null, array $availableImages = array(), \NicholasCreativeMedia\FedExPHP\Structs\SignatureImageDetail $signature = null, array $notificationEventsAvailable = array(), array $splitShipmentParts = array(), array $deliveryOptionEligibilityDetails = array(), array $events = array())
    {
        $this
            ->setNotification($notification)
            ->setTrackingNumber($trackingNumber)
            ->setBarcode($barcode)
            ->setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
            ->setStatusDetail($statusDetail)
            ->setInformationNotes($informationNotes)
            ->setCustomerExceptionRequests($customerExceptionRequests)
            ->setReconciliation($reconciliation)
            ->setServiceCommitMessage($serviceCommitMessage)
            ->setDestinationServiceArea($destinationServiceArea)
            ->setDestinationServiceAreaDescription($destinationServiceAreaDescription)
            ->setCarrierCode($carrierCode)
            ->setOperatingCompany($operatingCompany)
            ->setOperatingCompanyOrCarrierDescription($operatingCompanyOrCarrierDescription)
            ->setCartageAgentCompanyName($cartageAgentCompanyName)
            ->setProductionLocationContactAndAddress($productionLocationContactAndAddress)
            ->setOtherIdentifiers($otherIdentifiers)
            ->setFormId($formId)
            ->setService($service)
            ->setPackageWeight($packageWeight)
            ->setPackageDimensions($packageDimensions)
            ->setPackageDimensionalWeight($packageDimensionalWeight)
            ->setShipmentWeight($shipmentWeight)
            ->setPackaging($packaging)
            ->setPackagingType($packagingType)
            ->setPhysicalPackagingType($physicalPackagingType)
            ->setPackageSequenceNumber($packageSequenceNumber)
            ->setPackageCount($packageCount)
            ->setCreatorSoftwareId($creatorSoftwareId)
            ->setCharges($charges)
            ->setNickName($nickName)
            ->setNotes($notes)
            ->setAttributes($attributes)
            ->setShipmentContents($shipmentContents)
            ->setPackageContents($packageContents)
            ->setClearanceLocationCode($clearanceLocationCode)
            ->setCommodities($commodities)
            ->setReturnDetail($returnDetail)
            ->setCustomsOptionDetails($customsOptionDetails)
            ->setAdvanceNotificationDetail($advanceNotificationDetail)
            ->setSpecialHandlings($specialHandlings)
            ->setPayments($payments)
            ->setShipper($shipper)
            ->setPossessionStatus($possessionStatus)
            ->setShipperAddress($shipperAddress)
            ->setOriginLocationAddress($originLocationAddress)
            ->setOriginStationId($originStationId)
            ->setDatesOrTimes($datesOrTimes)
            ->setTotalTransitDistance($totalTransitDistance)
            ->setDistanceToDestination($distanceToDestination)
            ->setSpecialInstructions($specialInstructions)
            ->setRecipient($recipient)
            ->setLastUpdatedDestinationAddress($lastUpdatedDestinationAddress)
            ->setDestinationAddress($destinationAddress)
            ->setHoldAtLocationContact($holdAtLocationContact)
            ->setHoldAtLocationAddress($holdAtLocationAddress)
            ->setDestinationStationId($destinationStationId)
            ->setDestinationLocationAddress($destinationLocationAddress)
            ->setDestinationLocationType($destinationLocationType)
            ->setDestinationLocationTimeZoneOffset($destinationLocationTimeZoneOffset)
            ->setActualDeliveryAddress($actualDeliveryAddress)
            ->setOfficeOrderDeliveryMethod($officeOrderDeliveryMethod)
            ->setDeliveryLocationType($deliveryLocationType)
            ->setDeliveryLocationDescription($deliveryLocationDescription)
            ->setDeliveryAttempts($deliveryAttempts)
            ->setDeliverySignatureName($deliverySignatureName)
            ->setPieceCountVerificationDetails($pieceCountVerificationDetails)
            ->setTotalUniqueAddressCountInConsolidation($totalUniqueAddressCountInConsolidation)
            ->setAvailableImages($availableImages)
            ->setSignature($signature)
            ->setNotificationEventsAvailable($notificationEventsAvailable)
            ->setSplitShipmentParts($splitShipmentParts)
            ->setDeliveryOptionEligibilityDetails($deliveryOptionEligibilityDetails)
            ->setEvents($events);
    }
    /**
     * Get Notification value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Notification|null
     */
    public function getNotification()
    {
        return $this->Notification;
    }
    /**
     * Set Notification value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $notification
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setNotification(\NicholasCreativeMedia\FedExPHP\Structs\Notification $notification = null)
    {
        $this->Notification = $notification;
        return $this;
    }
    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumber)), __LINE__);
        }
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Get Barcode value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\StringBarcode|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }
    /**
     * Set Barcode value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\StringBarcode $barcode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setBarcode(\NicholasCreativeMedia\FedExPHP\Structs\StringBarcode $barcode = null)
    {
        $this->Barcode = $barcode;
        return $this;
    }
    /**
     * Get TrackingNumberUniqueIdentifier value
     * @return string|null
     */
    public function getTrackingNumberUniqueIdentifier()
    {
        return $this->TrackingNumberUniqueIdentifier;
    }
    /**
     * Set TrackingNumberUniqueIdentifier value
     * @param string $trackingNumberUniqueIdentifier
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumberUniqueIdentifier) && !is_string($trackingNumberUniqueIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumberUniqueIdentifier)), __LINE__);
        }
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    /**
     * Get StatusDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusDetail|null
     */
    public function getStatusDetail()
    {
        return $this->StatusDetail;
    }
    /**
     * Set StatusDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusDetail $statusDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setStatusDetail(\NicholasCreativeMedia\FedExPHP\Structs\TrackStatusDetail $statusDetail = null)
    {
        $this->StatusDetail = $statusDetail;
        return $this;
    }
    /**
     * Get InformationNotes value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackInformationNoteDetail[]|null
     */
    public function getInformationNotes()
    {
        return $this->InformationNotes;
    }
    /**
     * Set InformationNotes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackInformationNoteDetail[] $informationNotes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setInformationNotes(array $informationNotes = array())
    {
        foreach ($informationNotes as $trackDetailInformationNotesItem) {
            // validation for constraint: itemType
            if (!$trackDetailInformationNotesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackInformationNoteDetail) {
                throw new \InvalidArgumentException(sprintf('The InformationNotes property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackInformationNoteDetail, "%s" given', is_object($trackDetailInformationNotesItem) ? get_class($trackDetailInformationNotesItem) : gettype($trackDetailInformationNotesItem)), __LINE__);
            }
        }
        $this->InformationNotes = $informationNotes;
        return $this;
    }
    /**
     * Add item to InformationNotes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackInformationNoteDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToInformationNotes(\NicholasCreativeMedia\FedExPHP\Structs\TrackInformationNoteDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackInformationNoteDetail) {
            throw new \InvalidArgumentException(sprintf('The InformationNotes property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackInformationNoteDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InformationNotes[] = $item;
        return $this;
    }
    /**
     * Get CustomerExceptionRequests value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomerExceptionRequestDetail[]|null
     */
    public function getCustomerExceptionRequests()
    {
        return $this->CustomerExceptionRequests;
    }
    /**
     * Set CustomerExceptionRequests value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerExceptionRequestDetail[] $customerExceptionRequests
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setCustomerExceptionRequests(array $customerExceptionRequests = array())
    {
        foreach ($customerExceptionRequests as $trackDetailCustomerExceptionRequestsItem) {
            // validation for constraint: itemType
            if (!$trackDetailCustomerExceptionRequestsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\CustomerExceptionRequestDetail) {
                throw new \InvalidArgumentException(sprintf('The CustomerExceptionRequests property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CustomerExceptionRequestDetail, "%s" given', is_object($trackDetailCustomerExceptionRequestsItem) ? get_class($trackDetailCustomerExceptionRequestsItem) : gettype($trackDetailCustomerExceptionRequestsItem)), __LINE__);
            }
        }
        $this->CustomerExceptionRequests = $customerExceptionRequests;
        return $this;
    }
    /**
     * Add item to CustomerExceptionRequests value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerExceptionRequestDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToCustomerExceptionRequests(\NicholasCreativeMedia\FedExPHP\Structs\CustomerExceptionRequestDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\CustomerExceptionRequestDetail) {
            throw new \InvalidArgumentException(sprintf('The CustomerExceptionRequests property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CustomerExceptionRequestDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomerExceptionRequests[] = $item;
        return $this;
    }
    /**
     * Get Reconciliation value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackReconciliation|null
     */
    public function getReconciliation()
    {
        return $this->Reconciliation;
    }
    /**
     * Set Reconciliation value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackReconciliation $reconciliation
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setReconciliation(\NicholasCreativeMedia\FedExPHP\Structs\TrackReconciliation $reconciliation = null)
    {
        $this->Reconciliation = $reconciliation;
        return $this;
    }
    /**
     * Get ServiceCommitMessage value
     * @return string|null
     */
    public function getServiceCommitMessage()
    {
        return $this->ServiceCommitMessage;
    }
    /**
     * Set ServiceCommitMessage value
     * @param string $serviceCommitMessage
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setServiceCommitMessage($serviceCommitMessage = null)
    {
        // validation for constraint: string
        if (!is_null($serviceCommitMessage) && !is_string($serviceCommitMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceCommitMessage)), __LINE__);
        }
        $this->ServiceCommitMessage = $serviceCommitMessage;
        return $this;
    }
    /**
     * Get DestinationServiceArea value
     * @return string|null
     */
    public function getDestinationServiceArea()
    {
        return $this->DestinationServiceArea;
    }
    /**
     * Set DestinationServiceArea value
     * @param string $destinationServiceArea
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setDestinationServiceArea($destinationServiceArea = null)
    {
        // validation for constraint: string
        if (!is_null($destinationServiceArea) && !is_string($destinationServiceArea)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationServiceArea)), __LINE__);
        }
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    /**
     * Get DestinationServiceAreaDescription value
     * @return string|null
     */
    public function getDestinationServiceAreaDescription()
    {
        return $this->DestinationServiceAreaDescription;
    }
    /**
     * Set DestinationServiceAreaDescription value
     * @param string $destinationServiceAreaDescription
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setDestinationServiceAreaDescription($destinationServiceAreaDescription = null)
    {
        // validation for constraint: string
        if (!is_null($destinationServiceAreaDescription) && !is_string($destinationServiceAreaDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationServiceAreaDescription)), __LINE__);
        }
        $this->DestinationServiceAreaDescription = $destinationServiceAreaDescription;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
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
     * Get OperatingCompany value
     * @return string|null
     */
    public function getOperatingCompany()
    {
        return $this->OperatingCompany;
    }
    /**
     * Set OperatingCompany value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\OperatingCompanyType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\OperatingCompanyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $operatingCompany
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setOperatingCompany($operatingCompany = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\OperatingCompanyType::valueIsValid($operatingCompany)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $operatingCompany, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\OperatingCompanyType::getValidValues())), __LINE__);
        }
        $this->OperatingCompany = $operatingCompany;
        return $this;
    }
    /**
     * Get OperatingCompanyOrCarrierDescription value
     * @return string|null
     */
    public function getOperatingCompanyOrCarrierDescription()
    {
        return $this->OperatingCompanyOrCarrierDescription;
    }
    /**
     * Set OperatingCompanyOrCarrierDescription value
     * @param string $operatingCompanyOrCarrierDescription
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setOperatingCompanyOrCarrierDescription($operatingCompanyOrCarrierDescription = null)
    {
        // validation for constraint: string
        if (!is_null($operatingCompanyOrCarrierDescription) && !is_string($operatingCompanyOrCarrierDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatingCompanyOrCarrierDescription)), __LINE__);
        }
        $this->OperatingCompanyOrCarrierDescription = $operatingCompanyOrCarrierDescription;
        return $this;
    }
    /**
     * Get CartageAgentCompanyName value
     * @return string|null
     */
    public function getCartageAgentCompanyName()
    {
        return $this->CartageAgentCompanyName;
    }
    /**
     * Set CartageAgentCompanyName value
     * @param string $cartageAgentCompanyName
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setCartageAgentCompanyName($cartageAgentCompanyName = null)
    {
        // validation for constraint: string
        if (!is_null($cartageAgentCompanyName) && !is_string($cartageAgentCompanyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cartageAgentCompanyName)), __LINE__);
        }
        $this->CartageAgentCompanyName = $cartageAgentCompanyName;
        return $this;
    }
    /**
     * Get ProductionLocationContactAndAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress|null
     */
    public function getProductionLocationContactAndAddress()
    {
        return $this->ProductionLocationContactAndAddress;
    }
    /**
     * Set ProductionLocationContactAndAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $productionLocationContactAndAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setProductionLocationContactAndAddress(\NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $productionLocationContactAndAddress = null)
    {
        $this->ProductionLocationContactAndAddress = $productionLocationContactAndAddress;
        return $this;
    }
    /**
     * Get OtherIdentifiers value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackOtherIdentifierDetail[]|null
     */
    public function getOtherIdentifiers()
    {
        return $this->OtherIdentifiers;
    }
    /**
     * Set OtherIdentifiers value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackOtherIdentifierDetail[] $otherIdentifiers
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setOtherIdentifiers(array $otherIdentifiers = array())
    {
        foreach ($otherIdentifiers as $trackDetailOtherIdentifiersItem) {
            // validation for constraint: itemType
            if (!$trackDetailOtherIdentifiersItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackOtherIdentifierDetail) {
                throw new \InvalidArgumentException(sprintf('The OtherIdentifiers property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackOtherIdentifierDetail, "%s" given', is_object($trackDetailOtherIdentifiersItem) ? get_class($trackDetailOtherIdentifiersItem) : gettype($trackDetailOtherIdentifiersItem)), __LINE__);
            }
        }
        $this->OtherIdentifiers = $otherIdentifiers;
        return $this;
    }
    /**
     * Add item to OtherIdentifiers value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackOtherIdentifierDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToOtherIdentifiers(\NicholasCreativeMedia\FedExPHP\Structs\TrackOtherIdentifierDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackOtherIdentifierDetail) {
            throw new \InvalidArgumentException(sprintf('The OtherIdentifiers property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackOtherIdentifierDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OtherIdentifiers[] = $item;
        return $this;
    }
    /**
     * Get FormId value
     * @return string|null
     */
    public function getFormId()
    {
        return $this->FormId;
    }
    /**
     * Set FormId value
     * @param string $formId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setFormId($formId = null)
    {
        // validation for constraint: string
        if (!is_null($formId) && !is_string($formId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formId)), __LINE__);
        }
        $this->FormId = $formId;
        return $this;
    }
    /**
     * Get Service value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackServiceDescriptionDetail|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackServiceDescriptionDetail $service
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setService(\NicholasCreativeMedia\FedExPHP\Structs\TrackServiceDescriptionDetail $service = null)
    {
        $this->Service = $service;
        return $this;
    }
    /**
     * Get PackageWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getPackageWeight()
    {
        return $this->PackageWeight;
    }
    /**
     * Set PackageWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $packageWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setPackageWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $packageWeight = null)
    {
        $this->PackageWeight = $packageWeight;
        return $this;
    }
    /**
     * Get PackageDimensions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Dimensions|null
     */
    public function getPackageDimensions()
    {
        return $this->PackageDimensions;
    }
    /**
     * Set PackageDimensions value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $packageDimensions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setPackageDimensions(\NicholasCreativeMedia\FedExPHP\Structs\Dimensions $packageDimensions = null)
    {
        $this->PackageDimensions = $packageDimensions;
        return $this;
    }
    /**
     * Get PackageDimensionalWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getPackageDimensionalWeight()
    {
        return $this->PackageDimensionalWeight;
    }
    /**
     * Set PackageDimensionalWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $packageDimensionalWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setPackageDimensionalWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $packageDimensionalWeight = null)
    {
        $this->PackageDimensionalWeight = $packageDimensionalWeight;
        return $this;
    }
    /**
     * Get ShipmentWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getShipmentWeight()
    {
        return $this->ShipmentWeight;
    }
    /**
     * Set ShipmentWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $shipmentWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setShipmentWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $shipmentWeight = null)
    {
        $this->ShipmentWeight = $shipmentWeight;
        return $this;
    }
    /**
     * Get Packaging value
     * @return string|null
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    /**
     * Set Packaging value
     * @param string $packaging
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setPackaging($packaging = null)
    {
        // validation for constraint: string
        if (!is_null($packaging) && !is_string($packaging)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packaging)), __LINE__);
        }
        $this->Packaging = $packaging;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackagingType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackagingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packagingType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setPackagingType($packagingType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PackagingType::valueIsValid($packagingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packagingType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PackagingType::getValidValues())), __LINE__);
        }
        $this->PackagingType = $packagingType;
        return $this;
    }
    /**
     * Get PhysicalPackagingType value
     * @return string|null
     */
    public function getPhysicalPackagingType()
    {
        return $this->PhysicalPackagingType;
    }
    /**
     * Set PhysicalPackagingType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $physicalPackagingType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setPhysicalPackagingType($physicalPackagingType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType::valueIsValid($physicalPackagingType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $physicalPackagingType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType::getValidValues())), __LINE__);
        }
        $this->PhysicalPackagingType = $physicalPackagingType;
        return $this;
    }
    /**
     * Get PackageSequenceNumber value
     * @return int|null
     */
    public function getPackageSequenceNumber()
    {
        return $this->PackageSequenceNumber;
    }
    /**
     * Set PackageSequenceNumber value
     * @param int $packageSequenceNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setPackageSequenceNumber($packageSequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($packageSequenceNumber) && !is_numeric($packageSequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($packageSequenceNumber)), __LINE__);
        }
        $this->PackageSequenceNumber = $packageSequenceNumber;
        return $this;
    }
    /**
     * Get PackageCount value
     * @return int|null
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    /**
     * Set PackageCount value
     * @param int $packageCount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
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
     * Get CreatorSoftwareId value
     * @return string|null
     */
    public function getCreatorSoftwareId()
    {
        return $this->CreatorSoftwareId;
    }
    /**
     * Set CreatorSoftwareId value
     * @param string $creatorSoftwareId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setCreatorSoftwareId($creatorSoftwareId = null)
    {
        // validation for constraint: string
        if (!is_null($creatorSoftwareId) && !is_string($creatorSoftwareId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creatorSoftwareId)), __LINE__);
        }
        $this->CreatorSoftwareId = $creatorSoftwareId;
        return $this;
    }
    /**
     * Get Charges value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackChargeDetail[]|null
     */
    public function getCharges()
    {
        return $this->Charges;
    }
    /**
     * Set Charges value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackChargeDetail[] $charges
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setCharges(array $charges = array())
    {
        foreach ($charges as $trackDetailChargesItem) {
            // validation for constraint: itemType
            if (!$trackDetailChargesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackChargeDetail) {
                throw new \InvalidArgumentException(sprintf('The Charges property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackChargeDetail, "%s" given', is_object($trackDetailChargesItem) ? get_class($trackDetailChargesItem) : gettype($trackDetailChargesItem)), __LINE__);
            }
        }
        $this->Charges = $charges;
        return $this;
    }
    /**
     * Add item to Charges value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackChargeDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToCharges(\NicholasCreativeMedia\FedExPHP\Structs\TrackChargeDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackChargeDetail) {
            throw new \InvalidArgumentException(sprintf('The Charges property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackChargeDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Charges[] = $item;
        return $this;
    }
    /**
     * Get NickName value
     * @return string|null
     */
    public function getNickName()
    {
        return $this->NickName;
    }
    /**
     * Set NickName value
     * @param string $nickName
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setNickName($nickName = null)
    {
        // validation for constraint: string
        if (!is_null($nickName) && !is_string($nickName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nickName)), __LINE__);
        }
        $this->NickName = $nickName;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Get Attributes value
     * @return string[]|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackDetailAttributeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackDetailAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $attributes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setAttributes(array $attributes = array())
    {
        $invalidValues = array();
        foreach ($attributes as $trackDetailAttributesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackDetailAttributeType::valueIsValid($trackDetailAttributesItem)) {
                $invalidValues[] = var_export($trackDetailAttributesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackDetailAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Add item to Attributes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackDetailAttributeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackDetailAttributeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToAttributes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackDetailAttributeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackDetailAttributeType::getValidValues())), __LINE__);
        }
        $this->Attributes[] = $item;
        return $this;
    }
    /**
     * Get ShipmentContents value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord[]|null
     */
    public function getShipmentContents()
    {
        return $this->ShipmentContents;
    }
    /**
     * Set ShipmentContents value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord[] $shipmentContents
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setShipmentContents(array $shipmentContents = array())
    {
        foreach ($shipmentContents as $trackDetailShipmentContentsItem) {
            // validation for constraint: itemType
            if (!$trackDetailShipmentContentsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord) {
                throw new \InvalidArgumentException(sprintf('The ShipmentContents property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord, "%s" given', is_object($trackDetailShipmentContentsItem) ? get_class($trackDetailShipmentContentsItem) : gettype($trackDetailShipmentContentsItem)), __LINE__);
            }
        }
        $this->ShipmentContents = $shipmentContents;
        return $this;
    }
    /**
     * Add item to ShipmentContents value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToShipmentContents(\NicholasCreativeMedia\FedExPHP\Structs\ContentRecord $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord) {
            throw new \InvalidArgumentException(sprintf('The ShipmentContents property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ContentRecord, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipmentContents[] = $item;
        return $this;
    }
    /**
     * Get PackageContents value
     * @return string[]|null
     */
    public function getPackageContents()
    {
        return $this->PackageContents;
    }
    /**
     * Set PackageContents value
     * @throws \InvalidArgumentException
     * @param string[] $packageContents
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setPackageContents(array $packageContents = array())
    {
        foreach ($packageContents as $trackDetailPackageContentsItem) {
            // validation for constraint: itemType
            if (!is_string($trackDetailPackageContentsItem)) {
                throw new \InvalidArgumentException(sprintf('The PackageContents property can only contain items of string, "%s" given', is_object($trackDetailPackageContentsItem) ? get_class($trackDetailPackageContentsItem) : gettype($trackDetailPackageContentsItem)), __LINE__);
            }
        }
        $this->PackageContents = $packageContents;
        return $this;
    }
    /**
     * Add item to PackageContents value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToPackageContents($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The PackageContents property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PackageContents[] = $item;
        return $this;
    }
    /**
     * Get ClearanceLocationCode value
     * @return string|null
     */
    public function getClearanceLocationCode()
    {
        return $this->ClearanceLocationCode;
    }
    /**
     * Set ClearanceLocationCode value
     * @param string $clearanceLocationCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setClearanceLocationCode($clearanceLocationCode = null)
    {
        // validation for constraint: string
        if (!is_null($clearanceLocationCode) && !is_string($clearanceLocationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clearanceLocationCode)), __LINE__);
        }
        $this->ClearanceLocationCode = $clearanceLocationCode;
        return $this;
    }
    /**
     * Get Commodities value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity[]|null
     */
    public function getCommodities()
    {
        return $this->Commodities;
    }
    /**
     * Set Commodities value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Commodity[] $commodities
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setCommodities(array $commodities = array())
    {
        foreach ($commodities as $trackDetailCommoditiesItem) {
            // validation for constraint: itemType
            if (!$trackDetailCommoditiesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Commodity) {
                throw new \InvalidArgumentException(sprintf('The Commodities property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Commodity, "%s" given', is_object($trackDetailCommoditiesItem) ? get_class($trackDetailCommoditiesItem) : gettype($trackDetailCommoditiesItem)), __LINE__);
            }
        }
        $this->Commodities = $commodities;
        return $this;
    }
    /**
     * Add item to Commodities value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Commodity $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToCommodities(\NicholasCreativeMedia\FedExPHP\Structs\Commodity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Commodity) {
            throw new \InvalidArgumentException(sprintf('The Commodities property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Commodity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Commodities[] = $item;
        return $this;
    }
    /**
     * Get ReturnDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackReturnDetail|null
     */
    public function getReturnDetail()
    {
        return $this->ReturnDetail;
    }
    /**
     * Set ReturnDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackReturnDetail $returnDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setReturnDetail(\NicholasCreativeMedia\FedExPHP\Structs\TrackReturnDetail $returnDetail = null)
    {
        $this->ReturnDetail = $returnDetail;
        return $this;
    }
    /**
     * Get CustomsOptionDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomsOptionDetail[]|null
     */
    public function getCustomsOptionDetails()
    {
        return $this->CustomsOptionDetails;
    }
    /**
     * Set CustomsOptionDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomsOptionDetail[] $customsOptionDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setCustomsOptionDetails(array $customsOptionDetails = array())
    {
        foreach ($customsOptionDetails as $trackDetailCustomsOptionDetailsItem) {
            // validation for constraint: itemType
            if (!$trackDetailCustomsOptionDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\CustomsOptionDetail) {
                throw new \InvalidArgumentException(sprintf('The CustomsOptionDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CustomsOptionDetail, "%s" given', is_object($trackDetailCustomsOptionDetailsItem) ? get_class($trackDetailCustomsOptionDetailsItem) : gettype($trackDetailCustomsOptionDetailsItem)), __LINE__);
            }
        }
        $this->CustomsOptionDetails = $customsOptionDetails;
        return $this;
    }
    /**
     * Add item to CustomsOptionDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomsOptionDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToCustomsOptionDetails(\NicholasCreativeMedia\FedExPHP\Structs\CustomsOptionDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\CustomsOptionDetail) {
            throw new \InvalidArgumentException(sprintf('The CustomsOptionDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CustomsOptionDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomsOptionDetails[] = $item;
        return $this;
    }
    /**
     * Get AdvanceNotificationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackAdvanceNotificationDetail|null
     */
    public function getAdvanceNotificationDetail()
    {
        return $this->AdvanceNotificationDetail;
    }
    /**
     * Set AdvanceNotificationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackAdvanceNotificationDetail $advanceNotificationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setAdvanceNotificationDetail(\NicholasCreativeMedia\FedExPHP\Structs\TrackAdvanceNotificationDetail $advanceNotificationDetail = null)
    {
        $this->AdvanceNotificationDetail = $advanceNotificationDetail;
        return $this;
    }
    /**
     * Get SpecialHandlings value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialHandling[]|null
     */
    public function getSpecialHandlings()
    {
        return $this->SpecialHandlings;
    }
    /**
     * Set SpecialHandlings value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialHandling[] $specialHandlings
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setSpecialHandlings(array $specialHandlings = array())
    {
        foreach ($specialHandlings as $trackDetailSpecialHandlingsItem) {
            // validation for constraint: itemType
            if (!$trackDetailSpecialHandlingsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialHandling) {
                throw new \InvalidArgumentException(sprintf('The SpecialHandlings property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialHandling, "%s" given', is_object($trackDetailSpecialHandlingsItem) ? get_class($trackDetailSpecialHandlingsItem) : gettype($trackDetailSpecialHandlingsItem)), __LINE__);
            }
        }
        $this->SpecialHandlings = $specialHandlings;
        return $this;
    }
    /**
     * Add item to SpecialHandlings value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialHandling $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToSpecialHandlings(\NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialHandling $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialHandling) {
            throw new \InvalidArgumentException(sprintf('The SpecialHandlings property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialHandling, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialHandlings[] = $item;
        return $this;
    }
    /**
     * Get Payments value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackPayment[]|null
     */
    public function getPayments()
    {
        return $this->Payments;
    }
    /**
     * Set Payments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackPayment[] $payments
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setPayments(array $payments = array())
    {
        foreach ($payments as $trackDetailPaymentsItem) {
            // validation for constraint: itemType
            if (!$trackDetailPaymentsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackPayment) {
                throw new \InvalidArgumentException(sprintf('The Payments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackPayment, "%s" given', is_object($trackDetailPaymentsItem) ? get_class($trackDetailPaymentsItem) : gettype($trackDetailPaymentsItem)), __LINE__);
            }
        }
        $this->Payments = $payments;
        return $this;
    }
    /**
     * Add item to Payments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackPayment $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToPayments(\NicholasCreativeMedia\FedExPHP\Structs\TrackPayment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackPayment) {
            throw new \InvalidArgumentException(sprintf('The Payments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackPayment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Payments[] = $item;
        return $this;
    }
    /**
     * Get Shipper value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Contact|null
     */
    public function getShipper()
    {
        return $this->Shipper;
    }
    /**
     * Set Shipper value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Contact $shipper
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setShipper(\NicholasCreativeMedia\FedExPHP\Structs\Contact $shipper = null)
    {
        $this->Shipper = $shipper;
        return $this;
    }
    /**
     * Get PossessionStatus value
     * @return string|null
     */
    public function getPossessionStatus()
    {
        return $this->PossessionStatus;
    }
    /**
     * Set PossessionStatus value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackPossessionStatusType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackPossessionStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $possessionStatus
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setPossessionStatus($possessionStatus = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackPossessionStatusType::valueIsValid($possessionStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $possessionStatus, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackPossessionStatusType::getValidValues())), __LINE__);
        }
        $this->PossessionStatus = $possessionStatus;
        return $this;
    }
    /**
     * Get ShipperAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getShipperAddress()
    {
        return $this->ShipperAddress;
    }
    /**
     * Set ShipperAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $shipperAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setShipperAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $shipperAddress = null)
    {
        $this->ShipperAddress = $shipperAddress;
        return $this;
    }
    /**
     * Get OriginLocationAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getOriginLocationAddress()
    {
        return $this->OriginLocationAddress;
    }
    /**
     * Set OriginLocationAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $originLocationAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setOriginLocationAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $originLocationAddress = null)
    {
        $this->OriginLocationAddress = $originLocationAddress;
        return $this;
    }
    /**
     * Get OriginStationId value
     * @return string|null
     */
    public function getOriginStationId()
    {
        return $this->OriginStationId;
    }
    /**
     * Set OriginStationId value
     * @param string $originStationId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setOriginStationId($originStationId = null)
    {
        // validation for constraint: string
        if (!is_null($originStationId) && !is_string($originStationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originStationId)), __LINE__);
        }
        $this->OriginStationId = $originStationId;
        return $this;
    }
    /**
     * Get DatesOrTimes value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingDateOrTimestamp[]|null
     */
    public function getDatesOrTimes()
    {
        return $this->DatesOrTimes;
    }
    /**
     * Set DatesOrTimes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingDateOrTimestamp[] $datesOrTimes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setDatesOrTimes(array $datesOrTimes = array())
    {
        foreach ($datesOrTimes as $trackDetailDatesOrTimesItem) {
            // validation for constraint: itemType
            if (!$trackDetailDatesOrTimesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackingDateOrTimestamp) {
                throw new \InvalidArgumentException(sprintf('The DatesOrTimes property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackingDateOrTimestamp, "%s" given', is_object($trackDetailDatesOrTimesItem) ? get_class($trackDetailDatesOrTimesItem) : gettype($trackDetailDatesOrTimesItem)), __LINE__);
            }
        }
        $this->DatesOrTimes = $datesOrTimes;
        return $this;
    }
    /**
     * Add item to DatesOrTimes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingDateOrTimestamp $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToDatesOrTimes(\NicholasCreativeMedia\FedExPHP\Structs\TrackingDateOrTimestamp $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackingDateOrTimestamp) {
            throw new \InvalidArgumentException(sprintf('The DatesOrTimes property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackingDateOrTimestamp, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DatesOrTimes[] = $item;
        return $this;
    }
    /**
     * Get TotalTransitDistance value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Distance|null
     */
    public function getTotalTransitDistance()
    {
        return $this->TotalTransitDistance;
    }
    /**
     * Set TotalTransitDistance value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Distance $totalTransitDistance
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setTotalTransitDistance(\NicholasCreativeMedia\FedExPHP\Structs\Distance $totalTransitDistance = null)
    {
        $this->TotalTransitDistance = $totalTransitDistance;
        return $this;
    }
    /**
     * Get DistanceToDestination value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Distance|null
     */
    public function getDistanceToDestination()
    {
        return $this->DistanceToDestination;
    }
    /**
     * Set DistanceToDestination value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Distance $distanceToDestination
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setDistanceToDestination(\NicholasCreativeMedia\FedExPHP\Structs\Distance $distanceToDestination = null)
    {
        $this->DistanceToDestination = $distanceToDestination;
        return $this;
    }
    /**
     * Get SpecialInstructions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction[]|null
     */
    public function getSpecialInstructions()
    {
        return $this->SpecialInstructions;
    }
    /**
     * Set SpecialInstructions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction[] $specialInstructions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setSpecialInstructions(array $specialInstructions = array())
    {
        foreach ($specialInstructions as $trackDetailSpecialInstructionsItem) {
            // validation for constraint: itemType
            if (!$trackDetailSpecialInstructionsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction) {
                throw new \InvalidArgumentException(sprintf('The SpecialInstructions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction, "%s" given', is_object($trackDetailSpecialInstructionsItem) ? get_class($trackDetailSpecialInstructionsItem) : gettype($trackDetailSpecialInstructionsItem)), __LINE__);
            }
        }
        $this->SpecialInstructions = $specialInstructions;
        return $this;
    }
    /**
     * Add item to SpecialInstructions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToSpecialInstructions(\NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction) {
            throw new \InvalidArgumentException(sprintf('The SpecialInstructions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackSpecialInstruction, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialInstructions[] = $item;
        return $this;
    }
    /**
     * Get Recipient value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Contact|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Contact $recipient
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setRecipient(\NicholasCreativeMedia\FedExPHP\Structs\Contact $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get LastUpdatedDestinationAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getLastUpdatedDestinationAddress()
    {
        return $this->LastUpdatedDestinationAddress;
    }
    /**
     * Set LastUpdatedDestinationAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $lastUpdatedDestinationAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setLastUpdatedDestinationAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $lastUpdatedDestinationAddress = null)
    {
        $this->LastUpdatedDestinationAddress = $lastUpdatedDestinationAddress;
        return $this;
    }
    /**
     * Get DestinationAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getDestinationAddress()
    {
        return $this->DestinationAddress;
    }
    /**
     * Set DestinationAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $destinationAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setDestinationAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $destinationAddress = null)
    {
        $this->DestinationAddress = $destinationAddress;
        return $this;
    }
    /**
     * Get HoldAtLocationContact value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Contact|null
     */
    public function getHoldAtLocationContact()
    {
        return $this->HoldAtLocationContact;
    }
    /**
     * Set HoldAtLocationContact value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Contact $holdAtLocationContact
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setHoldAtLocationContact(\NicholasCreativeMedia\FedExPHP\Structs\Contact $holdAtLocationContact = null)
    {
        $this->HoldAtLocationContact = $holdAtLocationContact;
        return $this;
    }
    /**
     * Get HoldAtLocationAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getHoldAtLocationAddress()
    {
        return $this->HoldAtLocationAddress;
    }
    /**
     * Set HoldAtLocationAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $holdAtLocationAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setHoldAtLocationAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $holdAtLocationAddress = null)
    {
        $this->HoldAtLocationAddress = $holdAtLocationAddress;
        return $this;
    }
    /**
     * Get DestinationStationId value
     * @return string|null
     */
    public function getDestinationStationId()
    {
        return $this->DestinationStationId;
    }
    /**
     * Set DestinationStationId value
     * @param string $destinationStationId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setDestinationStationId($destinationStationId = null)
    {
        // validation for constraint: string
        if (!is_null($destinationStationId) && !is_string($destinationStationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationStationId)), __LINE__);
        }
        $this->DestinationStationId = $destinationStationId;
        return $this;
    }
    /**
     * Get DestinationLocationAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getDestinationLocationAddress()
    {
        return $this->DestinationLocationAddress;
    }
    /**
     * Set DestinationLocationAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $destinationLocationAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setDestinationLocationAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $destinationLocationAddress = null)
    {
        $this->DestinationLocationAddress = $destinationLocationAddress;
        return $this;
    }
    /**
     * Get DestinationLocationType value
     * @return string|null
     */
    public function getDestinationLocationType()
    {
        return $this->DestinationLocationType;
    }
    /**
     * Set DestinationLocationType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\FedExLocationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\FedExLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $destinationLocationType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setDestinationLocationType($destinationLocationType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\FedExLocationType::valueIsValid($destinationLocationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $destinationLocationType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\FedExLocationType::getValidValues())), __LINE__);
        }
        $this->DestinationLocationType = $destinationLocationType;
        return $this;
    }
    /**
     * Get DestinationLocationTimeZoneOffset value
     * @return string|null
     */
    public function getDestinationLocationTimeZoneOffset()
    {
        return $this->DestinationLocationTimeZoneOffset;
    }
    /**
     * Set DestinationLocationTimeZoneOffset value
     * @param string $destinationLocationTimeZoneOffset
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setDestinationLocationTimeZoneOffset($destinationLocationTimeZoneOffset = null)
    {
        // validation for constraint: string
        if (!is_null($destinationLocationTimeZoneOffset) && !is_string($destinationLocationTimeZoneOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationLocationTimeZoneOffset)), __LINE__);
        }
        $this->DestinationLocationTimeZoneOffset = $destinationLocationTimeZoneOffset;
        return $this;
    }
    /**
     * Get ActualDeliveryAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getActualDeliveryAddress()
    {
        return $this->ActualDeliveryAddress;
    }
    /**
     * Set ActualDeliveryAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $actualDeliveryAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setActualDeliveryAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $actualDeliveryAddress = null)
    {
        $this->ActualDeliveryAddress = $actualDeliveryAddress;
        return $this;
    }
    /**
     * Get OfficeOrderDeliveryMethod value
     * @return string|null
     */
    public function getOfficeOrderDeliveryMethod()
    {
        return $this->OfficeOrderDeliveryMethod;
    }
    /**
     * Set OfficeOrderDeliveryMethod value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\OfficeOrderDeliveryMethodType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\OfficeOrderDeliveryMethodType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $officeOrderDeliveryMethod
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setOfficeOrderDeliveryMethod($officeOrderDeliveryMethod = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\OfficeOrderDeliveryMethodType::valueIsValid($officeOrderDeliveryMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $officeOrderDeliveryMethod, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\OfficeOrderDeliveryMethodType::getValidValues())), __LINE__);
        }
        $this->OfficeOrderDeliveryMethod = $officeOrderDeliveryMethod;
        return $this;
    }
    /**
     * Get DeliveryLocationType value
     * @return string|null
     */
    public function getDeliveryLocationType()
    {
        return $this->DeliveryLocationType;
    }
    /**
     * Set DeliveryLocationType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackDeliveryLocationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackDeliveryLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deliveryLocationType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setDeliveryLocationType($deliveryLocationType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackDeliveryLocationType::valueIsValid($deliveryLocationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deliveryLocationType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackDeliveryLocationType::getValidValues())), __LINE__);
        }
        $this->DeliveryLocationType = $deliveryLocationType;
        return $this;
    }
    /**
     * Get DeliveryLocationDescription value
     * @return string|null
     */
    public function getDeliveryLocationDescription()
    {
        return $this->DeliveryLocationDescription;
    }
    /**
     * Set DeliveryLocationDescription value
     * @param string $deliveryLocationDescription
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setDeliveryLocationDescription($deliveryLocationDescription = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryLocationDescription) && !is_string($deliveryLocationDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryLocationDescription)), __LINE__);
        }
        $this->DeliveryLocationDescription = $deliveryLocationDescription;
        return $this;
    }
    /**
     * Get DeliveryAttempts value
     * @return int|null
     */
    public function getDeliveryAttempts()
    {
        return $this->DeliveryAttempts;
    }
    /**
     * Set DeliveryAttempts value
     * @param int $deliveryAttempts
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setDeliveryAttempts($deliveryAttempts = null)
    {
        // validation for constraint: int
        if (!is_null($deliveryAttempts) && !is_numeric($deliveryAttempts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($deliveryAttempts)), __LINE__);
        }
        $this->DeliveryAttempts = $deliveryAttempts;
        return $this;
    }
    /**
     * Get DeliverySignatureName value
     * @return string|null
     */
    public function getDeliverySignatureName()
    {
        return $this->DeliverySignatureName;
    }
    /**
     * Set DeliverySignatureName value
     * @param string $deliverySignatureName
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setDeliverySignatureName($deliverySignatureName = null)
    {
        // validation for constraint: string
        if (!is_null($deliverySignatureName) && !is_string($deliverySignatureName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliverySignatureName)), __LINE__);
        }
        $this->DeliverySignatureName = $deliverySignatureName;
        return $this;
    }
    /**
     * Get PieceCountVerificationDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PieceCountVerificationDetail[]|null
     */
    public function getPieceCountVerificationDetails()
    {
        return $this->PieceCountVerificationDetails;
    }
    /**
     * Set PieceCountVerificationDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PieceCountVerificationDetail[] $pieceCountVerificationDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setPieceCountVerificationDetails(array $pieceCountVerificationDetails = array())
    {
        foreach ($pieceCountVerificationDetails as $trackDetailPieceCountVerificationDetailsItem) {
            // validation for constraint: itemType
            if (!$trackDetailPieceCountVerificationDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\PieceCountVerificationDetail) {
                throw new \InvalidArgumentException(sprintf('The PieceCountVerificationDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\PieceCountVerificationDetail, "%s" given', is_object($trackDetailPieceCountVerificationDetailsItem) ? get_class($trackDetailPieceCountVerificationDetailsItem) : gettype($trackDetailPieceCountVerificationDetailsItem)), __LINE__);
            }
        }
        $this->PieceCountVerificationDetails = $pieceCountVerificationDetails;
        return $this;
    }
    /**
     * Add item to PieceCountVerificationDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PieceCountVerificationDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToPieceCountVerificationDetails(\NicholasCreativeMedia\FedExPHP\Structs\PieceCountVerificationDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\PieceCountVerificationDetail) {
            throw new \InvalidArgumentException(sprintf('The PieceCountVerificationDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\PieceCountVerificationDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PieceCountVerificationDetails[] = $item;
        return $this;
    }
    /**
     * Get TotalUniqueAddressCountInConsolidation value
     * @return int|null
     */
    public function getTotalUniqueAddressCountInConsolidation()
    {
        return $this->TotalUniqueAddressCountInConsolidation;
    }
    /**
     * Set TotalUniqueAddressCountInConsolidation value
     * @param int $totalUniqueAddressCountInConsolidation
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setTotalUniqueAddressCountInConsolidation($totalUniqueAddressCountInConsolidation = null)
    {
        // validation for constraint: int
        if (!is_null($totalUniqueAddressCountInConsolidation) && !is_numeric($totalUniqueAddressCountInConsolidation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalUniqueAddressCountInConsolidation)), __LINE__);
        }
        $this->TotalUniqueAddressCountInConsolidation = $totalUniqueAddressCountInConsolidation;
        return $this;
    }
    /**
     * Get AvailableImages value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AvailableImagesDetail[]|null
     */
    public function getAvailableImages()
    {
        return $this->AvailableImages;
    }
    /**
     * Set AvailableImages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AvailableImagesDetail[] $availableImages
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setAvailableImages(array $availableImages = array())
    {
        foreach ($availableImages as $trackDetailAvailableImagesItem) {
            // validation for constraint: itemType
            if (!$trackDetailAvailableImagesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\AvailableImagesDetail) {
                throw new \InvalidArgumentException(sprintf('The AvailableImages property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AvailableImagesDetail, "%s" given', is_object($trackDetailAvailableImagesItem) ? get_class($trackDetailAvailableImagesItem) : gettype($trackDetailAvailableImagesItem)), __LINE__);
            }
        }
        $this->AvailableImages = $availableImages;
        return $this;
    }
    /**
     * Add item to AvailableImages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AvailableImagesDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToAvailableImages(\NicholasCreativeMedia\FedExPHP\Structs\AvailableImagesDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\AvailableImagesDetail) {
            throw new \InvalidArgumentException(sprintf('The AvailableImages property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AvailableImagesDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AvailableImages[] = $item;
        return $this;
    }
    /**
     * Get Signature value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureImageDetail|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }
    /**
     * Set Signature value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureImageDetail $signature
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setSignature(\NicholasCreativeMedia\FedExPHP\Structs\SignatureImageDetail $signature = null)
    {
        $this->Signature = $signature;
        return $this;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationEventType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationEventType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $notificationEventsAvailable
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setNotificationEventsAvailable(array $notificationEventsAvailable = array())
    {
        $invalidValues = array();
        foreach ($notificationEventsAvailable as $trackDetailNotificationEventsAvailableItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\NotificationEventType::valueIsValid($trackDetailNotificationEventsAvailableItem)) {
                $invalidValues[] = var_export($trackDetailNotificationEventsAvailableItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\NotificationEventType::getValidValues())), __LINE__);
        }
        $this->NotificationEventsAvailable = $notificationEventsAvailable;
        return $this;
    }
    /**
     * Add item to NotificationEventsAvailable value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationEventType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\NotificationEventType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToNotificationEventsAvailable($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\NotificationEventType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\NotificationEventType::getValidValues())), __LINE__);
        }
        $this->NotificationEventsAvailable[] = $item;
        return $this;
    }
    /**
     * Get SplitShipmentParts value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSplitShipmentPart[]|null
     */
    public function getSplitShipmentParts()
    {
        return $this->SplitShipmentParts;
    }
    /**
     * Set SplitShipmentParts value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSplitShipmentPart[] $splitShipmentParts
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setSplitShipmentParts(array $splitShipmentParts = array())
    {
        foreach ($splitShipmentParts as $trackDetailSplitShipmentPartsItem) {
            // validation for constraint: itemType
            if (!$trackDetailSplitShipmentPartsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackSplitShipmentPart) {
                throw new \InvalidArgumentException(sprintf('The SplitShipmentParts property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackSplitShipmentPart, "%s" given', is_object($trackDetailSplitShipmentPartsItem) ? get_class($trackDetailSplitShipmentPartsItem) : gettype($trackDetailSplitShipmentPartsItem)), __LINE__);
            }
        }
        $this->SplitShipmentParts = $splitShipmentParts;
        return $this;
    }
    /**
     * Add item to SplitShipmentParts value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSplitShipmentPart $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToSplitShipmentParts(\NicholasCreativeMedia\FedExPHP\Structs\TrackSplitShipmentPart $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackSplitShipmentPart) {
            throw new \InvalidArgumentException(sprintf('The SplitShipmentParts property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackSplitShipmentPart, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SplitShipmentParts[] = $item;
        return $this;
    }
    /**
     * Get DeliveryOptionEligibilityDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DeliveryOptionEligibilityDetail[]|null
     */
    public function getDeliveryOptionEligibilityDetails()
    {
        return $this->DeliveryOptionEligibilityDetails;
    }
    /**
     * Set DeliveryOptionEligibilityDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeliveryOptionEligibilityDetail[] $deliveryOptionEligibilityDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setDeliveryOptionEligibilityDetails(array $deliveryOptionEligibilityDetails = array())
    {
        foreach ($deliveryOptionEligibilityDetails as $trackDetailDeliveryOptionEligibilityDetailsItem) {
            // validation for constraint: itemType
            if (!$trackDetailDeliveryOptionEligibilityDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\DeliveryOptionEligibilityDetail) {
                throw new \InvalidArgumentException(sprintf('The DeliveryOptionEligibilityDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\DeliveryOptionEligibilityDetail, "%s" given', is_object($trackDetailDeliveryOptionEligibilityDetailsItem) ? get_class($trackDetailDeliveryOptionEligibilityDetailsItem) : gettype($trackDetailDeliveryOptionEligibilityDetailsItem)), __LINE__);
            }
        }
        $this->DeliveryOptionEligibilityDetails = $deliveryOptionEligibilityDetails;
        return $this;
    }
    /**
     * Add item to DeliveryOptionEligibilityDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DeliveryOptionEligibilityDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToDeliveryOptionEligibilityDetails(\NicholasCreativeMedia\FedExPHP\Structs\DeliveryOptionEligibilityDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\DeliveryOptionEligibilityDetail) {
            throw new \InvalidArgumentException(sprintf('The DeliveryOptionEligibilityDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\DeliveryOptionEligibilityDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DeliveryOptionEligibilityDetails[] = $item;
        return $this;
    }
    /**
     * Get Events value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackEvent[]|null
     */
    public function getEvents()
    {
        return $this->Events;
    }
    /**
     * Set Events value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackEvent[] $events
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function setEvents(array $events = array())
    {
        foreach ($events as $trackDetailEventsItem) {
            // validation for constraint: itemType
            if (!$trackDetailEventsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackEvent) {
                throw new \InvalidArgumentException(sprintf('The Events property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackEvent, "%s" given', is_object($trackDetailEventsItem) ? get_class($trackDetailEventsItem) : gettype($trackDetailEventsItem)), __LINE__);
            }
        }
        $this->Events = $events;
        return $this;
    }
    /**
     * Add item to Events value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackEvent $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
     */
    public function addToEvents(\NicholasCreativeMedia\FedExPHP\Structs\TrackEvent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackEvent) {
            throw new \InvalidArgumentException(sprintf('The Events property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackEvent, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Events[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackDetail
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
