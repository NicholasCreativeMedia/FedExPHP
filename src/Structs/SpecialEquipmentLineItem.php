<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialEquipmentLineItem Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the usage of a single type of special equipment while loading/unloading a shipment
 * @subpackage Structs
 */
class SpecialEquipmentLineItem extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Type of equipment used
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - documentation: Total amount of time the equipment was used
     * - minOccurs: 0
     * @var string
     */
    public $Duration;
    /**
     * Constructor method for SpecialEquipmentLineItem
     * @uses SpecialEquipmentLineItem::setType()
     * @uses SpecialEquipmentLineItem::setDuration()
     * @param string $type
     * @param string $duration
     */
    public function __construct($type = null, $duration = null)
    {
        $this
            ->setType($type)
            ->setDuration($duration);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\SpecialEquipmentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\SpecialEquipmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentLineItem
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\SpecialEquipmentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\SpecialEquipmentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentLineItem
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentLineItem
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
