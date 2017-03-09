<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTagRequest StructType
 * Meta informations extracted from the WSDL
 * - type: ns:DeleteTagRequest
 * @subpackage Structs
 */
class DeleteTagRequest extends AbstractStructBase
{
    /**
     * The WebAuthenticationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\WebAuthenticationDetail
     */
    public $WebAuthenticationDetail;
    /**
     * The ClientDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ClientDetail
     */
    public $ClientDetail;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId
     */
    public $Version;
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - documentation: If the original ProcessTagRequest specified third-party payment, then the delete request must contain the same pay type and payor account number for security purposes.
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment
     */
    public $Payment;
    /**
     * The ConfirmationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $ConfirmationNumber;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The DispatchLocationId
     * Meta informations extracted from the WSDL
     * - documentation: Only used for tags which had FedEx Express services.
     * - minOccurs: 0
     * @var string
     */
    public $DispatchLocationId;
    /**
     * The DispatchDate
     * Meta informations extracted from the WSDL
     * - documentation: Only used for tags which had FedEx Express services.
     * - minOccurs: 0
     * @var string
     */
    public $DispatchDate;
    /**
     * Constructor method for DeleteTagRequest
     * @uses DeleteTagRequest::setWebAuthenticationDetail()
     * @uses DeleteTagRequest::setClientDetail()
     * @uses DeleteTagRequest::setVersion()
     * @uses DeleteTagRequest::setPayment()
     * @uses DeleteTagRequest::setConfirmationNumber()
     * @uses DeleteTagRequest::setTransactionDetail()
     * @uses DeleteTagRequest::setDispatchLocationId()
     * @uses DeleteTagRequest::setDispatchDate()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment $payment
     * @param string $confirmationNumber
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail $transactionDetail
     * @param string $dispatchLocationId
     * @param string $dispatchDate
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Ship\StructType\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment $payment = null, $confirmationNumber = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail $transactionDetail = null, $dispatchLocationId = null, $dispatchDate = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setPayment($payment)
            ->setConfirmationNumber($confirmationNumber)
            ->setTransactionDetail($transactionDetail)
            ->setDispatchLocationId($dispatchLocationId)
            ->setDispatchDate($dispatchDate);
    }
    /**
     * Get WebAuthenticationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    /**
     * Set WebAuthenticationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\WebAuthenticationDetail $webAuthenticationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteTagRequest
     */
    public function setWebAuthenticationDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\WebAuthenticationDetail $webAuthenticationDetail = null)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    /**
     * Get ClientDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    /**
     * Set ClientDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ClientDetail $clientDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteTagRequest
     */
    public function setClientDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ClientDetail $clientDetail = null)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    /**
     * Get Version value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId $version
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteTagRequest
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get Payment value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment $payment
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteTagRequest
     */
    public function setPayment(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment $payment = null)
    {
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Get ConfirmationNumber value
     * @return string
     */
    public function getConfirmationNumber()
    {
        return $this->ConfirmationNumber;
    }
    /**
     * Set ConfirmationNumber value
     * @param string $confirmationNumber
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteTagRequest
     */
    public function setConfirmationNumber($confirmationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationNumber) && !is_string($confirmationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmationNumber)), __LINE__);
        }
        $this->ConfirmationNumber = $confirmationNumber;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail $transactionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteTagRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get DispatchLocationId value
     * @return string|null
     */
    public function getDispatchLocationId()
    {
        return $this->DispatchLocationId;
    }
    /**
     * Set DispatchLocationId value
     * @param string $dispatchLocationId
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteTagRequest
     */
    public function setDispatchLocationId($dispatchLocationId = null)
    {
        // validation for constraint: string
        if (!is_null($dispatchLocationId) && !is_string($dispatchLocationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dispatchLocationId)), __LINE__);
        }
        $this->DispatchLocationId = $dispatchLocationId;
        return $this;
    }
    /**
     * Get DispatchDate value
     * @return string|null
     */
    public function getDispatchDate()
    {
        return $this->DispatchDate;
    }
    /**
     * Set DispatchDate value
     * @param string $dispatchDate
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteTagRequest
     */
    public function setDispatchDate($dispatchDate = null)
    {
        // validation for constraint: string
        if (!is_null($dispatchDate) && !is_string($dispatchDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dispatchDate)), __LINE__);
        }
        $this->DispatchDate = $dispatchDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteTagRequest
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
