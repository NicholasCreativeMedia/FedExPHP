<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RadioactivityDetail Structs
 * @subpackage Structs
 */
class RadioactivityDetail extends AbstractStructBase
{
    /**
     * The TransportIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $TransportIndex;
    /**
     * The SurfaceReading
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $SurfaceReading;
    /**
     * The CriticalitySafetyIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $CriticalitySafetyIndex;
    /**
     * The Dimensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Dimensions
     */
    public $Dimensions;
    /**
     * Constructor method for RadioactivityDetail
     * @uses RadioactivityDetail::setTransportIndex()
     * @uses RadioactivityDetail::setSurfaceReading()
     * @uses RadioactivityDetail::setCriticalitySafetyIndex()
     * @uses RadioactivityDetail::setDimensions()
     * @param float $transportIndex
     * @param float $surfaceReading
     * @param float $criticalitySafetyIndex
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $dimensions
     */
    public function __construct($transportIndex = null, $surfaceReading = null, $criticalitySafetyIndex = null, \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $dimensions = null)
    {
        $this
            ->setTransportIndex($transportIndex)
            ->setSurfaceReading($surfaceReading)
            ->setCriticalitySafetyIndex($criticalitySafetyIndex)
            ->setDimensions($dimensions);
    }
    /**
     * Get TransportIndex value
     * @return float|null
     */
    public function getTransportIndex()
    {
        return $this->TransportIndex;
    }
    /**
     * Set TransportIndex value
     * @param float $transportIndex
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadioactivityDetail
     */
    public function setTransportIndex($transportIndex = null)
    {
        $this->TransportIndex = $transportIndex;
        return $this;
    }
    /**
     * Get SurfaceReading value
     * @return float|null
     */
    public function getSurfaceReading()
    {
        return $this->SurfaceReading;
    }
    /**
     * Set SurfaceReading value
     * @param float $surfaceReading
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadioactivityDetail
     */
    public function setSurfaceReading($surfaceReading = null)
    {
        $this->SurfaceReading = $surfaceReading;
        return $this;
    }
    /**
     * Get CriticalitySafetyIndex value
     * @return float|null
     */
    public function getCriticalitySafetyIndex()
    {
        return $this->CriticalitySafetyIndex;
    }
    /**
     * Set CriticalitySafetyIndex value
     * @param float $criticalitySafetyIndex
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadioactivityDetail
     */
    public function setCriticalitySafetyIndex($criticalitySafetyIndex = null)
    {
        $this->CriticalitySafetyIndex = $criticalitySafetyIndex;
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Dimensions|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Dimensions $dimensions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadioactivityDetail
     */
    public function setDimensions(\NicholasCreativeMedia\FedExPHP\Structs\Dimensions $dimensions = null)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadioactivityDetail
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
