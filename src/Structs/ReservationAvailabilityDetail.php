<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReservationAvailabilityDetail Structs
 * @subpackage Structs
 */
class ReservationAvailabilityDetail extends AbstractStructBase
{
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Attributes;
    /**
     * Constructor method for ReservationAvailabilityDetail
     * @uses ReservationAvailabilityDetail::setAttributes()
     * @param string[] $attributes
     */
    public function __construct(array $attributes = array())
    {
        $this
            ->setAttributes($attributes);
    }
    /**
     * Get Attributes value
     * @return string[]|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ReservationAttributesType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ReservationAttributesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $attributes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReservationAvailabilityDetail
     */
    public function setAttributes(array $attributes = array())
    {
        $invalidValues = array();
        foreach ($attributes as $reservationAvailabilityDetailAttributesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\ReservationAttributesType::valueIsValid($reservationAvailabilityDetailAttributesItem)) {
                $invalidValues[] = var_export($reservationAvailabilityDetailAttributesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ReservationAttributesType::getValidValues())), __LINE__);
        }
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Add item to Attributes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ReservationAttributesType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ReservationAttributesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReservationAvailabilityDetail
     */
    public function addToAttributes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ReservationAttributesType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ReservationAttributesType::getValidValues())), __LINE__);
        }
        $this->Attributes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ReservationAvailabilityDetail
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
