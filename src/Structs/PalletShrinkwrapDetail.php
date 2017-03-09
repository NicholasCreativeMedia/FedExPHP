<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PalletShrinkwrapDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifications for pallets to be shrinkwrapped as part of a Freight shipment.
 * @subpackage Structs
 */
class PalletShrinkwrapDetail extends AbstractStructBase
{
    /**
     * The PalletCount
     * Meta informations extracted from the WSDL
     * - documentation: Number of pallets to be shrinkwrapped.
     * - minOccurs: 0
     * @var int
     */
    public $PalletCount;
    /**
     * Constructor method for PalletShrinkwrapDetail
     * @uses PalletShrinkwrapDetail::setPalletCount()
     * @param int $palletCount
     */
    public function __construct($palletCount = null)
    {
        $this
            ->setPalletCount($palletCount);
    }
    /**
     * Get PalletCount value
     * @return int|null
     */
    public function getPalletCount()
    {
        return $this->PalletCount;
    }
    /**
     * Set PalletCount value
     * @param int $palletCount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PalletShrinkwrapDetail
     */
    public function setPalletCount($palletCount = null)
    {
        // validation for constraint: int
        if (!is_null($palletCount) && !is_numeric($palletCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($palletCount)), __LINE__);
        }
        $this->PalletCount = $palletCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PalletShrinkwrapDetail
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
