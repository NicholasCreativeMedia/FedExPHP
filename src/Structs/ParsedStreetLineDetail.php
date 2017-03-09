<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParsedStreetLineDetail Structs
 * @subpackage Structs
 */
class ParsedStreetLineDetail extends AbstractStructBase
{
    /**
     * The HouseNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HouseNumber;
    /**
     * The PreStreetType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PreStreetType;
    /**
     * The LeadingDirectional
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LeadingDirectional;
    /**
     * The StreetName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StreetName;
    /**
     * The StreetSuffix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StreetSuffix;
    /**
     * The TrailingDirectional
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TrailingDirectional;
    /**
     * The UnitLabel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UnitLabel;
    /**
     * The UnitNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UnitNumber;
    /**
     * The RuralRoute
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RuralRoute;
    /**
     * The POBox
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $POBox;
    /**
     * The Building
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Building;
    /**
     * The Organization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Organization;
    /**
     * Constructor method for ParsedStreetLineDetail
     * @uses ParsedStreetLineDetail::setHouseNumber()
     * @uses ParsedStreetLineDetail::setPreStreetType()
     * @uses ParsedStreetLineDetail::setLeadingDirectional()
     * @uses ParsedStreetLineDetail::setStreetName()
     * @uses ParsedStreetLineDetail::setStreetSuffix()
     * @uses ParsedStreetLineDetail::setTrailingDirectional()
     * @uses ParsedStreetLineDetail::setUnitLabel()
     * @uses ParsedStreetLineDetail::setUnitNumber()
     * @uses ParsedStreetLineDetail::setRuralRoute()
     * @uses ParsedStreetLineDetail::setPOBox()
     * @uses ParsedStreetLineDetail::setBuilding()
     * @uses ParsedStreetLineDetail::setOrganization()
     * @param string $houseNumber
     * @param string $preStreetType
     * @param string $leadingDirectional
     * @param string $streetName
     * @param string $streetSuffix
     * @param string $trailingDirectional
     * @param string $unitLabel
     * @param string $unitNumber
     * @param string $ruralRoute
     * @param string $pOBox
     * @param string $building
     * @param string $organization
     */
    public function __construct($houseNumber = null, $preStreetType = null, $leadingDirectional = null, $streetName = null, $streetSuffix = null, $trailingDirectional = null, $unitLabel = null, $unitNumber = null, $ruralRoute = null, $pOBox = null, $building = null, $organization = null)
    {
        $this
            ->setHouseNumber($houseNumber)
            ->setPreStreetType($preStreetType)
            ->setLeadingDirectional($leadingDirectional)
            ->setStreetName($streetName)
            ->setStreetSuffix($streetSuffix)
            ->setTrailingDirectional($trailingDirectional)
            ->setUnitLabel($unitLabel)
            ->setUnitNumber($unitNumber)
            ->setRuralRoute($ruralRoute)
            ->setPOBox($pOBox)
            ->setBuilding($building)
            ->setOrganization($organization);
    }
    /**
     * Get HouseNumber value
     * @return string|null
     */
    public function getHouseNumber()
    {
        return $this->HouseNumber;
    }
    /**
     * Set HouseNumber value
     * @param string $houseNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail
     */
    public function setHouseNumber($houseNumber = null)
    {
        // validation for constraint: string
        if (!is_null($houseNumber) && !is_string($houseNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($houseNumber)), __LINE__);
        }
        $this->HouseNumber = $houseNumber;
        return $this;
    }
    /**
     * Get PreStreetType value
     * @return string|null
     */
    public function getPreStreetType()
    {
        return $this->PreStreetType;
    }
    /**
     * Set PreStreetType value
     * @param string $preStreetType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail
     */
    public function setPreStreetType($preStreetType = null)
    {
        // validation for constraint: string
        if (!is_null($preStreetType) && !is_string($preStreetType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preStreetType)), __LINE__);
        }
        $this->PreStreetType = $preStreetType;
        return $this;
    }
    /**
     * Get LeadingDirectional value
     * @return string|null
     */
    public function getLeadingDirectional()
    {
        return $this->LeadingDirectional;
    }
    /**
     * Set LeadingDirectional value
     * @param string $leadingDirectional
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail
     */
    public function setLeadingDirectional($leadingDirectional = null)
    {
        // validation for constraint: string
        if (!is_null($leadingDirectional) && !is_string($leadingDirectional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($leadingDirectional)), __LINE__);
        }
        $this->LeadingDirectional = $leadingDirectional;
        return $this;
    }
    /**
     * Get StreetName value
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->StreetName;
    }
    /**
     * Set StreetName value
     * @param string $streetName
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail
     */
    public function setStreetName($streetName = null)
    {
        // validation for constraint: string
        if (!is_null($streetName) && !is_string($streetName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetName)), __LINE__);
        }
        $this->StreetName = $streetName;
        return $this;
    }
    /**
     * Get StreetSuffix value
     * @return string|null
     */
    public function getStreetSuffix()
    {
        return $this->StreetSuffix;
    }
    /**
     * Set StreetSuffix value
     * @param string $streetSuffix
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail
     */
    public function setStreetSuffix($streetSuffix = null)
    {
        // validation for constraint: string
        if (!is_null($streetSuffix) && !is_string($streetSuffix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetSuffix)), __LINE__);
        }
        $this->StreetSuffix = $streetSuffix;
        return $this;
    }
    /**
     * Get TrailingDirectional value
     * @return string|null
     */
    public function getTrailingDirectional()
    {
        return $this->TrailingDirectional;
    }
    /**
     * Set TrailingDirectional value
     * @param string $trailingDirectional
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail
     */
    public function setTrailingDirectional($trailingDirectional = null)
    {
        // validation for constraint: string
        if (!is_null($trailingDirectional) && !is_string($trailingDirectional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($trailingDirectional)), __LINE__);
        }
        $this->TrailingDirectional = $trailingDirectional;
        return $this;
    }
    /**
     * Get UnitLabel value
     * @return string|null
     */
    public function getUnitLabel()
    {
        return $this->UnitLabel;
    }
    /**
     * Set UnitLabel value
     * @param string $unitLabel
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail
     */
    public function setUnitLabel($unitLabel = null)
    {
        // validation for constraint: string
        if (!is_null($unitLabel) && !is_string($unitLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitLabel)), __LINE__);
        }
        $this->UnitLabel = $unitLabel;
        return $this;
    }
    /**
     * Get UnitNumber value
     * @return string|null
     */
    public function getUnitNumber()
    {
        return $this->UnitNumber;
    }
    /**
     * Set UnitNumber value
     * @param string $unitNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail
     */
    public function setUnitNumber($unitNumber = null)
    {
        // validation for constraint: string
        if (!is_null($unitNumber) && !is_string($unitNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitNumber)), __LINE__);
        }
        $this->UnitNumber = $unitNumber;
        return $this;
    }
    /**
     * Get RuralRoute value
     * @return string|null
     */
    public function getRuralRoute()
    {
        return $this->RuralRoute;
    }
    /**
     * Set RuralRoute value
     * @param string $ruralRoute
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail
     */
    public function setRuralRoute($ruralRoute = null)
    {
        // validation for constraint: string
        if (!is_null($ruralRoute) && !is_string($ruralRoute)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ruralRoute)), __LINE__);
        }
        $this->RuralRoute = $ruralRoute;
        return $this;
    }
    /**
     * Get POBox value
     * @return string|null
     */
    public function getPOBox()
    {
        return $this->POBox;
    }
    /**
     * Set POBox value
     * @param string $pOBox
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail
     */
    public function setPOBox($pOBox = null)
    {
        // validation for constraint: string
        if (!is_null($pOBox) && !is_string($pOBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pOBox)), __LINE__);
        }
        $this->POBox = $pOBox;
        return $this;
    }
    /**
     * Get Building value
     * @return string|null
     */
    public function getBuilding()
    {
        return $this->Building;
    }
    /**
     * Set Building value
     * @param string $building
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail
     */
    public function setBuilding($building = null)
    {
        // validation for constraint: string
        if (!is_null($building) && !is_string($building)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($building)), __LINE__);
        }
        $this->Building = $building;
        return $this;
    }
    /**
     * Get Organization value
     * @return string|null
     */
    public function getOrganization()
    {
        return $this->Organization;
    }
    /**
     * Set Organization value
     * @param string $organization
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail
     */
    public function setOrganization($organization = null)
    {
        // validation for constraint: string
        if (!is_null($organization) && !is_string($organization)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($organization)), __LINE__);
        }
        $this->Organization = $organization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ParsedStreetLineDetail
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
