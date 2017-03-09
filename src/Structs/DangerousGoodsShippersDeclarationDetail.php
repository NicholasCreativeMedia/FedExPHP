<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DangerousGoodsShippersDeclarationDetail Structs
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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The CustomerImageUsages
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the usage and identification of customer supplied images to be used on this document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage[]
     */
    public $CustomerImageUsages;
    /**
     * Constructor method for DangerousGoodsShippersDeclarationDetail
     * @uses DangerousGoodsShippersDeclarationDetail::setFormat()
     * @uses DangerousGoodsShippersDeclarationDetail::setCustomerImageUsages()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat $format
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage[] $customerImageUsages
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat $format = null, array $customerImageUsages = array())
    {
        $this
            ->setFormat($format)
            ->setCustomerImageUsages($customerImageUsages);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsShippersDeclarationDetail
     */
    public function setFormat(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get CustomerImageUsages value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage[]|null
     */
    public function getCustomerImageUsages()
    {
        return $this->CustomerImageUsages;
    }
    /**
     * Set CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage[] $customerImageUsages
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsShippersDeclarationDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages = array())
    {
        foreach ($customerImageUsages as $dangerousGoodsShippersDeclarationDetailCustomerImageUsagesItem) {
            // validation for constraint: itemType
            if (!$dangerousGoodsShippersDeclarationDetailCustomerImageUsagesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage) {
                throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage, "%s" given', is_object($dangerousGoodsShippersDeclarationDetailCustomerImageUsagesItem) ? get_class($dangerousGoodsShippersDeclarationDetailCustomerImageUsagesItem) : gettype($dangerousGoodsShippersDeclarationDetailCustomerImageUsagesItem)), __LINE__);
            }
        }
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Add item to CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsShippersDeclarationDetail
     */
    public function addToCustomerImageUsages(\NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage) {
            throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\CustomerImageUsage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsShippersDeclarationDetail
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
