<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NaftaCertificateOfOriginDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Data required to produce a Certificate of Origin document. Remaining content (business data) to be defined once requirements have been completed.
 * @subpackage Structs
 */
class NaftaCertificateOfOriginDetail extends AbstractStructBase
{
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat
     */
    public $Format;
    /**
     * The BlanketPeriod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\DateRange
     */
    public $BlanketPeriod;
    /**
     * The ImporterSpecification
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which Party (if any) from the shipment is to be used as the source of importer data on the NAFTA COO form.
     * - minOccurs: 0
     * @var string
     */
    public $ImporterSpecification;
    /**
     * The SignatureContact
     * Meta informations extracted from the WSDL
     * - documentation: Contact information for "Authorized Signature" area of form.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact
     */
    public $SignatureContact;
    /**
     * The ProducerSpecification
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProducerSpecification;
    /**
     * The Producers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaProducer[]
     */
    public $Producers;
    /**
     * The CustomerImageUsages
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage[]
     */
    public $CustomerImageUsages;
    /**
     * Constructor method for NaftaCertificateOfOriginDetail
     * @uses NaftaCertificateOfOriginDetail::setFormat()
     * @uses NaftaCertificateOfOriginDetail::setBlanketPeriod()
     * @uses NaftaCertificateOfOriginDetail::setImporterSpecification()
     * @uses NaftaCertificateOfOriginDetail::setSignatureContact()
     * @uses NaftaCertificateOfOriginDetail::setProducerSpecification()
     * @uses NaftaCertificateOfOriginDetail::setProducers()
     * @uses NaftaCertificateOfOriginDetail::setCustomerImageUsages()
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat $format
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\DateRange $blanketPeriod
     * @param string $importerSpecification
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact $signatureContact
     * @param string $producerSpecification
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaProducer[] $producers
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage[] $customerImageUsages
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat $format = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\DateRange $blanketPeriod = null, $importerSpecification = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact $signatureContact = null, $producerSpecification = null, array $producers = array(), array $customerImageUsages = array())
    {
        $this
            ->setFormat($format)
            ->setBlanketPeriod($blanketPeriod)
            ->setImporterSpecification($importerSpecification)
            ->setSignatureContact($signatureContact)
            ->setProducerSpecification($producerSpecification)
            ->setProducers($producers)
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
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaCertificateOfOriginDetail
     */
    public function setFormat(\NicholasCreativeMedia\FedExPHP\Rate\StructType\ShippingDocumentFormat $format = null)
    {
        $this->Format = $format;
        return $this;
    }
    /**
     * Get BlanketPeriod value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DateRange|null
     */
    public function getBlanketPeriod()
    {
        return $this->BlanketPeriod;
    }
    /**
     * Set BlanketPeriod value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\DateRange $blanketPeriod
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaCertificateOfOriginDetail
     */
    public function setBlanketPeriod(\NicholasCreativeMedia\FedExPHP\Rate\StructType\DateRange $blanketPeriod = null)
    {
        $this->BlanketPeriod = $blanketPeriod;
        return $this;
    }
    /**
     * Get ImporterSpecification value
     * @return string|null
     */
    public function getImporterSpecification()
    {
        return $this->ImporterSpecification;
    }
    /**
     * Set ImporterSpecification value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\NaftaImporterSpecificationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\NaftaImporterSpecificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $importerSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaCertificateOfOriginDetail
     */
    public function setImporterSpecification($importerSpecification = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\NaftaImporterSpecificationType::valueIsValid($importerSpecification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $importerSpecification, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\NaftaImporterSpecificationType::getValidValues())), __LINE__);
        }
        $this->ImporterSpecification = $importerSpecification;
        return $this;
    }
    /**
     * Get SignatureContact value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact|null
     */
    public function getSignatureContact()
    {
        return $this->SignatureContact;
    }
    /**
     * Set SignatureContact value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact $signatureContact
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaCertificateOfOriginDetail
     */
    public function setSignatureContact(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact $signatureContact = null)
    {
        $this->SignatureContact = $signatureContact;
        return $this;
    }
    /**
     * Get ProducerSpecification value
     * @return string|null
     */
    public function getProducerSpecification()
    {
        return $this->ProducerSpecification;
    }
    /**
     * Set ProducerSpecification value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\NaftaProducerSpecificationType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\NaftaProducerSpecificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $producerSpecification
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaCertificateOfOriginDetail
     */
    public function setProducerSpecification($producerSpecification = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\NaftaProducerSpecificationType::valueIsValid($producerSpecification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $producerSpecification, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\NaftaProducerSpecificationType::getValidValues())), __LINE__);
        }
        $this->ProducerSpecification = $producerSpecification;
        return $this;
    }
    /**
     * Get Producers value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaProducer[]|null
     */
    public function getProducers()
    {
        return $this->Producers;
    }
    /**
     * Set Producers value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaProducer[] $producers
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaCertificateOfOriginDetail
     */
    public function setProducers(array $producers = array())
    {
        foreach ($producers as $naftaCertificateOfOriginDetailProducersItem) {
            // validation for constraint: itemType
            if (!$naftaCertificateOfOriginDetailProducersItem instanceof \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaProducer) {
                throw new \InvalidArgumentException(sprintf('The Producers property can only contain items of \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaProducer, "%s" given', is_object($naftaCertificateOfOriginDetailProducersItem) ? get_class($naftaCertificateOfOriginDetailProducersItem) : gettype($naftaCertificateOfOriginDetailProducersItem)), __LINE__);
            }
        }
        $this->Producers = $producers;
        return $this;
    }
    /**
     * Add item to Producers value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaProducer $item
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaCertificateOfOriginDetail
     */
    public function addToProducers(\NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaProducer $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaProducer) {
            throw new \InvalidArgumentException(sprintf('The Producers property can only contain items of \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaProducer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Producers[] = $item;
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
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaCertificateOfOriginDetail
     */
    public function setCustomerImageUsages(array $customerImageUsages = array())
    {
        foreach ($customerImageUsages as $naftaCertificateOfOriginDetailCustomerImageUsagesItem) {
            // validation for constraint: itemType
            if (!$naftaCertificateOfOriginDetailCustomerImageUsagesItem instanceof \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage) {
                throw new \InvalidArgumentException(sprintf('The CustomerImageUsages property can only contain items of \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage, "%s" given', is_object($naftaCertificateOfOriginDetailCustomerImageUsagesItem) ? get_class($naftaCertificateOfOriginDetailCustomerImageUsagesItem) : gettype($naftaCertificateOfOriginDetailCustomerImageUsagesItem)), __LINE__);
            }
        }
        $this->CustomerImageUsages = $customerImageUsages;
        return $this;
    }
    /**
     * Add item to CustomerImageUsages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomerImageUsage $item
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaCertificateOfOriginDetail
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
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\NaftaCertificateOfOriginDetail
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
