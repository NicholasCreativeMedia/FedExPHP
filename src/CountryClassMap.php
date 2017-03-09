<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class CountryClassMap
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
            'ClientDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ClientDetail',
            'Localization' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Localization',
            'LocationDescription' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\LocationDescription',
            'Notification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationParameter',
            'PostalDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\PostalDetail',
            'TransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TransactionDetail',
            'ValidatePostalReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ValidatePostalReply',
            'ValidatePostalRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ValidatePostalRequest',
            'WebAuthenticationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VersionId',
        );
    }
}
