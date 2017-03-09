<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadDocumentReferenceDetail Structs
 * @subpackage Structs
 */
class UploadDocumentReferenceDetail extends AbstractStructBase
{
    /**
     * The LineNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LineNumber;
    /**
     * The CustomerReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerReference;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Description of the uploaded document.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The DocumentProducer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentProducer;
    /**
     * The DocumentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentType;
    /**
     * The DocumentId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentId;
    /**
     * The DocumentIdProducer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentIdProducer;
    /**
     * Constructor method for UploadDocumentReferenceDetail
     * @uses UploadDocumentReferenceDetail::setLineNumber()
     * @uses UploadDocumentReferenceDetail::setCustomerReference()
     * @uses UploadDocumentReferenceDetail::setDescription()
     * @uses UploadDocumentReferenceDetail::setDocumentProducer()
     * @uses UploadDocumentReferenceDetail::setDocumentType()
     * @uses UploadDocumentReferenceDetail::setDocumentId()
     * @uses UploadDocumentReferenceDetail::setDocumentIdProducer()
     * @param int $lineNumber
     * @param string $customerReference
     * @param string $description
     * @param string $documentProducer
     * @param string $documentType
     * @param string $documentId
     * @param string $documentIdProducer
     */
    public function __construct($lineNumber = null, $customerReference = null, $description = null, $documentProducer = null, $documentType = null, $documentId = null, $documentIdProducer = null)
    {
        $this
            ->setLineNumber($lineNumber)
            ->setCustomerReference($customerReference)
            ->setDescription($description)
            ->setDocumentProducer($documentProducer)
            ->setDocumentType($documentType)
            ->setDocumentId($documentId)
            ->setDocumentIdProducer($documentIdProducer);
    }
    /**
     * Get LineNumber value
     * @return int|null
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }
    /**
     * Set LineNumber value
     * @param int $lineNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail
     */
    public function setLineNumber($lineNumber = null)
    {
        // validation for constraint: int
        if (!is_null($lineNumber) && !is_numeric($lineNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lineNumber)), __LINE__);
        }
        $this->LineNumber = $lineNumber;
        return $this;
    }
    /**
     * Get CustomerReference value
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->CustomerReference;
    }
    /**
     * Set CustomerReference value
     * @param string $customerReference
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail
     */
    public function setCustomerReference($customerReference = null)
    {
        // validation for constraint: string
        if (!is_null($customerReference) && !is_string($customerReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerReference)), __LINE__);
        }
        $this->CustomerReference = $customerReference;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get DocumentProducer value
     * @return string|null
     */
    public function getDocumentProducer()
    {
        return $this->DocumentProducer;
    }
    /**
     * Set DocumentProducer value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\UploadDocumentProducerType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\UploadDocumentProducerType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentProducer
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail
     */
    public function setDocumentProducer($documentProducer = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\UploadDocumentProducerType::valueIsValid($documentProducer)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentProducer, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\UploadDocumentProducerType::getValidValues())), __LINE__);
        }
        $this->DocumentProducer = $documentProducer;
        return $this;
    }
    /**
     * Get DocumentType value
     * @return string|null
     */
    public function getDocumentType()
    {
        return $this->DocumentType;
    }
    /**
     * Set DocumentType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\UploadDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\UploadDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail
     */
    public function setDocumentType($documentType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\UploadDocumentType::valueIsValid($documentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\UploadDocumentType::getValidValues())), __LINE__);
        }
        $this->DocumentType = $documentType;
        return $this;
    }
    /**
     * Get DocumentId value
     * @return string|null
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }
    /**
     * Set DocumentId value
     * @param string $documentId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail
     */
    public function setDocumentId($documentId = null)
    {
        // validation for constraint: string
        if (!is_null($documentId) && !is_string($documentId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentId)), __LINE__);
        }
        $this->DocumentId = $documentId;
        return $this;
    }
    /**
     * Get DocumentIdProducer value
     * @return string|null
     */
    public function getDocumentIdProducer()
    {
        return $this->DocumentIdProducer;
    }
    /**
     * Set DocumentIdProducer value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\UploadDocumentIdProducer::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\UploadDocumentIdProducer::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentIdProducer
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail
     */
    public function setDocumentIdProducer($documentIdProducer = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\UploadDocumentIdProducer::valueIsValid($documentIdProducer)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentIdProducer, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\UploadDocumentIdProducer::getValidValues())), __LINE__);
        }
        $this->DocumentIdProducer = $documentIdProducer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentReferenceDetail
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
