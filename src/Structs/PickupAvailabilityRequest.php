<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupAvailabilityRequest Structs
 * Meta informations extracted from the WSDL
 * - type: ns:PickupAvailabilityRequest
 * @subpackage Structs
 */
class PickupAvailabilityRequest extends AbstractStructBase
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
     * The PickupType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PickupType;
    /**
     * The AccountNumber
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the account number for Freight Pickup Availability
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount
     */
    public $AccountNumber;
    /**
     * The PickupAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $PickupAddress;
    /**
     * The PickupRequestType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PickupRequestType;
    /**
     * The DispatchDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DispatchDate;
    /**
     * The NumberOfBusinessDays
     * Meta informations extracted from the WSDL
     * - documentation: Number of business days to consider when checking availability.
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfBusinessDays;
    /**
     * The PackageReadyTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PackageReadyTime;
    /**
     * The CustomerCloseTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerCloseTime;
    /**
     * The Carriers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Carriers;
    /**
     * The ShipmentAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PickupShipmentAttributes
     */
    public $ShipmentAttributes;
    /**
     * Constructor method for PickupAvailabilityRequest
     * @uses PickupAvailabilityRequest::setWebAuthenticationDetail()
     * @uses PickupAvailabilityRequest::setClientDetail()
     * @uses PickupAvailabilityRequest::setVersion()
     * @uses PickupAvailabilityRequest::setTransactionDetail()
     * @uses PickupAvailabilityRequest::setPickupType()
     * @uses PickupAvailabilityRequest::setAccountNumber()
     * @uses PickupAvailabilityRequest::setPickupAddress()
     * @uses PickupAvailabilityRequest::setPickupRequestType()
     * @uses PickupAvailabilityRequest::setDispatchDate()
     * @uses PickupAvailabilityRequest::setNumberOfBusinessDays()
     * @uses PickupAvailabilityRequest::setPackageReadyTime()
     * @uses PickupAvailabilityRequest::setCustomerCloseTime()
     * @uses PickupAvailabilityRequest::setCarriers()
     * @uses PickupAvailabilityRequest::setShipmentAttributes()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail
     * @param string $pickupType
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount $accountNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $pickupAddress
     * @param string[] $pickupRequestType
     * @param string $dispatchDate
     * @param int $numberOfBusinessDays
     * @param string $packageReadyTime
     * @param string $customerCloseTime
     * @param string[] $carriers
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PickupShipmentAttributes $shipmentAttributes
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\WebAuthenticationDetail $webAuthenticationDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail $clientDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null, $pickupType = null, \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount $accountNumber = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $pickupAddress = null, array $pickupRequestType = array(), $dispatchDate = null, $numberOfBusinessDays = null, $packageReadyTime = null, $customerCloseTime = null, array $carriers = array(), \NicholasCreativeMedia\FedExPHP\Structs\PickupShipmentAttributes $shipmentAttributes = null)
    {
        $this
            ->setWebAuthenticationDetail($webAuthenticationDetail)
            ->setClientDetail($clientDetail)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setPickupType($pickupType)
            ->setAccountNumber($accountNumber)
            ->setPickupAddress($pickupAddress)
            ->setPickupRequestType($pickupRequestType)
            ->setDispatchDate($dispatchDate)
            ->setNumberOfBusinessDays($numberOfBusinessDays)
            ->setPackageReadyTime($packageReadyTime)
            ->setCustomerCloseTime($customerCloseTime)
            ->setCarriers($carriers)
            ->setShipmentAttributes($shipmentAttributes);
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Structs\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get PickupType value
     * @return string|null
     */
    public function getPickupType()
    {
        return $this->PickupType;
    }
    /**
     * Set PickupType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pickupType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setPickupType($pickupType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PickupType::valueIsValid($pickupType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pickupType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PickupType::getValidValues())), __LINE__);
        }
        $this->PickupType = $pickupType;
        return $this;
    }
    /**
     * Get AccountNumber value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount|null
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount $accountNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setAccountNumber(\NicholasCreativeMedia\FedExPHP\Structs\AssociatedAccount $accountNumber = null)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get PickupAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getPickupAddress()
    {
        return $this->PickupAddress;
    }
    /**
     * Set PickupAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $pickupAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setPickupAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $pickupAddress = null)
    {
        $this->PickupAddress = $pickupAddress;
        return $this;
    }
    /**
     * Get PickupRequestType value
     * @return string[]|null
     */
    public function getPickupRequestType()
    {
        return $this->PickupRequestType;
    }
    /**
     * Set PickupRequestType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $pickupRequestType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setPickupRequestType(array $pickupRequestType = array())
    {
        $invalidValues = array();
        foreach ($pickupRequestType as $pickupAvailabilityRequestPickupRequestTypeItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::valueIsValid($pickupAvailabilityRequestPickupRequestTypeItem)) {
                $invalidValues[] = var_export($pickupAvailabilityRequestPickupRequestTypeItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::getValidValues())), __LINE__);
        }
        $this->PickupRequestType = $pickupRequestType;
        return $this;
    }
    /**
     * Add item to PickupRequestType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function addToPickupRequestType($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PickupRequestType::getValidValues())), __LINE__);
        }
        $this->PickupRequestType[] = $item;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
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
     * Get NumberOfBusinessDays value
     * @return int|null
     */
    public function getNumberOfBusinessDays()
    {
        return $this->NumberOfBusinessDays;
    }
    /**
     * Set NumberOfBusinessDays value
     * @param int $numberOfBusinessDays
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setNumberOfBusinessDays($numberOfBusinessDays = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfBusinessDays) && !is_numeric($numberOfBusinessDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfBusinessDays)), __LINE__);
        }
        $this->NumberOfBusinessDays = $numberOfBusinessDays;
        return $this;
    }
    /**
     * Get PackageReadyTime value
     * @return string|null
     */
    public function getPackageReadyTime()
    {
        return $this->PackageReadyTime;
    }
    /**
     * Set PackageReadyTime value
     * @param string $packageReadyTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setPackageReadyTime($packageReadyTime = null)
    {
        // validation for constraint: string
        if (!is_null($packageReadyTime) && !is_string($packageReadyTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packageReadyTime)), __LINE__);
        }
        $this->PackageReadyTime = $packageReadyTime;
        return $this;
    }
    /**
     * Get CustomerCloseTime value
     * @return string|null
     */
    public function getCustomerCloseTime()
    {
        return $this->CustomerCloseTime;
    }
    /**
     * Set CustomerCloseTime value
     * @param string $customerCloseTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setCustomerCloseTime($customerCloseTime = null)
    {
        // validation for constraint: string
        if (!is_null($customerCloseTime) && !is_string($customerCloseTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerCloseTime)), __LINE__);
        }
        $this->CustomerCloseTime = $customerCloseTime;
        return $this;
    }
    /**
     * Get Carriers value
     * @return string[]|null
     */
    public function getCarriers()
    {
        return $this->Carriers;
    }
    /**
     * Set Carriers value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $carriers
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setCarriers(array $carriers = array())
    {
        $invalidValues = array();
        foreach ($carriers as $pickupAvailabilityRequestCarriersItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid($pickupAvailabilityRequestCarriersItem)) {
                $invalidValues[] = var_export($pickupAvailabilityRequestCarriersItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->Carriers = $carriers;
        return $this;
    }
    /**
     * Add item to Carriers value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function addToCarriers($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CarrierCodeType::getValidValues())), __LINE__);
        }
        $this->Carriers[] = $item;
        return $this;
    }
    /**
     * Get ShipmentAttributes value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupShipmentAttributes|null
     */
    public function getShipmentAttributes()
    {
        return $this->ShipmentAttributes;
    }
    /**
     * Set ShipmentAttributes value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PickupShipmentAttributes $shipmentAttributes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
     */
    public function setShipmentAttributes(\NicholasCreativeMedia\FedExPHP\Structs\PickupShipmentAttributes $shipmentAttributes = null)
    {
        $this->ShipmentAttributes = $shipmentAttributes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PickupAvailabilityRequest
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
