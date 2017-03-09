<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class AddressValidationClassMap
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
            'AddressAttribute' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AddressAttribute',
            'AddressToValidate' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AddressToValidate',
            'AddressValidationReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AddressValidationReply',
            'AddressValidationRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AddressValidationRequest',
            'AddressValidationResult' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\AddressValidationResult',
            'ClientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClientDetail',
            'Contact' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Contact',
            'Localization' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Localization',
            'Notification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationParameter',
            'ParsedAddressPartsDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ParsedAddressPartsDetail',
            'ParsedPostalCodeDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ParsedPostalCodeDetail',
            'ParsedStreetLineDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ParsedStreetLineDetail',
            'TransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TransactionDetail',
            'WebAuthenticationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VersionId',
        );
    }
}
