<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentRating StructType
 * Meta informations extracted from the WSDL
 * - documentation: This class groups together all shipment-level rate data (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 * @subpackage Structs
 */
class ShipmentRating extends AbstractStructBase
{
    /**
     * The ActualRateType
     * Meta informations extracted from the WSDL
     * - documentation: This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the shipment.
     * - minOccurs: 0
     * @var string
     */
    public $ActualRateType;
    /**
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The "list" total net charge minus "actual" total net charge.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The ShipmentRateDetails
     * Meta informations extracted from the WSDL
     * - documentation: Each element of this field provides shipment-level rate totals for a specific rate type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRateDetail[]
     */
    public $ShipmentRateDetails;
    /**
     * Constructor method for ShipmentRating
     * @uses ShipmentRating::setActualRateType()
     * @uses ShipmentRating::setEffectiveNetDiscount()
     * @uses ShipmentRating::setShipmentRateDetails()
     * @param string $actualRateType
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $effectiveNetDiscount
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRateDetail[] $shipmentRateDetails
     */
    public function __construct($actualRateType = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $effectiveNetDiscount = null, array $shipmentRateDetails = array())
    {
        $this
            ->setActualRateType($actualRateType)
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setShipmentRateDetails($shipmentRateDetails);
    }
    /**
     * Get ActualRateType value
     * @return string|null
     */
    public function getActualRateType()
    {
        return $this->ActualRateType;
    }
    /**
     * Set ActualRateType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnedRateType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnedRateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $actualRateType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRating
     */
    public function setActualRateType($actualRateType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnedRateType::valueIsValid($actualRateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actualRateType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnedRateType::getValidValues())), __LINE__);
        }
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    /**
     * Get EffectiveNetDiscount value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getEffectiveNetDiscount()
    {
        return $this->EffectiveNetDiscount;
    }
    /**
     * Set EffectiveNetDiscount value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $effectiveNetDiscount
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRating
     */
    public function setEffectiveNetDiscount(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $effectiveNetDiscount = null)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * Get ShipmentRateDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRateDetail[]|null
     */
    public function getShipmentRateDetails()
    {
        return $this->ShipmentRateDetails;
    }
    /**
     * Set ShipmentRateDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRateDetail[] $shipmentRateDetails
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRating
     */
    public function setShipmentRateDetails(array $shipmentRateDetails = array())
    {
        foreach ($shipmentRateDetails as $shipmentRatingShipmentRateDetailsItem) {
            // validation for constraint: itemType
            if (!$shipmentRatingShipmentRateDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRateDetail) {
                throw new \InvalidArgumentException(sprintf('The ShipmentRateDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRateDetail, "%s" given', is_object($shipmentRatingShipmentRateDetailsItem) ? get_class($shipmentRatingShipmentRateDetailsItem) : gettype($shipmentRatingShipmentRateDetailsItem)), __LINE__);
            }
        }
        $this->ShipmentRateDetails = $shipmentRateDetails;
        return $this;
    }
    /**
     * Add item to ShipmentRateDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRateDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRating
     */
    public function addToShipmentRateDetails(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRateDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRateDetail) {
            throw new \InvalidArgumentException(sprintf('The ShipmentRateDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRateDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShipmentRateDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentRating
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
