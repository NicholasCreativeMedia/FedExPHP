<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:TrackRequest
 * @subpackage Structs
 */
class TrackRequest extends AbstractStructBase
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
     * The SelectionDetails
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details needed to select the shipment being requested to be tracked.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail[]
     */
    public $SelectionDetails;
    /**
     * The TransactionTimeOutValueInMilliseconds
     * Meta informations extracted from the WSDL
     * - documentation: The customer can specify a desired time out value for this particular transaction.
     * - minOccurs: 0
     * @var int
     */
    public $TransactionTimeOutValueInMilliseconds;
    /**
     * The ProcessingOptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ProcessingOptions;
    /**
     * Constructor method for TrackRequest
     * @uses TrackRequest::setWebAuthenticationDetail()
     * @uses TrackRequest::setClientDetail()
     * @uses TrackRequest::setVersion()
     * @uses TrackRequest::setTransactionDetail()
     * @uses TrackRequest::setSelectionDetails()
     * @uses TrackRequest::setTransactionTimeOutValueInMilliseconds()
     * @uses TrackRequest::setProcessingOptions()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail[] $selectionDetails
     * @param int $transactionTimeOutValueInMilliseconds
     * @param string[] $processingOptions
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, array $selectionDetails = array(), $transactionTimeOutValueInMilliseconds = null, array $processingOptions = array())
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setSelectionDetails($selectionDetails)
            ->setTransactionTimeOutValueInMilliseconds($transactionTimeOutValueInMilliseconds)
            ->setProcessingOptions($processingOptions);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get SelectionDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail[]|null
     */
    public function getSelectionDetails()
    {
        return $this->SelectionDetails;
    }
    /**
     * Set SelectionDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail[] $selectionDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackRequest
     */
    public function setSelectionDetails(array $selectionDetails = array())
    {
        foreach ($selectionDetails as $trackRequestSelectionDetailsItem) {
            // validation for constraint: itemType
            if (!$trackRequestSelectionDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail) {
                throw new \InvalidArgumentException(sprintf('The SelectionDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail, "%s" given', is_object($trackRequestSelectionDetailsItem) ? get_class($trackRequestSelectionDetailsItem) : gettype($trackRequestSelectionDetailsItem)), __LINE__);
            }
        }
        $this->SelectionDetails = $selectionDetails;
        return $this;
    }
    /**
     * Add item to SelectionDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackRequest
     */
    public function addToSelectionDetails(\NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail) {
            throw new \InvalidArgumentException(sprintf('The SelectionDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackSelectionDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SelectionDetails[] = $item;
        return $this;
    }
    /**
     * Get TransactionTimeOutValueInMilliseconds value
     * @return int|null
     */
    public function getTransactionTimeOutValueInMilliseconds()
    {
        return $this->TransactionTimeOutValueInMilliseconds;
    }
    /**
     * Set TransactionTimeOutValueInMilliseconds value
     * @param int $transactionTimeOutValueInMilliseconds
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackRequest
     */
    public function setTransactionTimeOutValueInMilliseconds($transactionTimeOutValueInMilliseconds = null)
    {
        // validation for constraint: int
        if (!is_null($transactionTimeOutValueInMilliseconds) && !is_numeric($transactionTimeOutValueInMilliseconds)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($transactionTimeOutValueInMilliseconds)), __LINE__);
        }
        $this->TransactionTimeOutValueInMilliseconds = $transactionTimeOutValueInMilliseconds;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackRequestProcessingOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackRequestProcessingOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $processingOptions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackRequest
     */
    public function setProcessingOptions(array $processingOptions = array())
    {
        $invalidValues = array();
        foreach ($processingOptions as $trackRequestProcessingOptionsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackRequestProcessingOptionType::valueIsValid($trackRequestProcessingOptionsItem)) {
                $invalidValues[] = var_export($trackRequestProcessingOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackRequestProcessingOptionType::getValidValues())), __LINE__);
        }
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    /**
     * Add item to ProcessingOptions value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackRequestProcessingOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TrackRequestProcessingOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackRequest
     */
    public function addToProcessingOptions($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TrackRequestProcessingOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TrackRequestProcessingOptionType::getValidValues())), __LINE__);
        }
        $this->ProcessingOptions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackRequest
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
