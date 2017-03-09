<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteShipmentRequest StructType
 * Meta informations extracted from the WSDL
 * - type: ns:DeleteShipmentRequest
 * @subpackage Structs
 */
class DeleteShipmentRequest extends AbstractStructBase
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
     * The DeletionControl
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $DeletionControl;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The ShipTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ShipTimestamp;
    /**
     * The TrackingId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId
     */
    public $TrackingId;
    /**
     * Constructor method for DeleteShipmentRequest
     * @uses DeleteShipmentRequest::setWebAuthenticationDetail()
     * @uses DeleteShipmentRequest::setClientDetail()
     * @uses DeleteShipmentRequest::setVersion()
     * @uses DeleteShipmentRequest::setDeletionControl()
     * @uses DeleteShipmentRequest::setTransactionDetail()
     * @uses DeleteShipmentRequest::setShipTimestamp()
     * @uses DeleteShipmentRequest::setTrackingId()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId $version
     * @param string $deletionControl
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail $transactionDetail
     * @param string $shipTimestamp
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $trackingId
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Ship\StructType\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId $version = null, $deletionControl = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail $transactionDetail = null, $shipTimestamp = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $trackingId = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setDeletionControl($deletionControl)
            ->setTransactionDetail($transactionDetail)
            ->setShipTimestamp($shipTimestamp)
            ->setTrackingId($trackingId);
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteShipmentRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteShipmentRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteShipmentRequest
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Ship\StructType\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get DeletionControl value
     * @return string
     */
    public function getDeletionControl()
    {
        return $this->DeletionControl;
    }
    /**
     * Set DeletionControl value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\DeletionControlType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\DeletionControlType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deletionControl
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteShipmentRequest
     */
    public function setDeletionControl($deletionControl = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\DeletionControlType::valueIsValid($deletionControl)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deletionControl, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\DeletionControlType::getValidValues())), __LINE__);
        }
        $this->DeletionControl = $deletionControl;
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
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteShipmentRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get ShipTimestamp value
     * @return string|null
     */
    public function getShipTimestamp()
    {
        return $this->ShipTimestamp;
    }
    /**
     * Set ShipTimestamp value
     * @param string $shipTimestamp
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteShipmentRequest
     */
    public function setShipTimestamp($shipTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($shipTimestamp) && !is_string($shipTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipTimestamp)), __LINE__);
        }
        $this->ShipTimestamp = $shipTimestamp;
        return $this;
    }
    /**
     * Get TrackingId value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId|null
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }
    /**
     * Set TrackingId value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $trackingId
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteShipmentRequest
     */
    public function setTrackingId(\NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $trackingId = null)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeleteShipmentRequest
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