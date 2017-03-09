<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationHours Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the location hours for a location.
 * @subpackage Structs
 */
class LocationHours extends AbstractStructBase
{
    /**
     * The DayofWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DayofWeek;
    /**
     * The OperationalHours
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OperationalHours;
    /**
     * The Hours
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TimeRange[]
     */
    public $Hours;
    /**
     * Constructor method for LocationHours
     * @uses LocationHours::setDayofWeek()
     * @uses LocationHours::setOperationalHours()
     * @uses LocationHours::setHours()
     * @param string $dayofWeek
     * @param string $operationalHours
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TimeRange[] $hours
     */
    public function __construct($dayofWeek = null, $operationalHours = null, array $hours = array())
    {
        $this
            ->setDayofWeek($dayofWeek)
            ->setOperationalHours($operationalHours)
            ->setHours($hours);
    }
    /**
     * Get DayofWeek value
     * @return string|null
     */
    public function getDayofWeek()
    {
        return $this->DayofWeek;
    }
    /**
     * Set DayofWeek value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dayofWeek
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationHours
     */
    public function setDayofWeek($dayofWeek = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid($dayofWeek)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dayofWeek, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DayofWeek = $dayofWeek;
        return $this;
    }
    /**
     * Get OperationalHours value
     * @return string|null
     */
    public function getOperationalHours()
    {
        return $this->OperationalHours;
    }
    /**
     * Set OperationalHours value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\OperationalHoursType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\OperationalHoursType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $operationalHours
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationHours
     */
    public function setOperationalHours($operationalHours = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\OperationalHoursType::valueIsValid($operationalHours)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $operationalHours, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\OperationalHoursType::getValidValues())), __LINE__);
        }
        $this->OperationalHours = $operationalHours;
        return $this;
    }
    /**
     * Get Hours value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TimeRange[]|null
     */
    public function getHours()
    {
        return $this->Hours;
    }
    /**
     * Set Hours value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TimeRange[] $hours
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationHours
     */
    public function setHours(array $hours = array())
    {
        foreach ($hours as $locationHoursHoursItem) {
            // validation for constraint: itemType
            if (!$locationHoursHoursItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TimeRange) {
                throw new \InvalidArgumentException(sprintf('The Hours property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TimeRange, "%s" given', is_object($locationHoursHoursItem) ? get_class($locationHoursHoursItem) : gettype($locationHoursHoursItem)), __LINE__);
            }
        }
        $this->Hours = $hours;
        return $this;
    }
    /**
     * Add item to Hours value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TimeRange $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationHours
     */
    public function addToHours(\NicholasCreativeMedia\FedExPHP\Structs\TimeRange $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TimeRange) {
            throw new \InvalidArgumentException(sprintf('The Hours property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TimeRange, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Hours[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationHours
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
