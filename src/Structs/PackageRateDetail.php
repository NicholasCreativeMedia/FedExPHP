<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageRateDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data for a package's rates, as calculated per a specific rate type.
 * @subpackage Structs
 */
class PackageRateDetail extends AbstractStructBase
{
    /**
     * The RateType
     * Meta informations extracted from the WSDL
     * - documentation: Type used for this specific set of rate data.
     * - minOccurs: 0
     * @var string
     */
    public $RateType;
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
     * The BillingWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $BillingWeight;
    /**
     * The DimWeight
     * Meta informations extracted from the WSDL
     * - documentation: The dimensional weight of this package (if greater than actual).
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $DimWeight;
    /**
     * The OversizeWeight
     * Meta informations extracted from the WSDL
     * - documentation: The oversize weight of this package (if the package is oversize).
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $OversizeWeight;
    /**
     * The BaseCharge
     * Meta informations extracted from the WSDL
     * - documentation: The transportation charge only (prior to any discounts applied) for this package.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $BaseCharge;
    /**
     * The TotalFreightDiscounts
     * Meta informations extracted from the WSDL
     * - documentation: The sum of all discounts on this package.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalFreightDiscounts;
    /**
     * The NetFreight
     * Meta informations extracted from the WSDL
     * - documentation: This package's baseCharge - totalFreightDiscounts.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $NetFreight;
    /**
     * The TotalSurcharges
     * Meta informations extracted from the WSDL
     * - documentation: The sum of all surcharges on this package.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalSurcharges;
    /**
     * The NetFedExCharge
     * Meta informations extracted from the WSDL
     * - documentation: This package's netFreight + totalSurcharges (not including totalTaxes).
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $NetFedExCharge;
    /**
     * The TotalTaxes
     * Meta informations extracted from the WSDL
     * - documentation: The sum of all taxes on this package.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalTaxes;
    /**
     * The NetCharge
     * Meta informations extracted from the WSDL
     * - documentation: This package's netFreight + totalSurcharges + totalTaxes.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $NetCharge;
    /**
     * The TotalRebates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $TotalRebates;
    /**
     * The FreightDiscounts
     * Meta informations extracted from the WSDL
     * - documentation: All rate discounts that apply to this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\RateDiscount[]
     */
    public $FreightDiscounts;
    /**
     * The Rebates
     * Meta informations extracted from the WSDL
     * - documentation: All rebates that apply to this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Rebate[]
     */
    public $Rebates;
    /**
     * The Surcharges
     * Meta informations extracted from the WSDL
     * - documentation: All surcharges that apply to this package (either because of characteristics of the package itself, or because it is carrying per-shipment surcharges for the shipment of which it is a part).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Surcharge[]
     */
    public $Surcharges;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - documentation: All taxes applicable (or distributed to) this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Tax[]
     */
    public $Taxes;
    /**
     * The VariableHandlingCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingCharges
     */
    public $VariableHandlingCharges;
    /**
     * Constructor method for PackageRateDetail
     * @uses PackageRateDetail::setRateType()
     * @uses PackageRateDetail::setRatedWeightMethod()
     * @uses PackageRateDetail::setMinimumChargeType()
     * @uses PackageRateDetail::setBillingWeight()
     * @uses PackageRateDetail::setDimWeight()
     * @uses PackageRateDetail::setOversizeWeight()
     * @uses PackageRateDetail::setBaseCharge()
     * @uses PackageRateDetail::setTotalFreightDiscounts()
     * @uses PackageRateDetail::setNetFreight()
     * @uses PackageRateDetail::setTotalSurcharges()
     * @uses PackageRateDetail::setNetFedExCharge()
     * @uses PackageRateDetail::setTotalTaxes()
     * @uses PackageRateDetail::setNetCharge()
     * @uses PackageRateDetail::setTotalRebates()
     * @uses PackageRateDetail::setFreightDiscounts()
     * @uses PackageRateDetail::setRebates()
     * @uses PackageRateDetail::setSurcharges()
     * @uses PackageRateDetail::setTaxes()
     * @uses PackageRateDetail::setVariableHandlingCharges()
     * @param string $rateType
     * @param string $ratedWeightMethod
     * @param string $minimumChargeType
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $billingWeight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $dimWeight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $oversizeWeight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $baseCharge
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalFreightDiscounts
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $netFreight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalSurcharges
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $netFedExCharge
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalTaxes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $netCharge
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalRebates
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RateDiscount[] $freightDiscounts
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Rebate[] $rebates
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Surcharge[] $surcharges
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Tax[] $taxes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingCharges $variableHandlingCharges
     */
    public function __construct($rateType = null, $ratedWeightMethod = null, $minimumChargeType = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $billingWeight = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $dimWeight = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $oversizeWeight = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $baseCharge = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalFreightDiscounts = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $netFreight = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalSurcharges = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $netFedExCharge = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalTaxes = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $netCharge = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $totalRebates = null, array $freightDiscounts = array(), array $rebates = array(), array $surcharges = array(), array $taxes = array(), \NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingCharges $variableHandlingCharges = null)
    {
        $this
            ->setRateType($rateType)
            ->setRatedWeightMethod($ratedWeightMethod)
            ->setMinimumChargeType($minimumChargeType)
            ->setBillingWeight($billingWeight)
            ->setDimWeight($dimWeight)
            ->setOversizeWeight($oversizeWeight)
            ->setBaseCharge($baseCharge)
            ->setTotalFreightDiscounts($totalFreightDiscounts)
            ->setNetFreight($netFreight)
            ->setTotalSurcharges($totalSurcharges)
            ->setNetFedExCharge($netFedExCharge)
            ->setTotalTaxes($totalTaxes)
            ->setNetCharge($netCharge)
            ->setTotalRebates($totalRebates)
            ->setFreightDiscounts($freightDiscounts)
            ->setRebates($rebates)
            ->setSurcharges($surcharges)
            ->setTaxes($taxes)
            ->setVariableHandlingCharges($variableHandlingCharges);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ReturnedRateType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ReturnedRateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $rateType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setRateType($rateType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ReturnedRateType::valueIsValid($rateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rateType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ReturnedRateType::getValidValues())), __LINE__);
        }
        $this->RateType = $rateType;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RatedWeightMethod::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RatedWeightMethod::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ratedWeightMethod
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setRatedWeightMethod($ratedWeightMethod = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\RatedWeightMethod::valueIsValid($ratedWeightMethod)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ratedWeightMethod, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RatedWeightMethod::getValidValues())), __LINE__);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\MinimumChargeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\MinimumChargeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $minimumChargeType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setMinimumChargeType($minimumChargeType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\MinimumChargeType::valueIsValid($minimumChargeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $minimumChargeType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\MinimumChargeType::getValidValues())), __LINE__);
        }
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    /**
     * Get BillingWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getBillingWeight()
    {
        return $this->BillingWeight;
    }
    /**
     * Set BillingWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $billingWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setBillingWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $billingWeight = null)
    {
        $this->BillingWeight = $billingWeight;
        return $this;
    }
    /**
     * Get DimWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getDimWeight()
    {
        return $this->DimWeight;
    }
    /**
     * Set DimWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $dimWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setDimWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $dimWeight = null)
    {
        $this->DimWeight = $dimWeight;
        return $this;
    }
    /**
     * Get OversizeWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getOversizeWeight()
    {
        return $this->OversizeWeight;
    }
    /**
     * Set OversizeWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $oversizeWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setOversizeWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $oversizeWeight = null)
    {
        $this->OversizeWeight = $oversizeWeight;
        return $this;
    }
    /**
     * Get BaseCharge value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getBaseCharge()
    {
        return $this->BaseCharge;
    }
    /**
     * Set BaseCharge value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $baseCharge
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setBaseCharge(\NicholasCreativeMedia\FedExPHP\Structs\Money $baseCharge = null)
    {
        $this->BaseCharge = $baseCharge;
        return $this;
    }
    /**
     * Get TotalFreightDiscounts value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalFreightDiscounts()
    {
        return $this->TotalFreightDiscounts;
    }
    /**
     * Set TotalFreightDiscounts value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalFreightDiscounts
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setTotalFreightDiscounts(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalFreightDiscounts = null)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    /**
     * Get NetFreight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getNetFreight()
    {
        return $this->NetFreight;
    }
    /**
     * Set NetFreight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $netFreight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setNetFreight(\NicholasCreativeMedia\FedExPHP\Structs\Money $netFreight = null)
    {
        $this->NetFreight = $netFreight;
        return $this;
    }
    /**
     * Get TotalSurcharges value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalSurcharges()
    {
        return $this->TotalSurcharges;
    }
    /**
     * Set TotalSurcharges value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalSurcharges
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setTotalSurcharges(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalSurcharges = null)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    /**
     * Get NetFedExCharge value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getNetFedExCharge()
    {
        return $this->NetFedExCharge;
    }
    /**
     * Set NetFedExCharge value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $netFedExCharge
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setNetFedExCharge(\NicholasCreativeMedia\FedExPHP\Structs\Money $netFedExCharge = null)
    {
        $this->NetFedExCharge = $netFedExCharge;
        return $this;
    }
    /**
     * Get TotalTaxes value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalTaxes()
    {
        return $this->TotalTaxes;
    }
    /**
     * Set TotalTaxes value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalTaxes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setTotalTaxes(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalTaxes = null)
    {
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    /**
     * Get NetCharge value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getNetCharge()
    {
        return $this->NetCharge;
    }
    /**
     * Set NetCharge value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $netCharge
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setNetCharge(\NicholasCreativeMedia\FedExPHP\Structs\Money $netCharge = null)
    {
        $this->NetCharge = $netCharge;
        return $this;
    }
    /**
     * Get TotalRebates value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getTotalRebates()
    {
        return $this->TotalRebates;
    }
    /**
     * Set TotalRebates value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $totalRebates
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setTotalRebates(\NicholasCreativeMedia\FedExPHP\Structs\Money $totalRebates = null)
    {
        $this->TotalRebates = $totalRebates;
        return $this;
    }
    /**
     * Get FreightDiscounts value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RateDiscount[]|null
     */
    public function getFreightDiscounts()
    {
        return $this->FreightDiscounts;
    }
    /**
     * Set FreightDiscounts value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RateDiscount[] $freightDiscounts
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setFreightDiscounts(array $freightDiscounts = array())
    {
        foreach ($freightDiscounts as $packageRateDetailFreightDiscountsItem) {
            // validation for constraint: itemType
            if (!$packageRateDetailFreightDiscountsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\RateDiscount) {
                throw new \InvalidArgumentException(sprintf('The FreightDiscounts property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\RateDiscount, "%s" given', is_object($packageRateDetailFreightDiscountsItem) ? get_class($packageRateDetailFreightDiscountsItem) : gettype($packageRateDetailFreightDiscountsItem)), __LINE__);
            }
        }
        $this->FreightDiscounts = $freightDiscounts;
        return $this;
    }
    /**
     * Add item to FreightDiscounts value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RateDiscount $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function addToFreightDiscounts(\NicholasCreativeMedia\FedExPHP\Structs\RateDiscount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\RateDiscount) {
            throw new \InvalidArgumentException(sprintf('The FreightDiscounts property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\RateDiscount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FreightDiscounts[] = $item;
        return $this;
    }
    /**
     * Get Rebates value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Rebate[]|null
     */
    public function getRebates()
    {
        return $this->Rebates;
    }
    /**
     * Set Rebates value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Rebate[] $rebates
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setRebates(array $rebates = array())
    {
        foreach ($rebates as $packageRateDetailRebatesItem) {
            // validation for constraint: itemType
            if (!$packageRateDetailRebatesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Rebate) {
                throw new \InvalidArgumentException(sprintf('The Rebates property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Rebate, "%s" given', is_object($packageRateDetailRebatesItem) ? get_class($packageRateDetailRebatesItem) : gettype($packageRateDetailRebatesItem)), __LINE__);
            }
        }
        $this->Rebates = $rebates;
        return $this;
    }
    /**
     * Add item to Rebates value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Rebate $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function addToRebates(\NicholasCreativeMedia\FedExPHP\Structs\Rebate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Rebate) {
            throw new \InvalidArgumentException(sprintf('The Rebates property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Rebate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Rebates[] = $item;
        return $this;
    }
    /**
     * Get Surcharges value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Surcharge[]|null
     */
    public function getSurcharges()
    {
        return $this->Surcharges;
    }
    /**
     * Set Surcharges value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Surcharge[] $surcharges
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setSurcharges(array $surcharges = array())
    {
        foreach ($surcharges as $packageRateDetailSurchargesItem) {
            // validation for constraint: itemType
            if (!$packageRateDetailSurchargesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Surcharge) {
                throw new \InvalidArgumentException(sprintf('The Surcharges property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Surcharge, "%s" given', is_object($packageRateDetailSurchargesItem) ? get_class($packageRateDetailSurchargesItem) : gettype($packageRateDetailSurchargesItem)), __LINE__);
            }
        }
        $this->Surcharges = $surcharges;
        return $this;
    }
    /**
     * Add item to Surcharges value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Surcharge $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function addToSurcharges(\NicholasCreativeMedia\FedExPHP\Structs\Surcharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Surcharge) {
            throw new \InvalidArgumentException(sprintf('The Surcharges property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Surcharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Surcharges[] = $item;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Tax[]|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Tax[] $taxes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setTaxes(array $taxes = array())
    {
        foreach ($taxes as $packageRateDetailTaxesItem) {
            // validation for constraint: itemType
            if (!$packageRateDetailTaxesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Tax) {
                throw new \InvalidArgumentException(sprintf('The Taxes property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Tax, "%s" given', is_object($packageRateDetailTaxesItem) ? get_class($packageRateDetailTaxesItem) : gettype($packageRateDetailTaxesItem)), __LINE__);
            }
        }
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Add item to Taxes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Tax $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function addToTaxes(\NicholasCreativeMedia\FedExPHP\Structs\Tax $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Tax) {
            throw new \InvalidArgumentException(sprintf('The Taxes property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Tax, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Taxes[] = $item;
        return $this;
    }
    /**
     * Get VariableHandlingCharges value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingCharges|null
     */
    public function getVariableHandlingCharges()
    {
        return $this->VariableHandlingCharges;
    }
    /**
     * Set VariableHandlingCharges value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingCharges $variableHandlingCharges
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
     */
    public function setVariableHandlingCharges(\NicholasCreativeMedia\FedExPHP\Structs\VariableHandlingCharges $variableHandlingCharges = null)
    {
        $this->VariableHandlingCharges = $variableHandlingCharges;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRateDetail
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
