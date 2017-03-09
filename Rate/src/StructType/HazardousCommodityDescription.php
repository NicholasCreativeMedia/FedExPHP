<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HazardousCommodityDescription StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies and describes an individual hazardous commodity.
 * @subpackage Structs
 */
class HazardousCommodityDescription extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - documentation: Regulatory identifier for a commodity (e.g. "UN ID" value).
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: In conjunction with the regulatory identifier, this field uniquely identifies a specific hazardous materials commodity.
     * - minOccurs: 0
     * @var int
     */
    public $SequenceNumber;
    /**
     * The PackingGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackingGroup;
    /**
     * The PackingDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityPackingDetail
     */
    public $PackingDetails;
    /**
     * The ReportableQuantity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReportableQuantity;
    /**
     * The ProperShippingName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProperShippingName;
    /**
     * The TechnicalName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TechnicalName;
    /**
     * The Percentage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Percentage;
    /**
     * The HazardClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HazardClass;
    /**
     * The SubsidiaryClasses
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SubsidiaryClasses;
    /**
     * The LabelText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LabelText;
    /**
     * The ProcessingOptions
     * Meta informations extracted from the WSDL
     * - documentation: Indicates any special processing options to be applied to the description of the dangerous goods commodity.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ProcessingOptions;
    /**
     * The Authorization
     * Meta informations extracted from the WSDL
     * - documentation: Information related to quantity limitations and operator or state variations as may be applicable to the dangerous goods commodity.
     * - minOccurs: 0
     * @var string
     */
    public $Authorization;
    /**
     * Constructor method for HazardousCommodityDescription
     * @uses HazardousCommodityDescription::setId()
     * @uses HazardousCommodityDescription::setSequenceNumber()
     * @uses HazardousCommodityDescription::setPackingGroup()
     * @uses HazardousCommodityDescription::setPackingDetails()
     * @uses HazardousCommodityDescription::setReportableQuantity()
     * @uses HazardousCommodityDescription::setProperShippingName()
     * @uses HazardousCommodityDescription::setTechnicalName()
     * @uses HazardousCommodityDescription::setPercentage()
     * @uses HazardousCommodityDescription::setHazardClass()
     * @uses HazardousCommodityDescription::setSubsidiaryClasses()
     * @uses HazardousCommodityDescription::setLabelText()
     * @uses HazardousCommodityDescription::setProcessingOptions()
     * @uses HazardousCommodityDescription::setAuthorization()
     * @param string $id
     * @param int $sequenceNumber
     * @param string $packingGroup
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityPackingDetail $packingDetails
     * @param bool $reportableQuantity
     * @param string $properShippingName
     * @param string $technicalName
     * @param float $percentage
     * @param string $hazardClass
     * @param string[] $subsidiaryClasses
     * @param string $labelText
     * @param string[] $processingOptions
     * @param string $authorization
     */
    public function __construct($id = null, $sequenceNumber = null, $packingGroup = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityPackingDetail $packingDetails = null, $reportableQuantity = null, $properShippingName = null, $technicalName = null, $percentage = null, $hazardClass = null, array $subsidiaryClasses = array(), $labelText = null, array $processingOptions = array(), $authorization = null)
    {
        $this
            ->setId($id)
            ->setSequenceNumber($sequenceNumber)
            ->setPackingGroup($packingGroup)
            ->setPackingDetails($packingDetails)
            ->setReportableQuantity($reportableQuantity)
            ->setProperShippingName($properShippingName)
            ->setTechnicalName($technicalName)
            ->setPercentage($percentage)
            ->setHazardClass($hazardClass)
            ->setSubsidiaryClasses($subsidiaryClasses)
            ->setLabelText($labelText)
            ->setProcessingOptions($processingOptions)
            ->setAuthorization($authorization);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
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
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
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
     * Get PackingGroup value
     * @return string|null
     */
    public function getPackingGroup()
    {
        return $this->PackingGroup;
    }
    /**
     * Set PackingGroup value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityPackingGroupType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityPackingGroupType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packingGroup
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
     */
    public function setPackingGroup($packingGroup = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityPackingGroupType::valueIsValid($packingGroup)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packingGroup, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityPackingGroupType::getValidValues())), __LINE__);
        }
        $this->PackingGroup = $packingGroup;
        return $this;
    }
    /**
     * Get PackingDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityPackingDetail|null
     */
    public function getPackingDetails()
    {
        return $this->PackingDetails;
    }
    /**
     * Set PackingDetails value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityPackingDetail $packingDetails
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
     */
    public function setPackingDetails(\NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityPackingDetail $packingDetails = null)
    {
        $this->PackingDetails = $packingDetails;
        return $this;
    }
    /**
     * Get ReportableQuantity value
     * @return bool|null
     */
    public function getReportableQuantity()
    {
        return $this->ReportableQuantity;
    }
    /**
     * Set ReportableQuantity value
     * @param bool $reportableQuantity
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
     */
    public function setReportableQuantity($reportableQuantity = null)
    {
        $this->ReportableQuantity = $reportableQuantity;
        return $this;
    }
    /**
     * Get ProperShippingName value
     * @return string|null
     */
    public function getProperShippingName()
    {
        return $this->ProperShippingName;
    }
    /**
     * Set ProperShippingName value
     * @param string $properShippingName
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
     */
    public function setProperShippingName($properShippingName = null)
    {
        // validation for constraint: string
        if (!is_null($properShippingName) && !is_string($properShippingName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($properShippingName)), __LINE__);
        }
        $this->ProperShippingName = $properShippingName;
        return $this;
    }
    /**
     * Get TechnicalName value
     * @return string|null
     */
    public function getTechnicalName()
    {
        return $this->TechnicalName;
    }
    /**
     * Set TechnicalName value
     * @param string $technicalName
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
     */
    public function setTechnicalName($technicalName = null)
    {
        // validation for constraint: string
        if (!is_null($technicalName) && !is_string($technicalName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($technicalName)), __LINE__);
        }
        $this->TechnicalName = $technicalName;
        return $this;
    }
    /**
     * Get Percentage value
     * @return float|null
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param float $percentage
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
     */
    public function setPercentage($percentage = null)
    {
        $this->Percentage = $percentage;
        return $this;
    }
    /**
     * Get HazardClass value
     * @return string|null
     */
    public function getHazardClass()
    {
        return $this->HazardClass;
    }
    /**
     * Set HazardClass value
     * @param string $hazardClass
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
     */
    public function setHazardClass($hazardClass = null)
    {
        // validation for constraint: string
        if (!is_null($hazardClass) && !is_string($hazardClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hazardClass)), __LINE__);
        }
        $this->HazardClass = $hazardClass;
        return $this;
    }
    /**
     * Get SubsidiaryClasses value
     * @return string[]|null
     */
    public function getSubsidiaryClasses()
    {
        return $this->SubsidiaryClasses;
    }
    /**
     * Set SubsidiaryClasses value
     * @throws \InvalidArgumentException
     * @param string[] $subsidiaryClasses
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses = array())
    {
        foreach ($subsidiaryClasses as $hazardousCommodityDescriptionSubsidiaryClassesItem) {
            // validation for constraint: itemType
            if (!is_string($hazardousCommodityDescriptionSubsidiaryClassesItem)) {
                throw new \InvalidArgumentException(sprintf('The SubsidiaryClasses property can only contain items of string, "%s" given', is_object($hazardousCommodityDescriptionSubsidiaryClassesItem) ? get_class($hazardousCommodityDescriptionSubsidiaryClassesItem) : gettype($hazardousCommodityDescriptionSubsidiaryClassesItem)), __LINE__);
            }
        }
        $this->SubsidiaryClasses = $subsidiaryClasses;
        return $this;
    }
    /**
     * Add item to SubsidiaryClasses value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
     */
    public function addToSubsidiaryClasses($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The SubsidiaryClasses property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SubsidiaryClasses[] = $item;
        return $this;
    }
    /**
     * Get LabelText value
     * @return string|null
     */
    public function getLabelText()
    {
        return $this->LabelText;
    }
    /**
     * Set LabelText value
     * @param string $labelText
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
     */
    public function setLabelText($labelText = null)
    {
        // validation for constraint: string
        if (!is_null($labelText) && !is_string($labelText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($labelText)), __LINE__);
        }
        $this->LabelText = $labelText;
        return $this;
    }
    /**
     * Get ProcessingOptions value
     * @return string[]|null
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    /**
     * Set ProcessingOptions value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityDescriptionProcessingOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityDescriptionProcessingOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $processingOptions
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
     */
    public function setProcessingOptions(array $processingOptions = array())
    {
        $invalidValues = array();
        foreach ($processingOptions as $hazardousCommodityDescriptionProcessingOptionsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityDescriptionProcessingOptionType::valueIsValid($hazardousCommodityDescriptionProcessingOptionsItem)) {
                $invalidValues[] = var_export($hazardousCommodityDescriptionProcessingOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityDescriptionProcessingOptionType::getValidValues())), __LINE__);
        }
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    /**
     * Add item to ProcessingOptions value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityDescriptionProcessingOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityDescriptionProcessingOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
     */
    public function addToProcessingOptions($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityDescriptionProcessingOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\HazardousCommodityDescriptionProcessingOptionType::getValidValues())), __LINE__);
        }
        $this->ProcessingOptions[] = $item;
        return $this;
    }
    /**
     * Get Authorization value
     * @return string|null
     */
    public function getAuthorization()
    {
        return $this->Authorization;
    }
    /**
     * Set Authorization value
     * @param string $authorization
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
     */
    public function setAuthorization($authorization = null)
    {
        // validation for constraint: string
        if (!is_null($authorization) && !is_string($authorization)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorization)), __LINE__);
        }
        $this->Authorization = $authorization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\HazardousCommodityDescription
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
