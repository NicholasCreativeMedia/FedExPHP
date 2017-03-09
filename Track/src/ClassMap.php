<?php

namespace NicholasCreativeMedia\FedExPHP\Track;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'Address' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\Address',
            'AppointmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\AppointmentDetail',
            'AppointmentTimeDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\AppointmentTimeDetail',
            'AvailableImagesDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\AvailableImagesDetail',
            'ClientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\ClientDetail',
            'Commodity' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\Commodity',
            'CompletedTrackDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\CompletedTrackDetail',
            'Contact' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\Contact',
            'ContactAndAddress' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\ContactAndAddress',
            'ContentRecord' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\ContentRecord',
            'CustomerExceptionRequestDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\CustomerExceptionRequestDetail',
            'CustomsOptionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\CustomsOptionDetail',
            'DateRange' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\DateRange',
            'DeliveryOptionEligibilityDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\DeliveryOptionEligibilityDetail',
            'Dimensions' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\Dimensions',
            'Distance' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\Distance',
            'EMailDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\EMailDetail',
            'EdtExciseCondition' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\EdtExciseCondition',
            'LocalTimeRange' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\LocalTimeRange',
            'Localization' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\Localization',
            'Measure' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\Measure',
            'Money' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\Money',
            'NaftaCommodityDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\NaftaCommodityDetail',
            'Notification' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\Notification',
            'NotificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\NotificationDetail',
            'NotificationParameter' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\NotificationParameter',
            'PagingDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\PagingDetail',
            'PieceCountVerificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\PieceCountVerificationDetail',
            'QualifiedTrackingNumber' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\QualifiedTrackingNumber',
            'SendNotificationsReply' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\SendNotificationsReply',
            'SendNotificationsRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\SendNotificationsRequest',
            'ShipmentEventNotificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\ShipmentEventNotificationDetail',
            'ShipmentEventNotificationSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\ShipmentEventNotificationSpecification',
            'ShipmentNotificationFormatSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\ShipmentNotificationFormatSpecification',
            'SignatureImageDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\SignatureImageDetail',
            'SignatureProofOfDeliveryFaxReply' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\SignatureProofOfDeliveryFaxReply',
            'SignatureProofOfDeliveryFaxRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\SignatureProofOfDeliveryFaxRequest',
            'SignatureProofOfDeliveryLetterReply' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\SignatureProofOfDeliveryLetterReply',
            'SignatureProofOfDeliveryLetterRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\SignatureProofOfDeliveryLetterRequest',
            'SpecialInstructionStatusDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\SpecialInstructionStatusDetail',
            'StringBarcode' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\StringBarcode',
            'TrackAdvanceNotificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackAdvanceNotificationDetail',
            'TrackChargeDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackChargeDetail',
            'TrackDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackDetail',
            'TrackEvent' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackEvent',
            'TrackInformationNoteDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackInformationNoteDetail',
            'TrackNotificationPackage' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackNotificationPackage',
            'TrackNotificationRecipientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackNotificationRecipientDetail',
            'TrackOtherIdentifierDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackOtherIdentifierDetail',
            'TrackPackageIdentifier' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackPackageIdentifier',
            'TrackPayment' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackPayment',
            'TrackReconciliation' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackReconciliation',
            'TrackReply' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackReply',
            'TrackRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackRequest',
            'TrackReturnDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackReturnDetail',
            'TrackSelectionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackSelectionDetail',
            'TrackServiceDescriptionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackServiceDescriptionDetail',
            'TrackSpecialHandling' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackSpecialHandling',
            'TrackSpecialInstruction' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackSpecialInstruction',
            'TrackSplitShipmentPart' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackSplitShipmentPart',
            'TrackStatusAncillaryDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackStatusAncillaryDetail',
            'TrackStatusDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackStatusDetail',
            'TrackingDateOrTimestamp' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TrackingDateOrTimestamp',
            'TransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\TransactionDetail',
            'Weight' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\Weight',
            'WebAuthenticationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\WebAuthenticationCredential',
            'VersionId' => '\\NicholasCreativeMedia\\FedExPHP\\Track\\StructType\\VersionId',
        );
    }
}
