<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentSpecification StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains all data required for additional (non-label) shipping documents to be produced in conjunction with a specific shipment.
 * @subpackage Structs
 */
class ShippingDocumentSpecification extends AbstractStructBase
{
    /**
     * The ShippingDocumentTypes
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the types of shipping documents requested by the shipper.
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    public $ShippingDocumentTypes;
    /**
     * The CertificateOfOrigin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CertificateOfOriginDetail
     */
    public $CertificateOfOrigin;
    /**
     * The CommercialInvoiceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CommercialInvoiceDetail
     */
    public $CommercialInvoiceDetail;
    /**
     * The CustomPackageDocumentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of each package-level custom document (the same specification is used for all packages).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail[]
     */
    public $CustomPackageDocumentDetail;
    /**
     * The CustomShipmentDocumentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of a shipment-level custom document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail[]
     */
    public $CustomShipmentDocumentDetail;
    /**
     * The ExportDeclarationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExportDeclarationDetail
     */
    public $ExportDeclarationDetail;
    /**
     * The GeneralAgencyAgreementDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\GeneralAgencyAgreementDetail
     */
    public $GeneralAgencyAgreementDetail;
    /**
     * The NaftaCertificateOfOriginDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\NaftaCertificateOfOriginDetail
     */
    public $NaftaCertificateOfOriginDetail;
    /**
     * The Op900Detail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the OP-900 document for hazardous materials packages.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Op900Detail
     */
    public $Op900Detail;
    /**
     * The DangerousGoodsShippersDeclarationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the 1421c document for dangerous goods shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\DangerousGoodsShippersDeclarationDetail
     */
    public $DangerousGoodsShippersDeclarationDetail;
    /**
     * The FreightAddressLabelDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the OP-900 document for hazardous materials.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightAddressLabelDetail
     */
    public $FreightAddressLabelDetail;
    /**
     * The ReturnInstructionsDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the return instructions document.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnInstructionsDetail
     */
    public $ReturnInstructionsDetail;
    /**
     * Constructor method for ShippingDocumentSpecification
     * @uses ShippingDocumentSpecification::setShippingDocumentTypes()
     * @uses ShippingDocumentSpecification::setCertificateOfOrigin()
     * @uses ShippingDocumentSpecification::setCommercialInvoiceDetail()
     * @uses ShippingDocumentSpecification::setCustomPackageDocumentDetail()
     * @uses ShippingDocumentSpecification::setCustomShipmentDocumentDetail()
     * @uses ShippingDocumentSpecification::setExportDeclarationDetail()
     * @uses ShippingDocumentSpecification::setGeneralAgencyAgreementDetail()
     * @uses ShippingDocumentSpecification::setNaftaCertificateOfOriginDetail()
     * @uses ShippingDocumentSpecification::setOp900Detail()
     * @uses ShippingDocumentSpecification::setDangerousGoodsShippersDeclarationDetail()
     * @uses ShippingDocumentSpecification::setFreightAddressLabelDetail()
     * @uses ShippingDocumentSpecification::setReturnInstructionsDetail()
     * @param string[] $shippingDocumentTypes
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CertificateOfOriginDetail $certificateOfOrigin
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CommercialInvoiceDetail $commercialInvoiceDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail[] $customPackageDocumentDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail[] $customShipmentDocumentDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExportDeclarationDetail $exportDeclarationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\GeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Op900Detail $op900Detail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightAddressLabelDetail $freightAddressLabelDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnInstructionsDetail $returnInstructionsDetail
     */
    public function __construct(array $shippingDocumentTypes = array(), \NicholasCreativeMedia\FedExPHP\Ship\StructType\CertificateOfOriginDetail $certificateOfOrigin = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\CommercialInvoiceDetail $commercialInvoiceDetail = null, array $customPackageDocumentDetail = array(), array $customShipmentDocumentDetail = array(), \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExportDeclarationDetail $exportDeclarationDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\GeneralAgencyAgreementDetail $generalAgencyAgreementDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Op900Detail $op900Detail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightAddressLabelDetail $freightAddressLabelDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnInstructionsDetail $returnInstructionsDetail = null)
    {
        $this
            ->setShippingDocumentTypes($shippingDocumentTypes)
            ->setCertificateOfOrigin($certificateOfOrigin)
            ->setCommercialInvoiceDetail($commercialInvoiceDetail)
            ->setCustomPackageDocumentDetail($customPackageDocumentDetail)
            ->setCustomShipmentDocumentDetail($customShipmentDocumentDetail)
            ->setExportDeclarationDetail($exportDeclarationDetail)
            ->setGeneralAgencyAgreementDetail($generalAgencyAgreementDetail)
            ->setNaftaCertificateOfOriginDetail($naftaCertificateOfOriginDetail)
            ->setOp900Detail($op900Detail)
            ->setDangerousGoodsShippersDeclarationDetail($dangerousGoodsShippersDeclarationDetail)
            ->setFreightAddressLabelDetail($freightAddressLabelDetail)
            ->setReturnInstructionsDetail($returnInstructionsDetail);
    }
    /**
     * Get ShippingDocumentTypes value
     * @return string[]
     */
    public function getShippingDocumentTypes()
    {
        return $this->ShippingDocumentTypes;
    }
    /**
     * Set ShippingDocumentTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RequestedShippingDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RequestedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $shippingDocumentTypes
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function setShippingDocumentTypes(array $shippingDocumentTypes = array())
    {
        $invalidValues = array();
        foreach ($shippingDocumentTypes as $shippingDocumentSpecificationShippingDocumentTypesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\RequestedShippingDocumentType::valueIsValid($shippingDocumentSpecificationShippingDocumentTypesItem)) {
                $invalidValues[] = var_export($shippingDocumentSpecificationShippingDocumentTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->ShippingDocumentTypes = $shippingDocumentTypes;
        return $this;
    }
    /**
     * Add item to ShippingDocumentTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RequestedShippingDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RequestedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function addToShippingDocumentTypes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\RequestedShippingDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->ShippingDocumentTypes[] = $item;
        return $this;
    }
    /**
     * Get CertificateOfOrigin value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CertificateOfOriginDetail|null
     */
    public function getCertificateOfOrigin()
    {
        return $this->CertificateOfOrigin;
    }
    /**
     * Set CertificateOfOrigin value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CertificateOfOriginDetail $certificateOfOrigin
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function setCertificateOfOrigin(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CertificateOfOriginDetail $certificateOfOrigin = null)
    {
        $this->CertificateOfOrigin = $certificateOfOrigin;
        return $this;
    }
    /**
     * Get CommercialInvoiceDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CommercialInvoiceDetail|null
     */
    public function getCommercialInvoiceDetail()
    {
        return $this->CommercialInvoiceDetail;
    }
    /**
     * Set CommercialInvoiceDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CommercialInvoiceDetail $commercialInvoiceDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function setCommercialInvoiceDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CommercialInvoiceDetail $commercialInvoiceDetail = null)
    {
        $this->CommercialInvoiceDetail = $commercialInvoiceDetail;
        return $this;
    }
    /**
     * Get CustomPackageDocumentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail[]|null
     */
    public function getCustomPackageDocumentDetail()
    {
        return $this->CustomPackageDocumentDetail;
    }
    /**
     * Set CustomPackageDocumentDetail value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail[] $customPackageDocumentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function setCustomPackageDocumentDetail(array $customPackageDocumentDetail = array())
    {
        foreach ($customPackageDocumentDetail as $shippingDocumentSpecificationCustomPackageDocumentDetailItem) {
            // validation for constraint: itemType
            if (!$shippingDocumentSpecificationCustomPackageDocumentDetailItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail) {
                throw new \InvalidArgumentException(sprintf('The CustomPackageDocumentDetail property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail, "%s" given', is_object($shippingDocumentSpecificationCustomPackageDocumentDetailItem) ? get_class($shippingDocumentSpecificationCustomPackageDocumentDetailItem) : gettype($shippingDocumentSpecificationCustomPackageDocumentDetailItem)), __LINE__);
            }
        }
        $this->CustomPackageDocumentDetail = $customPackageDocumentDetail;
        return $this;
    }
    /**
     * Add item to CustomPackageDocumentDetail value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function addToCustomPackageDocumentDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail) {
            throw new \InvalidArgumentException(sprintf('The CustomPackageDocumentDetail property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomPackageDocumentDetail[] = $item;
        return $this;
    }
    /**
     * Get CustomShipmentDocumentDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail[]|null
     */
    public function getCustomShipmentDocumentDetail()
    {
        return $this->CustomShipmentDocumentDetail;
    }
    /**
     * Set CustomShipmentDocumentDetail value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail[] $customShipmentDocumentDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function setCustomShipmentDocumentDetail(array $customShipmentDocumentDetail = array())
    {
        foreach ($customShipmentDocumentDetail as $shippingDocumentSpecificationCustomShipmentDocumentDetailItem) {
            // validation for constraint: itemType
            if (!$shippingDocumentSpecificationCustomShipmentDocumentDetailItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail) {
                throw new \InvalidArgumentException(sprintf('The CustomShipmentDocumentDetail property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail, "%s" given', is_object($shippingDocumentSpecificationCustomShipmentDocumentDetailItem) ? get_class($shippingDocumentSpecificationCustomShipmentDocumentDetailItem) : gettype($shippingDocumentSpecificationCustomShipmentDocumentDetailItem)), __LINE__);
            }
        }
        $this->CustomShipmentDocumentDetail = $customShipmentDocumentDetail;
        return $this;
    }
    /**
     * Add item to CustomShipmentDocumentDetail value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function addToCustomShipmentDocumentDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail) {
            throw new \InvalidArgumentException(sprintf('The CustomShipmentDocumentDetail property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomDocumentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomShipmentDocumentDetail[] = $item;
        return $this;
    }
    /**
     * Get ExportDeclarationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExportDeclarationDetail|null
     */
    public function getExportDeclarationDetail()
    {
        return $this->ExportDeclarationDetail;
    }
    /**
     * Set ExportDeclarationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExportDeclarationDetail $exportDeclarationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function setExportDeclarationDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ExportDeclarationDetail $exportDeclarationDetail = null)
    {
        $this->ExportDeclarationDetail = $exportDeclarationDetail;
        return $this;
    }
    /**
     * Get GeneralAgencyAgreementDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\GeneralAgencyAgreementDetail|null
     */
    public function getGeneralAgencyAgreementDetail()
    {
        return $this->GeneralAgencyAgreementDetail;
    }
    /**
     * Set GeneralAgencyAgreementDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\GeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function setGeneralAgencyAgreementDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\GeneralAgencyAgreementDetail $generalAgencyAgreementDetail = null)
    {
        $this->GeneralAgencyAgreementDetail = $generalAgencyAgreementDetail;
        return $this;
    }
    /**
     * Get NaftaCertificateOfOriginDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\NaftaCertificateOfOriginDetail|null
     */
    public function getNaftaCertificateOfOriginDetail()
    {
        return $this->NaftaCertificateOfOriginDetail;
    }
    /**
     * Set NaftaCertificateOfOriginDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function setNaftaCertificateOfOriginDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail = null)
    {
        $this->NaftaCertificateOfOriginDetail = $naftaCertificateOfOriginDetail;
        return $this;
    }
    /**
     * Get Op900Detail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Op900Detail|null
     */
    public function getOp900Detail()
    {
        return $this->Op900Detail;
    }
    /**
     * Set Op900Detail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Op900Detail $op900Detail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function setOp900Detail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Op900Detail $op900Detail = null)
    {
        $this->Op900Detail = $op900Detail;
        return $this;
    }
    /**
     * Get DangerousGoodsShippersDeclarationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DangerousGoodsShippersDeclarationDetail|null
     */
    public function getDangerousGoodsShippersDeclarationDetail()
    {
        return $this->DangerousGoodsShippersDeclarationDetail;
    }
    /**
     * Set DangerousGoodsShippersDeclarationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function setDangerousGoodsShippersDeclarationDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail = null)
    {
        $this->DangerousGoodsShippersDeclarationDetail = $dangerousGoodsShippersDeclarationDetail;
        return $this;
    }
    /**
     * Get FreightAddressLabelDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightAddressLabelDetail|null
     */
    public function getFreightAddressLabelDetail()
    {
        return $this->FreightAddressLabelDetail;
    }
    /**
     * Set FreightAddressLabelDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightAddressLabelDetail $freightAddressLabelDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function setFreightAddressLabelDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\FreightAddressLabelDetail $freightAddressLabelDetail = null)
    {
        $this->FreightAddressLabelDetail = $freightAddressLabelDetail;
        return $this;
    }
    /**
     * Get ReturnInstructionsDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnInstructionsDetail|null
     */
    public function getReturnInstructionsDetail()
    {
        return $this->ReturnInstructionsDetail;
    }
    /**
     * Set ReturnInstructionsDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnInstructionsDetail $returnInstructionsDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
     */
    public function setReturnInstructionsDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnInstructionsDetail $returnInstructionsDetail = null)
    {
        $this->ReturnInstructionsDetail = $returnInstructionsDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShippingDocumentSpecification
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
