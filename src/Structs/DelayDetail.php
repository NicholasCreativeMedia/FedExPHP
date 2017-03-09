<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DelayDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Information about why a shipment delivery is delayed and at what level( country/service etc.).
 * @subpackage Structs
 */
class DelayDetail extends AbstractStructBase
{
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - documentation: The date of the delay
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * The DayOfWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DayOfWeek;
    /**
     * The Level
     * Meta informations extracted from the WSDL
     * - documentation: The attribute of the shipment that caused the delay(e.g. Country, City, LocationId, Zip, service area, special handling )
     * - minOccurs: 0
     * @var string
     */
    public $Level;
    /**
     * The Point
     * Meta informations extracted from the WSDL
     * - documentation: The point where the delay is occurring (e.g. Origin, Destination, Broker location)
     * - minOccurs: 0
     * @var string
     */
    public $Point;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: The reason for the delay (e.g. holiday, weekend, etc.).
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: The name of the holiday in that country that is causing the delay.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for DelayDetail
     * @uses DelayDetail::setDate()
     * @uses DelayDetail::setDayOfWeek()
     * @uses DelayDetail::setLevel()
     * @uses DelayDetail::setPoint()
     * @uses DelayDetail::setType()
     * @uses DelayDetail::setDescription()
     * @param string $date
     * @param string $dayOfWeek
     * @param string $level
     * @param string $point
     * @param string $type
     * @param string $description
     */
    public function __construct($date = null, $dayOfWeek = null, $level = null, $point = null, $type = null, $description = null)
    {
        $this
            ->setDate($date)
            ->setDayOfWeek($dayOfWeek)
            ->setLevel($level)
            ->setPoint($point)
            ->setType($type)
            ->setDescription($description);
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get DayOfWeek value
     * @return string|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dayOfWeek
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid($dayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dayOfWeek, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Get Level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DelayLevelType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DelayLevelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $level
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail
     */
    public function setLevel($level = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DelayLevelType::valueIsValid($level)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $level, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DelayLevelType::getValidValues())), __LINE__);
        }
        $this->Level = $level;
        return $this;
    }
    /**
     * Get Point value
     * @return string|null
     */
    public function getPoint()
    {
        return $this->Point;
    }
    /**
     * Set Point value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DelayPointType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DelayPointType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $point
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail
     */
    public function setPoint($point = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DelayPointType::valueIsValid($point)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $point, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DelayPointType::getValidValues())), __LINE__);
        }
        $this->Point = $point;
        return $this;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CommitmentDelayType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CommitmentDelayType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CommitmentDelayType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CommitmentDelayType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail
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
