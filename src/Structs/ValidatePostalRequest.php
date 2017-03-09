<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidatePostalRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ValidatePostalRequest
 * @subpackage Structs
 */
class ValidatePostalRequest extends AbstractStructBase
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
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public $ClientDetail;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The ShipDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShipDateTime;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $Address;
    /**
     * The RoutingCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RoutingCode;
    /**
     * The CheckForMismatch
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CheckForMismatch;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * Constructor method for ValidatePostalRequest
     * @uses ValidatePostalRequest::setWebAuthenticationDetail()
     * @uses ValidatePostalRequest::setClientDetail()
     * @uses ValidatePostalRequest::setVersion()
     * @uses ValidatePostalRequest::setTransactionDetail()
     * @uses ValidatePostalRequest::setShipDateTime()
     * @uses ValidatePostalRequest::setAddress()
     * @uses ValidatePostalRequest::setRoutingCode()
     * @uses ValidatePostalRequest::setCheckForMismatch()
     * @uses ValidatePostalRequest::setCarrierCode()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $shipDateTime
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $address
     * @param string $routingCode
     * @param bool $checkForMismatch
     * @param string $carrierCode
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $shipDateTime = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $address = null, $routingCode = null, $checkForMismatch = null, $carrierCode = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setShipDateTime($shipDateTime)
            ->setAddress($address)
            ->setRoutingCode($routingCode)
            ->setCheckForMismatch($checkForMismatch)
            ->setCarrierCode($carrierCode);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatePostalRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatePostalRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatePostalRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatePostalRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ShipDateTime value
     * @return string|null
     */
    public function getShipDateTime()
    {
        return $this->ShipDateTime;
    }
    /**
     * Set ShipDateTime value
     * @param string $shipDateTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatePostalRequest
     */
    public function setShipDateTime($shipDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($shipDateTime) && !is_string($shipDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipDateTime)), __LINE__);
        }
        $this->ShipDateTime = $shipDateTime;
        return $this;
    }
    /**
     * Get Address value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $address
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatePostalRequest
     */
    public function setAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get RoutingCode value
     * @return string|null
     */
    public function getRoutingCode()
    {
        return $this->RoutingCode;
    }
    /**
     * Set RoutingCode value
     * @param string $routingCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatePostalRequest
     */
    public function setRoutingCode($routingCode = null)
    {
        // validation for constraint: string
        if (!is_null($routingCode) && !is_string($routingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routingCode)), __LINE__);
        }
        $this->RoutingCode = $routingCode;
        return $this;
    }
    /**
     * Get CheckForMismatch value
     * @return bool|null
     */
    public function getCheckForMismatch()
    {
        return $this->CheckForMismatch;
    }
    /**
     * Set CheckForMismatch value
     * @param bool $checkForMismatch
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatePostalRequest
     */
    public function setCheckForMismatch($checkForMismatch = null)
    {
        $this->CheckForMismatch = $checkForMismatch;
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $carrierCode
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatePostalRequest
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $carrierCode, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ValidatePostalRequest
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
