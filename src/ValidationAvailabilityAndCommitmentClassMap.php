<?php

namespace NicholasCreativeMedia\FedExPHP;

/**
 * Class which returns the class map definition
 * @package
 */
class ValidationAvailabilityAndCommitmentClassMap
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
            'Notification' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\Notification',
            'NotificationParameter' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\NotificationParameter',
            'ServiceAvailabilityOption' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ServiceAvailabilityOption',
            'ServiceAvailabilityReply' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ServiceAvailabilityReply',
            'ServiceAvailabilityRequest' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\ServiceAvailabilityRequest',
            'TransactionDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\TransactionDetail',
            'WebAuthenticationDetail' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationDetail',
            'WebAuthenticationCredential' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\WebAuthenticationCredential',
            'VersionId' => '\\NicholasCreativeMedia\\FedExPHP\\Structs\\VersionId',
        );
    }
}
