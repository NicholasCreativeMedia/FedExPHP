<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentFormat Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies characteristics of a shipping document to be produced.
 * @subpackage Structs
 */
class ShippingDocumentFormat extends AbstractStructBase
{
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
     * The TopOfPageOffset
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how far down the page to move the beginning of the image; allows for printing on letterhead and other pre-printed stock.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure
     */
    public $TopOfPageOffset;
    /**
     * The ImageType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ImageType;
    /**
     * The StockType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StockType;
    /**
     * The ProvideInstructions
     * Meta informations extracted from the WSDL
     * - documentation: For those shipping document types which have both a "form" and "instructions" component (e.g. NAFTA Certificate of Origin and General Agency Agreement), this field indicates whether to provide the instructions.
     * - minOccurs: 0
     * @var bool
     */
    public $ProvideInstructions;
    /**
     * The OptionsRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DocumentFormatOptionsRequested
     */
    public $OptionsRequested;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Governs the language to be used for this individual document, independently from other content returned for the same shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Localization
     */
    public $Localization;
    /**
     * The CustomDocumentIdentifier
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the individual document specified by the client.
     * - minOccurs: 0
     * @var string
     */
    public $CustomDocumentIdentifier;
    /**
     * Constructor method for ShippingDocumentFormat
     * @uses ShippingDocumentFormat::setDispositions()
     * @uses ShippingDocumentFormat::setTopOfPageOffset()
     * @uses ShippingDocumentFormat::setImageType()
     * @uses ShippingDocumentFormat::setStockType()
     * @uses ShippingDocumentFormat::setProvideInstructions()
     * @uses ShippingDocumentFormat::setOptionsRequested()
     * @uses ShippingDocumentFormat::setLocalization()
     * @uses ShippingDocumentFormat::setCustomDocumentIdentifier()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentDispositionDetail[] $dispositions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure $topOfPageOffset
     * @param string $imageType
     * @param string $stockType
     * @param bool $provideInstructions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DocumentFormatOptionsRequested $optionsRequested
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Localization $localization
     * @param string $customDocumentIdentifier
     */
    public function __construct(array $dispositions = array(), \NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure $topOfPageOffset = null, $imageType = null, $stockType = null, $provideInstructions = null, \NicholasCreativeMedia\FedExPHP\Structs\DocumentFormatOptionsRequested $optionsRequested = null, \NicholasCreativeMedia\FedExPHP\Structs\Localization $localization = null, $customDocumentIdentifier = null)
    {
        $this
            ->setDispositions($dispositions)
            ->setTopOfPageOffset($topOfPageOffset)
            ->setImageType($imageType)
            ->setStockType($stockType)
            ->setProvideInstructions($provideInstructions)
            ->setOptionsRequested($optionsRequested)
            ->setLocalization($localization)
            ->setCustomDocumentIdentifier($customDocumentIdentifier);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat
     */
    public function setDispositions(array $dispositions = array())
    {
        foreach ($dispositions as $shippingDocumentFormatDispositionsItem) {
            // validation for constraint: itemType
            if (!$shippingDocumentFormatDispositionsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentDispositionDetail) {
                throw new \InvalidArgumentException(sprintf('The Dispositions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentDispositionDetail, "%s" given', is_object($shippingDocumentFormatDispositionsItem) ? get_class($shippingDocumentFormatDispositionsItem) : gettype($shippingDocumentFormatDispositionsItem)), __LINE__);
            }
        }
        $this->Dispositions = $dispositions;
        return $this;
    }
    /**
     * Add item to Dispositions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentDispositionDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat
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
     * Get TopOfPageOffset value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure|null
     */
    public function getTopOfPageOffset()
    {
        return $this->TopOfPageOffset;
    }
    /**
     * Set TopOfPageOffset value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure $topOfPageOffset
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat
     */
    public function setTopOfPageOffset(\NicholasCreativeMedia\FedExPHP\Structs\LinearMeasure $topOfPageOffset = null)
    {
        $this->TopOfPageOffset = $topOfPageOffset;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat
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
     * Get StockType value
     * @return string|null
     */
    public function getStockType()
    {
        return $this->StockType;
    }
    /**
     * Set StockType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentStockType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentStockType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $stockType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat
     */
    public function setStockType($stockType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentStockType::valueIsValid($stockType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $stockType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ShippingDocumentStockType::getValidValues())), __LINE__);
        }
        $this->StockType = $stockType;
        return $this;
    }
    /**
     * Get ProvideInstructions value
     * @return bool|null
     */
    public function getProvideInstructions()
    {
        return $this->ProvideInstructions;
    }
    /**
     * Set ProvideInstructions value
     * @param bool $provideInstructions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat
     */
    public function setProvideInstructions($provideInstructions = null)
    {
        $this->ProvideInstructions = $provideInstructions;
        return $this;
    }
    /**
     * Get OptionsRequested value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DocumentFormatOptionsRequested|null
     */
    public function getOptionsRequested()
    {
        return $this->OptionsRequested;
    }
    /**
     * Set OptionsRequested value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DocumentFormatOptionsRequested $optionsRequested
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat
     */
    public function setOptionsRequested(\NicholasCreativeMedia\FedExPHP\Structs\DocumentFormatOptionsRequested $optionsRequested = null)
    {
        $this->OptionsRequested = $optionsRequested;
        return $this;
    }
    /**
     * Get Localization value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Localization $localization
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat
     */
    public function setLocalization(\NicholasCreativeMedia\FedExPHP\Structs\Localization $localization = null)
    {
        $this->Localization = $localization;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat
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
