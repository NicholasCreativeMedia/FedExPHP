<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportDeclarationDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: The instructions indicating how to print the Export Declaration.
 * @subpackage Structs
 */
class ExportDeclarationDetail extends AbstractStructBase
{
    /**
     * The DocumentFormat
     * Meta informations extracted from the WSDL
     * - documentation: Specifies characteristics of a shipping document to be produced.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat
     */
    public $DocumentFormat;
    /**
     * The CustomerImageUsages
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the usage and identification of customer supplied images to be used on this document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage[]
     */
    public $CustomerImageUsages;
    /**
     * Constructor method for ExportDeclarationDetail
     * @uses ExportDeclarationDetail::setDocumentFormat()
     * @uses ExportDeclarationDetail::setCustomerImageUsages()
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat $documentFormat
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage[] $customerImageUsages
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat $documentFormat = null, array $customerImageUsages = array())
    {
        $this
            ->setDocumentFormat($documentFormat)
            ->setCustomerImageUsages($customerImageUsages);
    }
    /**
     * Get DocumentFormat value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat|null
     */
    public function getDocumentFormat()
    {
        return $this->DocumentFormat;
    }
    /**
     * Set DocumentFormat value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat $documentFormat
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ExportDeclarationDetail
     */
    public function setDocumentFormat(\NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat $documentFormat = null)
    {
        $this->DocumentFormat = $documentFormat;
        return $this;
    }
    /**
     * Get CustomerImageUsages value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage[]|null
     */
    public function getCustomerImageUsages()
    {
        return $this->CustomerImageUsages;
    }
    /**
     * Set CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage[] $customerImageUsages
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ExportDeclarationDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages = array())
    {
        foreach ($customerImageUsages as $exportDeclarationDetailCustomerImageUsagesItem) {
            // validation for constraint: itemType
            if (!$exportDeclarationDetailCustomerImageUsagesItem instanceof \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage) {
                throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage, "%s" given', is_object($exportDeclarationDetailCustomerImageUsagesItem) ? get_class($exportDeclarationDetailCustomerImageUsagesItem) : gettype($exportDeclarationDetailCustomerImageUsagesItem)), __LINE__);
            }
        }
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Add item to CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage $item
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ExportDeclarationDetail
     */
    public function addToCustomerImageUsages(\NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage) {
            throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomerImageUsages[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ExportDeclarationDetail
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
