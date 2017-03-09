<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PendingShipmentDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: This information describes the kind of pending shipment being requested.
 * @subpackage Structs
 */
class PendingShipmentDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $Type;
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - documentation: Date after which the pending shipment will no longer be available for completion.
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationDate;
    /**
     * The EmailLabelDetail
     * Meta informations extracted from the WSDL
     * - documentation: Only used with type of EMAIL.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailLabelDetail
     */
    public $EmailLabelDetail;
    /**
     * The ProcessingOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentProcessingOptionsRequested
     */
    public $ProcessingOptions;
    /**
     * The RecommendedDocumentSpecification
     * Meta informations extracted from the WSDL
     * - documentation: These are documents that are recommended to be included with the shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\RecommendedDocumentSpecification
     */
    public $RecommendedDocumentSpecification;
    /**
     * The DocumentReferences
     * Meta informations extracted from the WSDL
     * - documentation: Upload document details provided by the initator of the shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail[]
     */
    public $DocumentReferences;
    /**
     * Constructor method for PendingShipmentDetail
     * @uses PendingShipmentDetail::setType()
     * @uses PendingShipmentDetail::setExpirationDate()
     * @uses PendingShipmentDetail::setEmailLabelDetail()
     * @uses PendingShipmentDetail::setProcessingOptions()
     * @uses PendingShipmentDetail::setRecommendedDocumentSpecification()
     * @uses PendingShipmentDetail::setDocumentReferences()
     * @param string $type
     * @param string $expirationDate
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailLabelDetail $emailLabelDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentProcessingOptionsRequested $processingOptions
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\RecommendedDocumentSpecification $recommendedDocumentSpecification
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail[] $documentReferences
     */
    public function __construct($type = null, $expirationDate = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailLabelDetail $emailLabelDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentProcessingOptionsRequested $processingOptions = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\RecommendedDocumentSpecification $recommendedDocumentSpecification = null, array $documentReferences = array())
    {
        $this
            ->setType($type)
            ->setExpirationDate($expirationDate)
            ->setEmailLabelDetail($emailLabelDetail)
            ->setProcessingOptions($processingOptions)
            ->setRecommendedDocumentSpecification($recommendedDocumentSpecification)
            ->setDocumentReferences($documentReferences);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PendingShipmentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PendingShipmentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\PendingShipmentType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\PendingShipmentType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentDetail
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get EmailLabelDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailLabelDetail|null
     */
    public function getEmailLabelDetail()
    {
        return $this->EmailLabelDetail;
    }
    /**
     * Set EmailLabelDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailLabelDetail $emailLabelDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentDetail
     */
    public function setEmailLabelDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailLabelDetail $emailLabelDetail = null)
    {
        $this->EmailLabelDetail = $emailLabelDetail;
        return $this;
    }
    /**
     * Get ProcessingOptions value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentProcessingOptionsRequested|null
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    /**
     * Set ProcessingOptions value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentProcessingOptionsRequested $processingOptions
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentDetail
     */
    public function setProcessingOptions(\NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentProcessingOptionsRequested $processingOptions = null)
    {
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    /**
     * Get RecommendedDocumentSpecification value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RecommendedDocumentSpecification|null
     */
    public function getRecommendedDocumentSpecification()
    {
        return $this->RecommendedDocumentSpecification;
    }
    /**
     * Set RecommendedDocumentSpecification value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\RecommendedDocumentSpecification $recommendedDocumentSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentDetail
     */
    public function setRecommendedDocumentSpecification(\NicholasCreativeMedia\FedExPHP\Ship\StructType\RecommendedDocumentSpecification $recommendedDocumentSpecification = null)
    {
        $this->RecommendedDocumentSpecification = $recommendedDocumentSpecification;
        return $this;
    }
    /**
     * Get DocumentReferences value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail[]|null
     */
    public function getDocumentReferences()
    {
        return $this->DocumentReferences;
    }
    /**
     * Set DocumentReferences value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail[] $documentReferences
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentDetail
     */
    public function setDocumentReferences(array $documentReferences = array())
    {
        foreach ($documentReferences as $pendingShipmentDetailDocumentReferencesItem) {
            // validation for constraint: itemType
            if (!$pendingShipmentDetailDocumentReferencesItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail) {
                throw new \InvalidArgumentException(sprintf('The DocumentReferences property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail, "%s" given', is_object($pendingShipmentDetailDocumentReferencesItem) ? get_class($pendingShipmentDetailDocumentReferencesItem) : gettype($pendingShipmentDetailDocumentReferencesItem)), __LINE__);
            }
        }
        $this->DocumentReferences = $documentReferences;
        return $this;
    }
    /**
     * Add item to DocumentReferences value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentDetail
     */
    public function addToDocumentReferences(\NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail) {
            throw new \InvalidArgumentException(sprintf('The DocumentReferences property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DocumentReferences[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PendingShipmentDetail
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
