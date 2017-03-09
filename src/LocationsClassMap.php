<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class LocationsClassMap
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
            'AddressAncillaryDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AddressAncillaryDetail',
            'AddressToLocationRelationshipDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AddressToLocationRelationshipDetail',
            'CarrierDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\CarrierDetail',
            'ClearanceCountryDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClearanceCountryDetail',
            'ClearanceLocationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClearanceLocationDetail',
            'ClientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClientDetail',
            'Contact' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Contact',
            'Distance' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Distance',
            'DistanceAndLocationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\DistanceAndLocationDetail',
            'Holiday' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Holiday',
            'LatestDropOffDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LatestDropOffDetail',
            'LatestDropoffOverlayDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LatestDropoffOverlayDetail',
            'Localization' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Localization',
            'LocationContactAndAddress' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationContactAndAddress',
            'LocationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationDetail',
            'LocationHours' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationHours',
            'LocationIdentificationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationIdentificationDetail',
            'LocationSortDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationSortDetail',
            'Notification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationParameter',
            'ReservationAvailabilityDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ReservationAvailabilityDetail',
            'SearchLocationConstraints' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SearchLocationConstraints',
            'SearchLocationsReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SearchLocationsReply',
            'SearchLocationsRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\SearchLocationsRequest',
            'ShippingHoliday' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ShippingHoliday',
            'TimeRange' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TimeRange',
            'TransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TransactionDetail',
            'UniqueTrackingNumber' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\UniqueTrackingNumber',
            'WebAuthenticationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VersionId',
        );
    }
}
