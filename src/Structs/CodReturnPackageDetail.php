<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodReturnPackageDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the information associated with a package that has COD special service in a ground shipment.
 * @subpackage Structs
 */
class CodReturnPackageDetail extends AbstractStructBase
{
    /**
     * The CollectionAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $CollectionAmount;
    /**
     * The AdjustmentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AdjustmentType;
    /**
     * The Electronic
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Electronic;
    /**
     * The Barcodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PackageBarcodes
     */
    public $Barcodes;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument
     */
    public $Label;
    /**
     * Constructor method for CodReturnPackageDetail
     * @uses CodReturnPackageDetail::setCollectionAmount()
     * @uses CodReturnPackageDetail::setAdjustmentType()
     * @uses CodReturnPackageDetail::setElectronic()
     * @uses CodReturnPackageDetail::setBarcodes()
     * @uses CodReturnPackageDetail::setLabel()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $collectionAmount
     * @param string $adjustmentType
     * @param bool $electronic
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageBarcodes $barcodes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $label
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\Money $collectionAmount = null, $adjustmentType = null, $electronic = null, \NicholasCreativeMedia\FedExPHP\Structs\PackageBarcodes $barcodes = null, \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $label = null)
    {
        $this
            ->setCollectionAmount($collectionAmount)
            ->setAdjustmentType($adjustmentType)
            ->setElectronic($electronic)
            ->setBarcodes($barcodes)
            ->setLabel($label);
    }
    /**
     * Get CollectionAmount value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getCollectionAmount()
    {
        return $this->CollectionAmount;
    }
    /**
     * Set CollectionAmount value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $collectionAmount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodReturnPackageDetail
     */
    public function setCollectionAmount(\NicholasCreativeMedia\FedExPHP\Structs\Money $collectionAmount = null)
    {
        $this->CollectionAmount = $collectionAmount;
        return $this;
    }
    /**
     * Get AdjustmentType value
     * @return string|null
     */
    public function getAdjustmentType()
    {
        return $this->AdjustmentType;
    }
    /**
     * Set AdjustmentType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CodAdjustmentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CodAdjustmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $adjustmentType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodReturnPackageDetail
     */
    public function setAdjustmentType($adjustmentType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CodAdjustmentType::valueIsValid($adjustmentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $adjustmentType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CodAdjustmentType::getValidValues())), __LINE__);
        }
        $this->AdjustmentType = $adjustmentType;
        return $this;
    }
    /**
     * Get Electronic value
     * @return bool|null
     */
    public function getElectronic()
    {
        return $this->Electronic;
    }
    /**
     * Set Electronic value
     * @param bool $electronic
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodReturnPackageDetail
     */
    public function setElectronic($electronic = null)
    {
        $this->Electronic = $electronic;
        return $this;
    }
    /**
     * Get Barcodes value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageBarcodes|null
     */
    public function getBarcodes()
    {
        return $this->Barcodes;
    }
    /**
     * Set Barcodes value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageBarcodes $barcodes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodReturnPackageDetail
     */
    public function setBarcodes(\NicholasCreativeMedia\FedExPHP\Structs\PackageBarcodes $barcodes = null)
    {
        $this->Barcodes = $barcodes;
        return $this;
    }
    /**
     * Get Label value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $label
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodReturnPackageDetail
     */
    public function setLabel(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $label = null)
    {
        $this->Label = $label;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodReturnPackageDetail
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
