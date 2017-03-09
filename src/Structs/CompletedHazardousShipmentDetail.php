<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedHazardousShipmentDetail Structs
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
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousSummaryDetail
     */
    public $HazardousSummaryDetail;
    /**
     * The DryIceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail
     */
    public $DryIceDetail;
    /**
     * The AdrLicense
     * Meta informations extracted from the WSDL
     * - documentation: This contains the ADR License information, which identifies the license number and ADR category under which the customer is allowed to ship.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AdrLicenseDetail
     */
    public $AdrLicense;
    /**
     * Constructor method for CompletedHazardousShipmentDetail
     * @uses CompletedHazardousShipmentDetail::setHazardousSummaryDetail()
     * @uses CompletedHazardousShipmentDetail::setDryIceDetail()
     * @uses CompletedHazardousShipmentDetail::setAdrLicense()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousSummaryDetail $hazardousSummaryDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AdrLicenseDetail $adrLicense
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousSummaryDetail $hazardousSummaryDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\AdrLicenseDetail $adrLicense = null)
    {
        $this
            ->setHazardousSummaryDetail($hazardousSummaryDetail)
            ->setDryIceDetail($dryIceDetail)
            ->setAdrLicense($adrLicense);
    }
    /**
     * Get HazardousSummaryDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousSummaryDetail|null
     */
    public function getHazardousSummaryDetail()
    {
        return $this->HazardousSummaryDetail;
    }
    /**
     * Set HazardousSummaryDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousSummaryDetail $hazardousSummaryDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousShipmentDetail
     */
    public function setHazardousSummaryDetail(\NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousSummaryDetail $hazardousSummaryDetail = null)
    {
        $this->HazardousSummaryDetail = $hazardousSummaryDetail;
        return $this;
    }
    /**
     * Get DryIceDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail|null
     */
    public function getDryIceDetail()
    {
        return $this->DryIceDetail;
    }
    /**
     * Set DryIceDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousShipmentDetail
     */
    public function setDryIceDetail(\NicholasCreativeMedia\FedExPHP\Structs\ShipmentDryIceDetail $dryIceDetail = null)
    {
        $this->DryIceDetail = $dryIceDetail;
        return $this;
    }
    /**
     * Get AdrLicense value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AdrLicenseDetail|null
     */
    public function getAdrLicense()
    {
        return $this->AdrLicense;
    }
    /**
     * Set AdrLicense value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AdrLicenseDetail $adrLicense
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousShipmentDetail
     */
    public function setAdrLicense(\NicholasCreativeMedia\FedExPHP\Structs\AdrLicenseDetail $adrLicense = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousShipmentDetail
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
