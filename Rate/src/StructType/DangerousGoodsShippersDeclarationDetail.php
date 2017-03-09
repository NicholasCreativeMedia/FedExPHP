<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DangerousGoodsShippersDeclarationDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: The instructions indicating how to print the 1421c form for dangerous goods shipment.
 * @subpackage Structs
 */
class DangerousGoodsShippersDeclarationDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - documentation: Specifies characteristics of a shipping document to be produced.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat
     */
    public $Format;
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
     * Constructor method for DangerousGoodsShippersDeclarationDetail
     * @uses DangerousGoodsShippersDeclarationDetail::setFormat()
     * @uses DangerousGoodsShippersDeclarationDetail::setCustomerImageUsages()
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat $format
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage[] $customerImageUsages
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat $format = null, array $customerImageUsages = array())
    {
        $this
            ->setFormat($format)
            ->setCustomerImageUsages($customerImageUsages);
    }
    /**
     * Get Format value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat $format
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsShippersDeclarationDetail
     */
    public function setFormat(\NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
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
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsShippersDeclarationDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages = array())
    {
        foreach ($customerImageUsages as $dangerousGoodsShippersDeclarationDetailCustomerImageUsagesItem) {
            // validation for constraint: itemType
            if (!$dangerousGoodsShippersDeclarationDetailCustomerImageUsagesItem instanceof \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage) {
                throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage, "%s" given', is_object($dangerousGoodsShippersDeclarationDetailCustomerImageUsagesItem) ? get_class($dangerousGoodsShippersDeclarationDetailCustomerImageUsagesItem) : gettype($dangerousGoodsShippersDeclarationDetailCustomerImageUsagesItem)), __LINE__);
            }
        }
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Add item to CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage $item
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsShippersDeclarationDetail
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
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DangerousGoodsShippersDeclarationDetail
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
