<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightPickupLineItem Structs
 * @subpackage Structs
 */
class FreightPickupLineItem extends AbstractStructBase
{
    /**
     * The TrackingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TrackingNumber;
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Service;
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
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $Destination;
    /**
     * The Packaging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Packaging;
    /**
     * The Pieces
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Pieces;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $Weight;
    /**
     * The TotalHandlingUnits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalHandlingUnits;
    /**
     * The PurchaseOrderNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PurchaseOrderNumber;
    /**
     * The JustOneMore
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $JustOneMore;
    /**
     * The SpecialServicesRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested
     */
    public $SpecialServicesRequested;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for FreightPickupLineItem
     * @uses FreightPickupLineItem::setTrackingNumber()
     * @uses FreightPickupLineItem::setService()
     * @uses FreightPickupLineItem::setSequenceNumber()
     * @uses FreightPickupLineItem::setDestination()
     * @uses FreightPickupLineItem::setPackaging()
     * @uses FreightPickupLineItem::setPieces()
     * @uses FreightPickupLineItem::setWeight()
     * @uses FreightPickupLineItem::setTotalHandlingUnits()
     * @uses FreightPickupLineItem::setPurchaseOrderNumber()
     * @uses FreightPickupLineItem::setJustOneMore()
     * @uses FreightPickupLineItem::setSpecialServicesRequested()
     * @uses FreightPickupLineItem::setDescription()
     * @param string $trackingNumber
     * @param string $service
     * @param int $sequenceNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $destination
     * @param string $packaging
     * @param int $pieces
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $weight
     * @param int $totalHandlingUnits
     * @param string $purchaseOrderNumber
     * @param bool $justOneMore
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested $specialServicesRequested
     * @param string $description
     */
    public function __construct($trackingNumber = null, $service = null, $sequenceNumber = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $destination = null, $packaging = null, $pieces = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $weight = null, $totalHandlingUnits = null, $purchaseOrderNumber = null, $justOneMore = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested $specialServicesRequested = null, $description = null)
    {
        $this
            ->setTrackingNumber($trackingNumber)
            ->setService($service)
            ->setSequenceNumber($sequenceNumber)
            ->setDestination($destination)
            ->setPackaging($packaging)
            ->setPieces($pieces)
            ->setWeight($weight)
            ->setTotalHandlingUnits($totalHandlingUnits)
            ->setPurchaseOrderNumber($purchaseOrderNumber)
            ->setJustOneMore($justOneMore)
            ->setSpecialServicesRequested($specialServicesRequested)
            ->setDescription($description);
    }
    /**
     * Get TrackingNumber value
     * @return string|null
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    /**
     * Set TrackingNumber value
     * @param string $trackingNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem
     */
    public function setTrackingNumber($trackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($trackingNumber) && !is_string($trackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trackingNumber)), __LINE__);
        }
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    /**
     * Get Service value
     * @return string|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $service
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem
     */
    public function setService($service = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ServiceType::valueIsValid($service)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $service, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::getValidValues())), __LINE__);
        }
        $this->Service = $service;
        return $this;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $destination
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem
     */
    public function setDestination(\NicholasCreativeMedia\FedExPHP\Structs\Address $destination = null)
    {
        $this->Destination = $destination;
        return $this;
    }
    /**
     * Get Packaging value
     * @return string|null
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    /**
     * Set Packaging value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packaging
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem
     */
    public function setPackaging($packaging = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType::valueIsValid($packaging)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packaging, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PhysicalPackagingType::getValidValues())), __LINE__);
        }
        $this->Packaging = $packaging;
        return $this;
    }
    /**
     * Get Pieces value
     * @return int|null
     */
    public function getPieces()
    {
        return $this->Pieces;
    }
    /**
     * Set Pieces value
     * @param int $pieces
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem
     */
    public function setPieces($pieces = null)
    {
        // validation for constraint: int
        if (!is_null($pieces) && !is_numeric($pieces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pieces)), __LINE__);
        }
        $this->Pieces = $pieces;
        return $this;
    }
    /**
     * Get Weight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $weight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem
     */
    public function setWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $weight = null)
    {
        $this->Weight = $weight;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem
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
     * Get PurchaseOrderNumber value
     * @return string|null
     */
    public function getPurchaseOrderNumber()
    {
        return $this->PurchaseOrderNumber;
    }
    /**
     * Set PurchaseOrderNumber value
     * @param string $purchaseOrderNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($purchaseOrderNumber) && !is_string($purchaseOrderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($purchaseOrderNumber)), __LINE__);
        }
        $this->PurchaseOrderNumber = $purchaseOrderNumber;
        return $this;
    }
    /**
     * Get JustOneMore value
     * @return bool|null
     */
    public function getJustOneMore()
    {
        return $this->JustOneMore;
    }
    /**
     * Set JustOneMore value
     * @param bool $justOneMore
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem
     */
    public function setJustOneMore($justOneMore = null)
    {
        $this->JustOneMore = $justOneMore;
        return $this;
    }
    /**
     * Get SpecialServicesRequested value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested|null
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    /**
     * Set SpecialServicesRequested value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested $specialServicesRequested
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem
     */
    public function setSpecialServicesRequested(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightPickupLineItem
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
