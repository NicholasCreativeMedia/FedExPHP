<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EdtCommodityTax StructType
 * @subpackage Structs
 */
class EdtCommodityTax extends AbstractStructBase
{
    /**
     * The HarmonizedCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HarmonizedCode;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\EdtTaxDetail[]
     */
    public $Taxes;
    /**
     * Constructor method for EdtCommodityTax
     * @uses EdtCommodityTax::setHarmonizedCode()
     * @uses EdtCommodityTax::setTaxes()
     * @param string $harmonizedCode
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\EdtTaxDetail[] $taxes
     */
    public function __construct($harmonizedCode = null, array $taxes = array())
    {
        $this
            ->setHarmonizedCode($harmonizedCode)
            ->setTaxes($taxes);
    }
    /**
     * Get HarmonizedCode value
     * @return string|null
     */
    public function getHarmonizedCode()
    {
        return $this->HarmonizedCode;
    }
    /**
     * Set HarmonizedCode value
     * @param string $harmonizedCode
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\EdtCommodityTax
     */
    public function setHarmonizedCode($harmonizedCode = null)
    {
        // validation for constraint: string
        if (!is_null($harmonizedCode) && !is_string($harmonizedCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($harmonizedCode)), __LINE__);
        }
        $this->HarmonizedCode = $harmonizedCode;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\EdtTaxDetail[]|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\EdtTaxDetail[] $taxes
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\EdtCommodityTax
     */
    public function setTaxes(array $taxes = array())
    {
        foreach ($taxes as $edtCommodityTaxTaxesItem) {
            // validation for constraint: itemType
            if (!$edtCommodityTaxTaxesItem instanceof \NicholasCreativeMedia\FedExPHP\Rate\StructType\EdtTaxDetail) {
                throw new \InvalidArgumentException(sprintf('The Taxes property can only contain items of \NicholasCreativeMedia\FedExPHP\Rate\StructType\EdtTaxDetail, "%s" given', is_object($edtCommodityTaxTaxesItem) ? get_class($edtCommodityTaxTaxesItem) : gettype($edtCommodityTaxTaxesItem)), __LINE__);
            }
        }
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Add item to Taxes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\EdtTaxDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\EdtCommodityTax
     */
    public function addToTaxes(\NicholasCreativeMedia\FedExPHP\Rate\StructType\EdtTaxDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Rate\StructType\EdtTaxDetail) {
            throw new \InvalidArgumentException(sprintf('The Taxes property can only contain items of \NicholasCreativeMedia\FedExPHP\Rate\StructType\EdtTaxDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Taxes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\EdtCommodityTax
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
