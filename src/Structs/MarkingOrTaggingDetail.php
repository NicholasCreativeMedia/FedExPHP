<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkingOrTaggingDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specification for marking or tagging of pieces in shipment.
 * @subpackage Structs
 */
class MarkingOrTaggingDetail extends AbstractStructBase
{
    /**
     * The Count
     * Meta informations extracted from the WSDL
     * - documentation: Number of pieces to be marked or tagged by FedEx.
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * Constructor method for MarkingOrTaggingDetail
     * @uses MarkingOrTaggingDetail::setCount()
     * @param int $count
     */
    public function __construct($count = null)
    {
        $this
            ->setCount($count);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \NicholasCreativeMedia\FedExPHP\Structs\MarkingOrTaggingDetail
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !is_numeric($count)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\MarkingOrTaggingDetail
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
