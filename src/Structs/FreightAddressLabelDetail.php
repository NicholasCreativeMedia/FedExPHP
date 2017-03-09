<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightAddressLabelDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Data required to produce the Freight handling-unit-level address labels. Note that the number of UNIQUE labels (the N as in 1 of N, 2 of N, etc.) is determined by total handling units.
 * @subpackage Structs
 */
class FreightAddressLabelDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The Copies
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of copies to be produced for each unique label.
     * - minOccurs: 0
     * @var int
     */
    public $Copies;
    /**
     * The StartingPosition
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the quadrant of the page on which the label printing will start.
     * - minOccurs: 0
     * @var string
     */
    public $StartingPosition;
    /**
     * The DocTabContent
     * Meta informations extracted from the WSDL
     * - documentation: If omitted, no doc tab will be produced (i.e. default = former NONE type).
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DocTabContent
     */
    public $DocTabContent;
    /**
     * The CustomContentPosition
     * Meta informations extracted from the WSDL
     * - documentation: Controls the position of the customer specified content relative to the FedEx portion.
     * - minOccurs: 0
     * @var string
     */
    public $CustomContentPosition;
    /**
     * The CustomContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomLabelDetail
     */
    public $CustomContent;
    /**
     * Constructor method for FreightAddressLabelDetail
     * @uses FreightAddressLabelDetail::setFormat()
     * @uses FreightAddressLabelDetail::setCopies()
     * @uses FreightAddressLabelDetail::setStartingPosition()
     * @uses FreightAddressLabelDetail::setDocTabContent()
     * @uses FreightAddressLabelDetail::setCustomContentPosition()
     * @uses FreightAddressLabelDetail::setCustomContent()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat $format
     * @param int $copies
     * @param string $startingPosition
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DocTabContent $docTabContent
     * @param string $customContentPosition
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomLabelDetail $customContent
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat $format = null, $copies = null, $startingPosition = null, \NicholasCreativeMedia\FedExPHP\Structs\DocTabContent $docTabContent = null, $customContentPosition = null, \NicholasCreativeMedia\FedExPHP\Structs\CustomLabelDetail $customContent = null)
    {
        $this
            ->setFormat($format)
            ->setCopies($copies)
            ->setStartingPosition($startingPosition)
            ->setDocTabContent($docTabContent)
            ->setCustomContentPosition($customContentPosition)
            ->setCustomContent($customContent);
    }
    /**
     * Get Format value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat $format
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightAddressLabelDetail
     */
    public function setFormat(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get Copies value
     * @return int|null
     */
    public function getCopies()
    {
        return $this->Copies;
    }
    /**
     * Set Copies value
     * @param int $copies
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightAddressLabelDetail
     */
    public function setCopies($copies = null)
    {
        // validation for constraint: int
        if (!is_null($copies) && !is_numeric($copies)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($copies)), __LINE__);
        }
        $this->Copies = $copies;
        return $this;
    }
    /**
     * Get StartingPosition value
     * @return string|null
     */
    public function getStartingPosition()
    {
        return $this->StartingPosition;
    }
    /**
     * Set StartingPosition value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PageQuadrantType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PageQuadrantType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $startingPosition
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightAddressLabelDetail
     */
    public function setStartingPosition($startingPosition = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PageQuadrantType::valueIsValid($startingPosition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $startingPosition, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PageQuadrantType::getValidValues())), __LINE__);
        }
        $this->StartingPosition = $startingPosition;
        return $this;
    }
    /**
     * Get DocTabContent value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DocTabContent|null
     */
    public function getDocTabContent()
    {
        return $this->DocTabContent;
    }
    /**
     * Set DocTabContent value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DocTabContent $docTabContent
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightAddressLabelDetail
     */
    public function setDocTabContent(\NicholasCreativeMedia\FedExPHP\Structs\DocTabContent $docTabContent = null)
    {
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    /**
     * Get CustomContentPosition value
     * @return string|null
     */
    public function getCustomContentPosition()
    {
        return $this->CustomContentPosition;
    }
    /**
     * Set CustomContentPosition value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RelativeVerticalPositionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RelativeVerticalPositionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $customContentPosition
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightAddressLabelDetail
     */
    public function setCustomContentPosition($customContentPosition = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\RelativeVerticalPositionType::valueIsValid($customContentPosition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $customContentPosition, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RelativeVerticalPositionType::getValidValues())), __LINE__);
        }
        $this->CustomContentPosition = $customContentPosition;
        return $this;
    }
    /**
     * Get CustomContent value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomLabelDetail|null
     */
    public function getCustomContent()
    {
        return $this->CustomContent;
    }
    /**
     * Set CustomContent value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomLabelDetail $customContent
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightAddressLabelDetail
     */
    public function setCustomContent(\NicholasCreativeMedia\FedExPHP\Structs\CustomLabelDetail $customContent = null)
    {
        $this->CustomContent = $customContent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightAddressLabelDetail
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
