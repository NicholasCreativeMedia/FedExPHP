<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdrLicenseDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the details around the ADR license required for shipping.
 * @subpackage Structs
 */
class AdrLicenseDetail extends AbstractStructBase
{
    /**
     * The LicenseOrPermitDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\LicenseOrPermitDetail
     */
    public $LicenseOrPermitDetail;
    /**
     * Constructor method for AdrLicenseDetail
     * @uses AdrLicenseDetail::setLicenseOrPermitDetail()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LicenseOrPermitDetail $licenseOrPermitDetail
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\LicenseOrPermitDetail $licenseOrPermitDetail = null)
    {
        $this
            ->setLicenseOrPermitDetail($licenseOrPermitDetail);
    }
    /**
     * Get LicenseOrPermitDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LicenseOrPermitDetail|null
     */
    public function getLicenseOrPermitDetail()
    {
        return $this->LicenseOrPermitDetail;
    }
    /**
     * Set LicenseOrPermitDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\LicenseOrPermitDetail $licenseOrPermitDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AdrLicenseDetail
     */
    public function setLicenseOrPermitDetail(\NicholasCreativeMedia\FedExPHP\Structs\LicenseOrPermitDetail $licenseOrPermitDetail = null)
    {
        $this->LicenseOrPermitDetail = $licenseOrPermitDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AdrLicenseDetail
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
