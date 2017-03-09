<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtraLaborDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specification for labor time spent handling shipment.
 * @subpackage Structs
 */
class ExtraLaborDetail extends AbstractStructBase
{
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - documentation: Total labor time.
     * - minOccurs: 0
     * @var string
     */
    public $Duration;
    /**
     * Constructor method for ExtraLaborDetail
     * @uses ExtraLaborDetail::setDuration()
     * @param string $duration
     */
    public function __construct($duration = null)
    {
        $this
            ->setDuration($duration);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ExtraLaborDetail
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ExtraLaborDetail
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
