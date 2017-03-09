<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment.
 * @subpackage Structs
 */
class CodDetail extends AbstractStructBase
{
    /**
     * The CollectionType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of funds FedEx should collect upon package delivery
     * - minOccurs: 1
     * @var string
     */
    public $CollectionType;
    /**
     * The CodCollectionAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Money
     */
    public $CodCollectionAmount;
    /**
     * The AddTransportationChargesDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the details of the charges are to be added to the COD collect amount.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CodAddTransportationChargesDetail
     */
    public $AddTransportationChargesDetail;
    /**
     * The CodRecipient
     * Meta informations extracted from the WSDL
     * - documentation: For Express this is the descriptive data that is used for the recipient of the FedEx Letter containing the COD payment. For Ground this is the descriptive data for the party to receive the payment that prints the COD receipt.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Party
     */
    public $CodRecipient;
    /**
     * The FinancialInstitutionContactAndAddress
     * Meta informations extracted from the WSDL
     * - documentation: When the FedEx COD payment type is not CASH, indicates the contact and address of the financial institution used to service the payment of the COD.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress
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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingId
     */
    public $ReturnTrackingId;
    /**
     * Constructor method for CodDetail
     * @uses CodDetail::setCollectionType()
     * @uses CodDetail::setCodCollectionAmount()
     * @uses CodDetail::setAddTransportationChargesDetail()
     * @uses CodDetail::setCodRecipient()
     * @uses CodDetail::setFinancialInstitutionContactAndAddress()
     * @uses CodDetail::setRemitToName()
     * @uses CodDetail::setReferenceIndicator()
     * @uses CodDetail::setReturnTrackingId()
     * @param string $collectionType
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $codCollectionAmount
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CodAddTransportationChargesDetail $addTransportationChargesDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $codRecipient
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $financialInstitutionContactAndAddress
     * @param string $remitToName
     * @param string $referenceIndicator
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $returnTrackingId
     */
    public function __construct($collectionType = null, \NicholasCreativeMedia\FedExPHP\Structs\Money $codCollectionAmount = null, \NicholasCreativeMedia\FedExPHP\Structs\CodAddTransportationChargesDetail $addTransportationChargesDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\Party $codRecipient = null, \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $financialInstitutionContactAndAddress = null, $remitToName = null, $referenceIndicator = null, \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $returnTrackingId = null)
    {
        $this
            ->setCollectionType($collectionType)
            ->setCodCollectionAmount($codCollectionAmount)
            ->setAddTransportationChargesDetail($addTransportationChargesDetail)
            ->setCodRecipient($codRecipient)
            ->setFinancialInstitutionContactAndAddress($financialInstitutionContactAndAddress)
            ->setRemitToName($remitToName)
            ->setReferenceIndicator($referenceIndicator)
            ->setReturnTrackingId($returnTrackingId);
    }
    /**
     * Get CollectionType value
     * @return string
     */
    public function getCollectionType()
    {
        return $this->CollectionType;
    }
    /**
     * Set CollectionType value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CodCollectionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CodCollectionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $collectionType
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodDetail
     */
    public function setCollectionType($collectionType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CodCollectionType::valueIsValid($collectionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $collectionType, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CodCollectionType::getValidValues())), __LINE__);
        }
        $this->CollectionType = $collectionType;
        return $this;
    }
    /**
     * Get CodCollectionAmount value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Money|null
     */
    public function getCodCollectionAmount()
    {
        return $this->CodCollectionAmount;
    }
    /**
     * Set CodCollectionAmount value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Money $codCollectionAmount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodDetail
     */
    public function setCodCollectionAmount(\NicholasCreativeMedia\FedExPHP\Structs\Money $codCollectionAmount = null)
    {
        $this->CodCollectionAmount = $codCollectionAmount;
        return $this;
    }
    /**
     * Get AddTransportationChargesDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodAddTransportationChargesDetail|null
     */
    public function getAddTransportationChargesDetail()
    {
        return $this->AddTransportationChargesDetail;
    }
    /**
     * Set AddTransportationChargesDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CodAddTransportationChargesDetail $addTransportationChargesDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodDetail
     */
    public function setAddTransportationChargesDetail(\NicholasCreativeMedia\FedExPHP\Structs\CodAddTransportationChargesDetail $addTransportationChargesDetail = null)
    {
        $this->AddTransportationChargesDetail = $addTransportationChargesDetail;
        return $this;
    }
    /**
     * Get CodRecipient value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Party|null
     */
    public function getCodRecipient()
    {
        return $this->CodRecipient;
    }
    /**
     * Set CodRecipient value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $codRecipient
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodDetail
     */
    public function setCodRecipient(\NicholasCreativeMedia\FedExPHP\Structs\Party $codRecipient = null)
    {
        $this->CodRecipient = $codRecipient;
        return $this;
    }
    /**
     * Get FinancialInstitutionContactAndAddress value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress|null
     */
    public function getFinancialInstitutionContactAndAddress()
    {
        return $this->FinancialInstitutionContactAndAddress;
    }
    /**
     * Set FinancialInstitutionContactAndAddress value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $financialInstitutionContactAndAddress
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodDetail
     */
    public function setFinancialInstitutionContactAndAddress(\NicholasCreativeMedia\FedExPHP\Structs\ContactAndAddress $financialInstitutionContactAndAddress = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodDetail
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
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CodReturnReferenceIndicatorType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CodReturnReferenceIndicatorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $referenceIndicator
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodDetail
     */
    public function setReferenceIndicator($referenceIndicator = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CodReturnReferenceIndicatorType::valueIsValid($referenceIndicator)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $referenceIndicator, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CodReturnReferenceIndicatorType::getValidValues())), __LINE__);
        }
        $this->ReferenceIndicator = $referenceIndicator;
        return $this;
    }
    /**
     * Get ReturnTrackingId value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingId|null
     */
    public function getReturnTrackingId()
    {
        return $this->ReturnTrackingId;
    }
    /**
     * Set ReturnTrackingId value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $returnTrackingId
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodDetail
     */
    public function setReturnTrackingId(\NicholasCreativeMedia\FedExPHP\Structs\TrackingId $returnTrackingId = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodDetail
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
