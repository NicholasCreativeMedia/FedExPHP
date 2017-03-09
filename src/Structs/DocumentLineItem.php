<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentLineItem Structs
 * Meta informations extracted from the WSDL
 * - documentation: This is a structure for providing document line item content (in part or in whole) to a service.
 * @subpackage Structs
 */
class DocumentLineItem extends AbstractStructBase
{
    /**
     * The Values
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\KeyValueDetail[]
     */
    public $Values;
    /**
     * Constructor method for DocumentLineItem
     * @uses DocumentLineItem::setValues()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\KeyValueDetail[] $values
     */
    public function __construct(array $values = array())
    {
        $this
            ->setValues($values);
    }
    /**
     * Get Values value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\KeyValueDetail[]|null
     */
    public function getValues()
    {
        return $this->Values;
    }
    /**
     * Set Values value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\KeyValueDetail[] $values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DocumentLineItem
     */
    public function setValues(array $values = array())
    {
        foreach ($values as $documentLineItemValuesItem) {
            // validation for constraint: itemType
            if (!$documentLineItemValuesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\KeyValueDetail) {
                throw new \InvalidArgumentException(sprintf('The Values property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\KeyValueDetail, "%s" given', is_object($documentLineItemValuesItem) ? get_class($documentLineItemValuesItem) : gettype($documentLineItemValuesItem)), __LINE__);
            }
        }
        $this->Values = $values;
        return $this;
    }
    /**
     * Add item to Values value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\KeyValueDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DocumentLineItem
     */
    public function addToValues(\NicholasCreativeMedia\FedExPHP\Structs\KeyValueDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\KeyValueDetail) {
            throw new \InvalidArgumentException(sprintf('The Values property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\KeyValueDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Values[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DocumentLineItem
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
