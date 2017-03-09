<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Commodity StructType
 * @subpackage Structs
 */
class Commodity extends AbstractStructBase
{
    /**
     * The NumberOfPieces
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var int
     */
    public $NumberOfPieces;
    /**
     * The CountryOfManufacture
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $CountryOfManufacture;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight
     */
    public $Weight;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
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
     * The HarmonizedCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HarmonizedCode;
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
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Measure[]
     */
    public $AdditionalMeasures;
    /**
     * The UnitPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $UnitPrice;
    /**
     * The CustomsValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $CustomsValue;
    /**
     * The ExciseConditions
     * Meta informations extracted from the WSDL
     * - documentation: Defines additional characteristic of commodity used to calculate duties and taxes
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtExciseCondition[]
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
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\NaftaCommodityDetail
     */
    public $NaftaDetail;
    /**
     * Constructor method for Commodity
     * @uses Commodity::setNumberOfPieces()
     * @uses Commodity::setCountryOfManufacture()
     * @uses Commodity::setWeight()
     * @uses Commodity::setName()
     * @uses Commodity::setDescription()
     * @uses Commodity::setPurpose()
     * @uses Commodity::setHarmonizedCode()
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
     * @param int $numberOfPieces
     * @param string $countryOfManufacture
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $weight
     * @param string $name
     * @param string $description
     * @param string $purpose
     * @param string $harmonizedCode
     * @param float $quantity
     * @param string $quantityUnits
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Measure[] $additionalMeasures
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $unitPrice
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $customsValue
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtExciseCondition[] $exciseConditions
     * @param string $exportLicenseNumber
     * @param string $exportLicenseExpirationDate
     * @param string $cIMarksAndNumbers
     * @param string $partNumber
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\NaftaCommodityDetail $naftaDetail
     */
    public function __construct($numberOfPieces = null, $countryOfManufacture = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $weight = null, $name = null, $description = null, $purpose = null, $harmonizedCode = null, $quantity = null, $quantityUnits = null, array $additionalMeasures = array(), \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $unitPrice = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $customsValue = null, array $exciseConditions = array(), $exportLicenseNumber = null, $exportLicenseExpirationDate = null, $cIMarksAndNumbers = null, $partNumber = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\NaftaCommodityDetail $naftaDetail = null)
    {
        $this
            ->setNumberOfPieces($numberOfPieces)
            ->setCountryOfManufacture($countryOfManufacture)
            ->setWeight($weight)
            ->setName($name)
            ->setDescription($description)
            ->setPurpose($purpose)
            ->setHarmonizedCode($harmonizedCode)
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
     * Get NumberOfPieces value
     * @return int
     */
    public function getNumberOfPieces()
    {
        return $this->NumberOfPieces;
    }
    /**
     * Set NumberOfPieces value
     * @param int $numberOfPieces
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
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
     * Get CountryOfManufacture value
     * @return string
     */
    public function getCountryOfManufacture()
    {
        return $this->CountryOfManufacture;
    }
    /**
     * Set CountryOfManufacture value
     * @param string $countryOfManufacture
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
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
     * Get Weight value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $weight
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
     */
    public function setWeight(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $weight = null)
    {
        $this->Weight = $weight;
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
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
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\CommodityPurposeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\CommodityPurposeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $purpose
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
     */
    public function setPurpose($purpose = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\CommodityPurposeType::valueIsValid($purpose)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $purpose, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\CommodityPurposeType::getValidValues())), __LINE__);
        }
        $this->Purpose = $purpose;
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Measure[]|null
     */
    public function getAdditionalMeasures()
    {
        return $this->AdditionalMeasures;
    }
    /**
     * Set AdditionalMeasures value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Measure[] $additionalMeasures
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
     */
    public function setAdditionalMeasures(array $additionalMeasures = array())
    {
        foreach ($additionalMeasures as $commodityAdditionalMeasuresItem) {
            // validation for constraint: itemType
            if (!$commodityAdditionalMeasuresItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\Measure) {
                throw new \InvalidArgumentException(sprintf('The AdditionalMeasures property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\Measure, "%s" given', is_object($commodityAdditionalMeasuresItem) ? get_class($commodityAdditionalMeasuresItem) : gettype($commodityAdditionalMeasuresItem)), __LINE__);
            }
        }
        $this->AdditionalMeasures = $additionalMeasures;
        return $this;
    }
    /**
     * Add item to AdditionalMeasures value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Measure $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
     */
    public function addToAdditionalMeasures(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Measure $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\Measure) {
            throw new \InvalidArgumentException(sprintf('The AdditionalMeasures property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\Measure, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalMeasures[] = $item;
        return $this;
    }
    /**
     * Get UnitPrice value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }
    /**
     * Set UnitPrice value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $unitPrice
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
     */
    public function setUnitPrice(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $unitPrice = null)
    {
        $this->UnitPrice = $unitPrice;
        return $this;
    }
    /**
     * Get CustomsValue value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getCustomsValue()
    {
        return $this->CustomsValue;
    }
    /**
     * Set CustomsValue value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $customsValue
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
     */
    public function setCustomsValue(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $customsValue = null)
    {
        $this->CustomsValue = $customsValue;
        return $this;
    }
    /**
     * Get ExciseConditions value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtExciseCondition[]|null
     */
    public function getExciseConditions()
    {
        return $this->ExciseConditions;
    }
    /**
     * Set ExciseConditions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtExciseCondition[] $exciseConditions
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
     */
    public function setExciseConditions(array $exciseConditions = array())
    {
        foreach ($exciseConditions as $commodityExciseConditionsItem) {
            // validation for constraint: itemType
            if (!$commodityExciseConditionsItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtExciseCondition) {
                throw new \InvalidArgumentException(sprintf('The ExciseConditions property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtExciseCondition, "%s" given', is_object($commodityExciseConditionsItem) ? get_class($commodityExciseConditionsItem) : gettype($commodityExciseConditionsItem)), __LINE__);
            }
        }
        $this->ExciseConditions = $exciseConditions;
        return $this;
    }
    /**
     * Add item to ExciseConditions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtExciseCondition $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
     */
    public function addToExciseConditions(\NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtExciseCondition $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtExciseCondition) {
            throw new \InvalidArgumentException(sprintf('The ExciseConditions property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\EdtExciseCondition, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\NaftaCommodityDetail|null
     */
    public function getNaftaDetail()
    {
        return $this->NaftaDetail;
    }
    /**
     * Set NaftaDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\NaftaCommodityDetail $naftaDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
     */
    public function setNaftaDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\NaftaCommodityDetail $naftaDetail = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity
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
