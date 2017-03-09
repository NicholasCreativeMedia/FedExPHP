<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressToLocationRelationshipDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the relationship between the address specificed and the address of the FedEx Location in terms of distance.
 * @subpackage Structs
 */
class AddressToLocationRelationshipDetail extends AbstractStructBase
{
    /**
     * The MatchedAddress
     * Meta informations extracted from the WSDL
     * - documentation: Address as provided in the request.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $MatchedAddress;
    /**
     * The MatchedAddressGeographicCoordinates
     * Meta informations extracted from the WSDL
     * - documentation: Specify the geographic co-ordinates for the matched address.
     * - minOccurs: 0
     * @var string
     */
    public $MatchedAddressGeographicCoordinates;
    /**
     * The DistanceAndLocationDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the distance between the matched address and the addresses of matched FedEx locations. Also specifies the details of the FedEx locations.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DistanceAndLocationDetail[]
     */
    public $DistanceAndLocationDetails;
    /**
     * Constructor method for AddressToLocationRelationshipDetail
     * @uses AddressToLocationRelationshipDetail::setMatchedAddress()
     * @uses AddressToLocationRelationshipDetail::setMatchedAddressGeographicCoordinates()
     * @uses AddressToLocationRelationshipDetail::setDistanceAndLocationDetails()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $matchedAddress
     * @param string $matchedAddressGeographicCoordinates
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DistanceAndLocationDetail[] $distanceAndLocationDetails
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\Address $matchedAddress = null, $matchedAddressGeographicCoordinates = null, array $distanceAndLocationDetails = array())
    {
        $this
            ->setMatchedAddress($matchedAddress)
            ->setMatchedAddressGeographicCoordinates($matchedAddressGeographicCoordinates)
            ->setDistanceAndLocationDetails($distanceAndLocationDetails);
    }
    /**
     * Get MatchedAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getMatchedAddress()
    {
        return $this->MatchedAddress;
    }
    /**
     * Set MatchedAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $matchedAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressToLocationRelationshipDetail
     */
    public function setMatchedAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $matchedAddress = null)
    {
        $this->MatchedAddress = $matchedAddress;
        return $this;
    }
    /**
     * Get MatchedAddressGeographicCoordinates value
     * @return string|null
     */
    public function getMatchedAddressGeographicCoordinates()
    {
        return $this->MatchedAddressGeographicCoordinates;
    }
    /**
     * Set MatchedAddressGeographicCoordinates value
     * @param string $matchedAddressGeographicCoordinates
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressToLocationRelationshipDetail
     */
    public function setMatchedAddressGeographicCoordinates($matchedAddressGeographicCoordinates = null)
    {
        // validation for constraint: string
        if (!is_null($matchedAddressGeographicCoordinates) && !is_string($matchedAddressGeographicCoordinates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($matchedAddressGeographicCoordinates)), __LINE__);
        }
        $this->MatchedAddressGeographicCoordinates = $matchedAddressGeographicCoordinates;
        return $this;
    }
    /**
     * Get DistanceAndLocationDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DistanceAndLocationDetail[]|null
     */
    public function getDistanceAndLocationDetails()
    {
        return $this->DistanceAndLocationDetails;
    }
    /**
     * Set DistanceAndLocationDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DistanceAndLocationDetail[] $distanceAndLocationDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressToLocationRelationshipDetail
     */
    public function setDistanceAndLocationDetails(array $distanceAndLocationDetails = array())
    {
        foreach ($distanceAndLocationDetails as $addressToLocationRelationshipDetailDistanceAndLocationDetailsItem) {
            // validation for constraint: itemType
            if (!$addressToLocationRelationshipDetailDistanceAndLocationDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\DistanceAndLocationDetail) {
                throw new \InvalidArgumentException(sprintf('The DistanceAndLocationDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\DistanceAndLocationDetail, "%s" given', is_object($addressToLocationRelationshipDetailDistanceAndLocationDetailsItem) ? get_class($addressToLocationRelationshipDetailDistanceAndLocationDetailsItem) : gettype($addressToLocationRelationshipDetailDistanceAndLocationDetailsItem)), __LINE__);
            }
        }
        $this->DistanceAndLocationDetails = $distanceAndLocationDetails;
        return $this;
    }
    /**
     * Add item to DistanceAndLocationDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DistanceAndLocationDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressToLocationRelationshipDetail
     */
    public function addToDistanceAndLocationDetails(\NicholasCreativeMedia\FedExPHP\Structs\DistanceAndLocationDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\DistanceAndLocationDetail) {
            throw new \InvalidArgumentException(sprintf('The DistanceAndLocationDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\DistanceAndLocationDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DistanceAndLocationDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AddressToLocationRelationshipDetail
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
