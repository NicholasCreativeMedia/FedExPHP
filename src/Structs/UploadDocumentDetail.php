<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadDocumentDetail Structs
 * @subpackage Structs
 */
class UploadDocumentDetail extends AbstractStructBase
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
     * The FileName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FileName;
    /**
     * The DocumentContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentContent;
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the date until which the document is available
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationDate;
    /**
     * Constructor method for UploadDocumentDetail
     * @uses UploadDocumentDetail::setLineNumber()
     * @uses UploadDocumentDetail::setCustomerReference()
     * @uses UploadDocumentDetail::setDocumentProducer()
     * @uses UploadDocumentDetail::setDocumentType()
     * @uses UploadDocumentDetail::setFileName()
     * @uses UploadDocumentDetail::setDocumentContent()
     * @uses UploadDocumentDetail::setExpirationDate()
     * @param int $lineNumber
     * @param string $customerReference
     * @param string $documentProducer
     * @param string $documentType
     * @param string $fileName
     * @param string $documentContent
     * @param string $expirationDate
     */
    public function __construct($lineNumber = null, $customerReference = null, $documentProducer = null, $documentType = null, $fileName = null, $documentContent = null, $expirationDate = null)
    {
        $this
            ->setLineNumber($lineNumber)
            ->setCustomerReference($customerReference)
            ->setDocumentProducer($documentProducer)
            ->setDocumentType($documentType)
            ->setFileName($fileName)
            ->setDocumentContent($documentContent)
            ->setExpirationDate($expirationDate);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail
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
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        return $this;
    }
    /**
     * Get DocumentContent value
     * @return string|null
     */
    public function getDocumentContent()
    {
        return $this->DocumentContent;
    }
    /**
     * Set DocumentContent value
     * @param string $documentContent
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail
     */
    public function setDocumentContent($documentContent = null)
    {
        // validation for constraint: string
        if (!is_null($documentContent) && !is_string($documentContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentContent)), __LINE__);
        }
        $this->DocumentContent = $documentContent;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\UploadDocumentDetail
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
