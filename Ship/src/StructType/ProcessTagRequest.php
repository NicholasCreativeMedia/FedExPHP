<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessTagRequest StructType
 * Meta informations extracted from the WSDL
 * - type: ns:ProcessTagRequest
 * @subpackage Structs
 */
class ProcessTagRequest extends AbstractStructBase
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
     * The RequestedShipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public $RequestedShipment;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * Constructor method for ProcessTagRequest
     * @uses ProcessTagRequest::setWebAuthenticationDetail()
     * @uses ProcessTagRequest::setClientDetail()
     * @uses ProcessTagRequest::setVersion()
     * @uses ProcessTagRequest::setRequestedShipment()
     * @uses ProcessTagRequest::setTransactionDetail()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment $requestedShipment
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail $transactionDetail
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Ship\StructType\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment $requestedShipment = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail $transactionDetail = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setRequestedShipment($requestedShipment)
            ->setTransactionDetail($transactionDetail);
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagRequest
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get RequestedShipment value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment
     */
    public function getRequestedShipment()
    {
        return $this->RequestedShipment;
    }
    /**
     * Set RequestedShipment value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment $requestedShipment
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagRequest
     */
    public function setRequestedShipment(\NicholasCreativeMedia\FedExPHP\Ship\StructType\RequestedShipment $requestedShipment = null)
    {
        $this->RequestedShipment = $requestedShipment;
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ProcessTagRequest
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
