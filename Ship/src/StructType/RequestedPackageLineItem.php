<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestedPackageLineItem StructType
 * Meta informations extracted from the WSDL
 * - documentation: This class rationalizes RequestedPackage and RequestedPackageSummary from previous interfaces.
 * @subpackage Structs
 */
class RequestedPackageLineItem extends AbstractStructBase
{
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used only with INDIVIDUAL_PACKAGE, as a unique identifier of each requested package.
     * - minOccurs: 0
     * @var int
     */
    public $SequenceNumber;
    /**
     * The GroupNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used only with PACKAGE_GROUPS, as a unique identifier of each group of identical packages.
     * - minOccurs: 0
     * @var int
     */
    public $GroupNumber;
    /**
     * The GroupPackageCount
     * Meta informations extracted from the WSDL
     * - documentation: Used only with PACKAGE_GROUPS, as a count of packages within a group of identical packages.
     * - minOccurs: 0
     * @var int
     */
    public $GroupPackageCount;
    /**
     * The VariableHandlingChargeDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingChargeDetail
     */
    public $VariableHandlingChargeDetail;
    /**
     * The InsuredValue
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the declared value for carriage of the package. The declared value for carriage represents the maximum liability of FedEx in connection with a shipment, including, but not limited to, any loss, damage, delay, mis-delivery,
     * nondelivery, misinformation, any failure to provide information, or mis-delivery of information relating to the package. This field is only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case totalInsuredValue
     * and packageCount on the shipment will be used to determine this value.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $InsuredValue;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - documentation: Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS. Ignored for PACKAGE_SUMMARY, in which case total weight and packageCount on the shipment will be used to determine this value.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight
     */
    public $Weight;
    /**
     * The Dimensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Dimensions
     */
    public $Dimensions;
    /**
     * The PhysicalPackaging
     * Meta informations extracted from the WSDL
     * - documentation: Provides additional detail on how the customer has physically packaged this item. As of June 2009, required for packages moving under international and SmartPost services.
     * - minOccurs: 0
     * @var string
     */
    public $PhysicalPackaging;
    /**
     * The ItemDescription
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable text describing the package.
     * - minOccurs: 0
     * @var string
     */
    public $ItemDescription;
    /**
     * The ItemDescriptionForClearance
     * Meta informations extracted from the WSDL
     * - documentation: Human-readable text describing the contents of the package to be used for clearance purposes.
     * - minOccurs: 0
     * @var string
     */
    public $ItemDescriptionForClearance;
    /**
     * The CustomerReferences
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference[]
     */
    public $CustomerReferences;
    /**
     * The SpecialServicesRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageSpecialServicesRequested
     */
    public $SpecialServicesRequested;
    /**
     * The ContentRecords
     * Meta informations extracted from the WSDL
     * - documentation: Only used for INDIVIDUAL_PACKAGES and PACKAGE_GROUPS.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContentRecord[]
     */
    public $ContentRecords;
    /**
     * Constructor method for RequestedPackageLineItem
     * @uses RequestedPackageLineItem::setSequenceNumber()
     * @uses RequestedPackageLineItem::setGroupNumber()
     * @uses RequestedPackageLineItem::setGroupPackageCount()
     * @uses RequestedPackageLineItem::setVariableHandlingChargeDetail()
     * @uses RequestedPackageLineItem::setInsuredValue()
     * @uses RequestedPackageLineItem::setWeight()
     * @uses RequestedPackageLineItem::setDimensions()
     * @uses RequestedPackageLineItem::setPhysicalPackaging()
     * @uses RequestedPackageLineItem::setItemDescription()
     * @uses RequestedPackageLineItem::setItemDescriptionForClearance()
     * @uses RequestedPackageLineItem::setCustomerReferences()
     * @uses RequestedPackageLineItem::setSpecialServicesRequested()
     * @uses RequestedPackageLineItem::setContentRecords()
     * @param int $sequenceNumber
     * @param int $groupNumber
     * @param int $groupPackageCount
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $insuredValue
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $weight
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Dimensions $dimensions
     * @param string $physicalPackaging
     * @param string $itemDescription
     * @param string $itemDescriptionForClearance
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference[] $customerReferences
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageSpecialServicesRequested $specialServicesRequested
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContentRecord[] $contentRecords
     */
    public function __construct($sequenceNumber = null, $groupNumber = null, $groupPackageCount = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingChargeDetail $variableHandlingChargeDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $insuredValue = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $weight = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Dimensions $dimensions = null, $physicalPackaging = null, $itemDescription = null, $itemDescriptionForClearance = null, array $customerReferences = array(), \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageSpecialServicesRequested $specialServicesRequested = null, array $contentRecords = array())
    {
        $this
            ->setSequenceNumber($sequenceNumber)
            ->setGroupNumber($groupNumber)
            ->setGroupPackageCount($groupPackageCount)
            ->setVariableHandlingChargeDetail($variableHandlingChargeDetail)
            ->setInsuredValue($insuredValue)
            ->setWeight($weight)
            ->setDimensions($dimensions)
            ->setPhysicalPackaging($physicalPackaging)
            ->setItemDescription($itemDescription)
            ->setItemDescriptionForClearance($itemDescriptionForClearance)
            ->setCustomerReferences($customerReferences)
            ->setSpecialServicesRequested($specialServicesRequested)
            ->setContentRecords($contentRecords);
    }
    /**
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get GroupNumber value
     * @return int|null
     */
    public function getGroupNumber()
    {
        return $this->GroupNumber;
    }
    /**
     * Set GroupNumber value
     * @param int $groupNumber
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function setGroupNumber($groupNumber = null)
    {
        // validation for constraint: int
        if (!is_null($groupNumber) && !is_numeric($groupNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($groupNumber)), __LINE__);
        }
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    /**
     * Get GroupPackageCount value
     * @return int|null
     */
    public function getGroupPackageCount()
    {
        return $this->GroupPackageCount;
    }
    /**
     * Set GroupPackageCount value
     * @param int $groupPackageCount
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function setGroupPackageCount($groupPackageCount = null)
    {
        // validation for constraint: int
        if (!is_null($groupPackageCount) && !is_numeric($groupPackageCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($groupPackageCount)), __LINE__);
        }
        $this->GroupPackageCount = $groupPackageCount;
        return $this;
    }
    /**
     * Get VariableHandlingChargeDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingChargeDetail|null
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->VariableHandlingChargeDetail;
    }
    /**
     * Set VariableHandlingChargeDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function setVariableHandlingChargeDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\VariableHandlingChargeDetail $variableHandlingChargeDetail = null)
    {
        $this->VariableHandlingChargeDetail = $variableHandlingChargeDetail;
        return $this;
    }
    /**
     * Get InsuredValue value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getInsuredValue()
    {
        return $this->InsuredValue;
    }
    /**
     * Set InsuredValue value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $insuredValue
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function setInsuredValue(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $insuredValue = null)
    {
        $this->InsuredValue = $insuredValue;
        return $this;
    }
    /**
     * Get Weight value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $weight
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function setWeight(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Dimensions|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Dimensions $dimensions
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function setDimensions(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Dimensions $dimensions = null)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    /**
     * Get PhysicalPackaging value
     * @return string|null
     */
    public function getPhysicalPackaging()
    {
        return $this->PhysicalPackaging;
    }
    /**
     * Set PhysicalPackaging value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PhysicalPackagingType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PhysicalPackagingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $physicalPackaging
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function setPhysicalPackaging($physicalPackaging = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\PhysicalPackagingType::valueIsValid($physicalPackaging)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $physicalPackaging, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PhysicalPackagingType::getValidValues())), __LINE__);
        }
        $this->PhysicalPackaging = $physicalPackaging;
        return $this;
    }
    /**
     * Get ItemDescription value
     * @return string|null
     */
    public function getItemDescription()
    {
        return $this->ItemDescription;
    }
    /**
     * Set ItemDescription value
     * @param string $itemDescription
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function setItemDescription($itemDescription = null)
    {
        // validation for constraint: string
        if (!is_null($itemDescription) && !is_string($itemDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemDescription)), __LINE__);
        }
        $this->ItemDescription = $itemDescription;
        return $this;
    }
    /**
     * Get ItemDescriptionForClearance value
     * @return string|null
     */
    public function getItemDescriptionForClearance()
    {
        return $this->ItemDescriptionForClearance;
    }
    /**
     * Set ItemDescriptionForClearance value
     * @param string $itemDescriptionForClearance
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function setItemDescriptionForClearance($itemDescriptionForClearance = null)
    {
        // validation for constraint: string
        if (!is_null($itemDescriptionForClearance) && !is_string($itemDescriptionForClearance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemDescriptionForClearance)), __LINE__);
        }
        $this->ItemDescriptionForClearance = $itemDescriptionForClearance;
        return $this;
    }
    /**
     * Get CustomerReferences value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference[]|null
     */
    public function getCustomerReferences()
    {
        return $this->CustomerReferences;
    }
    /**
     * Set CustomerReferences value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference[] $customerReferences
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function setCustomerReferences(array $customerReferences = array())
    {
        foreach ($customerReferences as $requestedPackageLineItemCustomerReferencesItem) {
            // validation for constraint: itemType
            if (!$requestedPackageLineItemCustomerReferencesItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference) {
                throw new \InvalidArgumentException(sprintf('The CustomerReferences property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference, "%s" given', is_object($requestedPackageLineItemCustomerReferencesItem) ? get_class($requestedPackageLineItemCustomerReferencesItem) : gettype($requestedPackageLineItemCustomerReferencesItem)), __LINE__);
            }
        }
        $this->CustomerReferences = $customerReferences;
        return $this;
    }
    /**
     * Add item to CustomerReferences value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function addToCustomerReferences(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference) {
            throw new \InvalidArgumentException(sprintf('The CustomerReferences property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerReference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomerReferences[] = $item;
        return $this;
    }
    /**
     * Get SpecialServicesRequested value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageSpecialServicesRequested|null
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    /**
     * Set SpecialServicesRequested value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageSpecialServicesRequested $specialServicesRequested
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function setSpecialServicesRequested(\NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageSpecialServicesRequested $specialServicesRequested = null)
    {
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    /**
     * Get ContentRecords value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContentRecord[]|null
     */
    public function getContentRecords()
    {
        return $this->ContentRecords;
    }
    /**
     * Set ContentRecords value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContentRecord[] $contentRecords
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function setContentRecords(array $contentRecords = array())
    {
        foreach ($contentRecords as $requestedPackageLineItemContentRecordsItem) {
            // validation for constraint: itemType
            if (!$requestedPackageLineItemContentRecordsItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContentRecord) {
                throw new \InvalidArgumentException(sprintf('The ContentRecords property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContentRecord, "%s" given', is_object($requestedPackageLineItemContentRecordsItem) ? get_class($requestedPackageLineItemContentRecordsItem) : gettype($requestedPackageLineItemContentRecordsItem)), __LINE__);
            }
        }
        $this->ContentRecords = $contentRecords;
        return $this;
    }
    /**
     * Add item to ContentRecords value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContentRecord $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
     */
    public function addToContentRecords(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ContentRecord $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContentRecord) {
            throw new \InvalidArgumentException(sprintf('The ContentRecords property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\ContentRecord, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContentRecords[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedPackageLineItem
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
