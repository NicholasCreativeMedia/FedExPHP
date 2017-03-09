<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceAvailabilityRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:ServiceAvailabilityRequest
 * @subpackage Structs
 */
class ServiceAvailabilityRequest extends AbstractStructBase
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
     * The Origin
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $Origin;
    /**
     * The Destination
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $Destination;
    /**
     * The ShipDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $ShipDate;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Optionally supplied instead of service to restrict reply to services for a specific carrier.
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - documentation: Restricts reply to single service, if supplied.
     * - minOccurs: 0
     * @var string
     */
    public $Service;
    /**
     * The Packaging
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Packaging;
    /**
     * Constructor method for ServiceAvailabilityRequest
     * @uses ServiceAvailabilityRequest::setWebAuthenticationDetail()
     * @uses ServiceAvailabilityRequest::setClientDetail()
     * @uses ServiceAvailabilityRequest::setVersion()
     * @uses ServiceAvailabilityRequest::setOrigin()
     * @uses ServiceAvailabilityRequest::setDestination()
     * @uses ServiceAvailabilityRequest::setShipDate()
     * @uses ServiceAvailabilityRequest::setTransactionDetail()
     * @uses ServiceAvailabilityRequest::setCarrierCode()
     * @uses ServiceAvailabilityRequest::setService()
     * @uses ServiceAvailabilityRequest::setPackaging()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $origin
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $destination
     * @param string $shipDate
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $carrierCode
     * @param string $service
     * @param string $packaging
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $origin = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $destination = null, $shipDate = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $carrierCode = null, $service = null, $packaging = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setShipDate($shipDate)
            ->setTransactionDetail($transactionDetail)
            ->setCarrierCode($carrierCode)
            ->setService($service)
            ->setPackaging($packaging);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get Origin value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public function getOrigin()
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $origin
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest
     */
    public function setOrigin(\NicholasCreativeMedia\FedExPHP\Structs\Address $origin = null)
    {
        $this->Origin = $origin;
        return $this;
    }
    /**
     * Get Destination value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $destination
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest
     */
    public function setDestination(\NicholasCreativeMedia\FedExPHP\Structs\Address $destination = null)
    {
        $this->Destination = $destination;
        return $this;
    }
    /**
     * Get ShipDate value
     * @return string
     */
    public function getShipDate()
    {
        return $this->ShipDate;
    }
    /**
     * Set ShipDate value
     * @param string $shipDate
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest
     */
    public function setShipDate($shipDate = null)
    {
        // validation for constraint: string
        if (!is_null($shipDate) && !is_string($shipDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipDate)), __LINE__);
        }
        $this->ShipDate = $shipDate;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest
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
     * Get Service value
     * @return string|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $service
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest
     */
    public function setService($service = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ServiceType::valueIsValid($service)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $service, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::getValidValues())), __LINE__);
        }
        $this->Service = $service;
        return $this;
    }
    /**
     * Get Packaging value
     * @return string|null
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    /**
     * Set Packaging value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackagingType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackagingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packaging
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest
     */
    public function setPackaging($packaging = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PackagingType::valueIsValid($packaging)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packaging, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PackagingType::getValidValues())), __LINE__);
        }
        $this->Packaging = $packaging;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceAvailabilityRequest
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
