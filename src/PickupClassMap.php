<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class PickupClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'Address' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Address',
            'AssociatedAccount' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AssociatedAccount',
            'CancelPickupReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CancelPickupReply',
            'CancelPickupRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CancelPickupRequest',
            'ClientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClientDetail',
            'CodAddTransportationChargesDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CodAddTransportationChargesDetail',
            'CodDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CodDetail',
            'CompletedFreightPickupDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedFreightPickupDetail',
            'CompletedFreightPickupLineItem' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CompletedFreightPickupLineItem',
            'Contact' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Contact',
            'ContactAndAddress' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ContactAndAddress',
            'CreatePickupReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CreatePickupReply',
            'CreatePickupRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CreatePickupRequest',
            'CustomDeliveryWindowDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CustomDeliveryWindowDetail',
            'DateRange' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DateRange',
            'DeliveryOnInvoiceAcceptanceDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DeliveryOnInvoiceAcceptanceDetail',
            'DetentionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DetentionDetail',
            'Dimensions' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Dimensions',
            'Distance' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Distance',
            'EMailDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EMailDetail',
            'EMailLabelDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EMailLabelDetail',
            'EMailRecipient' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EMailRecipient',
            'EmailOptionsRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EmailOptionsRequested',
            'EtdDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\EtdDetail',
            'ExpressFreightPickupDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ExpressFreightPickupDetail',
            'ExtraLaborDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ExtraLaborDetail',
            'FaxDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FaxDetail',
            'FlatbedTrailerDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FlatbedTrailerDetail',
            'FreightGuaranteeDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FreightGuaranteeDetail',
            'FreightPickupDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FreightPickupDetail',
            'FreightPickupLineItem' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FreightPickupLineItem',
            'FreightServiceCenterDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\FreightServiceCenterDetail',
            'HoldAtLocationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\HoldAtLocationDetail',
            'HomeDeliveryPremiumDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\HomeDeliveryPremiumDetail',
            'InternationalControlledExportDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\InternationalControlledExportDetail',
            'InternationalTrafficInArmsRegulationsDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\InternationalTrafficInArmsRegulationsDetail',
            'Localization' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Localization',
            'MarkingOrTaggingDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\MarkingOrTaggingDetail',
            'Money' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Money',
            'NonBusinessTimeDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NonBusinessTimeDetail',
            'Notification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Notification',
            'NotificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationDetail',
            'NotificationParameter' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationParameter',
            'PalletShrinkwrapDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PalletShrinkwrapDetail',
            'PalletsProvidedDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PalletsProvidedDetail',
            'Party' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Party',
            'Payment' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Payment',
            'Payor' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Payor',
            'PendingShipmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PendingShipmentDetail',
            'PendingShipmentProcessingOptionsRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PendingShipmentProcessingOptionsRequested',
            'PickupAvailabilityReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PickupAvailabilityReply',
            'PickupAvailabilityRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PickupAvailabilityRequest',
            'PickupOriginDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PickupOriginDetail',
            'PickupScheduleOption' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PickupScheduleOption',
            'PickupShipmentAttributes' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PickupShipmentAttributes',
            'RecommendedDocumentSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\RecommendedDocumentSpecification',
            'ReturnAssociationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ReturnAssociationDetail',
            'ReturnEMailDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ReturnEMailDetail',
            'ReturnShipmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ReturnShipmentDetail',
            'Rma' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Rma',
            'ShipmentAssemblyDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentAssemblyDetail',
            'ShipmentDryIceDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentDryIceDetail',
            'ShipmentDryIceProcessingOptionsRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentDryIceProcessingOptionsRequested',
            'ShipmentEventNotificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentEventNotificationDetail',
            'ShipmentEventNotificationSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentEventNotificationSpecification',
            'ShipmentNotificationFormatSpecification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentNotificationFormatSpecification',
            'ShipmentSpecialServicesRequested' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShipmentSpecialServicesRequested',
            'SmsDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SmsDetail',
            'SortAndSegregateDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SortAndSegregateDetail',
            'SpecialEquipmentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SpecialEquipmentDetail',
            'SpecialEquipmentLineItem' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SpecialEquipmentLineItem',
            'StorageDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\StorageDetail',
            'TaxpayerIdentification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TaxpayerIdentification',
            'TrackingId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TrackingId',
            'TransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TransactionDetail',
            'UploadDocumentDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadDocumentDetail',
            'UploadDocumentReferenceDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UploadDocumentReferenceDetail',
            'WeighingDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WeighingDetail',
            'Weight' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Weight',
            'WebAuthenticationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VersionId',
        );
    }
}
