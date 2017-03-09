<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Distance Structs
 * Meta informations extracted from the WSDL
 * - documentation: Driving or other transportation distances, distinct from dimension measurements.
 * @subpackage Structs
 */
class Distance extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the distance quantity.
     * - minOccurs: 0
     * @var float
     */
    public $Value;
    /**
     * The Units
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the unit of measure for the distance value.
     * - minOccurs: 0
     * @var string
     */
    public $Units;
    /**
     * Constructor method for Distance
     * @uses Distance::setValue()
     * @uses Distance::setUnits()
     * @param float $value
     * @param string $units
     */
    public function __construct($value = null, $units = null)
    {
        $this
            ->setValue($value)
            ->setUnits($units);
    }
    /**
     * Get Value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Distance
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Get Units value
     * @return string|null
     */
    public function getUnits()
    {
        return $this->Units;
    }
    /**
     * Set Units value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DistanceUnits::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DistanceUnits::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $units
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Distance
     */
    public function setUnits($units = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DistanceUnits::valueIsValid($units)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $units, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DistanceUnits::getValidValues())), __LINE__);
        }
        $this->Units = $units;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Distance
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
