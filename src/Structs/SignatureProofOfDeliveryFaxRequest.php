<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureProofOfDeliveryFaxRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:SignatureProofOfDeliveryFaxRequest
 * @subpackage Structs
 */
class SignatureProofOfDeliveryFaxRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data identifying the client submitting the transaction.
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public $ClientDetail;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: The version of the request being used.
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains a free form field that is echoed back in the reply to match requests with replies and data that governs the data payload language/translations.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The QualifiedTrackingNumber
     * Meta informations extracted from the WSDL
     * - documentation: Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\QualifiedTrackingNumber
     */
    public $QualifiedTrackingNumber;
    /**
     * The AdditionalComments
     * Meta informations extracted from the WSDL
     * - documentation: Additional customer-supplied text to be added to the body of the letter.
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalComments;
    /**
     * The FaxSender
     * Meta informations extracted from the WSDL
     * - documentation: Contact and address information about the person requesting the fax to be sent.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress
     */
    public $FaxSender;
    /**
     * The FaxRecipient
     * Meta informations extracted from the WSDL
     * - documentation: Contact and address information, including the fax number, about the person to receive the fax.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress
     */
    public $FaxRecipient;
    /**
     * Constructor method for SignatureProofOfDeliveryFaxRequest
     * @uses SignatureProofOfDeliveryFaxRequest::setWebAuthenticationDetail()
     * @uses SignatureProofOfDeliveryFaxRequest::setClientDetail()
     * @uses SignatureProofOfDeliveryFaxRequest::setVersion()
     * @uses SignatureProofOfDeliveryFaxRequest::setTransactionDetail()
     * @uses SignatureProofOfDeliveryFaxRequest::setQualifiedTrackingNumber()
     * @uses SignatureProofOfDeliveryFaxRequest::setAdditionalComments()
     * @uses SignatureProofOfDeliveryFaxRequest::setFaxSender()
     * @uses SignatureProofOfDeliveryFaxRequest::setFaxRecipient()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\QualifiedTrackingNumber $qualifiedTrackingNumber
     * @param string $additionalComments
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $faxSender
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $faxRecipient
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\QualifiedTrackingNumber $qualifiedTrackingNumber = null, $additionalComments = null, \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $faxSender = null, \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $faxRecipient = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setQualifiedTrackingNumber($qualifiedTrackingNumber)
            ->setAdditionalComments($additionalComments)
            ->setFaxSender($faxSender)
            ->setFaxRecipient($faxRecipient);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryFaxRequest
     */
    public function setWebAuthenticationDetail(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryFaxRequest
     */
    public function setClientDetail(\NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    /**
     * Get Version value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryFaxRequest
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryFaxRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get QualifiedTrackingNumber value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\QualifiedTrackingNumber|null
     */
    public function getQualifiedTrackingNumber()
    {
        return $this->QualifiedTrackingNumber;
    }
    /**
     * Set QualifiedTrackingNumber value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\QualifiedTrackingNumber $qualifiedTrackingNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryFaxRequest
     */
    public function setQualifiedTrackingNumber(\NicholasCreativeMedia\FedExPHP\Structs\QualifiedTrackingNumber $qualifiedTrackingNumber = null)
    {
        $this->QualifiedTrackingNumber = $qualifiedTrackingNumber;
        return $this;
    }
    /**
     * Get AdditionalComments value
     * @return string|null
     */
    public function getAdditionalComments()
    {
        return $this->AdditionalComments;
    }
    /**
     * Set AdditionalComments value
     * @param string $additionalComments
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryFaxRequest
     */
    public function setAdditionalComments($additionalComments = null)
    {
        // validation for constraint: string
        if (!is_null($additionalComments) && !is_string($additionalComments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalComments)), __LINE__);
        }
        $this->AdditionalComments = $additionalComments;
        return $this;
    }
    /**
     * Get FaxSender value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress|null
     */
    public function getFaxSender()
    {
        return $this->FaxSender;
    }
    /**
     * Set FaxSender value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $faxSender
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxSender(\NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $faxSender = null)
    {
        $this->FaxSender = $faxSender;
        return $this;
    }
    /**
     * Get FaxRecipient value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress|null
     */
    public function getFaxRecipient()
    {
        return $this->FaxRecipient;
    }
    /**
     * Set FaxRecipient value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $faxRecipient
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxRecipient(\NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $faxRecipient = null)
    {
        $this->FaxRecipient = $faxRecipient;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureProofOfDeliveryFaxRequest
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
