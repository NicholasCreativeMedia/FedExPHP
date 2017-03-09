<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelSpecification Structs
 * @subpackage Structs
 */
class LabelSpecification extends AbstractStructBase
{
    /**
     * The LabelFormatType
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $LabelFormatType;
    /**
     * The Dispositions
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how to create, organize, and return the document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentDispositionDetail[]
     */
    public $Dispositions;
    /**
     * The ImageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ImageType;
    /**
     * The LabelStockType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LabelStockType;
    /**
     * The LabelPrintingOrientation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LabelPrintingOrientation;
    /**
     * The LabelOrder
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the order in which the labels are requested to be returned
     * - minOccurs: 0
     * @var string
     */
    public $LabelOrder;
    /**
     * The PrintedLabelOrigin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress
     */
    public $PrintedLabelOrigin;
    /**
     * The CustomerSpecifiedDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomerSpecifiedLabelDetail
     */
    public $CustomerSpecifiedDetail;
    /**
     * Constructor method for LabelSpecification
     * @uses LabelSpecification::setLabelFormatType()
     * @uses LabelSpecification::setDispositions()
     * @uses LabelSpecification::setImageType()
     * @uses LabelSpecification::setLabelStockType()
     * @uses LabelSpecification::setLabelPrintingOrientation()
     * @uses LabelSpecification::setLabelOrder()
     * @uses LabelSpecification::setPrintedLabelOrigin()
     * @uses LabelSpecification::setCustomerSpecifiedDetail()
     * @param string $labelFormatType
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentDispositionDetail[] $dispositions
     * @param string $imageType
     * @param string $labelStockType
     * @param string $labelPrintingOrientation
     * @param string $labelOrder
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $printedLabelOrigin
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerSpecifiedLabelDetail $customerSpecifiedDetail
     */
    public function __construct($labelFormatType = null, array $dispositions = array(), $imageType = null, $labelStockType = null, $labelPrintingOrientation = null, $labelOrder = null, \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $printedLabelOrigin = null, \NicholasCreativeMedia\FedExPHP\Structs\CustomerSpecifiedLabelDetail $customerSpecifiedDetail = null)
    {
        $this
            ->setLabelFormatType($labelFormatType)
            ->setDispositions($dispositions)
            ->setImageType($imageType)
            ->setLabelStockType($labelStockType)
            ->setLabelPrintingOrientation($labelPrintingOrientation)
            ->setLabelOrder($labelOrder)
            ->setPrintedLabelOrigin($printedLabelOrigin)
            ->setCustomerSpecifiedDetail($customerSpecifiedDetail);
    }
    /**
     * Get LabelFormatType value
     * @return string
     */
    public function getLabelFormatType()
    {
        return $this->LabelFormatType;
    }
    /**
     * Set LabelFormatType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LabelFormatType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LabelFormatType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $labelFormatType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification
     */
    public function setLabelFormatType($labelFormatType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\LabelFormatType::valueIsValid($labelFormatType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelFormatType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LabelFormatType::getValidValues())), __LINE__);
        }
        $this->LabelFormatType = $labelFormatType;
        return $this;
    }
    /**
     * Get Dispositions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentDispositionDetail[]|null
     */
    public function getDispositions()
    {
        return $this->Dispositions;
    }
    /**
     * Set Dispositions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentDispositionDetail[] $dispositions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification
     */
    public function setDispositions(array $dispositions = array())
    {
        foreach ($dispositions as $labelSpecificationDispositionsItem) {
            // validation for constraint: itemType
            if (!$labelSpecificationDispositionsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentDispositionDetail) {
                throw new \InvalidArgumentException(sprintf('The Dispositions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentDispositionDetail, "%s" given', is_object($labelSpecificationDispositionsItem) ? get_class($labelSpecificationDispositionsItem) : gettype($labelSpecificationDispositionsItem)), __LINE__);
            }
        }
        $this->Dispositions = $dispositions;
        return $this;
    }
    /**
     * Add item to Dispositions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentDispositionDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification
     */
    public function addToDispositions(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentDispositionDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentDispositionDetail) {
            throw new \InvalidArgumentException(sprintf('The Dispositions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentDispositionDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Dispositions[] = $item;
        return $this;
    }
    /**
     * Get ImageType value
     * @return string|null
     */
    public function getImageType()
    {
        return $this->ImageType;
    }
    /**
     * Set ImageType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentImageType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentImageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $imageType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification
     */
    public function setImageType($imageType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentImageType::valueIsValid($imageType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $imageType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentImageType::getValidValues())), __LINE__);
        }
        $this->ImageType = $imageType;
        return $this;
    }
    /**
     * Get LabelStockType value
     * @return string|null
     */
    public function getLabelStockType()
    {
        return $this->LabelStockType;
    }
    /**
     * Set LabelStockType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LabelStockType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LabelStockType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $labelStockType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification
     */
    public function setLabelStockType($labelStockType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\LabelStockType::valueIsValid($labelStockType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelStockType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LabelStockType::getValidValues())), __LINE__);
        }
        $this->LabelStockType = $labelStockType;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LabelPrintingOrientationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LabelPrintingOrientationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $labelPrintingOrientation
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\LabelPrintingOrientationType::valueIsValid($labelPrintingOrientation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelPrintingOrientation, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LabelPrintingOrientationType::getValidValues())), __LINE__);
        }
        $this->LabelPrintingOrientation = $labelPrintingOrientation;
        return $this;
    }
    /**
     * Get LabelOrder value
     * @return string|null
     */
    public function getLabelOrder()
    {
        return $this->LabelOrder;
    }
    /**
     * Set LabelOrder value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LabelOrderType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LabelOrderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $labelOrder
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification
     */
    public function setLabelOrder($labelOrder = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\LabelOrderType::valueIsValid($labelOrder)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelOrder, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LabelOrderType::getValidValues())), __LINE__);
        }
        $this->LabelOrder = $labelOrder;
        return $this;
    }
    /**
     * Get PrintedLabelOrigin value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress|null
     */
    public function getPrintedLabelOrigin()
    {
        return $this->PrintedLabelOrigin;
    }
    /**
     * Set PrintedLabelOrigin value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $printedLabelOrigin
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification
     */
    public function setPrintedLabelOrigin(\NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $printedLabelOrigin = null)
    {
        $this->PrintedLabelOrigin = $printedLabelOrigin;
        return $this;
    }
    /**
     * Get CustomerSpecifiedDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomerSpecifiedLabelDetail|null
     */
    public function getCustomerSpecifiedDetail()
    {
        return $this->CustomerSpecifiedDetail;
    }
    /**
     * Set CustomerSpecifiedDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerSpecifiedLabelDetail $customerSpecifiedDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification
     */
    public function setCustomerSpecifiedDetail(\NicholasCreativeMedia\FedExPHP\Structs\CustomerSpecifiedLabelDetail $customerSpecifiedDetail = null)
    {
        $this->CustomerSpecifiedDetail = $customerSpecifiedDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LabelSpecification
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
