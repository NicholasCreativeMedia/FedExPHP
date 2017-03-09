<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomDocumentDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Data required to produce a custom-specified document, either at shipment or package level.
 * @subpackage Structs
 */
class CustomDocumentDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - documentation: Common information controlling document production.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The LabelPrintingOrientation
     * Meta informations extracted from the WSDL
     * - documentation: Applicable only to documents produced on thermal printers with roll stock.
     * - minOccurs: 0
     * @var string
     */
    public $LabelPrintingOrientation;
    /**
     * The LabelRotation
     * Meta informations extracted from the WSDL
     * - documentation: Applicable only to documents produced on thermal printers with roll stock.
     * - minOccurs: 0
     * @var string
     */
    public $LabelRotation;
    /**
     * The SpecificationId
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the formatting specification used to construct this custom document.
     * - minOccurs: 0
     * @var string
     */
    public $SpecificationId;
    /**
     * The CustomDocumentIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the individual document specified by the client.
     * - minOccurs: 0
     * @var string
     */
    public $CustomDocumentIdentifier;
    /**
     * The DocTabContent
     * Meta informations extracted from the WSDL
     * - documentation: If provided, thermal documents will include specified doc tab content. If omitted, document will be produced without doc tab content.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabContent
     */
    public $DocTabContent;
    /**
     * The CustomContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelDetail
     */
    public $CustomContent;
    /**
     * Constructor method for CustomDocumentDetail
     * @uses CustomDocumentDetail::setFormat()
     * @uses CustomDocumentDetail::setLabelPrintingOrientation()
     * @uses CustomDocumentDetail::setLabelRotation()
     * @uses CustomDocumentDetail::setSpecificationId()
     * @uses CustomDocumentDetail::setCustomDocumentIdentifier()
     * @uses CustomDocumentDetail::setDocTabContent()
     * @uses CustomDocumentDetail::setCustomContent()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat $format
     * @param string $labelPrintingOrientation
     * @param string $labelRotation
     * @param string $specificationId
     * @param string $customDocumentIdentifier
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabContent $docTabContent
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelDetail $customContent
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat $format = null, $labelPrintingOrientation = null, $labelRotation = null, $specificationId = null, $customDocumentIdentifier = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabContent $docTabContent = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelDetail $customContent = null)
    {
        $this
            ->setFormat($format)
            ->setLabelPrintingOrientation($labelPrintingOrientation)
            ->setLabelRotation($labelRotation)
            ->setSpecificationId($specificationId)
            ->setCustomDocumentIdentifier($customDocumentIdentifier)
            ->setDocTabContent($docTabContent)
            ->setCustomContent($customContent);
    }
    /**
     * Get Format value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat $format
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail
     */
    public function setFormat(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get LabelPrintingOrientation value
     * @return string|null
     */
    public function getLabelPrintingOrientation()
    {
        return $this->LabelPrintingOrientation;
    }
    /**
     * Set LabelPrintingOrientation value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\LabelPrintingOrientationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\LabelPrintingOrientationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $labelPrintingOrientation
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\LabelPrintingOrientationType::valueIsValid($labelPrintingOrientation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelPrintingOrientation, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\LabelPrintingOrientationType::getValidValues())), __LINE__);
        }
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    /**
     * Get LabelRotation value
     * @return string|null
     */
    public function getLabelRotation()
    {
        return $this->LabelRotation;
    }
    /**
     * Set LabelRotation value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\LabelRotationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\LabelRotationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $labelRotation
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail
     */
    public function setLabelRotation($labelRotation = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\LabelRotationType::valueIsValid($labelRotation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelRotation, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\LabelRotationType::getValidValues())), __LINE__);
        }
        $this->LabelRotation = $labelRotation;
        return $this;
    }
    /**
     * Get SpecificationId value
     * @return string|null
     */
    public function getSpecificationId()
    {
        return $this->SpecificationId;
    }
    /**
     * Set SpecificationId value
     * @param string $specificationId
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail
     */
    public function setSpecificationId($specificationId = null)
    {
        // validation for constraint: string
        if (!is_null($specificationId) && !is_string($specificationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specificationId)), __LINE__);
        }
        $this->SpecificationId = $specificationId;
        return $this;
    }
    /**
     * Get CustomDocumentIdentifier value
     * @return string|null
     */
    public function getCustomDocumentIdentifier()
    {
        return $this->CustomDocumentIdentifier;
    }
    /**
     * Set CustomDocumentIdentifier value
     * @param string $customDocumentIdentifier
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail
     */
    public function setCustomDocumentIdentifier($customDocumentIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($customDocumentIdentifier) && !is_string($customDocumentIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customDocumentIdentifier)), __LINE__);
        }
        $this->CustomDocumentIdentifier = $customDocumentIdentifier;
        return $this;
    }
    /**
     * Get DocTabContent value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabContent|null
     */
    public function getDocTabContent()
    {
        return $this->DocTabContent;
    }
    /**
     * Set DocTabContent value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabContent $docTabContent
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail
     */
    public function setDocTabContent(\NicholasCreativeMedia\FedExPHP\Ship\StructType\DocTabContent $docTabContent = null)
    {
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    /**
     * Get CustomContent value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelDetail|null
     */
    public function getCustomContent()
    {
        return $this->CustomContent;
    }
    /**
     * Set CustomContent value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelDetail $customContent
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail
     */
    public function setCustomContent(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelDetail $customContent = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail
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
