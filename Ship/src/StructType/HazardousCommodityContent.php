<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HazardousCommodityContent StructType
 * Meta informations extracted from the WSDL
 * - documentation: Documents the kind and quantity of an individual hazardous commodity in a package.
 * @subpackage Structs
 */
class HazardousCommodityContent extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Identifies and describes an individual hazardous commodity.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityDescription
     */
    public $Description;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the amount of the commodity in alternate units.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityQuantityDetail
     */
    public $Quantity;
    /**
     * The InnerReceptacles
     * Meta informations extracted from the WSDL
     * - documentation: This describes the inner receptacle details for a hazardous commodity within the dangerous goods container.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityInnerReceptacleDetail[]
     */
    public $InnerReceptacles;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - documentation: Customer-provided specifications for handling individual commodities.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityOptionDetail
     */
    public $Options;
    /**
     * The RadionuclideDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details of any radio active materials within the commodity.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\RadionuclideDetail
     */
    public $RadionuclideDetail;
    /**
     * The NetExplosiveDetail
     * Meta informations extracted from the WSDL
     * - documentation: The total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\NetExplosiveDetail
     */
    public $NetExplosiveDetail;
    /**
     * Constructor method for HazardousCommodityContent
     * @uses HazardousCommodityContent::setDescription()
     * @uses HazardousCommodityContent::setQuantity()
     * @uses HazardousCommodityContent::setInnerReceptacles()
     * @uses HazardousCommodityContent::setOptions()
     * @uses HazardousCommodityContent::setRadionuclideDetail()
     * @uses HazardousCommodityContent::setNetExplosiveDetail()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityDescription $description
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityQuantityDetail $quantity
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityInnerReceptacleDetail[] $innerReceptacles
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityOptionDetail $options
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\RadionuclideDetail $radionuclideDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\NetExplosiveDetail $netExplosiveDetail
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityDescription $description = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityQuantityDetail $quantity = null, array $innerReceptacles = array(), \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityOptionDetail $options = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\RadionuclideDetail $radionuclideDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\NetExplosiveDetail $netExplosiveDetail = null)
    {
        $this
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setInnerReceptacles($innerReceptacles)
            ->setOptions($options)
            ->setRadionuclideDetail($radionuclideDetail)
            ->setNetExplosiveDetail($netExplosiveDetail);
    }
    /**
     * Get Description value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityDescription|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityDescription $description
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityContent
     */
    public function setDescription(\NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityDescription $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Quantity value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityQuantityDetail|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityQuantityDetail $quantity
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityContent
     */
    public function setQuantity(\NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityQuantityDetail $quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get InnerReceptacles value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityInnerReceptacleDetail[]|null
     */
    public function getInnerReceptacles()
    {
        return $this->InnerReceptacles;
    }
    /**
     * Set InnerReceptacles value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityInnerReceptacleDetail[] $innerReceptacles
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityContent
     */
    public function setInnerReceptacles(array $innerReceptacles = array())
    {
        foreach ($innerReceptacles as $hazardousCommodityContentInnerReceptaclesItem) {
            // validation for constraint: itemType
            if (!$hazardousCommodityContentInnerReceptaclesItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityInnerReceptacleDetail) {
                throw new \InvalidArgumentException(sprintf('The InnerReceptacles property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityInnerReceptacleDetail, "%s" given', is_object($hazardousCommodityContentInnerReceptaclesItem) ? get_class($hazardousCommodityContentInnerReceptaclesItem) : gettype($hazardousCommodityContentInnerReceptaclesItem)), __LINE__);
            }
        }
        $this->InnerReceptacles = $innerReceptacles;
        return $this;
    }
    /**
     * Add item to InnerReceptacles value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityInnerReceptacleDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityContent
     */
    public function addToInnerReceptacles(\NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityInnerReceptacleDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityInnerReceptacleDetail) {
            throw new \InvalidArgumentException(sprintf('The InnerReceptacles property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityInnerReceptacleDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InnerReceptacles[] = $item;
        return $this;
    }
    /**
     * Get Options value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityOptionDetail|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityOptionDetail $options
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityContent
     */
    public function setOptions(\NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityOptionDetail $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Get RadionuclideDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RadionuclideDetail|null
     */
    public function getRadionuclideDetail()
    {
        return $this->RadionuclideDetail;
    }
    /**
     * Set RadionuclideDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\RadionuclideDetail $radionuclideDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityContent
     */
    public function setRadionuclideDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\RadionuclideDetail $radionuclideDetail = null)
    {
        $this->RadionuclideDetail = $radionuclideDetail;
        return $this;
    }
    /**
     * Get NetExplosiveDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\NetExplosiveDetail|null
     */
    public function getNetExplosiveDetail()
    {
        return $this->NetExplosiveDetail;
    }
    /**
     * Set NetExplosiveDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\NetExplosiveDetail $netExplosiveDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityContent
     */
    public function setNetExplosiveDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\NetExplosiveDetail $netExplosiveDetail = null)
    {
        $this->NetExplosiveDetail = $netExplosiveDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityContent
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
