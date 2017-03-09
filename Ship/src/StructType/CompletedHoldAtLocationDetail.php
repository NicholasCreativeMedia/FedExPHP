<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedHoldAtLocationDetail StructType
 * @subpackage Structs
 */
class CompletedHoldAtLocationDetail extends AbstractStructBase
{
    /**
     * The HoldingLocation
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the branded location name, the hold at location phone number and the address of the location.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContactAndAddress
     */
    public $HoldingLocation;
    /**
     * The HoldingLocationType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of FedEx location.
     * - minOccurs: 0
     * @var string
     */
    public $HoldingLocationType;
    /**
     * Constructor method for CompletedHoldAtLocationDetail
     * @uses CompletedHoldAtLocationDetail::setHoldingLocation()
     * @uses CompletedHoldAtLocationDetail::setHoldingLocationType()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContactAndAddress $holdingLocation
     * @param string $holdingLocationType
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ContactAndAddress $holdingLocation = null, $holdingLocationType = null)
    {
        $this
            ->setHoldingLocation($holdingLocation)
            ->setHoldingLocationType($holdingLocationType);
    }
    /**
     * Get HoldingLocation value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContactAndAddress|null
     */
    public function getHoldingLocation()
    {
        return $this->HoldingLocation;
    }
    /**
     * Set HoldingLocation value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContactAndAddress $holdingLocation
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedHoldAtLocationDetail
     */
    public function setHoldingLocation(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ContactAndAddress $holdingLocation = null)
    {
        $this->HoldingLocation = $holdingLocation;
        return $this;
    }
    /**
     * Get HoldingLocationType value
     * @return string|null
     */
    public function getHoldingLocationType()
    {
        return $this->HoldingLocationType;
    }
    /**
     * Set HoldingLocationType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\FedExLocationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\FedExLocationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $holdingLocationType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedHoldAtLocationDetail
     */
    public function setHoldingLocationType($holdingLocationType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\FedExLocationType::valueIsValid($holdingLocationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $holdingLocationType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\FedExLocationType::getValidValues())), __LINE__);
        }
        $this->HoldingLocationType = $holdingLocationType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedHoldAtLocationDetail
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
