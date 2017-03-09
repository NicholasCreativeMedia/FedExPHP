<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidatedHazardousCommodityContent StructType
 * Meta informations extracted from the WSDL
 * - documentation: Documents the kind and quantity of an individual hazardous commodity in a package.
 * @subpackage Structs
 */
class ValidatedHazardousCommodityContent extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Identifies and describes an individual hazardous commodity.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidatedHazardousCommodityDescription
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
     * The MassPoints
     * Meta informations extracted from the WSDL
     * - documentation: The mass points are a calculation used by ADR regulations for measuring the risk of a particular hazardous commodity.
     * - minOccurs: 0
     * @var float
     */
    public $MassPoints;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - documentation: Customer-provided specifications for handling individual commodities.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityOptionDetail
     */
    public $Options;
    /**
     * The NetExplosiveDetail
     * Meta informations extracted from the WSDL
     * - documentation: The total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\NetExplosiveDetail
     */
    public $NetExplosiveDetail;
    /**
     * Constructor method for ValidatedHazardousCommodityContent
     * @uses ValidatedHazardousCommodityContent::setDescription()
     * @uses ValidatedHazardousCommodityContent::setQuantity()
     * @uses ValidatedHazardousCommodityContent::setMassPoints()
     * @uses ValidatedHazardousCommodityContent::setOptions()
     * @uses ValidatedHazardousCommodityContent::setNetExplosiveDetail()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidatedHazardousCommodityDescription $description
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityQuantityDetail $quantity
     * @param float $massPoints
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityOptionDetail $options
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\NetExplosiveDetail $netExplosiveDetail
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidatedHazardousCommodityDescription $description = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityQuantityDetail $quantity = null, $massPoints = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityOptionDetail $options = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\NetExplosiveDetail $netExplosiveDetail = null)
    {
        $this
            ->setDescription($description)
            ->setQuantity($quantity)
            ->setMassPoints($massPoints)
            ->setOptions($options)
            ->setNetExplosiveDetail($netExplosiveDetail);
    }
    /**
     * Get Description value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidatedHazardousCommodityDescription|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidatedHazardousCommodityDescription $description
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidatedHazardousCommodityContent
     */
    public function setDescription(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidatedHazardousCommodityDescription $description = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidatedHazardousCommodityContent
     */
    public function setQuantity(\NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityQuantityDetail $quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get MassPoints value
     * @return float|null
     */
    public function getMassPoints()
    {
        return $this->MassPoints;
    }
    /**
     * Set MassPoints value
     * @param float $massPoints
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidatedHazardousCommodityContent
     */
    public function setMassPoints($massPoints = null)
    {
        $this->MassPoints = $massPoints;
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidatedHazardousCommodityContent
     */
    public function setOptions(\NicholasCreativeMedia\FedExPHP\Ship\StructType\HazardousCommodityOptionDetail $options = null)
    {
        $this->Options = $options;
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidatedHazardousCommodityContent
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ValidatedHazardousCommodityContent
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
