<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightCommitDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Information about the Freight Service Centers associated with this shipment.
 * @subpackage Structs
 */
class FreightCommitDetail extends AbstractStructBase
{
    /**
     * The OriginDetail
     * Meta informations extracted from the WSDL
     * - documentation: Information about the origin Freight Service Center.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail
     */
    public $OriginDetail;
    /**
     * The DestinationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Information about the destination Freight Service Center.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail
     */
    public $DestinationDetail;
    /**
     * The TotalDistance
     * Meta informations extracted from the WSDL
     * - documentation: The distance between the origin and destination FreightService Centers
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Distance
     */
    public $TotalDistance;
    /**
     * Constructor method for FreightCommitDetail
     * @uses FreightCommitDetail::setOriginDetail()
     * @uses FreightCommitDetail::setDestinationDetail()
     * @uses FreightCommitDetail::setTotalDistance()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $originDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $destinationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Distance $totalDistance
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $originDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $destinationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\Distance $totalDistance = null)
    {
        $this
            ->setOriginDetail($originDetail)
            ->setDestinationDetail($destinationDetail)
            ->setTotalDistance($totalDistance);
    }
    /**
     * Get OriginDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail|null
     */
    public function getOriginDetail()
    {
        return $this->OriginDetail;
    }
    /**
     * Set OriginDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $originDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightCommitDetail
     */
    public function setOriginDetail(\NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $originDetail = null)
    {
        $this->OriginDetail = $originDetail;
        return $this;
    }
    /**
     * Get DestinationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail|null
     */
    public function getDestinationDetail()
    {
        return $this->DestinationDetail;
    }
    /**
     * Set DestinationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $destinationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightCommitDetail
     */
    public function setDestinationDetail(\NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $destinationDetail = null)
    {
        $this->DestinationDetail = $destinationDetail;
        return $this;
    }
    /**
     * Get TotalDistance value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Distance|null
     */
    public function getTotalDistance()
    {
        return $this->TotalDistance;
    }
    /**
     * Set TotalDistance value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Distance $totalDistance
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightCommitDetail
     */
    public function setTotalDistance(\NicholasCreativeMedia\FedExPHP\Structs\Distance $totalDistance = null)
    {
        $this->TotalDistance = $totalDistance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightCommitDetail
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
