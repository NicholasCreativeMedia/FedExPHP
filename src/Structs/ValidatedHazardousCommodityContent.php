<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidatedHazardousCommodityContent Structs
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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityDescription
     */
    public $Description;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the amount of the commodity in alternate units.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityQuantityDetail
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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityOptionDetail
     */
    public $Options;
    /**
     * The NetExplosiveDetail
     * Meta informations extracted from the WSDL
     * - documentation: The total mass of the contained explosive substances, without the mass of any casings, bullets, shells, etc.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\NetExplosiveDetail
     */
    public $NetExplosiveDetail;
    /**
     * Constructor method for ValidatedHazardousCommodityContent
     * @uses ValidatedHazardousCommodityContent::setDescription()
     * @uses ValidatedHazardousCommodityContent::setQuantity()
     * @uses ValidatedHazardousCommodityContent::setMassPoints()
     * @uses ValidatedHazardousCommodityContent::setOptions()
     * @uses ValidatedHazardousCommodityContent::setNetExplosiveDetail()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityDescription $description
     * @param \NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityQuantityDetail $quantity
     * @param float $massPoints
     * @param \NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityOptionDetail $options
     * @param \NicholasCreativeMedia\FedExPHP\Structs\NetExplosiveDetail $netExplosiveDetail
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityDescription $description = null, \NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityQuantityDetail $quantity = null, $massPoints = null, \NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityOptionDetail $options = null, \NicholasCreativeMedia\FedExPHP\Structs\NetExplosiveDetail $netExplosiveDetail = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityDescription|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityDescription $description
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent
     */
    public function setDescription(\NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityDescription $description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Quantity value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityQuantityDetail|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityQuantityDetail $quantity
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent
     */
    public function setQuantity(\NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityQuantityDetail $quantity = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent
     */
    public function setMassPoints($massPoints = null)
    {
        $this->MassPoints = $massPoints;
        return $this;
    }
    /**
     * Get Options value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityOptionDetail|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityOptionDetail $options
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent
     */
    public function setOptions(\NicholasCreativeMedia\FedExPHP\Structs\HazardousCommodityOptionDetail $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Get NetExplosiveDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NetExplosiveDetail|null
     */
    public function getNetExplosiveDetail()
    {
        return $this->NetExplosiveDetail;
    }
    /**
     * Set NetExplosiveDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\NetExplosiveDetail $netExplosiveDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent
     */
    public function setNetExplosiveDetail(\NicholasCreativeMedia\FedExPHP\Structs\NetExplosiveDetail $netExplosiveDetail = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatedHazardousCommodityContent
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
