<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParsedPostalCodeDetail Structs
 * @subpackage Structs
 */
class ParsedPostalCodeDetail extends AbstractStructBase
{
    /**
     * The Base
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Base;
    /**
     * The AddOn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AddOn;
    /**
     * The DeliveryPoint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryPoint;
    /**
     * Constructor method for ParsedPostalCodeDetail
     * @uses ParsedPostalCodeDetail::setBase()
     * @uses ParsedPostalCodeDetail::setAddOn()
     * @uses ParsedPostalCodeDetail::setDeliveryPoint()
     * @param string $base
     * @param string $addOn
     * @param string $deliveryPoint
     */
    public function __construct($base = null, $addOn = null, $deliveryPoint = null)
    {
        $this
            ->setBase($base)
            ->setAddOn($addOn)
            ->setDeliveryPoint($deliveryPoint);
    }
    /**
     * Get Base value
     * @return string|null
     */
    public function getBase()
    {
        return $this->Base;
    }
    /**
     * Set Base value
     * @param string $base
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedPostalCodeDetail
     */
    public function setBase($base = null)
    {
        // validation for constraint: string
        if (!is_null($base) && !is_string($base)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($base)), __LINE__);
        }
        $this->Base = $base;
        return $this;
    }
    /**
     * Get AddOn value
     * @return string|null
     */
    public function getAddOn()
    {
        return $this->AddOn;
    }
    /**
     * Set AddOn value
     * @param string $addOn
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedPostalCodeDetail
     */
    public function setAddOn($addOn = null)
    {
        // validation for constraint: string
        if (!is_null($addOn) && !is_string($addOn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addOn)), __LINE__);
        }
        $this->AddOn = $addOn;
        return $this;
    }
    /**
     * Get DeliveryPoint value
     * @return string|null
     */
    public function getDeliveryPoint()
    {
        return $this->DeliveryPoint;
    }
    /**
     * Set DeliveryPoint value
     * @param string $deliveryPoint
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedPostalCodeDetail
     */
    public function setDeliveryPoint($deliveryPoint = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryPoint) && !is_string($deliveryPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryPoint)), __LINE__);
        }
        $this->DeliveryPoint = $deliveryPoint;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedPostalCodeDetail
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
