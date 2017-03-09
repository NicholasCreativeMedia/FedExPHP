<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLabelTextBoxEntry StructType
 * Meta informations extracted from the WSDL
 * - documentation: Constructed string, based on format and zero or more data fields, printed in specified printer font (for thermal labels) or generic font/size (for plain paper labels).
 * @subpackage Structs
 */
class CustomLabelTextBoxEntry extends AbstractStructBase
{
    /**
     * The TopLeftCorner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition
     */
    public $TopLeftCorner;
    /**
     * The BottomRightCorner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition
     */
    public $BottomRightCorner;
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition
     */
    public $Position;
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Format;
    /**
     * The DataFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DataFields;
    /**
     * The ThermalFontId
     * Meta informations extracted from the WSDL
     * - documentation: Printer-specific font name for use with thermal printer labels.
     * - minOccurs: 0
     * @var string
     */
    public $ThermalFontId;
    /**
     * The FontName
     * Meta informations extracted from the WSDL
     * - documentation: Generic font name for use with plain paper labels.
     * - minOccurs: 0
     * @var string
     */
    public $FontName;
    /**
     * The FontSize
     * Meta informations extracted from the WSDL
     * - documentation: Generic font size for use with plain paper labels.
     * - minOccurs: 0
     * @var int
     */
    public $FontSize;
    /**
     * The Rotation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Rotation;
    /**
     * Constructor method for CustomLabelTextBoxEntry
     * @uses CustomLabelTextBoxEntry::setTopLeftCorner()
     * @uses CustomLabelTextBoxEntry::setBottomRightCorner()
     * @uses CustomLabelTextBoxEntry::setPosition()
     * @uses CustomLabelTextBoxEntry::setFormat()
     * @uses CustomLabelTextBoxEntry::setDataFields()
     * @uses CustomLabelTextBoxEntry::setThermalFontId()
     * @uses CustomLabelTextBoxEntry::setFontName()
     * @uses CustomLabelTextBoxEntry::setFontSize()
     * @uses CustomLabelTextBoxEntry::setRotation()
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $topLeftCorner
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $bottomRightCorner
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $position
     * @param string $format
     * @param string[] $dataFields
     * @param string $thermalFontId
     * @param string $fontName
     * @param int $fontSize
     * @param string $rotation
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $topLeftCorner = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $bottomRightCorner = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $position = null, $format = null, array $dataFields = array(), $thermalFontId = null, $fontName = null, $fontSize = null, $rotation = null)
    {
        $this
            ->setTopLeftCorner($topLeftCorner)
            ->setBottomRightCorner($bottomRightCorner)
            ->setPosition($position)
            ->setFormat($format)
            ->setDataFields($dataFields)
            ->setThermalFontId($thermalFontId)
            ->setFontName($fontName)
            ->setFontSize($fontSize)
            ->setRotation($rotation);
    }
    /**
     * Get TopLeftCorner value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition|null
     */
    public function getTopLeftCorner()
    {
        return $this->TopLeftCorner;
    }
    /**
     * Set TopLeftCorner value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $topLeftCorner
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelTextBoxEntry
     */
    public function setTopLeftCorner(\NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $topLeftCorner = null)
    {
        $this->TopLeftCorner = $topLeftCorner;
        return $this;
    }
    /**
     * Get BottomRightCorner value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition|null
     */
    public function getBottomRightCorner()
    {
        return $this->BottomRightCorner;
    }
    /**
     * Set BottomRightCorner value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $bottomRightCorner
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelTextBoxEntry
     */
    public function setBottomRightCorner(\NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $bottomRightCorner = null)
    {
        $this->BottomRightCorner = $bottomRightCorner;
        return $this;
    }
    /**
     * Get Position value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $position
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelTextBoxEntry
     */
    public function setPosition(\NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get Format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param string $format
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelTextBoxEntry
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($format)), __LINE__);
        }
        $this->Format = $format;
        return $this;
    }
    /**
     * Get DataFields value
     * @return string[]|null
     */
    public function getDataFields()
    {
        return $this->DataFields;
    }
    /**
     * Set DataFields value
     * @throws \InvalidArgumentException
     * @param string[] $dataFields
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelTextBoxEntry
     */
    public function setDataFields(array $dataFields = array())
    {
        foreach ($dataFields as $customLabelTextBoxEntryDataFieldsItem) {
            // validation for constraint: itemType
            if (!is_string($customLabelTextBoxEntryDataFieldsItem)) {
                throw new \InvalidArgumentException(sprintf('The DataFields property can only contain items of string, "%s" given', is_object($customLabelTextBoxEntryDataFieldsItem) ? get_class($customLabelTextBoxEntryDataFieldsItem) : gettype($customLabelTextBoxEntryDataFieldsItem)), __LINE__);
            }
        }
        $this->DataFields = $dataFields;
        return $this;
    }
    /**
     * Add item to DataFields value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelTextBoxEntry
     */
    public function addToDataFields($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The DataFields property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DataFields[] = $item;
        return $this;
    }
    /**
     * Get ThermalFontId value
     * @return string|null
     */
    public function getThermalFontId()
    {
        return $this->ThermalFontId;
    }
    /**
     * Set ThermalFontId value
     * @param string $thermalFontId
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelTextBoxEntry
     */
    public function setThermalFontId($thermalFontId = null)
    {
        // validation for constraint: string
        if (!is_null($thermalFontId) && !is_string($thermalFontId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($thermalFontId)), __LINE__);
        }
        $this->ThermalFontId = $thermalFontId;
        return $this;
    }
    /**
     * Get FontName value
     * @return string|null
     */
    public function getFontName()
    {
        return $this->FontName;
    }
    /**
     * Set FontName value
     * @param string $fontName
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelTextBoxEntry
     */
    public function setFontName($fontName = null)
    {
        // validation for constraint: string
        if (!is_null($fontName) && !is_string($fontName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fontName)), __LINE__);
        }
        $this->FontName = $fontName;
        return $this;
    }
    /**
     * Get FontSize value
     * @return int|null
     */
    public function getFontSize()
    {
        return $this->FontSize;
    }
    /**
     * Set FontSize value
     * @param int $fontSize
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelTextBoxEntry
     */
    public function setFontSize($fontSize = null)
    {
        // validation for constraint: int
        if (!is_null($fontSize) && !is_numeric($fontSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fontSize)), __LINE__);
        }
        $this->FontSize = $fontSize;
        return $this;
    }
    /**
     * Get Rotation value
     * @return string|null
     */
    public function getRotation()
    {
        return $this->Rotation;
    }
    /**
     * Set Rotation value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\RotationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\RotationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $rotation
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelTextBoxEntry
     */
    public function setRotation($rotation = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\RotationType::valueIsValid($rotation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $rotation, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\RotationType::getValidValues())), __LINE__);
        }
        $this->Rotation = $rotation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelTextBoxEntry
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
