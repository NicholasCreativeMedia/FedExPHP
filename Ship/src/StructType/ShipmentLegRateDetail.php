<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentLegRateDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Data for a single leg of a shipment's total/summary rates, as calculated per a specific rate type.
 * @subpackage Structs
 */
class ShipmentLegRateDetail extends AbstractStructBase
{
    /**
     * The LegDescription
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable text describing the shipment leg.
     * - minOccurs: 0
     * @var string
     */
    public $LegDescription;
    /**
     * The LegOrigin
     * Meta informations extracted from the WSDL
     * - documentation: Origin for this leg.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Address
     */
    public $LegOrigin;
    /**
     * The LegOriginLocationId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the location id the origin of shipment leg.
     * - minOccurs: 0
     * @var string
     */
    public $LegOriginLocationId;
    /**
     * The LegDestination
     * Meta informations extracted from the WSDL
     * - documentation: Destination for this leg.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Address
     */
    public $LegDestination;
    /**
     * The LegDestinationLocationId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the location id the destination of shipment leg.
     * - minOccurs: 0
     * @var string
     */
    public $LegDestinationLocationId;
    /**
     * The RateType
     * Meta informations extracted from the WSDL
     * - documentation: Type used for this specific set of rate data.
     * - minOccurs: 0
     * @var string
     */
    public $RateType;
    /**
     * The RateScale
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the rate scale used.
     * - minOccurs: 0
     * @var string
     */
    public $RateScale;
    /**
     * The RateZone
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the rate zone used (based on origin and destination).
     * - minOccurs: 0
     * @var string
     */
    public $RateZone;
    /**
     * The PricingCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PricingCode;
    /**
     * The RatedWeightMethod
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which weight was used.
     * - minOccurs: 0
     * @var string
     */
    public $RatedWeightMethod;
    /**
     * The MinimumChargeType
     * Meta informations extracted from the WSDL
     * - documentation: INTERNAL FEDEX USE ONLY.
     * - minOccurs: 0
     * @var string
     */
    public $MinimumChargeType;
    /**
     * The CurrencyExchangeRate
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the currency exchange performed on financial amounts for this rate.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CurrencyExchangeRate
     */
    public $CurrencyExchangeRate;
    /**
     * The SpecialRatingApplied
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which special rating cases applied to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialRatingApplied;
    /**
     * The DimDivisor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DimDivisor;
    /**
     * The DimDivisorType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of dim divisor that was applied.
     * - minOccurs: 0
     * @var string
     */
    public $DimDivisorType;
    /**
     * The FuelSurchargePercent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $FuelSurchargePercent;
    /**
     * The TotalBillingWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight
     */
    public $TotalBillingWeight;
    /**
     * The TotalDimWeight
     * Meta informations extracted from the WSDL
     * - documentation: Sum of dimensional weights for all packages.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight
     */
    public $TotalDimWeight;
    /**
     * The TotalBaseCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $TotalBaseCharge;
    /**
     * The TotalFreightDiscounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $TotalFreightDiscounts;
    /**
     * The TotalNetFreight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $TotalNetFreight;
    /**
     * The TotalSurcharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $TotalSurcharges;
    /**
     * The TotalNetFedExCharge
     * Meta informations extracted from the WSDL
     * - documentation: This shipment's totalNetFreight + totalSurcharges (not including totalTaxes).
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $TotalNetFedExCharge;
    /**
     * The TotalTaxes
     * Meta informations extracted from the WSDL
     * - documentation: Total of the transportation-based taxes.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $TotalTaxes;
    /**
     * The TotalNetCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $TotalNetCharge;
    /**
     * The TotalRebates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $TotalRebates;
    /**
     * The TotalDutiesAndTaxes
     * Meta informations extracted from the WSDL
     * - documentation: Total of all values under this shipment's dutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $TotalDutiesAndTaxes;
    /**
     * The TotalNetChargeWithDutiesAndTaxes
     * Meta informations extracted from the WSDL
     * - documentation: This shipment's totalNetCharge + totalDutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender's account.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $TotalNetChargeWithDutiesAndTaxes;
    /**
     * The FreightRateDetail
     * Meta informations extracted from the WSDL
     * - documentation: Rate data specific to FedEx Freight and FedEx National Freight services.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightRateDetail
     */
    public $FreightRateDetail;
    /**
     * The FreightDiscounts
     * Meta informations extracted from the WSDL
     * - documentation: All rate discounts that apply to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\RateDiscount[]
     */
    public $FreightDiscounts;
    /**
     * The Rebates
     * Meta informations extracted from the WSDL
     * - documentation: All rebates that apply to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Rebate[]
     */
    public $Rebates;
    /**
     * The Surcharges
     * Meta informations extracted from the WSDL
     * - documentation: All surcharges that apply to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge[]
     */
    public $Surcharges;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - documentation: All transportation-based taxes applicable to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Tax[]
     */
    public $Taxes;
    /**
     * The DutiesAndTaxes
     * Meta informations extracted from the WSDL
     * - documentation: All commodity-based duties and taxes applicable to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtCommodityTax[]
     */
    public $DutiesAndTaxes;
    /**
     * The VariableHandlingCharges
     * Meta informations extracted from the WSDL
     * - documentation: The "order level" variable handling charges.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingCharges
     */
    public $VariableHandlingCharges;
    /**
     * The TotalVariableHandlingCharges
     * Meta informations extracted from the WSDL
     * - documentation: The total of all variable handling charges at both shipment (order) and package level.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingCharges
     */
    public $TotalVariableHandlingCharges;
    /**
     * Constructor method for ShipmentLegRateDetail
     * @uses ShipmentLegRateDetail::setLegDescription()
     * @uses ShipmentLegRateDetail::setLegOrigin()
     * @uses ShipmentLegRateDetail::setLegOriginLocationId()
     * @uses ShipmentLegRateDetail::setLegDestination()
     * @uses ShipmentLegRateDetail::setLegDestinationLocationId()
     * @uses ShipmentLegRateDetail::setRateType()
     * @uses ShipmentLegRateDetail::setRateScale()
     * @uses ShipmentLegRateDetail::setRateZone()
     * @uses ShipmentLegRateDetail::setPricingCode()
     * @uses ShipmentLegRateDetail::setRatedWeightMethod()
     * @uses ShipmentLegRateDetail::setMinimumChargeType()
     * @uses ShipmentLegRateDetail::setCurrencyExchangeRate()
     * @uses ShipmentLegRateDetail::setSpecialRatingApplied()
     * @uses ShipmentLegRateDetail::setDimDivisor()
     * @uses ShipmentLegRateDetail::setDimDivisorType()
     * @uses ShipmentLegRateDetail::setFuelSurchargePercent()
     * @uses ShipmentLegRateDetail::setTotalBillingWeight()
     * @uses ShipmentLegRateDetail::setTotalDimWeight()
     * @uses ShipmentLegRateDetail::setTotalBaseCharge()
     * @uses ShipmentLegRateDetail::setTotalFreightDiscounts()
     * @uses ShipmentLegRateDetail::setTotalNetFreight()
     * @uses ShipmentLegRateDetail::setTotalSurcharges()
     * @uses ShipmentLegRateDetail::setTotalNetFedExCharge()
     * @uses ShipmentLegRateDetail::setTotalTaxes()
     * @uses ShipmentLegRateDetail::setTotalNetCharge()
     * @uses ShipmentLegRateDetail::setTotalRebates()
     * @uses ShipmentLegRateDetail::setTotalDutiesAndTaxes()
     * @uses ShipmentLegRateDetail::setTotalNetChargeWithDutiesAndTaxes()
     * @uses ShipmentLegRateDetail::setFreightRateDetail()
     * @uses ShipmentLegRateDetail::setFreightDiscounts()
     * @uses ShipmentLegRateDetail::setRebates()
     * @uses ShipmentLegRateDetail::setSurcharges()
     * @uses ShipmentLegRateDetail::setTaxes()
     * @uses ShipmentLegRateDetail::setDutiesAndTaxes()
     * @uses ShipmentLegRateDetail::setVariableHandlingCharges()
     * @uses ShipmentLegRateDetail::setTotalVariableHandlingCharges()
     * @param string $legDescription
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Address $legOrigin
     * @param string $legOriginLocationId
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Address $legDestination
     * @param string $legDestinationLocationId
     * @param string $rateType
     * @param string $rateScale
     * @param string $rateZone
     * @param string $pricingCode
     * @param string $ratedWeightMethod
     * @param string $minimumChargeType
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CurrencyExchangeRate $currencyExchangeRate
     * @param string[] $specialRatingApplied
     * @param int $dimDivisor
     * @param string $dimDivisorType
     * @param float $fuelSurchargePercent
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $totalBillingWeight
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $totalDimWeight
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalBaseCharge
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalFreightDiscounts
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetFreight
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalSurcharges
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetFedExCharge
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalTaxes
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetCharge
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalRebates
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalDutiesAndTaxes
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetChargeWithDutiesAndTaxes
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightRateDetail $freightRateDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\RateDiscount[] $freightDiscounts
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Rebate[] $rebates
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge[] $surcharges
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Tax[] $taxes
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtCommodityTax[] $dutiesAndTaxes
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingCharges $variableHandlingCharges
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingCharges $totalVariableHandlingCharges
     */
    public function __construct($legDescription = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Address $legOrigin = null, $legOriginLocationId = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Address $legDestination = null, $legDestinationLocationId = null, $rateType = null, $rateScale = null, $rateZone = null, $pricingCode = null, $ratedWeightMethod = null, $minimumChargeType = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\CurrencyExchangeRate $currencyExchangeRate = null, array $specialRatingApplied = array(), $dimDivisor = null, $dimDivisorType = null, $fuelSurchargePercent = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $totalBillingWeight = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $totalDimWeight = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalBaseCharge = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalFreightDiscounts = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetFreight = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalSurcharges = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetFedExCharge = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalTaxes = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetCharge = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalRebates = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalDutiesAndTaxes = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetChargeWithDutiesAndTaxes = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightRateDetail $freightRateDetail = null, array $freightDiscounts = array(), array $rebates = array(), array $surcharges = array(), array $taxes = array(), array $dutiesAndTaxes = array(), \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingCharges $variableHandlingCharges = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingCharges $totalVariableHandlingCharges = null)
    {
        $this
            ->setLegDescription($legDescription)
            ->setLegOrigin($legOrigin)
            ->setLegOriginLocationId($legOriginLocationId)
            ->setLegDestination($legDestination)
            ->setLegDestinationLocationId($legDestinationLocationId)
            ->setRateType($rateType)
            ->setRateScale($rateScale)
            ->setRateZone($rateZone)
            ->setPricingCode($pricingCode)
            ->setRatedWeightMethod($ratedWeightMethod)
            ->setMinimumChargeType($minimumChargeType)
            ->setCurrencyExchangeRate($currencyExchangeRate)
            ->setSpecialRatingApplied($specialRatingApplied)
            ->setDimDivisor($dimDivisor)
            ->setDimDivisorType($dimDivisorType)
            ->setFuelSurchargePercent($fuelSurchargePercent)
            ->setTotalBillingWeight($totalBillingWeight)
            ->setTotalDimWeight($totalDimWeight)
            ->setTotalBaseCharge($totalBaseCharge)
            ->setTotalFreightDiscounts($totalFreightDiscounts)
            ->setTotalNetFreight($totalNetFreight)
            ->setTotalSurcharges($totalSurcharges)
            ->setTotalNetFedExCharge($totalNetFedExCharge)
            ->setTotalTaxes($totalTaxes)
            ->setTotalNetCharge($totalNetCharge)
            ->setTotalRebates($totalRebates)
            ->setTotalDutiesAndTaxes($totalDutiesAndTaxes)
            ->setTotalNetChargeWithDutiesAndTaxes($totalNetChargeWithDutiesAndTaxes)
            ->setFreightRateDetail($freightRateDetail)
            ->setFreightDiscounts($freightDiscounts)
            ->setRebates($rebates)
            ->setSurcharges($surcharges)
            ->setTaxes($taxes)
            ->setDutiesAndTaxes($dutiesAndTaxes)
            ->setVariableHandlingCharges($variableHandlingCharges)
            ->setTotalVariableHandlingCharges($totalVariableHandlingCharges);
    }
    /**
     * Get LegDescription value
     * @return string|null
     */
    public function getLegDescription()
    {
        return $this->LegDescription;
    }
    /**
     * Set LegDescription value
     * @param string $legDescription
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setLegDescription($legDescription = null)
    {
        // validation for constraint: string
        if (!is_null($legDescription) && !is_string($legDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legDescription)), __LINE__);
        }
        $this->LegDescription = $legDescription;
        return $this;
    }
    /**
     * Get LegOrigin value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Address|null
     */
    public function getLegOrigin()
    {
        return $this->LegOrigin;
    }
    /**
     * Set LegOrigin value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Address $legOrigin
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setLegOrigin(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Address $legOrigin = null)
    {
        $this->LegOrigin = $legOrigin;
        return $this;
    }
    /**
     * Get LegOriginLocationId value
     * @return string|null
     */
    public function getLegOriginLocationId()
    {
        return $this->LegOriginLocationId;
    }
    /**
     * Set LegOriginLocationId value
     * @param string $legOriginLocationId
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setLegOriginLocationId($legOriginLocationId = null)
    {
        // validation for constraint: string
        if (!is_null($legOriginLocationId) && !is_string($legOriginLocationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legOriginLocationId)), __LINE__);
        }
        $this->LegOriginLocationId = $legOriginLocationId;
        return $this;
    }
    /**
     * Get LegDestination value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Address|null
     */
    public function getLegDestination()
    {
        return $this->LegDestination;
    }
    /**
     * Set LegDestination value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Address $legDestination
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setLegDestination(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Address $legDestination = null)
    {
        $this->LegDestination = $legDestination;
        return $this;
    }
    /**
     * Get LegDestinationLocationId value
     * @return string|null
     */
    public function getLegDestinationLocationId()
    {
        return $this->LegDestinationLocationId;
    }
    /**
     * Set LegDestinationLocationId value
     * @param string $legDestinationLocationId
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setLegDestinationLocationId($legDestinationLocationId = null)
    {
        // validation for constraint: string
        if (!is_null($legDestinationLocationId) && !is_string($legDestinationLocationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legDestinationLocationId)), __LINE__);
        }
        $this->LegDestinationLocationId = $legDestinationLocationId;
        return $this;
    }
    /**
     * Get RateType value
     * @return string|null
     */
    public function getRateType()
    {
        return $this->RateType;
    }
    /**
     * Set RateType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnedRateType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnedRateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $rateType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setRateType($rateType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnedRateType::valueIsValid($rateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rateType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnedRateType::getValidValues())), __LINE__);
        }
        $this->RateType = $rateType;
        return $this;
    }
    /**
     * Get RateScale value
     * @return string|null
     */
    public function getRateScale()
    {
        return $this->RateScale;
    }
    /**
     * Set RateScale value
     * @param string $rateScale
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setRateScale($rateScale = null)
    {
        // validation for constraint: string
        if (!is_null($rateScale) && !is_string($rateScale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateScale)), __LINE__);
        }
        $this->RateScale = $rateScale;
        return $this;
    }
    /**
     * Get RateZone value
     * @return string|null
     */
    public function getRateZone()
    {
        return $this->RateZone;
    }
    /**
     * Set RateZone value
     * @param string $rateZone
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setRateZone($rateZone = null)
    {
        // validation for constraint: string
        if (!is_null($rateZone) && !is_string($rateZone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateZone)), __LINE__);
        }
        $this->RateZone = $rateZone;
        return $this;
    }
    /**
     * Get PricingCode value
     * @return string|null
     */
    public function getPricingCode()
    {
        return $this->PricingCode;
    }
    /**
     * Set PricingCode value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PricingCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PricingCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pricingCode
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setPricingCode($pricingCode = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\PricingCodeType::valueIsValid($pricingCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pricingCode, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PricingCodeType::getValidValues())), __LINE__);
        }
        $this->PricingCode = $pricingCode;
        return $this;
    }
    /**
     * Get RatedWeightMethod value
     * @return string|null
     */
    public function getRatedWeightMethod()
    {
        return $this->RatedWeightMethod;
    }
    /**
     * Set RatedWeightMethod value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RatedWeightMethod::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RatedWeightMethod::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ratedWeightMethod
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setRatedWeightMethod($ratedWeightMethod = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\RatedWeightMethod::valueIsValid($ratedWeightMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ratedWeightMethod, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RatedWeightMethod::getValidValues())), __LINE__);
        }
        $this->RatedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    /**
     * Get MinimumChargeType value
     * @return string|null
     */
    public function getMinimumChargeType()
    {
        return $this->MinimumChargeType;
    }
    /**
     * Set MinimumChargeType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\MinimumChargeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\MinimumChargeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $minimumChargeType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setMinimumChargeType($minimumChargeType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\MinimumChargeType::valueIsValid($minimumChargeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $minimumChargeType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\MinimumChargeType::getValidValues())), __LINE__);
        }
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    /**
     * Get CurrencyExchangeRate value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CurrencyExchangeRate|null
     */
    public function getCurrencyExchangeRate()
    {
        return $this->CurrencyExchangeRate;
    }
    /**
     * Set CurrencyExchangeRate value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CurrencyExchangeRate $currencyExchangeRate
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setCurrencyExchangeRate(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CurrencyExchangeRate $currencyExchangeRate = null)
    {
        $this->CurrencyExchangeRate = $currencyExchangeRate;
        return $this;
    }
    /**
     * Get SpecialRatingApplied value
     * @return string[]|null
     */
    public function getSpecialRatingApplied()
    {
        return $this->SpecialRatingApplied;
    }
    /**
     * Set SpecialRatingApplied value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SpecialRatingAppliedType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SpecialRatingAppliedType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $specialRatingApplied
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setSpecialRatingApplied(array $specialRatingApplied = array())
    {
        $invalidValues = array();
        foreach ($specialRatingApplied as $shipmentLegRateDetailSpecialRatingAppliedItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\SpecialRatingAppliedType::valueIsValid($shipmentLegRateDetailSpecialRatingAppliedItem)) {
                $invalidValues[] = var_export($shipmentLegRateDetailSpecialRatingAppliedItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SpecialRatingAppliedType::getValidValues())), __LINE__);
        }
        $this->SpecialRatingApplied = $specialRatingApplied;
        return $this;
    }
    /**
     * Add item to SpecialRatingApplied value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SpecialRatingAppliedType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SpecialRatingAppliedType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function addToSpecialRatingApplied($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\SpecialRatingAppliedType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SpecialRatingAppliedType::getValidValues())), __LINE__);
        }
        $this->SpecialRatingApplied[] = $item;
        return $this;
    }
    /**
     * Get DimDivisor value
     * @return int|null
     */
    public function getDimDivisor()
    {
        return $this->DimDivisor;
    }
    /**
     * Set DimDivisor value
     * @param int $dimDivisor
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setDimDivisor($dimDivisor = null)
    {
        // validation for constraint: int
        if (!is_null($dimDivisor) && !is_numeric($dimDivisor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dimDivisor)), __LINE__);
        }
        $this->DimDivisor = $dimDivisor;
        return $this;
    }
    /**
     * Get DimDivisorType value
     * @return string|null
     */
    public function getDimDivisorType()
    {
        return $this->DimDivisorType;
    }
    /**
     * Set DimDivisorType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RateDimensionalDivisorType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RateDimensionalDivisorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dimDivisorType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setDimDivisorType($dimDivisorType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\RateDimensionalDivisorType::valueIsValid($dimDivisorType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dimDivisorType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RateDimensionalDivisorType::getValidValues())), __LINE__);
        }
        $this->DimDivisorType = $dimDivisorType;
        return $this;
    }
    /**
     * Get FuelSurchargePercent value
     * @return float|null
     */
    public function getFuelSurchargePercent()
    {
        return $this->FuelSurchargePercent;
    }
    /**
     * Set FuelSurchargePercent value
     * @param float $fuelSurchargePercent
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setFuelSurchargePercent($fuelSurchargePercent = null)
    {
        $this->FuelSurchargePercent = $fuelSurchargePercent;
        return $this;
    }
    /**
     * Get TotalBillingWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight|null
     */
    public function getTotalBillingWeight()
    {
        return $this->TotalBillingWeight;
    }
    /**
     * Set TotalBillingWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $totalBillingWeight
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setTotalBillingWeight(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $totalBillingWeight = null)
    {
        $this->TotalBillingWeight = $totalBillingWeight;
        return $this;
    }
    /**
     * Get TotalDimWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight|null
     */
    public function getTotalDimWeight()
    {
        return $this->TotalDimWeight;
    }
    /**
     * Set TotalDimWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $totalDimWeight
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setTotalDimWeight(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $totalDimWeight = null)
    {
        $this->TotalDimWeight = $totalDimWeight;
        return $this;
    }
    /**
     * Get TotalBaseCharge value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getTotalBaseCharge()
    {
        return $this->TotalBaseCharge;
    }
    /**
     * Set TotalBaseCharge value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalBaseCharge
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setTotalBaseCharge(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalBaseCharge = null)
    {
        $this->TotalBaseCharge = $totalBaseCharge;
        return $this;
    }
    /**
     * Get TotalFreightDiscounts value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getTotalFreightDiscounts()
    {
        return $this->TotalFreightDiscounts;
    }
    /**
     * Set TotalFreightDiscounts value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalFreightDiscounts
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setTotalFreightDiscounts(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalFreightDiscounts = null)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    /**
     * Get TotalNetFreight value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getTotalNetFreight()
    {
        return $this->TotalNetFreight;
    }
    /**
     * Set TotalNetFreight value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetFreight
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setTotalNetFreight(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetFreight = null)
    {
        $this->TotalNetFreight = $totalNetFreight;
        return $this;
    }
    /**
     * Get TotalSurcharges value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getTotalSurcharges()
    {
        return $this->TotalSurcharges;
    }
    /**
     * Set TotalSurcharges value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalSurcharges
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setTotalSurcharges(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalSurcharges = null)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    /**
     * Get TotalNetFedExCharge value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getTotalNetFedExCharge()
    {
        return $this->TotalNetFedExCharge;
    }
    /**
     * Set TotalNetFedExCharge value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetFedExCharge
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setTotalNetFedExCharge(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetFedExCharge = null)
    {
        $this->TotalNetFedExCharge = $totalNetFedExCharge;
        return $this;
    }
    /**
     * Get TotalTaxes value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getTotalTaxes()
    {
        return $this->TotalTaxes;
    }
    /**
     * Set TotalTaxes value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalTaxes
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setTotalTaxes(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalTaxes = null)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    /**
     * Get TotalNetCharge value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getTotalNetCharge()
    {
        return $this->TotalNetCharge;
    }
    /**
     * Set TotalNetCharge value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetCharge
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setTotalNetCharge(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetCharge = null)
    {
        $this->TotalNetCharge = $totalNetCharge;
        return $this;
    }
    /**
     * Get TotalRebates value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getTotalRebates()
    {
        return $this->TotalRebates;
    }
    /**
     * Set TotalRebates value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalRebates
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setTotalRebates(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalRebates = null)
    {
        $this->TotalRebates = $totalRebates;
        return $this;
    }
    /**
     * Get TotalDutiesAndTaxes value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getTotalDutiesAndTaxes()
    {
        return $this->TotalDutiesAndTaxes;
    }
    /**
     * Set TotalDutiesAndTaxes value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalDutiesAndTaxes
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setTotalDutiesAndTaxes(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalDutiesAndTaxes = null)
    {
        $this->TotalDutiesAndTaxes = $totalDutiesAndTaxes;
        return $this;
    }
    /**
     * Get TotalNetChargeWithDutiesAndTaxes value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getTotalNetChargeWithDutiesAndTaxes()
    {
        return $this->TotalNetChargeWithDutiesAndTaxes;
    }
    /**
     * Set TotalNetChargeWithDutiesAndTaxes value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetChargeWithDutiesAndTaxes
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setTotalNetChargeWithDutiesAndTaxes(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $totalNetChargeWithDutiesAndTaxes = null)
    {
        $this->TotalNetChargeWithDutiesAndTaxes = $totalNetChargeWithDutiesAndTaxes;
        return $this;
    }
    /**
     * Get FreightRateDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightRateDetail|null
     */
    public function getFreightRateDetail()
    {
        return $this->FreightRateDetail;
    }
    /**
     * Set FreightRateDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightRateDetail $freightRateDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setFreightRateDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightRateDetail $freightRateDetail = null)
    {
        $this->FreightRateDetail = $freightRateDetail;
        return $this;
    }
    /**
     * Get FreightDiscounts value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RateDiscount[]|null
     */
    public function getFreightDiscounts()
    {
        return $this->FreightDiscounts;
    }
    /**
     * Set FreightDiscounts value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\RateDiscount[] $freightDiscounts
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setFreightDiscounts(array $freightDiscounts = array())
    {
        foreach ($freightDiscounts as $shipmentLegRateDetailFreightDiscountsItem) {
            // validation for constraint: itemType
            if (!$shipmentLegRateDetailFreightDiscountsItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\RateDiscount) {
                throw new \InvalidArgumentException(sprintf('The FreightDiscounts property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\RateDiscount, "%s" given', is_object($shipmentLegRateDetailFreightDiscountsItem) ? get_class($shipmentLegRateDetailFreightDiscountsItem) : gettype($shipmentLegRateDetailFreightDiscountsItem)), __LINE__);
            }
        }
        $this->FreightDiscounts = $freightDiscounts;
        return $this;
    }
    /**
     * Add item to FreightDiscounts value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\RateDiscount $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function addToFreightDiscounts(\NicholasCreativeMedia\FedExPHP\Ship\StructType\RateDiscount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\RateDiscount) {
            throw new \InvalidArgumentException(sprintf('The FreightDiscounts property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\RateDiscount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FreightDiscounts[] = $item;
        return $this;
    }
    /**
     * Get Rebates value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Rebate[]|null
     */
    public function getRebates()
    {
        return $this->Rebates;
    }
    /**
     * Set Rebates value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Rebate[] $rebates
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setRebates(array $rebates = array())
    {
        foreach ($rebates as $shipmentLegRateDetailRebatesItem) {
            // validation for constraint: itemType
            if (!$shipmentLegRateDetailRebatesItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\Rebate) {
                throw new \InvalidArgumentException(sprintf('The Rebates property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\Rebate, "%s" given', is_object($shipmentLegRateDetailRebatesItem) ? get_class($shipmentLegRateDetailRebatesItem) : gettype($shipmentLegRateDetailRebatesItem)), __LINE__);
            }
        }
        $this->Rebates = $rebates;
        return $this;
    }
    /**
     * Add item to Rebates value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Rebate $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function addToRebates(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Rebate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\Rebate) {
            throw new \InvalidArgumentException(sprintf('The Rebates property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\Rebate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Rebates[] = $item;
        return $this;
    }
    /**
     * Get Surcharges value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge[]|null
     */
    public function getSurcharges()
    {
        return $this->Surcharges;
    }
    /**
     * Set Surcharges value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge[] $surcharges
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setSurcharges(array $surcharges = array())
    {
        foreach ($surcharges as $shipmentLegRateDetailSurchargesItem) {
            // validation for constraint: itemType
            if (!$shipmentLegRateDetailSurchargesItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge) {
                throw new \InvalidArgumentException(sprintf('The Surcharges property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge, "%s" given', is_object($shipmentLegRateDetailSurchargesItem) ? get_class($shipmentLegRateDetailSurchargesItem) : gettype($shipmentLegRateDetailSurchargesItem)), __LINE__);
            }
        }
        $this->Surcharges = $surcharges;
        return $this;
    }
    /**
     * Add item to Surcharges value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function addToSurcharges(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge) {
            throw new \InvalidArgumentException(sprintf('The Surcharges property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\Surcharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Surcharges[] = $item;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Tax[]|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Tax[] $taxes
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setTaxes(array $taxes = array())
    {
        foreach ($taxes as $shipmentLegRateDetailTaxesItem) {
            // validation for constraint: itemType
            if (!$shipmentLegRateDetailTaxesItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\Tax) {
                throw new \InvalidArgumentException(sprintf('The Taxes property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\Tax, "%s" given', is_object($shipmentLegRateDetailTaxesItem) ? get_class($shipmentLegRateDetailTaxesItem) : gettype($shipmentLegRateDetailTaxesItem)), __LINE__);
            }
        }
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Add item to Taxes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Tax $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function addToTaxes(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Tax $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\Tax) {
            throw new \InvalidArgumentException(sprintf('The Taxes property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\Tax, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Taxes[] = $item;
        return $this;
    }
    /**
     * Get DutiesAndTaxes value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtCommodityTax[]|null
     */
    public function getDutiesAndTaxes()
    {
        return $this->DutiesAndTaxes;
    }
    /**
     * Set DutiesAndTaxes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtCommodityTax[] $dutiesAndTaxes
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setDutiesAndTaxes(array $dutiesAndTaxes = array())
    {
        foreach ($dutiesAndTaxes as $shipmentLegRateDetailDutiesAndTaxesItem) {
            // validation for constraint: itemType
            if (!$shipmentLegRateDetailDutiesAndTaxesItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtCommodityTax) {
                throw new \InvalidArgumentException(sprintf('The DutiesAndTaxes property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtCommodityTax, "%s" given', is_object($shipmentLegRateDetailDutiesAndTaxesItem) ? get_class($shipmentLegRateDetailDutiesAndTaxesItem) : gettype($shipmentLegRateDetailDutiesAndTaxesItem)), __LINE__);
            }
        }
        $this->DutiesAndTaxes = $dutiesAndTaxes;
        return $this;
    }
    /**
     * Add item to DutiesAndTaxes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtCommodityTax $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function addToDutiesAndTaxes(\NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtCommodityTax $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtCommodityTax) {
            throw new \InvalidArgumentException(sprintf('The DutiesAndTaxes property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtCommodityTax, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DutiesAndTaxes[] = $item;
        return $this;
    }
    /**
     * Get VariableHandlingCharges value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingCharges|null
     */
    public function getVariableHandlingCharges()
    {
        return $this->VariableHandlingCharges;
    }
    /**
     * Set VariableHandlingCharges value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingCharges $variableHandlingCharges
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setVariableHandlingCharges(\NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingCharges $variableHandlingCharges = null)
    {
        $this->VariableHandlingCharges = $variableHandlingCharges;
        return $this;
    }
    /**
     * Get TotalVariableHandlingCharges value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingCharges|null
     */
    public function getTotalVariableHandlingCharges()
    {
        return $this->TotalVariableHandlingCharges;
    }
    /**
     * Set TotalVariableHandlingCharges value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingCharges $totalVariableHandlingCharges
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
     */
    public function setTotalVariableHandlingCharges(\NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingCharges $totalVariableHandlingCharges = null)
    {
        $this->TotalVariableHandlingCharges = $totalVariableHandlingCharges;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentLegRateDetail
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
