<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment.
 * @subpackage Structs
 */
class CodDetail extends AbstractStructBase
{
    /**
     * The CodCollectionAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money
     */
    public $CodCollectionAmount;
    /**
     * The AddTransportationChargesDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details of the charges are to be added to the COD collect amount.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\CodAddTransportationChargesDetail
     */
    public $AddTransportationChargesDetail;
    /**
     * The CollectionType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of funds FedEx should collect upon package delivery
     * - minOccurs: 0
     * @var string
     */
    public $CollectionType;
    /**
     * The CodRecipient
     * Meta informations extracted from the WSDL
     * - documentation: For Express this is the descriptive data that is used for the recipient of the FedEx Letter containing the COD payment. For Ground this is the descriptive data for the party to receive the payment that prints the COD receipt.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Party
     */
    public $CodRecipient;
    /**
     * The FinancialInstitutionContactAndAddress
     * Meta informations extracted from the WSDL
     * - documentation: When the FedEx COD payment type is not CASH, indicates the contact and address of the financial institution used to service the payment of the COD.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\ContactAndAddress
     */
    public $FinancialInstitutionContactAndAddress;
    /**
     * The RemitToName
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the name of person or company receiving the secured/unsecured funds payment
     * - minOccurs: 0
     * @var string
     */
    public $RemitToName;
    /**
     * The ReferenceIndicator
     * Meta informations extracted from the WSDL
     * - documentation: Indicates which type of reference information to include on the COD return shipping label.
     * - minOccurs: 0
     * @var string
     */
    public $ReferenceIndicator;
    /**
     * The ReturnTrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Only used with multi-piece COD shipments sent in multiple transactions. Required on last transaction only.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\TrackingId
     */
    public $ReturnTrackingId;
    /**
     * Constructor method for CodDetail
     * @uses CodDetail::setCodCollectionAmount()
     * @uses CodDetail::setAddTransportationChargesDetail()
     * @uses CodDetail::setCollectionType()
     * @uses CodDetail::setCodRecipient()
     * @uses CodDetail::setFinancialInstitutionContactAndAddress()
     * @uses CodDetail::setRemitToName()
     * @uses CodDetail::setReferenceIndicator()
     * @uses CodDetail::setReturnTrackingId()
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $codCollectionAmount
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CodAddTransportationChargesDetail $addTransportationChargesDetail
     * @param string $collectionType
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Party $codRecipient
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ContactAndAddress $financialInstitutionContactAndAddress
     * @param string $remitToName
     * @param string $referenceIndicator
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\TrackingId $returnTrackingId
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $codCollectionAmount = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\CodAddTransportationChargesDetail $addTransportationChargesDetail = null, $collectionType = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\Party $codRecipient = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\ContactAndAddress $financialInstitutionContactAndAddress = null, $remitToName = null, $referenceIndicator = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\TrackingId $returnTrackingId = null)
    {
        $this
            ->setCodCollectionAmount($codCollectionAmount)
            ->setAddTransportationChargesDetail($addTransportationChargesDetail)
            ->setCollectionType($collectionType)
            ->setCodRecipient($codRecipient)
            ->setFinancialInstitutionContactAndAddress($financialInstitutionContactAndAddress)
            ->setRemitToName($remitToName)
            ->setReferenceIndicator($referenceIndicator)
            ->setReturnTrackingId($returnTrackingId);
    }
    /**
     * Get CodCollectionAmount value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money|null
     */
    public function getCodCollectionAmount()
    {
        return $this->CodCollectionAmount;
    }
    /**
     * Set CodCollectionAmount value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $codCollectionAmount
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CodDetail
     */
    public function setCodCollectionAmount(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $codCollectionAmount = null)
    {
        $this->CodCollectionAmount = $codCollectionAmount;
        return $this;
    }
    /**
     * Get AddTransportationChargesDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CodAddTransportationChargesDetail|null
     */
    public function getAddTransportationChargesDetail()
    {
        return $this->AddTransportationChargesDetail;
    }
    /**
     * Set AddTransportationChargesDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CodAddTransportationChargesDetail $addTransportationChargesDetail
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CodDetail
     */
    public function setAddTransportationChargesDetail(\NicholasCreativeMedia\FedExPHP\Rate\StructType\CodAddTransportationChargesDetail $addTransportationChargesDetail = null)
    {
        $this->AddTransportationChargesDetail = $addTransportationChargesDetail;
        return $this;
    }
    /**
     * Get CollectionType value
     * @return string|null
     */
    public function getCollectionType()
    {
        return $this->CollectionType;
    }
    /**
     * Set CollectionType value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\CodCollectionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\CodCollectionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $collectionType
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CodDetail
     */
    public function setCollectionType($collectionType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\CodCollectionType::valueIsValid($collectionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $collectionType, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\CodCollectionType::getValidValues())), __LINE__);
        }
        $this->CollectionType = $collectionType;
        return $this;
    }
    /**
     * Get CodRecipient value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Party|null
     */
    public function getCodRecipient()
    {
        return $this->CodRecipient;
    }
    /**
     * Set CodRecipient value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Party $codRecipient
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CodDetail
     */
    public function setCodRecipient(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Party $codRecipient = null)
    {
        $this->CodRecipient = $codRecipient;
        return $this;
    }
    /**
     * Get FinancialInstitutionContactAndAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\ContactAndAddress|null
     */
    public function getFinancialInstitutionContactAndAddress()
    {
        return $this->FinancialInstitutionContactAndAddress;
    }
    /**
     * Set FinancialInstitutionContactAndAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\ContactAndAddress $financialInstitutionContactAndAddress
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CodDetail
     */
    public function setFinancialInstitutionContactAndAddress(\NicholasCreativeMedia\FedExPHP\Rate\StructType\ContactAndAddress $financialInstitutionContactAndAddress = null)
    {
        $this->FinancialInstitutionContactAndAddress = $financialInstitutionContactAndAddress;
        return $this;
    }
    /**
     * Get RemitToName value
     * @return string|null
     */
    public function getRemitToName()
    {
        return $this->RemitToName;
    }
    /**
     * Set RemitToName value
     * @param string $remitToName
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CodDetail
     */
    public function setRemitToName($remitToName = null)
    {
        // validation for constraint: string
        if (!is_null($remitToName) && !is_string($remitToName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remitToName)), __LINE__);
        }
        $this->RemitToName = $remitToName;
        return $this;
    }
    /**
     * Get ReferenceIndicator value
     * @return string|null
     */
    public function getReferenceIndicator()
    {
        return $this->ReferenceIndicator;
    }
    /**
     * Set ReferenceIndicator value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\CodReturnReferenceIndicatorType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\CodReturnReferenceIndicatorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $referenceIndicator
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CodDetail
     */
    public function setReferenceIndicator($referenceIndicator = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\CodReturnReferenceIndicatorType::valueIsValid($referenceIndicator)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $referenceIndicator, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\CodReturnReferenceIndicatorType::getValidValues())), __LINE__);
        }
        $this->ReferenceIndicator = $referenceIndicator;
        return $this;
    }
    /**
     * Get ReturnTrackingId value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\TrackingId|null
     */
    public function getReturnTrackingId()
    {
        return $this->ReturnTrackingId;
    }
    /**
     * Set ReturnTrackingId value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\TrackingId $returnTrackingId
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CodDetail
     */
    public function setReturnTrackingId(\NicholasCreativeMedia\FedExPHP\Rate\StructType\TrackingId $returnTrackingId = null)
    {
        $this->ReturnTrackingId = $returnTrackingId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CodDetail
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
