<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentLineItem StructType
 * Meta informations extracted from the WSDL
 * - documentation: Description of an individual commodity or class of content in a shipment.
 * @subpackage Structs
 */
class FreightShipmentLineItem extends AbstractStructBase
{
    /**
     * The FreightClass
     * Meta informations extracted from the WSDL
     * - documentation: Freight class for this line item.
     * - minOccurs: 0
     * @var string
     */
    public $FreightClass;
    /**
     * The ClassProvidedByCustomer
     * Meta informations extracted from the WSDL
     * - documentation: FEDEX INTERNAL USE ONLY: for FedEx system that estimate freight class from customer-provided dimensions and weight.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassProvidedByCustomer;
    /**
     * The HandlingUnits
     * Meta informations extracted from the WSDL
     * - documentation: Number of individual handling units to which this line applies. (NOTE: Total of line-item-level handling units may not balance to shipment-level total handling units.)
     * - minOccurs: 0
     * @var int
     */
    public $HandlingUnits;
    /**
     * The Packaging
     * Meta informations extracted from the WSDL
     * - documentation: Specification of handling-unit packaging for this commodity or class line.
     * - minOccurs: 0
     * @var string
     */
    public $Packaging;
    /**
     * The Pieces
     * Meta informations extracted from the WSDL
     * - documentation: Number of pieces for this commodity or class line.
     * - minOccurs: 0
     * @var int
     */
    public $Pieces;
    /**
     * The NmfcCode
     * Meta informations extracted from the WSDL
     * - documentation: NMFC Code for commodity.
     * - minOccurs: 0
     * @var string
     */
    public $NmfcCode;
    /**
     * The HazardousMaterials
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the kind of hazardous material content in this line item.
     * - minOccurs: 0
     * @var string
     */
    public $HazardousMaterials;
    /**
     * The PurchaseOrderNumber
     * Meta informations extracted from the WSDL
     * - documentation: For printed reference per line item.
     * - minOccurs: 0
     * @var string
     */
    public $PurchaseOrderNumber;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Customer-provided description for this commodity or class line.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - documentation: Weight for this commodity or class line.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight
     */
    public $Weight;
    /**
     * The Dimensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Dimensions
     */
    public $Dimensions;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - documentation: Volume (cubic measure) for this commodity or class line.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Volume
     */
    public $Volume;
    /**
     * Constructor method for FreightShipmentLineItem
     * @uses FreightShipmentLineItem::setFreightClass()
     * @uses FreightShipmentLineItem::setClassProvidedByCustomer()
     * @uses FreightShipmentLineItem::setHandlingUnits()
     * @uses FreightShipmentLineItem::setPackaging()
     * @uses FreightShipmentLineItem::setPieces()
     * @uses FreightShipmentLineItem::setNmfcCode()
     * @uses FreightShipmentLineItem::setHazardousMaterials()
     * @uses FreightShipmentLineItem::setPurchaseOrderNumber()
     * @uses FreightShipmentLineItem::setDescription()
     * @uses FreightShipmentLineItem::setWeight()
     * @uses FreightShipmentLineItem::setDimensions()
     * @uses FreightShipmentLineItem::setVolume()
     * @param string $freightClass
     * @param bool $classProvidedByCustomer
     * @param int $handlingUnits
     * @param string $packaging
     * @param int $pieces
     * @param string $nmfcCode
     * @param string $hazardousMaterials
     * @param string $purchaseOrderNumber
     * @param string $description
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $weight
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Dimensions $dimensions
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Volume $volume
     */
    public function __construct($freightClass = null, $classProvidedByCustomer = null, $handlingUnits = null, $packaging = null, $pieces = null, $nmfcCode = null, $hazardousMaterials = null, $purchaseOrderNumber = null, $description = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $weight = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Dimensions $dimensions = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Volume $volume = null)
    {
        $this
            ->setFreightClass($freightClass)
            ->setClassProvidedByCustomer($classProvidedByCustomer)
            ->setHandlingUnits($handlingUnits)
            ->setPackaging($packaging)
            ->setPieces($pieces)
            ->setNmfcCode($nmfcCode)
            ->setHazardousMaterials($hazardousMaterials)
            ->setPurchaseOrderNumber($purchaseOrderNumber)
            ->setDescription($description)
            ->setWeight($weight)
            ->setDimensions($dimensions)
            ->setVolume($volume);
    }
    /**
     * Get FreightClass value
     * @return string|null
     */
    public function getFreightClass()
    {
        return $this->FreightClass;
    }
    /**
     * Set FreightClass value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\FreightClassType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\FreightClassType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $freightClass
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentLineItem
     */
    public function setFreightClass($freightClass = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\FreightClassType::valueIsValid($freightClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $freightClass, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\FreightClassType::getValidValues())), __LINE__);
        }
        $this->FreightClass = $freightClass;
        return $this;
    }
    /**
     * Get ClassProvidedByCustomer value
     * @return bool|null
     */
    public function getClassProvidedByCustomer()
    {
        return $this->ClassProvidedByCustomer;
    }
    /**
     * Set ClassProvidedByCustomer value
     * @param bool $classProvidedByCustomer
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentLineItem
     */
    public function setClassProvidedByCustomer($classProvidedByCustomer = null)
    {
        $this->ClassProvidedByCustomer = $classProvidedByCustomer;
        return $this;
    }
    /**
     * Get HandlingUnits value
     * @return int|null
     */
    public function getHandlingUnits()
    {
        return $this->HandlingUnits;
    }
    /**
     * Set HandlingUnits value
     * @param int $handlingUnits
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentLineItem
     */
    public function setHandlingUnits($handlingUnits = null)
    {
        // validation for constraint: int
        if (!is_null($handlingUnits) && !is_numeric($handlingUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($handlingUnits)), __LINE__);
        }
        $this->HandlingUnits = $handlingUnits;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PhysicalPackagingType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PhysicalPackagingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packaging
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentLineItem
     */
    public function setPackaging($packaging = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\PhysicalPackagingType::valueIsValid($packaging)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packaging, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PhysicalPackagingType::getValidValues())), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentLineItem
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
     * Get NmfcCode value
     * @return string|null
     */
    public function getNmfcCode()
    {
        return $this->NmfcCode;
    }
    /**
     * Set NmfcCode value
     * @param string $nmfcCode
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentLineItem
     */
    public function setNmfcCode($nmfcCode = null)
    {
        // validation for constraint: string
        if (!is_null($nmfcCode) && !is_string($nmfcCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nmfcCode)), __LINE__);
        }
        $this->NmfcCode = $nmfcCode;
        return $this;
    }
    /**
     * Get HazardousMaterials value
     * @return string|null
     */
    public function getHazardousMaterials()
    {
        return $this->HazardousMaterials;
    }
    /**
     * Set HazardousMaterials value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\HazardousCommodityOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\HazardousCommodityOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $hazardousMaterials
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentLineItem
     */
    public function setHazardousMaterials($hazardousMaterials = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\HazardousCommodityOptionType::valueIsValid($hazardousMaterials)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $hazardousMaterials, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\HazardousCommodityOptionType::getValidValues())), __LINE__);
        }
        $this->HazardousMaterials = $hazardousMaterials;
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentLineItem
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentLineItem
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
     * Get Weight value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $weight
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentLineItem
     */
    public function setWeight(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Dimensions|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Dimensions $dimensions
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentLineItem
     */
    public function setDimensions(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Dimensions $dimensions = null)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    /**
     * Get Volume value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Volume|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Volume $volume
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentLineItem
     */
    public function setVolume(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Volume $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightShipmentLineItem
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
