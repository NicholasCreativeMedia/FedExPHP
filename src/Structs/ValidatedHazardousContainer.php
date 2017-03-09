<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidatedHazardousContainer Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the concept of a container used to package dangerous goods commodities.
 * @subpackage Structs
 */
class ValidatedHazardousContainer extends AbstractStructBase
{
    /**
     * The QValue
     * Meta informations extracted from the WSDL
     * - documentation: Indicates that the quantity of the dangerous goods packaged is permissible for shipping. This is used to ensure that the dangerous goods commodities do not exceed the net quantity per package restrictions.
     * - minOccurs: 0
     * @var float
     */
    public $QValue;
    /**
     * The HazardousCommodities
     * Meta informations extracted from the WSDL
     * - documentation: Documents the kinds and quantities of all hazardous commodities in the current package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent[]
     */
    public $HazardousCommodities;
    /**
     * Constructor method for ValidatedHazardousContainer
     * @uses ValidatedHazardousContainer::setQValue()
     * @uses ValidatedHazardousContainer::setHazardousCommodities()
     * @param float $qValue
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent[] $hazardousCommodities
     */
    public function __construct($qValue = null, array $hazardousCommodities = array())
    {
        $this
            ->setQValue($qValue)
            ->setHazardousCommodities($hazardousCommodities);
    }
    /**
     * Get QValue value
     * @return float|null
     */
    public function getQValue()
    {
        return $this->QValue;
    }
    /**
     * Set QValue value
     * @param float $qValue
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousContainer
     */
    public function setQValue($qValue = null)
    {
        $this->QValue = $qValue;
        return $this;
    }
    /**
     * Get HazardousCommodities value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent[]|null
     */
    public function getHazardousCommodities()
    {
        return $this->HazardousCommodities;
    }
    /**
     * Set HazardousCommodities value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent[] $hazardousCommodities
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousContainer
     */
    public function setHazardousCommodities(array $hazardousCommodities = array())
    {
        foreach ($hazardousCommodities as $validatedHazardousContainerHazardousCommoditiesItem) {
            // validation for constraint: itemType
            if (!$validatedHazardousContainerHazardousCommoditiesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent) {
                throw new \InvalidArgumentException(sprintf('The HazardousCommodities property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent, "%s" given', is_object($validatedHazardousContainerHazardousCommoditiesItem) ? get_class($validatedHazardousContainerHazardousCommoditiesItem) : gettype($validatedHazardousContainerHazardousCommoditiesItem)), __LINE__);
            }
        }
        $this->HazardousCommodities = $hazardousCommodities;
        return $this;
    }
    /**
     * Add item to HazardousCommodities value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousContainer
     */
    public function addToHazardousCommodities(\NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent) {
            throw new \InvalidArgumentException(sprintf('The HazardousCommodities property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HazardousCommodities[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousContainer
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
