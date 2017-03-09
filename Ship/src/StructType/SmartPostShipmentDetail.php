<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SmartPostShipmentDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Data required for shipments handled under the SMART_POST and GROUND_SMART_POST service types.
 * @subpackage Structs
 */
class SmartPostShipmentDetail extends AbstractStructBase
{
    /**
     * The ProcessingOptionsRequested
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentProcessingOptionsRequested
     */
    public $ProcessingOptionsRequested;
    /**
     * The Indicia
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Indicia;
    /**
     * The AncillaryEndorsement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AncillaryEndorsement;
    /**
     * The HubId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HubId;
    /**
     * The CustomerManifestId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CustomerManifestId;
    /**
     * Constructor method for SmartPostShipmentDetail
     * @uses SmartPostShipmentDetail::setProcessingOptionsRequested()
     * @uses SmartPostShipmentDetail::setIndicia()
     * @uses SmartPostShipmentDetail::setAncillaryEndorsement()
     * @uses SmartPostShipmentDetail::setHubId()
     * @uses SmartPostShipmentDetail::setCustomerManifestId()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentProcessingOptionsRequested $processingOptionsRequested
     * @param string $indicia
     * @param string $ancillaryEndorsement
     * @param string $hubId
     * @param string $customerManifestId
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentProcessingOptionsRequested $processingOptionsRequested = null, $indicia = null, $ancillaryEndorsement = null, $hubId = null, $customerManifestId = null)
    {
        $this
            ->setProcessingOptionsRequested($processingOptionsRequested)
            ->setIndicia($indicia)
            ->setAncillaryEndorsement($ancillaryEndorsement)
            ->setHubId($hubId)
            ->setCustomerManifestId($customerManifestId);
    }
    /**
     * Get ProcessingOptionsRequested value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentProcessingOptionsRequested|null
     */
    public function getProcessingOptionsRequested()
    {
        return $this->ProcessingOptionsRequested;
    }
    /**
     * Set ProcessingOptionsRequested value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentProcessingOptionsRequested $processingOptionsRequested
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentDetail
     */
    public function setProcessingOptionsRequested(\NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentProcessingOptionsRequested $processingOptionsRequested = null)
    {
        $this->ProcessingOptionsRequested = $processingOptionsRequested;
        return $this;
    }
    /**
     * Get Indicia value
     * @return string|null
     */
    public function getIndicia()
    {
        return $this->Indicia;
    }
    /**
     * Set Indicia value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SmartPostIndiciaType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SmartPostIndiciaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $indicia
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentDetail
     */
    public function setIndicia($indicia = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\SmartPostIndiciaType::valueIsValid($indicia)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $indicia, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SmartPostIndiciaType::getValidValues())), __LINE__);
        }
        $this->Indicia = $indicia;
        return $this;
    }
    /**
     * Get AncillaryEndorsement value
     * @return string|null
     */
    public function getAncillaryEndorsement()
    {
        return $this->AncillaryEndorsement;
    }
    /**
     * Set AncillaryEndorsement value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SmartPostAncillaryEndorsementType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SmartPostAncillaryEndorsementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ancillaryEndorsement
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentDetail
     */
    public function setAncillaryEndorsement($ancillaryEndorsement = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\SmartPostAncillaryEndorsementType::valueIsValid($ancillaryEndorsement)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ancillaryEndorsement, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\SmartPostAncillaryEndorsementType::getValidValues())), __LINE__);
        }
        $this->AncillaryEndorsement = $ancillaryEndorsement;
        return $this;
    }
    /**
     * Get HubId value
     * @return string|null
     */
    public function getHubId()
    {
        return $this->HubId;
    }
    /**
     * Set HubId value
     * @param string $hubId
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentDetail
     */
    public function setHubId($hubId = null)
    {
        // validation for constraint: string
        if (!is_null($hubId) && !is_string($hubId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hubId)), __LINE__);
        }
        $this->HubId = $hubId;
        return $this;
    }
    /**
     * Get CustomerManifestId value
     * @return string|null
     */
    public function getCustomerManifestId()
    {
        return $this->CustomerManifestId;
    }
    /**
     * Set CustomerManifestId value
     * @param string $customerManifestId
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentDetail
     */
    public function setCustomerManifestId($customerManifestId = null)
    {
        // validation for constraint: string
        if (!is_null($customerManifestId) && !is_string($customerManifestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerManifestId)), __LINE__);
        }
        $this->CustomerManifestId = $customerManifestId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\SmartPostShipmentDetail
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
