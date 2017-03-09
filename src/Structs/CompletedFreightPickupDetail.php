<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedFreightPickupDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data resulting from the processing of an LTL Freight pickup request.
 * @subpackage Structs
 */
class CompletedFreightPickupDetail extends AbstractStructBase
{
    /**
     * The Origin
     * Meta informations extracted from the WSDL
     * - documentation: Describes the origin service center handling the pickup.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail
     */
    public $Origin;
    /**
     * The LineItems
     * Meta informations extracted from the WSDL
     * - documentation: Describes the results for each line item in the original request.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem[]
     */
    public $LineItems;
    /**
     * The TotalPieces
     * Meta informations extracted from the WSDL
     * - documentation: Total number of pieces from all line items from request.
     * - minOccurs: 0
     * @var int
     */
    public $TotalPieces;
    /**
     * The TotalWeight
     * Meta informations extracted from the WSDL
     * - documentation: Total weight from all line items from request.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $TotalWeight;
    /**
     * The TotalHandlingUnits
     * Meta informations extracted from the WSDL
     * - documentation: Total handling units from all line items from request.
     * - minOccurs: 0
     * @var int
     */
    public $TotalHandlingUnits;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Resulting status of pickup.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * Constructor method for CompletedFreightPickupDetail
     * @uses CompletedFreightPickupDetail::setOrigin()
     * @uses CompletedFreightPickupDetail::setLineItems()
     * @uses CompletedFreightPickupDetail::setTotalPieces()
     * @uses CompletedFreightPickupDetail::setTotalWeight()
     * @uses CompletedFreightPickupDetail::setTotalHandlingUnits()
     * @uses CompletedFreightPickupDetail::setStatus()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $origin
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem[] $lineItems
     * @param int $totalPieces
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight
     * @param int $totalHandlingUnits
     * @param string $status
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $origin = null, array $lineItems = array(), $totalPieces = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight = null, $totalHandlingUnits = null, $status = null)
    {
        $this
            ->setOrigin($origin)
            ->setLineItems($lineItems)
            ->setTotalPieces($totalPieces)
            ->setTotalWeight($totalWeight)
            ->setTotalHandlingUnits($totalHandlingUnits)
            ->setStatus($status);
    }
    /**
     * Get Origin value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $origin
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupDetail
     */
    public function setOrigin(\NicholasCreativeMedia\FedExPHP\Structs\FreightServiceCenterDetail $origin = null)
    {
        $this->Origin = $origin;
        return $this;
    }
    /**
     * Get LineItems value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem[]|null
     */
    public function getLineItems()
    {
        return $this->LineItems;
    }
    /**
     * Set LineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem[] $lineItems
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupDetail
     */
    public function setLineItems(array $lineItems = array())
    {
        foreach ($lineItems as $completedFreightPickupDetailLineItemsItem) {
            // validation for constraint: itemType
            if (!$completedFreightPickupDetailLineItemsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem) {
                throw new \InvalidArgumentException(sprintf('The LineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem, "%s" given', is_object($completedFreightPickupDetailLineItemsItem) ? get_class($completedFreightPickupDetailLineItemsItem) : gettype($completedFreightPickupDetailLineItemsItem)), __LINE__);
            }
        }
        $this->LineItems = $lineItems;
        return $this;
    }
    /**
     * Add item to LineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupDetail
     */
    public function addToLineItems(\NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem) {
            throw new \InvalidArgumentException(sprintf('The LineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupLineItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LineItems[] = $item;
        return $this;
    }
    /**
     * Get TotalPieces value
     * @return int|null
     */
    public function getTotalPieces()
    {
        return $this->TotalPieces;
    }
    /**
     * Set TotalPieces value
     * @param int $totalPieces
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupDetail
     */
    public function setTotalPieces($totalPieces = null)
    {
        // validation for constraint: int
        if (!is_null($totalPieces) && !is_numeric($totalPieces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalPieces)), __LINE__);
        }
        $this->TotalPieces = $totalPieces;
        return $this;
    }
    /**
     * Get TotalWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    /**
     * Set TotalWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupDetail
     */
    public function setTotalWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $totalWeight = null)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    /**
     * Get TotalHandlingUnits value
     * @return int|null
     */
    public function getTotalHandlingUnits()
    {
        return $this->TotalHandlingUnits;
    }
    /**
     * Set TotalHandlingUnits value
     * @param int $totalHandlingUnits
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupDetail
     */
    public function setTotalHandlingUnits($totalHandlingUnits = null)
    {
        // validation for constraint: int
        if (!is_null($totalHandlingUnits) && !is_numeric($totalHandlingUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalHandlingUnits)), __LINE__);
        }
        $this->TotalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupEventType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupEventType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupDetail
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PickupEventType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PickupEventType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedFreightPickupDetail
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
