<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentDispositionDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Each occurrence of this class specifies a particular way in which a kind of shipping document is to be produced and provided.
 * @subpackage Structs
 */
class ShippingDocumentDispositionDetail extends AbstractStructBase
{
    /**
     * The DispositionType
     * Meta informations extracted from the WSDL
     * - documentation: Values in this field specify how to create and return the document.
     * - minOccurs: 0
     * @var string
     */
    public $DispositionType;
    /**
     * The Grouping
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how to organize all documents of this type.
     * - minOccurs: 0
     * @var string
     */
    public $Grouping;
    /**
     * The EMailDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how to e-mail document images.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentEMailDetail
     */
    public $EMailDetail;
    /**
     * The PrintDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how a queued document is to be printed.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentPrintDetail
     */
    public $PrintDetail;
    /**
     * Constructor method for ShippingDocumentDispositionDetail
     * @uses ShippingDocumentDispositionDetail::setDispositionType()
     * @uses ShippingDocumentDispositionDetail::setGrouping()
     * @uses ShippingDocumentDispositionDetail::setEMailDetail()
     * @uses ShippingDocumentDispositionDetail::setPrintDetail()
     * @param string $dispositionType
     * @param string $grouping
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentEMailDetail $eMailDetail
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentPrintDetail $printDetail
     */
    public function __construct($dispositionType = null, $grouping = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentEMailDetail $eMailDetail = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentPrintDetail $printDetail = null)
    {
        $this
            ->setDispositionType($dispositionType)
            ->setGrouping($grouping)
            ->setEMailDetail($eMailDetail)
            ->setPrintDetail($printDetail);
    }
    /**
     * Get DispositionType value
     * @return string|null
     */
    public function getDispositionType()
    {
        return $this->DispositionType;
    }
    /**
     * Set DispositionType value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\ShippingDocumentDispositionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\ShippingDocumentDispositionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dispositionType
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentDispositionDetail
     */
    public function setDispositionType($dispositionType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\ShippingDocumentDispositionType::valueIsValid($dispositionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dispositionType, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\ShippingDocumentDispositionType::getValidValues())), __LINE__);
        }
        $this->DispositionType = $dispositionType;
        return $this;
    }
    /**
     * Get Grouping value
     * @return string|null
     */
    public function getGrouping()
    {
        return $this->Grouping;
    }
    /**
     * Set Grouping value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\ShippingDocumentGroupingType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\ShippingDocumentGroupingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $grouping
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentDispositionDetail
     */
    public function setGrouping($grouping = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\ShippingDocumentGroupingType::valueIsValid($grouping)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $grouping, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\ShippingDocumentGroupingType::getValidValues())), __LINE__);
        }
        $this->Grouping = $grouping;
        return $this;
    }
    /**
     * Get EMailDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentEMailDetail|null
     */
    public function getEMailDetail()
    {
        return $this->EMailDetail;
    }
    /**
     * Set EMailDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentEMailDetail $eMailDetail
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentDispositionDetail
     */
    public function setEMailDetail(\NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentEMailDetail $eMailDetail = null)
    {
        $this->EMailDetail = $eMailDetail;
        return $this;
    }
    /**
     * Get PrintDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentPrintDetail|null
     */
    public function getPrintDetail()
    {
        return $this->PrintDetail;
    }
    /**
     * Set PrintDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentPrintDetail $printDetail
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentDispositionDetail
     */
    public function setPrintDetail(\NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentPrintDetail $printDetail = null)
    {
        $this->PrintDetail = $printDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentDispositionDetail
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
