<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedFreightPickupLineItem Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data resulting from the processing of an individual line item in a LTL Freight pickup request.
 * @subpackage Structs
 */
class CompletedFreightPickupLineItem extends AbstractStructBase
{
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the line item, to match reply line with request line.
     * - minOccurs: 0
     * @var int
     */
    public $SequenceNumber;
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - documentation: Describes the destination service center handling the delivery of this line item.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail
     */
    public $Destination;
    /**
     * The TotalTravelTime
     * Meta informations extracted from the WSDL
     * - documentation: Total travel time for this line item.
     * - minOccurs: 0
     * @var string
     */
    public $TotalTravelTime;
    /**
     * The EtaDeliveryTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: Identifies estimated delivery date and time for each line item.
     * - minOccurs: 0
     * @var string
     */
    public $EtaDeliveryTimestamp;
    /**
     * Constructor method for CompletedFreightPickupLineItem
     * @uses CompletedFreightPickupLineItem::setSequenceNumber()
     * @uses CompletedFreightPickupLineItem::setDestination()
     * @uses CompletedFreightPickupLineItem::setTotalTravelTime()
     * @uses CompletedFreightPickupLineItem::setEtaDeliveryTimestamp()
     * @param int $sequenceNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $destination
     * @param string $totalTravelTime
     * @param string $etaDeliveryTimestamp
     */
    public function __construct($sequenceNumber = null, \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $destination = null, $totalTravelTime = null, $etaDeliveryTimestamp = null)
    {
        $this
            ->setSequenceNumber($sequenceNumber)
            ->setDestination($destination)
            ->setTotalTravelTime($totalTravelTime)
            ->setEtaDeliveryTimestamp($etaDeliveryTimestamp);
    }
    /**
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get Destination value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail|null
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $destination
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem
     */
    public function setDestination(\NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $destination = null)
    {
        $this->Destination = $destination;
        return $this;
    }
    /**
     * Get TotalTravelTime value
     * @return string|null
     */
    public function getTotalTravelTime()
    {
        return $this->TotalTravelTime;
    }
    /**
     * Set TotalTravelTime value
     * @param string $totalTravelTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem
     */
    public function setTotalTravelTime($totalTravelTime = null)
    {
        // validation for constraint: string
        if (!is_null($totalTravelTime) && !is_string($totalTravelTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totalTravelTime)), __LINE__);
        }
        $this->TotalTravelTime = $totalTravelTime;
        return $this;
    }
    /**
     * Get EtaDeliveryTimestamp value
     * @return string|null
     */
    public function getEtaDeliveryTimestamp()
    {
        return $this->EtaDeliveryTimestamp;
    }
    /**
     * Set EtaDeliveryTimestamp value
     * @param string $etaDeliveryTimestamp
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem
     */
    public function setEtaDeliveryTimestamp($etaDeliveryTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($etaDeliveryTimestamp) && !is_string($etaDeliveryTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($etaDeliveryTimestamp)), __LINE__);
        }
        $this->EtaDeliveryTimestamp = $etaDeliveryTimestamp;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem
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
