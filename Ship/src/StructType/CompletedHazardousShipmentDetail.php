<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedHazardousShipmentDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Computed shipment level hazardous commodity information.
 * @subpackage Structs
 */
class CompletedHazardousShipmentDetail extends AbstractStructBase
{
    /**
     * The HazardousSummaryDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedHazardousSummaryDetail
     */
    public $HazardousSummaryDetail;
    /**
     * The DryIceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentDryIceDetail
     */
    public $DryIceDetail;
    /**
     * The AdrLicense
     * Meta informations extracted from the WSDL
     * - documentation: This contains the ADR License information, which identifies the license number and ADR category under which the customer is allowed to ship.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\AdrLicenseDetail
     */
    public $AdrLicense;
    /**
     * Constructor method for CompletedHazardousShipmentDetail
     * @uses CompletedHazardousShipmentDetail::setHazardousSummaryDetail()
     * @uses CompletedHazardousShipmentDetail::setDryIceDetail()
     * @uses CompletedHazardousShipmentDetail::setAdrLicense()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedHazardousSummaryDetail $hazardousSummaryDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentDryIceDetail $dryIceDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\AdrLicenseDetail $adrLicense
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedHazardousSummaryDetail $hazardousSummaryDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentDryIceDetail $dryIceDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\AdrLicenseDetail $adrLicense = null)
    {
        $this
            ->setHazardousSummaryDetail($hazardousSummaryDetail)
            ->setDryIceDetail($dryIceDetail)
            ->setAdrLicense($adrLicense);
    }
    /**
     * Get HazardousSummaryDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedHazardousSummaryDetail|null
     */
    public function getHazardousSummaryDetail()
    {
        return $this->HazardousSummaryDetail;
    }
    /**
     * Set HazardousSummaryDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedHazardousSummaryDetail $hazardousSummaryDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedHazardousShipmentDetail
     */
    public function setHazardousSummaryDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedHazardousSummaryDetail $hazardousSummaryDetail = null)
    {
        $this->HazardousSummaryDetail = $hazardousSummaryDetail;
        return $this;
    }
    /**
     * Get DryIceDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentDryIceDetail|null
     */
    public function getDryIceDetail()
    {
        return $this->DryIceDetail;
    }
    /**
     * Set DryIceDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentDryIceDetail $dryIceDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedHazardousShipmentDetail
     */
    public function setDryIceDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ShipmentDryIceDetail $dryIceDetail = null)
    {
        $this->DryIceDetail = $dryIceDetail;
        return $this;
    }
    /**
     * Get AdrLicense value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\AdrLicenseDetail|null
     */
    public function getAdrLicense()
    {
        return $this->AdrLicense;
    }
    /**
     * Set AdrLicense value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\AdrLicenseDetail $adrLicense
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedHazardousShipmentDetail
     */
    public function setAdrLicense(\NicholasCreativeMedia\FedExPHP\Ship\StructType\AdrLicenseDetail $adrLicense = null)
    {
        $this->AdrLicense = $adrLicense;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedHazardousShipmentDetail
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
