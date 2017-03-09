<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatedShipmentDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: This class groups the shipment and package rating data for a specific rate type for use in a rating reply, which groups result data by rate type.
 * @subpackage Structs
 */
class RatedShipmentDetail extends AbstractStructBase
{
    /**
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The difference between "list" and "account" total net charge.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The AdjustedCodCollectionAmount
     * Meta informations extracted from the WSDL
     * - documentation: Express COD is shipment level.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money
     */
    public $AdjustedCodCollectionAmount;
    /**
     * The ShipmentRateDetail
     * Meta informations extracted from the WSDL
     * - documentation: The shipment-level totals for this rate type.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShipmentRateDetail
     */
    public $ShipmentRateDetail;
    /**
     * The RatedPackages
     * Meta informations extracted from the WSDL
     * - documentation: The package-level data for this rate type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedPackageDetail[]
     */
    public $RatedPackages;
    /**
     * Constructor method for RatedShipmentDetail
     * @uses RatedShipmentDetail::setEffectiveNetDiscount()
     * @uses RatedShipmentDetail::setAdjustedCodCollectionAmount()
     * @uses RatedShipmentDetail::setShipmentRateDetail()
     * @uses RatedShipmentDetail::setRatedPackages()
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $effectiveNetDiscount
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $adjustedCodCollectionAmount
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShipmentRateDetail $shipmentRateDetail
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedPackageDetail[] $ratedPackages
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $effectiveNetDiscount = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $adjustedCodCollectionAmount = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShipmentRateDetail $shipmentRateDetail = null, array $ratedPackages = array())
    {
        $this
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setAdjustedCodCollectionAmount($adjustedCodCollectionAmount)
            ->setShipmentRateDetail($shipmentRateDetail)
            ->setRatedPackages($ratedPackages);
    }
    /**
     * Get EffectiveNetDiscount value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money|null
     */
    public function getEffectiveNetDiscount()
    {
        return $this->EffectiveNetDiscount;
    }
    /**
     * Set EffectiveNetDiscount value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $effectiveNetDiscount
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedShipmentDetail
     */
    public function setEffectiveNetDiscount(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $effectiveNetDiscount = null)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * Get AdjustedCodCollectionAmount value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money|null
     */
    public function getAdjustedCodCollectionAmount()
    {
        return $this->AdjustedCodCollectionAmount;
    }
    /**
     * Set AdjustedCodCollectionAmount value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $adjustedCodCollectionAmount
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedShipmentDetail
     */
    public function setAdjustedCodCollectionAmount(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $adjustedCodCollectionAmount = null)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;
        return $this;
    }
    /**
     * Get ShipmentRateDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShipmentRateDetail|null
     */
    public function getShipmentRateDetail()
    {
        return $this->ShipmentRateDetail;
    }
    /**
     * Set ShipmentRateDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShipmentRateDetail $shipmentRateDetail
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedShipmentDetail
     */
    public function setShipmentRateDetail(\NicholasCreativeMedia\FedExPHP\Rate\StructType\ShipmentRateDetail $shipmentRateDetail = null)
    {
        $this->ShipmentRateDetail = $shipmentRateDetail;
        return $this;
    }
    /**
     * Get RatedPackages value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedPackageDetail[]|null
     */
    public function getRatedPackages()
    {
        return $this->RatedPackages;
    }
    /**
     * Set RatedPackages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedPackageDetail[] $ratedPackages
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedShipmentDetail
     */
    public function setRatedPackages(array $ratedPackages = array())
    {
        foreach ($ratedPackages as $ratedShipmentDetailRatedPackagesItem) {
            // validation for constraint: itemType
            if (!$ratedShipmentDetailRatedPackagesItem instanceof \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedPackageDetail) {
                throw new \InvalidArgumentException(sprintf('The RatedPackages property can only contain items of \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedPackageDetail, "%s" given', is_object($ratedShipmentDetailRatedPackagesItem) ? get_class($ratedShipmentDetailRatedPackagesItem) : gettype($ratedShipmentDetailRatedPackagesItem)), __LINE__);
            }
        }
        $this->RatedPackages = $ratedPackages;
        return $this;
    }
    /**
     * Add item to RatedPackages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedPackageDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedShipmentDetail
     */
    public function addToRatedPackages(\NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedPackageDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedPackageDetail) {
            throw new \InvalidArgumentException(sprintf('The RatedPackages property can only contain items of \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedPackageDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RatedPackages[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\RatedShipmentDetail
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
