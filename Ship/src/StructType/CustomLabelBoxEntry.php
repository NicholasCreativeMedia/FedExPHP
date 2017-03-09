<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLabelBoxEntry StructType
 * Meta informations extracted from the WSDL
 * - documentation: Solid (filled) rectangular area on label.
 * @subpackage Structs
 */
class CustomLabelBoxEntry extends AbstractStructBase
{
    /**
     * The TopLeftCorner
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition
     */
    public $TopLeftCorner;
    /**
     * The BottomRightCorner
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition
     */
    public $BottomRightCorner;
    /**
     * Constructor method for CustomLabelBoxEntry
     * @uses CustomLabelBoxEntry::setTopLeftCorner()
     * @uses CustomLabelBoxEntry::setBottomRightCorner()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition $topLeftCorner
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition $bottomRightCorner
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition $topLeftCorner = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition $bottomRightCorner = null)
    {
        $this
            ->setTopLeftCorner($topLeftCorner)
            ->setBottomRightCorner($bottomRightCorner);
    }
    /**
     * Get TopLeftCorner value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition
     */
    public function getTopLeftCorner()
    {
        return $this->TopLeftCorner;
    }
    /**
     * Set TopLeftCorner value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition $topLeftCorner
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelBoxEntry
     */
    public function setTopLeftCorner(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition $topLeftCorner = null)
    {
        $this->TopLeftCorner = $topLeftCorner;
        return $this;
    }
    /**
     * Get BottomRightCorner value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition
     */
    public function getBottomRightCorner()
    {
        return $this->BottomRightCorner;
    }
    /**
     * Set BottomRightCorner value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition $bottomRightCorner
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelBoxEntry
     */
    public function setBottomRightCorner(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition $bottomRightCorner = null)
    {
        $this->BottomRightCorner = $bottomRightCorner;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelBoxEntry
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
