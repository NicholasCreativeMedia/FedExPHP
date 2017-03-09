<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonBusinessTimeDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specification for services performed during non-business hours and/or days.
 * @subpackage Structs
 */
class NonBusinessTimeDetail extends AbstractStructBase
{
    /**
     * The PersonDays
     * Meta informations extracted from the WSDL
     * - documentation: Total number of person days for full non-business days.
     * - minOccurs: 0
     * @var int
     */
    public $PersonDays;
    /**
     * The PersonHours
     * Meta informations extracted from the WSDL
     * - documentation: Total number of person hours (whole or partial hours) for non-business hours.
     * - minOccurs: 0
     * @var int
     */
    public $PersonHours;
    /**
     * Constructor method for NonBusinessTimeDetail
     * @uses NonBusinessTimeDetail::setPersonDays()
     * @uses NonBusinessTimeDetail::setPersonHours()
     * @param int $personDays
     * @param int $personHours
     */
    public function __construct($personDays = null, $personHours = null)
    {
        $this
            ->setPersonDays($personDays)
            ->setPersonHours($personHours);
    }
    /**
     * Get PersonDays value
     * @return int|null
     */
    public function getPersonDays()
    {
        return $this->PersonDays;
    }
    /**
     * Set PersonDays value
     * @param int $personDays
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NonBusinessTimeDetail
     */
    public function setPersonDays($personDays = null)
    {
        // validation for constraint: int
        if (!is_null($personDays) && !is_numeric($personDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($personDays)), __LINE__);
        }
        $this->PersonDays = $personDays;
        return $this;
    }
    /**
     * Get PersonHours value
     * @return int|null
     */
    public function getPersonHours()
    {
        return $this->PersonHours;
    }
    /**
     * Set PersonHours value
     * @param int $personHours
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NonBusinessTimeDetail
     */
    public function setPersonHours($personHours = null)
    {
        // validation for constraint: int
        if (!is_null($personHours) && !is_numeric($personHours)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($personHours)), __LINE__);
        }
        $this->PersonHours = $personHours;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NonBusinessTimeDetail
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
