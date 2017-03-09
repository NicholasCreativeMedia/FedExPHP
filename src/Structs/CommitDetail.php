<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommitDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Information about the transit time and delivery commitment date and time.
 * @subpackage Structs
 */
class CommitDetail extends AbstractStructBase
{
    /**
     * The CommodityName
     * Meta informations extracted from the WSDL
     * - documentation: The Commodity applicable to this commitment.
     * - minOccurs: 0
     * @var string
     */
    public $CommodityName;
    /**
     * The ServiceType
     * Meta informations extracted from the WSDL
     * - documentation: The FedEx service type applicable to this commitment.
     * - minOccurs: 0
     * @var string
     */
    public $ServiceType;
    /**
     * The AppliedOptions
     * Meta informations extracted from the WSDL
     * - documentation: Shows the specific combination of service options combined with the service type that produced this committment in the set returned to the caller.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AppliedOptions;
    /**
     * The AppliedSubOptions
     * Meta informations extracted from the WSDL
     * - documentation: Supporting detail for applied options identified in preceding field.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ServiceSubOptionDetail
     */
    public $AppliedSubOptions;
    /**
     * The DerivedShipmentSignatureOption
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail
     */
    public $DerivedShipmentSignatureOption;
    /**
     * The DerivedPackageSignatureOptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail[]
     */
    public $DerivedPackageSignatureOptions;
    /**
     * The DerivedOriginDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CleansedAddressAndLocationDetail
     */
    public $DerivedOriginDetail;
    /**
     * The DerivedDestinationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CleansedAddressAndLocationDetail
     */
    public $DerivedDestinationDetail;
    /**
     * The CommitTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: THe delivery commitment date/time. Express Only.
     * - minOccurs: 0
     * @var string
     */
    public $CommitTimestamp;
    /**
     * The DayOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: The delivery commitment day of the week.
     * - minOccurs: 0
     * @var string
     */
    public $DayOfWeek;
    /**
     * The TransitTime
     * Meta informations extracted from the WSDL
     * - documentation: The number of transit days; applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
     * - minOccurs: 0
     * @var string
     */
    public $TransitTime;
    /**
     * The MaximumTransitTime
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of transit days, for SmartPost shipments.
     * - minOccurs: 0
     * @var string
     */
    public $MaximumTransitTime;
    /**
     * The DestinationServiceArea
     * Meta informations extracted from the WSDL
     * - documentation: The service area code for the destination of this shipment. Express only.
     * - minOccurs: 0
     * @var string
     */
    public $DestinationServiceArea;
    /**
     * The BrokerAddress
     * Meta informations extracted from the WSDL
     * - documentation: The address of the broker to be used for this shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $BrokerAddress;
    /**
     * The BrokerLocationId
     * Meta informations extracted from the WSDL
     * - documentation: The FedEx location identifier for the broker.
     * - minOccurs: 0
     * @var string
     */
    public $BrokerLocationId;
    /**
     * The BrokerCommitTimestamp
     * Meta informations extracted from the WSDL
     * - documentation: The delivery commitment date/time the shipment will arrive at the border.
     * - minOccurs: 0
     * @var string
     */
    public $BrokerCommitTimestamp;
    /**
     * The BrokerCommitDayOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: The delivery commitment day of the week the shipment will arrive at the border.
     * - minOccurs: 0
     * @var string
     */
    public $BrokerCommitDayOfWeek;
    /**
     * The BrokerToDestinationDays
     * Meta informations extracted from the WSDL
     * - documentation: The number of days it will take for the shipment to make it from broker to destination
     * - minOccurs: 0
     * @var int
     */
    public $BrokerToDestinationDays;
    /**
     * The ProofOfDeliveryDate
     * Meta informations extracted from the WSDL
     * - documentation: The delivery commitment date for shipment served by GSP (Global Service Provider)
     * - minOccurs: 0
     * @var string
     */
    public $ProofOfDeliveryDate;
    /**
     * The ProofOfDeliveryDayOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: The delivery commitment day of the week for the shipment served by GSP (Global Service Provider)
     * - minOccurs: 0
     * @var string
     */
    public $ProofOfDeliveryDayOfWeek;
    /**
     * The CommitMessages
     * Meta informations extracted from the WSDL
     * - documentation: Messages concerning the ability to provide an accurate delivery commitment on an International commit quote. These could be messages providing information about why a commitment could not be returned or a successful message such as
     * "REQUEST COMPLETED"
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Notification[]
     */
    public $CommitMessages;
    /**
     * The DeliveryMessages
     * Meta informations extracted from the WSDL
     * - documentation: Messages concerning the delivery commitment on an International commit quote such as "0:00 A.M. IF NO CUSTOMS DELAY"
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DeliveryMessages;
    /**
     * The DelayDetails
     * Meta informations extracted from the WSDL
     * - documentation: Information about why a shipment delivery is delayed and at what level (country/service etc.).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail[]
     */
    public $DelayDetails;
    /**
     * The DocumentContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentContent;
    /**
     * The RequiredDocuments
     * Meta informations extracted from the WSDL
     * - documentation: Required documentation for this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RequiredDocuments;
    /**
     * The FreightCommitDetail
     * Meta informations extracted from the WSDL
     * - documentation: Freight origin and destination city center information and total distance between origin and destination city centers.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\FreightCommitDetail
     */
    public $FreightCommitDetail;
    /**
     * Constructor method for CommitDetail
     * @uses CommitDetail::setCommodityName()
     * @uses CommitDetail::setServiceType()
     * @uses CommitDetail::setAppliedOptions()
     * @uses CommitDetail::setAppliedSubOptions()
     * @uses CommitDetail::setDerivedShipmentSignatureOption()
     * @uses CommitDetail::setDerivedPackageSignatureOptions()
     * @uses CommitDetail::setDerivedOriginDetail()
     * @uses CommitDetail::setDerivedDestinationDetail()
     * @uses CommitDetail::setCommitTimestamp()
     * @uses CommitDetail::setDayOfWeek()
     * @uses CommitDetail::setTransitTime()
     * @uses CommitDetail::setMaximumTransitTime()
     * @uses CommitDetail::setDestinationServiceArea()
     * @uses CommitDetail::setBrokerAddress()
     * @uses CommitDetail::setBrokerLocationId()
     * @uses CommitDetail::setBrokerCommitTimestamp()
     * @uses CommitDetail::setBrokerCommitDayOfWeek()
     * @uses CommitDetail::setBrokerToDestinationDays()
     * @uses CommitDetail::setProofOfDeliveryDate()
     * @uses CommitDetail::setProofOfDeliveryDayOfWeek()
     * @uses CommitDetail::setCommitMessages()
     * @uses CommitDetail::setDeliveryMessages()
     * @uses CommitDetail::setDelayDetails()
     * @uses CommitDetail::setDocumentContent()
     * @uses CommitDetail::setRequiredDocuments()
     * @uses CommitDetail::setFreightCommitDetail()
     * @param string $commodityName
     * @param string $serviceType
     * @param string[] $appliedOptions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ServiceSubOptionDetail $appliedSubOptions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $derivedShipmentSignatureOption
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail[] $derivedPackageSignatureOptions
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CleansedAddressAndLocationDetail $derivedOriginDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CleansedAddressAndLocationDetail $derivedDestinationDetail
     * @param string $commitTimestamp
     * @param string $dayOfWeek
     * @param string $transitTime
     * @param string $maximumTransitTime
     * @param string $destinationServiceArea
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $brokerAddress
     * @param string $brokerLocationId
     * @param string $brokerCommitTimestamp
     * @param string $brokerCommitDayOfWeek
     * @param int $brokerToDestinationDays
     * @param string $proofOfDeliveryDate
     * @param string $proofOfDeliveryDayOfWeek
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $commitMessages
     * @param string[] $deliveryMessages
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail[] $delayDetails
     * @param string $documentContent
     * @param string[] $requiredDocuments
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightCommitDetail $freightCommitDetail
     */
    public function __construct($commodityName = null, $serviceType = null, array $appliedOptions = array(), \NicholasCreativeMedia\FedExPHP\Structs\ServiceSubOptionDetail $appliedSubOptions = null, \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $derivedShipmentSignatureOption = null, array $derivedPackageSignatureOptions = array(), \NicholasCreativeMedia\FedExPHP\Structs\CleansedAddressAndLocationDetail $derivedOriginDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\CleansedAddressAndLocationDetail $derivedDestinationDetail = null, $commitTimestamp = null, $dayOfWeek = null, $transitTime = null, $maximumTransitTime = null, $destinationServiceArea = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $brokerAddress = null, $brokerLocationId = null, $brokerCommitTimestamp = null, $brokerCommitDayOfWeek = null, $brokerToDestinationDays = null, $proofOfDeliveryDate = null, $proofOfDeliveryDayOfWeek = null, array $commitMessages = array(), array $deliveryMessages = array(), array $delayDetails = array(), $documentContent = null, array $requiredDocuments = array(), \NicholasCreativeMedia\FedExPHP\Structs\FreightCommitDetail $freightCommitDetail = null)
    {
        $this
            ->setCommodityName($commodityName)
            ->setServiceType($serviceType)
            ->setAppliedOptions($appliedOptions)
            ->setAppliedSubOptions($appliedSubOptions)
            ->setDerivedShipmentSignatureOption($derivedShipmentSignatureOption)
            ->setDerivedPackageSignatureOptions($derivedPackageSignatureOptions)
            ->setDerivedOriginDetail($derivedOriginDetail)
            ->setDerivedDestinationDetail($derivedDestinationDetail)
            ->setCommitTimestamp($commitTimestamp)
            ->setDayOfWeek($dayOfWeek)
            ->setTransitTime($transitTime)
            ->setMaximumTransitTime($maximumTransitTime)
            ->setDestinationServiceArea($destinationServiceArea)
            ->setBrokerAddress($brokerAddress)
            ->setBrokerLocationId($brokerLocationId)
            ->setBrokerCommitTimestamp($brokerCommitTimestamp)
            ->setBrokerCommitDayOfWeek($brokerCommitDayOfWeek)
            ->setBrokerToDestinationDays($brokerToDestinationDays)
            ->setProofOfDeliveryDate($proofOfDeliveryDate)
            ->setProofOfDeliveryDayOfWeek($proofOfDeliveryDayOfWeek)
            ->setCommitMessages($commitMessages)
            ->setDeliveryMessages($deliveryMessages)
            ->setDelayDetails($delayDetails)
            ->setDocumentContent($documentContent)
            ->setRequiredDocuments($requiredDocuments)
            ->setFreightCommitDetail($freightCommitDetail);
    }
    /**
     * Get CommodityName value
     * @return string|null
     */
    public function getCommodityName()
    {
        return $this->CommodityName;
    }
    /**
     * Set CommodityName value
     * @param string $commodityName
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setCommodityName($commodityName = null)
    {
        // validation for constraint: string
        if (!is_null($commodityName) && !is_string($commodityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commodityName)), __LINE__);
        }
        $this->CommodityName = $commodityName;
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $serviceType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setServiceType($serviceType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ServiceType::valueIsValid($serviceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $serviceType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ServiceType::getValidValues())), __LINE__);
        }
        $this->ServiceType = $serviceType;
        return $this;
    }
    /**
     * Get AppliedOptions value
     * @return string[]|null
     */
    public function getAppliedOptions()
    {
        return $this->AppliedOptions;
    }
    /**
     * Set AppliedOptions value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $appliedOptions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setAppliedOptions(array $appliedOptions = array())
    {
        $invalidValues = array();
        foreach ($appliedOptions as $commitDetailAppliedOptionsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::valueIsValid($commitDetailAppliedOptionsItem)) {
                $invalidValues[] = var_export($commitDetailAppliedOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::getValidValues())), __LINE__);
        }
        $this->AppliedOptions = $appliedOptions;
        return $this;
    }
    /**
     * Add item to AppliedOptions value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function addToAppliedOptions($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\ServiceOptionType::getValidValues())), __LINE__);
        }
        $this->AppliedOptions[] = $item;
        return $this;
    }
    /**
     * Get AppliedSubOptions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ServiceSubOptionDetail|null
     */
    public function getAppliedSubOptions()
    {
        return $this->AppliedSubOptions;
    }
    /**
     * Set AppliedSubOptions value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ServiceSubOptionDetail $appliedSubOptions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setAppliedSubOptions(\NicholasCreativeMedia\FedExPHP\Structs\ServiceSubOptionDetail $appliedSubOptions = null)
    {
        $this->AppliedSubOptions = $appliedSubOptions;
        return $this;
    }
    /**
     * Get DerivedShipmentSignatureOption value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail|null
     */
    public function getDerivedShipmentSignatureOption()
    {
        return $this->DerivedShipmentSignatureOption;
    }
    /**
     * Set DerivedShipmentSignatureOption value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $derivedShipmentSignatureOption
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setDerivedShipmentSignatureOption(\NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $derivedShipmentSignatureOption = null)
    {
        $this->DerivedShipmentSignatureOption = $derivedShipmentSignatureOption;
        return $this;
    }
    /**
     * Get DerivedPackageSignatureOptions value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail[]|null
     */
    public function getDerivedPackageSignatureOptions()
    {
        return $this->DerivedPackageSignatureOptions;
    }
    /**
     * Set DerivedPackageSignatureOptions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail[] $derivedPackageSignatureOptions
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setDerivedPackageSignatureOptions(array $derivedPackageSignatureOptions = array())
    {
        foreach ($derivedPackageSignatureOptions as $commitDetailDerivedPackageSignatureOptionsItem) {
            // validation for constraint: itemType
            if (!$commitDetailDerivedPackageSignatureOptionsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail) {
                throw new \InvalidArgumentException(sprintf('The DerivedPackageSignatureOptions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail, "%s" given', is_object($commitDetailDerivedPackageSignatureOptionsItem) ? get_class($commitDetailDerivedPackageSignatureOptionsItem) : gettype($commitDetailDerivedPackageSignatureOptionsItem)), __LINE__);
            }
        }
        $this->DerivedPackageSignatureOptions = $derivedPackageSignatureOptions;
        return $this;
    }
    /**
     * Add item to DerivedPackageSignatureOptions value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function addToDerivedPackageSignatureOptions(\NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail) {
            throw new \InvalidArgumentException(sprintf('The DerivedPackageSignatureOptions property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DerivedPackageSignatureOptions[] = $item;
        return $this;
    }
    /**
     * Get DerivedOriginDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CleansedAddressAndLocationDetail|null
     */
    public function getDerivedOriginDetail()
    {
        return $this->DerivedOriginDetail;
    }
    /**
     * Set DerivedOriginDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CleansedAddressAndLocationDetail $derivedOriginDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setDerivedOriginDetail(\NicholasCreativeMedia\FedExPHP\Structs\CleansedAddressAndLocationDetail $derivedOriginDetail = null)
    {
        $this->DerivedOriginDetail = $derivedOriginDetail;
        return $this;
    }
    /**
     * Get DerivedDestinationDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CleansedAddressAndLocationDetail|null
     */
    public function getDerivedDestinationDetail()
    {
        return $this->DerivedDestinationDetail;
    }
    /**
     * Set DerivedDestinationDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CleansedAddressAndLocationDetail $derivedDestinationDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setDerivedDestinationDetail(\NicholasCreativeMedia\FedExPHP\Structs\CleansedAddressAndLocationDetail $derivedDestinationDetail = null)
    {
        $this->DerivedDestinationDetail = $derivedDestinationDetail;
        return $this;
    }
    /**
     * Get CommitTimestamp value
     * @return string|null
     */
    public function getCommitTimestamp()
    {
        return $this->CommitTimestamp;
    }
    /**
     * Set CommitTimestamp value
     * @param string $commitTimestamp
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setCommitTimestamp($commitTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($commitTimestamp) && !is_string($commitTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commitTimestamp)), __LINE__);
        }
        $this->CommitTimestamp = $commitTimestamp;
        return $this;
    }
    /**
     * Get DayOfWeek value
     * @return string|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dayOfWeek
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid($dayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dayOfWeek, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Get TransitTime value
     * @return string|null
     */
    public function getTransitTime()
    {
        return $this->TransitTime;
    }
    /**
     * Set TransitTime value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TransitTimeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TransitTimeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transitTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setTransitTime($transitTime = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TransitTimeType::valueIsValid($transitTime)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $transitTime, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TransitTimeType::getValidValues())), __LINE__);
        }
        $this->TransitTime = $transitTime;
        return $this;
    }
    /**
     * Get MaximumTransitTime value
     * @return string|null
     */
    public function getMaximumTransitTime()
    {
        return $this->MaximumTransitTime;
    }
    /**
     * Set MaximumTransitTime value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TransitTimeType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\TransitTimeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $maximumTransitTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setMaximumTransitTime($maximumTransitTime = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\TransitTimeType::valueIsValid($maximumTransitTime)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $maximumTransitTime, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\TransitTimeType::getValidValues())), __LINE__);
        }
        $this->MaximumTransitTime = $maximumTransitTime;
        return $this;
    }
    /**
     * Get DestinationServiceArea value
     * @return string|null
     */
    public function getDestinationServiceArea()
    {
        return $this->DestinationServiceArea;
    }
    /**
     * Set DestinationServiceArea value
     * @param string $destinationServiceArea
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setDestinationServiceArea($destinationServiceArea = null)
    {
        // validation for constraint: string
        if (!is_null($destinationServiceArea) && !is_string($destinationServiceArea)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationServiceArea)), __LINE__);
        }
        $this->DestinationServiceArea = $destinationServiceArea;
        return $this;
    }
    /**
     * Get BrokerAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getBrokerAddress()
    {
        return $this->BrokerAddress;
    }
    /**
     * Set BrokerAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $brokerAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setBrokerAddress(\NicholasCreativeMedia\FedExPHP\Structs\Address $brokerAddress = null)
    {
        $this->BrokerAddress = $brokerAddress;
        return $this;
    }
    /**
     * Get BrokerLocationId value
     * @return string|null
     */
    public function getBrokerLocationId()
    {
        return $this->BrokerLocationId;
    }
    /**
     * Set BrokerLocationId value
     * @param string $brokerLocationId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setBrokerLocationId($brokerLocationId = null)
    {
        // validation for constraint: string
        if (!is_null($brokerLocationId) && !is_string($brokerLocationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brokerLocationId)), __LINE__);
        }
        $this->BrokerLocationId = $brokerLocationId;
        return $this;
    }
    /**
     * Get BrokerCommitTimestamp value
     * @return string|null
     */
    public function getBrokerCommitTimestamp()
    {
        return $this->BrokerCommitTimestamp;
    }
    /**
     * Set BrokerCommitTimestamp value
     * @param string $brokerCommitTimestamp
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setBrokerCommitTimestamp($brokerCommitTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($brokerCommitTimestamp) && !is_string($brokerCommitTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brokerCommitTimestamp)), __LINE__);
        }
        $this->BrokerCommitTimestamp = $brokerCommitTimestamp;
        return $this;
    }
    /**
     * Get BrokerCommitDayOfWeek value
     * @return string|null
     */
    public function getBrokerCommitDayOfWeek()
    {
        return $this->BrokerCommitDayOfWeek;
    }
    /**
     * Set BrokerCommitDayOfWeek value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $brokerCommitDayOfWeek
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setBrokerCommitDayOfWeek($brokerCommitDayOfWeek = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid($brokerCommitDayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $brokerCommitDayOfWeek, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->BrokerCommitDayOfWeek = $brokerCommitDayOfWeek;
        return $this;
    }
    /**
     * Get BrokerToDestinationDays value
     * @return int|null
     */
    public function getBrokerToDestinationDays()
    {
        return $this->BrokerToDestinationDays;
    }
    /**
     * Set BrokerToDestinationDays value
     * @param int $brokerToDestinationDays
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setBrokerToDestinationDays($brokerToDestinationDays = null)
    {
        // validation for constraint: int
        if (!is_null($brokerToDestinationDays) && !is_numeric($brokerToDestinationDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($brokerToDestinationDays)), __LINE__);
        }
        $this->BrokerToDestinationDays = $brokerToDestinationDays;
        return $this;
    }
    /**
     * Get ProofOfDeliveryDate value
     * @return string|null
     */
    public function getProofOfDeliveryDate()
    {
        return $this->ProofOfDeliveryDate;
    }
    /**
     * Set ProofOfDeliveryDate value
     * @param string $proofOfDeliveryDate
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setProofOfDeliveryDate($proofOfDeliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($proofOfDeliveryDate) && !is_string($proofOfDeliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($proofOfDeliveryDate)), __LINE__);
        }
        $this->ProofOfDeliveryDate = $proofOfDeliveryDate;
        return $this;
    }
    /**
     * Get ProofOfDeliveryDayOfWeek value
     * @return string|null
     */
    public function getProofOfDeliveryDayOfWeek()
    {
        return $this->ProofOfDeliveryDayOfWeek;
    }
    /**
     * Set ProofOfDeliveryDayOfWeek value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $proofOfDeliveryDayOfWeek
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setProofOfDeliveryDayOfWeek($proofOfDeliveryDayOfWeek = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::valueIsValid($proofOfDeliveryDayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $proofOfDeliveryDayOfWeek, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\DayOfWeekType::getValidValues())), __LINE__);
        }
        $this->ProofOfDeliveryDayOfWeek = $proofOfDeliveryDayOfWeek;
        return $this;
    }
    /**
     * Get CommitMessages value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Notification[]|null
     */
    public function getCommitMessages()
    {
        return $this->CommitMessages;
    }
    /**
     * Set CommitMessages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification[] $commitMessages
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setCommitMessages(array $commitMessages = array())
    {
        foreach ($commitMessages as $commitDetailCommitMessagesItem) {
            // validation for constraint: itemType
            if (!$commitDetailCommitMessagesItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
                throw new \InvalidArgumentException(sprintf('The CommitMessages property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($commitDetailCommitMessagesItem) ? get_class($commitDetailCommitMessagesItem) : gettype($commitDetailCommitMessagesItem)), __LINE__);
            }
        }
        $this->CommitMessages = $commitMessages;
        return $this;
    }
    /**
     * Add item to CommitMessages value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function addToCommitMessages(\NicholasCreativeMedia\FedExPHP\Structs\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\Notification) {
            throw new \InvalidArgumentException(sprintf('The CommitMessages property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CommitMessages[] = $item;
        return $this;
    }
    /**
     * Get DeliveryMessages value
     * @return string[]|null
     */
    public function getDeliveryMessages()
    {
        return $this->DeliveryMessages;
    }
    /**
     * Set DeliveryMessages value
     * @throws \InvalidArgumentException
     * @param string[] $deliveryMessages
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setDeliveryMessages(array $deliveryMessages = array())
    {
        foreach ($deliveryMessages as $commitDetailDeliveryMessagesItem) {
            // validation for constraint: itemType
            if (!is_string($commitDetailDeliveryMessagesItem)) {
                throw new \InvalidArgumentException(sprintf('The DeliveryMessages property can only contain items of string, "%s" given', is_object($commitDetailDeliveryMessagesItem) ? get_class($commitDetailDeliveryMessagesItem) : gettype($commitDetailDeliveryMessagesItem)), __LINE__);
            }
        }
        $this->DeliveryMessages = $deliveryMessages;
        return $this;
    }
    /**
     * Add item to DeliveryMessages value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function addToDeliveryMessages($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The DeliveryMessages property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DeliveryMessages[] = $item;
        return $this;
    }
    /**
     * Get DelayDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail[]|null
     */
    public function getDelayDetails()
    {
        return $this->DelayDetails;
    }
    /**
     * Set DelayDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail[] $delayDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setDelayDetails(array $delayDetails = array())
    {
        foreach ($delayDetails as $commitDetailDelayDetailsItem) {
            // validation for constraint: itemType
            if (!$commitDetailDelayDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail) {
                throw new \InvalidArgumentException(sprintf('The DelayDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail, "%s" given', is_object($commitDetailDelayDetailsItem) ? get_class($commitDetailDelayDetailsItem) : gettype($commitDetailDelayDetailsItem)), __LINE__);
            }
        }
        $this->DelayDetails = $delayDetails;
        return $this;
    }
    /**
     * Add item to DelayDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function addToDelayDetails(\NicholasCreativeMedia\FedExPHP\Structs\DelayDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail) {
            throw new \InvalidArgumentException(sprintf('The DelayDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\DelayDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DelayDetails[] = $item;
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\InternationalDocumentContentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\InternationalDocumentContentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentContent
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setDocumentContent($documentContent = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\InternationalDocumentContentType::valueIsValid($documentContent)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentContent, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\InternationalDocumentContentType::getValidValues())), __LINE__);
        }
        $this->DocumentContent = $documentContent;
        return $this;
    }
    /**
     * Get RequiredDocuments value
     * @return string[]|null
     */
    public function getRequiredDocuments()
    {
        return $this->RequiredDocuments;
    }
    /**
     * Set RequiredDocuments value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequiredShippingDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequiredShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $requiredDocuments
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setRequiredDocuments(array $requiredDocuments = array())
    {
        $invalidValues = array();
        foreach ($requiredDocuments as $commitDetailRequiredDocumentsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\RequiredShippingDocumentType::valueIsValid($commitDetailRequiredDocumentsItem)) {
                $invalidValues[] = var_export($commitDetailRequiredDocumentsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RequiredShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->RequiredDocuments = $requiredDocuments;
        return $this;
    }
    /**
     * Add item to RequiredDocuments value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequiredShippingDocumentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\RequiredShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function addToRequiredDocuments($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\RequiredShippingDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\RequiredShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->RequiredDocuments[] = $item;
        return $this;
    }
    /**
     * Get FreightCommitDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\FreightCommitDetail|null
     */
    public function getFreightCommitDetail()
    {
        return $this->FreightCommitDetail;
    }
    /**
     * Set FreightCommitDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\FreightCommitDetail $freightCommitDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
     */
    public function setFreightCommitDetail(\NicholasCreativeMedia\FedExPHP\Structs\FreightCommitDetail $freightCommitDetail = null)
    {
        $this->FreightCommitDetail = $freightCommitDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CommitDetail
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
