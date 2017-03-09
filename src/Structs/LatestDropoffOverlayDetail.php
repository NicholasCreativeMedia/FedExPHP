<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LatestDropoffOverlayDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the time and reason to overlay the last drop off time for a carrier at a FedEx location.
 * @subpackage Structs
 */
class LatestDropoffOverlayDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Time
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Time;
    /**
     * Constructor method for LatestDropoffOverlayDetail
     * @uses LatestDropoffOverlayDetail::setType()
     * @uses LatestDropoffOverlayDetail::setTime()
     * @param string $type
     * @param string $time
     */
    public function __construct($type = null, $time = null)
    {
        $this
            ->setType($type)
            ->setTime($time);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LatestDropOffOverlayType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LatestDropOffOverlayType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LatestDropoffOverlayDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\LatestDropOffOverlayType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LatestDropOffOverlayType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LatestDropoffOverlayDetail
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time)), __LINE__);
        }
        $this->Time = $time;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LatestDropoffOverlayDetail
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
