<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeRange Structs
 * @subpackage Structs
 */
class TimeRange extends AbstractStructBase
{
    /**
     * The Begins
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Begins;
    /**
     * The Ends
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Ends;
    /**
     * Constructor method for TimeRange
     * @uses TimeRange::setBegins()
     * @uses TimeRange::setEnds()
     * @param string $begins
     * @param string $ends
     */
    public function __construct($begins = null, $ends = null)
    {
        $this
            ->setBegins($begins)
            ->setEnds($ends);
    }
    /**
     * Get Begins value
     * @return string|null
     */
    public function getBegins()
    {
        return $this->Begins;
    }
    /**
     * Set Begins value
     * @param string $begins
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TimeRange
     */
    public function setBegins($begins = null)
    {
        // validation for constraint: string
        if (!is_null($begins) && !is_string($begins)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($begins)), __LINE__);
        }
        $this->Begins = $begins;
        return $this;
    }
    /**
     * Get Ends value
     * @return string|null
     */
    public function getEnds()
    {
        return $this->Ends;
    }
    /**
     * Set Ends value
     * @param string $ends
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TimeRange
     */
    public function setEnds($ends = null)
    {
        // validation for constraint: string
        if (!is_null($ends) && !is_string($ends)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ends)), __LINE__);
        }
        $this->Ends = $ends;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TimeRange
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
