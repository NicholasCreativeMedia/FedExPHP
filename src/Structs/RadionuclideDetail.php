<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RadionuclideDetail Structs
 * @subpackage Structs
 */
class RadionuclideDetail extends AbstractStructBase
{
    /**
     * The Radionuclide
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Radionuclide;
    /**
     * The Activity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\RadionuclideActivity
     */
    public $Activity;
    /**
     * The ExceptedPackagingIsReportableQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether packaging type "EXCEPTED" or "EXCEPTED_PACKAGE" is for radioactive material in reportable quantity.
     * - minOccurs: 0
     * @var bool
     */
    public $ExceptedPackagingIsReportableQuantity;
    /**
     * The PhysicalForm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhysicalForm;
    /**
     * The ChemicalForm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ChemicalForm;
    /**
     * Constructor method for RadionuclideDetail
     * @uses RadionuclideDetail::setRadionuclide()
     * @uses RadionuclideDetail::setActivity()
     * @uses RadionuclideDetail::setExceptedPackagingIsReportableQuantity()
     * @uses RadionuclideDetail::setPhysicalForm()
     * @uses RadionuclideDetail::setChemicalForm()
     * @param string $radionuclide
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RadionuclideActivity $activity
     * @param bool $exceptedPackagingIsReportableQuantity
     * @param string $physicalForm
     * @param string $chemicalForm
     */
    public function __construct($radionuclide = null, \NicholasCreativeMedia\FedExPHP\Structs\RadionuclideActivity $activity = null, $exceptedPackagingIsReportableQuantity = null, $physicalForm = null, $chemicalForm = null)
    {
        $this
            ->setRadionuclide($radionuclide)
            ->setActivity($activity)
            ->setExceptedPackagingIsReportableQuantity($exceptedPackagingIsReportableQuantity)
            ->setPhysicalForm($physicalForm)
            ->setChemicalForm($chemicalForm);
    }
    /**
     * Get Radionuclide value
     * @return string|null
     */
    public function getRadionuclide()
    {
        return $this->Radionuclide;
    }
    /**
     * Set Radionuclide value
     * @param string $radionuclide
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadionuclideDetail
     */
    public function setRadionuclide($radionuclide = null)
    {
        // validation for constraint: string
        if (!is_null($radionuclide) && !is_string($radionuclide)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($radionuclide)), __LINE__);
        }
        $this->Radionuclide = $radionuclide;
        return $this;
    }
    /**
     * Get Activity value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadionuclideActivity|null
     */
    public function getActivity()
    {
        return $this->Activity;
    }
    /**
     * Set Activity value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\RadionuclideActivity $activity
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadionuclideDetail
     */
    public function setActivity(\NicholasCreativeMedia\FedExPHP\Structs\RadionuclideActivity $activity = null)
    {
        $this->Activity = $activity;
        return $this;
    }
    /**
     * Get ExceptedPackagingIsReportableQuantity value
     * @return bool|null
     */
    public function getExceptedPackagingIsReportableQuantity()
    {
        return $this->ExceptedPackagingIsReportableQuantity;
    }
    /**
     * Set ExceptedPackagingIsReportableQuantity value
     * @param bool $exceptedPackagingIsReportableQuantity
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadionuclideDetail
     */
    public function setExceptedPackagingIsReportableQuantity($exceptedPackagingIsReportableQuantity = null)
    {
        $this->ExceptedPackagingIsReportableQuantity = $exceptedPackagingIsReportableQuantity;
        return $this;
    }
    /**
     * Get PhysicalForm value
     * @return string|null
     */
    public function getPhysicalForm()
    {
        return $this->PhysicalForm;
    }
    /**
     * Set PhysicalForm value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PhysicalFormType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\PhysicalFormType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $physicalForm
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadionuclideDetail
     */
    public function setPhysicalForm($physicalForm = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\PhysicalFormType::valueIsValid($physicalForm)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $physicalForm, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\PhysicalFormType::getValidValues())), __LINE__);
        }
        $this->PhysicalForm = $physicalForm;
        return $this;
    }
    /**
     * Get ChemicalForm value
     * @return string|null
     */
    public function getChemicalForm()
    {
        return $this->ChemicalForm;
    }
    /**
     * Set ChemicalForm value
     * @param string $chemicalForm
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadionuclideDetail
     */
    public function setChemicalForm($chemicalForm = null)
    {
        // validation for constraint: string
        if (!is_null($chemicalForm) && !is_string($chemicalForm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chemicalForm)), __LINE__);
        }
        $this->ChemicalForm = $chemicalForm;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\RadionuclideDetail
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
