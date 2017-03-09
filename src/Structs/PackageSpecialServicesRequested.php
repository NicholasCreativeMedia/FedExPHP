<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageSpecialServicesRequested Structs
 * Meta informations extracted from the WSDL
 * - documentation: These special services are available at the package level for some or all service types. If the shipper is requesting a special service which requires additional data, the package special service type must be present in the
 * specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 * @subpackage Structs
 */
class PackageSpecialServicesRequested extends AbstractStructBase
{
    /**
     * The SpecialServiceTypes
     * Meta informations extracted from the WSDL
     * - documentation: The types of all special services requested for the enclosing shipment or package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialServiceTypes;
    /**
     * The CodDetail
     * Meta informations extracted from the WSDL
     * - documentation: For use with FedEx Ground services only; COD must be present in shipment's special services.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CodDetail
     */
    public $CodDetail;
    /**
     * The DangerousGoodsDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail
     */
    public $DangerousGoodsDetail;
    /**
     * The DryIceWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $DryIceWeight;
    /**
     * The SignatureOptionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail
     */
    public $SignatureOptionDetail;
    /**
     * The PriorityAlertDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PriorityAlertDetail
     */
    public $PriorityAlertDetail;
    /**
     * The AlcoholDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail
     */
    public $AlcoholDetail;
    /**
     * Constructor method for PackageSpecialServicesRequested
     * @uses PackageSpecialServicesRequested::setSpecialServiceTypes()
     * @uses PackageSpecialServicesRequested::setCodDetail()
     * @uses PackageSpecialServicesRequested::setDangerousGoodsDetail()
     * @uses PackageSpecialServicesRequested::setDryIceWeight()
     * @uses PackageSpecialServicesRequested::setSignatureOptionDetail()
     * @uses PackageSpecialServicesRequested::setPriorityAlertDetail()
     * @uses PackageSpecialServicesRequested::setAlcoholDetail()
     * @param string[] $specialServiceTypes
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CodDetail $codDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail $dangerousGoodsDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $dryIceWeight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $signatureOptionDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PriorityAlertDetail $priorityAlertDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail $alcoholDetail
     */
    public function __construct(array $specialServiceTypes = array(), \NicholasCreativeMedia\FedExPHP\Structs\CodDetail $codDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail $dangerousGoodsDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $dryIceWeight = null, \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $signatureOptionDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\PriorityAlertDetail $priorityAlertDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail $alcoholDetail = null)
    {
        $this
            ->setSpecialServiceTypes($specialServiceTypes)
            ->setCodDetail($codDetail)
            ->setDangerousGoodsDetail($dangerousGoodsDetail)
            ->setDryIceWeight($dryIceWeight)
            ->setSignatureOptionDetail($signatureOptionDetail)
            ->setPriorityAlertDetail($priorityAlertDetail)
            ->setAlcoholDetail($alcoholDetail);
    }
    /**
     * Get SpecialServiceTypes value
     * @return string[]|null
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }
    /**
     * Set SpecialServiceTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $specialServiceTypes
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes = array())
    {
        $invalidValues = array();
        foreach ($specialServiceTypes as $packageSpecialServicesRequestedSpecialServiceTypesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::valueIsValid($packageSpecialServicesRequestedSpecialServiceTypesItem)) {
                $invalidValues[] = var_export($packageSpecialServicesRequestedSpecialServiceTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Add item to SpecialServiceTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function addToSpecialServiceTypes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PackageSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes[] = $item;
        return $this;
    }
    /**
     * Get CodDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodDetail|null
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }
    /**
     * Set CodDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CodDetail $codDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setCodDetail(\NicholasCreativeMedia\FedExPHP\Structs\CodDetail $codDetail = null)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    /**
     * Get DangerousGoodsDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail|null
     */
    public function getDangerousGoodsDetail()
    {
        return $this->DangerousGoodsDetail;
    }
    /**
     * Set DangerousGoodsDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail $dangerousGoodsDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setDangerousGoodsDetail(\NicholasCreativeMedia\FedExPHP\Structs\DangerousGoodsDetail $dangerousGoodsDetail = null)
    {
        $this->DangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    /**
     * Get DryIceWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getDryIceWeight()
    {
        return $this->DryIceWeight;
    }
    /**
     * Set DryIceWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $dryIceWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setDryIceWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $dryIceWeight = null)
    {
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    /**
     * Get SignatureOptionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail|null
     */
    public function getSignatureOptionDetail()
    {
        return $this->SignatureOptionDetail;
    }
    /**
     * Set SignatureOptionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $signatureOptionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setSignatureOptionDetail(\NicholasCreativeMedia\FedExPHP\Structs\SignatureOptionDetail $signatureOptionDetail = null)
    {
        $this->SignatureOptionDetail = $signatureOptionDetail;
        return $this;
    }
    /**
     * Get PriorityAlertDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PriorityAlertDetail|null
     */
    public function getPriorityAlertDetail()
    {
        return $this->PriorityAlertDetail;
    }
    /**
     * Set PriorityAlertDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PriorityAlertDetail $priorityAlertDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setPriorityAlertDetail(\NicholasCreativeMedia\FedExPHP\Structs\PriorityAlertDetail $priorityAlertDetail = null)
    {
        $this->PriorityAlertDetail = $priorityAlertDetail;
        return $this;
    }
    /**
     * Get AlcoholDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail|null
     */
    public function getAlcoholDetail()
    {
        return $this->AlcoholDetail;
    }
    /**
     * Set AlcoholDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail $alcoholDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
     */
    public function setAlcoholDetail(\NicholasCreativeMedia\FedExPHP\Structs\AlcoholDetail $alcoholDetail = null)
    {
        $this->AlcoholDetail = $alcoholDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageSpecialServicesRequested
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
