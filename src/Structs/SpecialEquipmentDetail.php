<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialEquipmentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specification for special equipment used in loading/unloading shipment.
 * @subpackage Structs
 */
class SpecialEquipmentDetail extends AbstractStructBase
{
    /**
     * The LineItems
     * Meta informations extracted from the WSDL
     * - documentation: Contains an entry for each type of special equipment used with shipment
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentLineItem[]
     */
    public $LineItems;
    /**
     * Constructor method for SpecialEquipmentDetail
     * @uses SpecialEquipmentDetail::setLineItems()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentLineItem[] $lineItems
     */
    public function __construct(array $lineItems = array())
    {
        $this
            ->setLineItems($lineItems);
    }
    /**
     * Get LineItems value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentLineItem[]|null
     */
    public function getLineItems()
    {
        return $this->LineItems;
    }
    /**
     * Set LineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentLineItem[] $lineItems
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentDetail
     */
    public function setLineItems(array $lineItems = array())
    {
        foreach ($lineItems as $specialEquipmentDetailLineItemsItem) {
            // validation for constraint: itemType
            if (!$specialEquipmentDetailLineItemsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentLineItem) {
                throw new \InvalidArgumentException(sprintf('The LineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentLineItem, "%s" given', is_object($specialEquipmentDetailLineItemsItem) ? get_class($specialEquipmentDetailLineItemsItem) : gettype($specialEquipmentDetailLineItemsItem)), __LINE__);
            }
        }
        $this->LineItems = $lineItems;
        return $this;
    }
    /**
     * Add item to LineItems value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentLineItem $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentDetail
     */
    public function addToLineItems(\NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentLineItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentLineItem) {
            throw new \InvalidArgumentException(sprintf('The LineItems property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentLineItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LineItems[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SpecialEquipmentDetail
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
