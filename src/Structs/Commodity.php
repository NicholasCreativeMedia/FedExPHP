<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Commodity Structs
 * @subpackage Structs
 */
class Commodity extends AbstractStructBase
{
    /**
     * The CommodityId
     * Meta informations extracted from the WSDL
     * - documentation: Value used to identify a commodity description; must be unique within the containing shipment.
     * - minOccurs: 0
     * @var string
     */
    public $CommodityId;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The NumberOfPieces
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPieces;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Purpose
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Purpose;
    /**
     * The CountryOfManufacture
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CountryOfManufacture;
    /**
     * The HarmonizedCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HarmonizedCode;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $Weight;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Quantity;
    /**
     * The QuantityUnits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $QuantityUnits;
    /**
     * The AdditionalMeasures
     * Meta informations extracted from the WSDL
     * - documentation: Contains only additional quantitative information other than weight and quantity to calculate duties and taxes.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Measure[]
     */
    public $AdditionalMeasures;
    /**
     * The UnitPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $UnitPrice;
    /**
     * The CustomsValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $CustomsValue;
    /**
     * The ExciseConditions
     * Meta informations extracted from the WSDL
     * - documentation: Defines additional characteristic of commodity used to calculate duties and taxes
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\EdtExciseCondition[]
     */
    public $ExciseConditions;
    /**
     * The ExportLicenseNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExportLicenseNumber;
    /**
     * The ExportLicenseExpirationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExportLicenseExpirationDate;
    /**
     * The CIMarksAndNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CIMarksAndNumbers;
    /**
     * The PartNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartNumber;
    /**
     * The NaftaDetail
     * Meta informations extracted from the WSDL
     * - documentation: All data required for this commodity in NAFTA Certificate of Origin.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\NaftaCommodityDetail
     */
    public $NaftaDetail;
    /**
     * Constructor method for Commodity
     * @uses Commodity::setCommodityId()
     * @uses Commodity::setName()
     * @uses Commodity::setNumberOfPieces()
     * @uses Commodity::setDescription()
     * @uses Commodity::setPurpose()
     * @uses Commodity::setCountryOfManufacture()
     * @uses Commodity::setHarmonizedCode()
     * @uses Commodity::setWeight()
     * @uses Commodity::setQuantity()
     * @uses Commodity::setQuantityUnits()
     * @uses Commodity::setAdditionalMeasures()
     * @uses Commodity::setUnitPrice()
     * @uses Commodity::setCustomsValue()
     * @uses Commodity::setExciseConditions()
     * @uses Commodity::setExportLicenseNumber()
     * @uses Commodity::setExportLicenseExpirationDate()
     * @uses Commodity::setCIMarksAndNumbers()
     * @uses Commodity::setPartNumber()
     * @uses Commodity::setNaftaDetail()
     * @param string $commodityId
     * @param string $name
     * @param int $numberOfPieces
     * @param string $description
     * @param string $purpose
     * @param string $countryOfManufacture
     * @param string $harmonizedCode
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $weight
     * @param float $quantity
     * @param string $quantityUnits
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Measure[] $additionalMeasures
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $unitPrice
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $customsValue
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EdtExciseCondition[] $exciseConditions
     * @param string $exportLicenseNumber
     * @param string $exportLicenseExpirationDate
     * @param string $cIMarksAndNumbers
     * @param string $partNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\NaftaCommodityDetail $naftaDetail
     */
    public function __construct($commodityId = null, $name = null, $numberOfPieces = null, $description = null, $purpose = null, $countryOfManufacture = null, $harmonizedCode = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $weight = null, $quantity = null, $quantityUnits = null, array $additionalMeasures = array(), \NicholasCreativeMedia\FedExPHP\Structs\Money $unitPrice = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $customsValue = null, array $exciseConditions = array(), $exportLicenseNumber = null, $exportLicenseExpirationDate = null, $cIMarksAndNumbers = null, $partNumber = null, \NicholasCreativeMedia\FedExPHP\Structs\NaftaCommodityDetail $naftaDetail = null)
    {
        $this
            ->setCommodityId($commodityId)
            ->setName($name)
            ->setNumberOfPieces($numberOfPieces)
            ->setDescription($description)
            ->setPurpose($purpose)
            ->setCountryOfManufacture($countryOfManufacture)
            ->setHarmonizedCode($harmonizedCode)
            ->setWeight($weight)
            ->setQuantity($quantity)
            ->setQuantityUnits($quantityUnits)
            ->setAdditionalMeasures($additionalMeasures)
            ->setUnitPrice($unitPrice)
            ->setCustomsValue($customsValue)
            ->setExciseConditions($exciseConditions)
            ->setExportLicenseNumber($exportLicenseNumber)
            ->setExportLicenseExpirationDate($exportLicenseExpirationDate)
            ->setCIMarksAndNumbers($cIMarksAndNumbers)
            ->setPartNumber($partNumber)
            ->setNaftaDetail($naftaDetail);
    }
    /**
     * Get CommodityId value
     * @return string|null
     */
    public function getCommodityId()
    {
        return $this->CommodityId;
    }
    /**
     * Set CommodityId value
     * @param string $commodityId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setCommodityId($commodityId = null)
    {
        // validation for constraint: string
        if (!is_null($commodityId) && !is_string($commodityId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commodityId)), __LINE__);
        }
        $this->CommodityId = $commodityId;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get NumberOfPieces value
     * @return int|null
     */
    public function getNumberOfPieces()
    {
        return $this->NumberOfPieces;
    }
    /**
     * Set NumberOfPieces value
     * @param int $numberOfPieces
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setNumberOfPieces($numberOfPieces = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPieces) && !is_numeric($numberOfPieces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPieces)), __LINE__);
        }
        $this->NumberOfPieces = $numberOfPieces;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
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
     * Get Purpose value
     * @return string|null
     */
    public function getPurpose()
    {
        return $this->Purpose;
    }
    /**
     * Set Purpose value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CommodityPurposeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CommodityPurposeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $purpose
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setPurpose($purpose = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CommodityPurposeType::valueIsValid($purpose)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $purpose, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CommodityPurposeType::getValidValues())), __LINE__);
        }
        $this->Purpose = $purpose;
        return $this;
    }
    /**
     * Get CountryOfManufacture value
     * @return string|null
     */
    public function getCountryOfManufacture()
    {
        return $this->CountryOfManufacture;
    }
    /**
     * Set CountryOfManufacture value
     * @param string $countryOfManufacture
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setCountryOfManufacture($countryOfManufacture = null)
    {
        // validation for constraint: string
        if (!is_null($countryOfManufacture) && !is_string($countryOfManufacture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryOfManufacture)), __LINE__);
        }
        $this->CountryOfManufacture = $countryOfManufacture;
        return $this;
    }
    /**
     * Get HarmonizedCode value
     * @return string|null
     */
    public function getHarmonizedCode()
    {
        return $this->HarmonizedCode;
    }
    /**
     * Set HarmonizedCode value
     * @param string $harmonizedCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setHarmonizedCode($harmonizedCode = null)
    {
        // validation for constraint: string
        if (!is_null($harmonizedCode) && !is_string($harmonizedCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($harmonizedCode)), __LINE__);
        }
        $this->HarmonizedCode = $harmonizedCode;
        return $this;
    }
    /**
     * Get Weight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $weight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Quantity value
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param float $quantity
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setQuantity($quantity = null)
    {
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Get QuantityUnits value
     * @return string|null
     */
    public function getQuantityUnits()
    {
        return $this->QuantityUnits;
    }
    /**
     * Set QuantityUnits value
     * @param string $quantityUnits
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setQuantityUnits($quantityUnits = null)
    {
        // validation for constraint: string
        if (!is_null($quantityUnits) && !is_string($quantityUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quantityUnits)), __LINE__);
        }
        $this->QuantityUnits = $quantityUnits;
        return $this;
    }
    /**
     * Get AdditionalMeasures value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Measure[]|null
     */
    public function getAdditionalMeasures()
    {
        return $this->AdditionalMeasures;
    }
    /**
     * Set AdditionalMeasures value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Measure[] $additionalMeasures
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setAdditionalMeasures(array $additionalMeasures = array())
    {
        foreach ($additionalMeasures as $commodityAdditionalMeasuresItem) {
            // validation for constraint: itemType
            if (!$commodityAdditionalMeasuresItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Measure) {
                throw new \InvalidArgumentException(sprintf('The AdditionalMeasures property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Measure, "%s" given', is_object($commodityAdditionalMeasuresItem) ? get_class($commodityAdditionalMeasuresItem) : gettype($commodityAdditionalMeasuresItem)), __LINE__);
            }
        }
        $this->AdditionalMeasures = $additionalMeasures;
        return $this;
    }
    /**
     * Add item to AdditionalMeasures value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Measure $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function addToAdditionalMeasures(\NicholasCreativeMedia\FedExPHP\Structs\Measure $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Measure) {
            throw new \InvalidArgumentException(sprintf('The AdditionalMeasures property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Measure, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalMeasures[] = $item;
        return $this;
    }
    /**
     * Get UnitPrice value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }
    /**
     * Set UnitPrice value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $unitPrice
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setUnitPrice(\NicholasCreativeMedia\FedExPHP\Structs\Money $unitPrice = null)
    {
        $this->UnitPrice = $unitPrice;
        return $this;
    }
    /**
     * Get CustomsValue value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getCustomsValue()
    {
        return $this->CustomsValue;
    }
    /**
     * Set CustomsValue value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $customsValue
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setCustomsValue(\NicholasCreativeMedia\FedExPHP\Structs\Money $customsValue = null)
    {
        $this->CustomsValue = $customsValue;
        return $this;
    }
    /**
     * Get ExciseConditions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\EdtExciseCondition[]|null
     */
    public function getExciseConditions()
    {
        return $this->ExciseConditions;
    }
    /**
     * Set ExciseConditions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EdtExciseCondition[] $exciseConditions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setExciseConditions(array $exciseConditions = array())
    {
        foreach ($exciseConditions as $commodityExciseConditionsItem) {
            // validation for constraint: itemType
            if (!$commodityExciseConditionsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\EdtExciseCondition) {
                throw new \InvalidArgumentException(sprintf('The ExciseConditions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\EdtExciseCondition, "%s" given', is_object($commodityExciseConditionsItem) ? get_class($commodityExciseConditionsItem) : gettype($commodityExciseConditionsItem)), __LINE__);
            }
        }
        $this->ExciseConditions = $exciseConditions;
        return $this;
    }
    /**
     * Add item to ExciseConditions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\EdtExciseCondition $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function addToExciseConditions(\NicholasCreativeMedia\FedExPHP\Structs\EdtExciseCondition $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\EdtExciseCondition) {
            throw new \InvalidArgumentException(sprintf('The ExciseConditions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\EdtExciseCondition, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExciseConditions[] = $item;
        return $this;
    }
    /**
     * Get ExportLicenseNumber value
     * @return string|null
     */
    public function getExportLicenseNumber()
    {
        return $this->ExportLicenseNumber;
    }
    /**
     * Set ExportLicenseNumber value
     * @param string $exportLicenseNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setExportLicenseNumber($exportLicenseNumber = null)
    {
        // validation for constraint: string
        if (!is_null($exportLicenseNumber) && !is_string($exportLicenseNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exportLicenseNumber)), __LINE__);
        }
        $this->ExportLicenseNumber = $exportLicenseNumber;
        return $this;
    }
    /**
     * Get ExportLicenseExpirationDate value
     * @return string|null
     */
    public function getExportLicenseExpirationDate()
    {
        return $this->ExportLicenseExpirationDate;
    }
    /**
     * Set ExportLicenseExpirationDate value
     * @param string $exportLicenseExpirationDate
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setExportLicenseExpirationDate($exportLicenseExpirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($exportLicenseExpirationDate) && !is_string($exportLicenseExpirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exportLicenseExpirationDate)), __LINE__);
        }
        $this->ExportLicenseExpirationDate = $exportLicenseExpirationDate;
        return $this;
    }
    /**
     * Get CIMarksAndNumbers value
     * @return string|null
     */
    public function getCIMarksAndNumbers()
    {
        return $this->CIMarksAndNumbers;
    }
    /**
     * Set CIMarksAndNumbers value
     * @param string $cIMarksAndNumbers
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setCIMarksAndNumbers($cIMarksAndNumbers = null)
    {
        // validation for constraint: string
        if (!is_null($cIMarksAndNumbers) && !is_string($cIMarksAndNumbers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cIMarksAndNumbers)), __LINE__);
        }
        $this->CIMarksAndNumbers = $cIMarksAndNumbers;
        return $this;
    }
    /**
     * Get PartNumber value
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->PartNumber;
    }
    /**
     * Set PartNumber value
     * @param string $partNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setPartNumber($partNumber = null)
    {
        // validation for constraint: string
        if (!is_null($partNumber) && !is_string($partNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partNumber)), __LINE__);
        }
        $this->PartNumber = $partNumber;
        return $this;
    }
    /**
     * Get NaftaDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NaftaCommodityDetail|null
     */
    public function getNaftaDetail()
    {
        return $this->NaftaDetail;
    }
    /**
     * Set NaftaDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\NaftaCommodityDetail $naftaDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
     */
    public function setNaftaDetail(\NicholasCreativeMedia\FedExPHP\Structs\NaftaCommodityDetail $naftaDetail = null)
    {
        $this->NaftaDetail = $naftaDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Commodity
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
