<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Descriptive data for the client submitting a transaction.
 * @subpackage Structs
 */
class ClientDetail extends AbstractStructBase
{
    /**
     * The AccountNumber
     * Meta informations extracted from the WSDL
     * - documentation: The FedEx account number associated with this transaction.
     * - minOccurs: 1
     * @var string
     */
    public $AccountNumber;
    /**
     * The MeterNumber
     * Meta informations extracted from the WSDL
     * - documentation: This number is assigned by FedEx and identifies the unique device from which the request is originating
     * - minOccurs: 1
     * @var string
     */
    public $MeterNumber;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: The language to be used for human-readable Notification.localizedMessages in responses to the request containing this ClientDetail object. Different requests from the same client may contain different Localization data. (Contrast
     * with TransactionDetail.localization, which governs data payload language/translation.)
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Localization
     */
    public $Localization;
    /**
     * Constructor method for ClientDetail
     * @uses ClientDetail::setAccountNumber()
     * @uses ClientDetail::setMeterNumber()
     * @uses ClientDetail::setLocalization()
     * @param string $accountNumber
     * @param string $meterNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Localization $localization
     */
    public function __construct($accountNumber = null, $meterNumber = null, \NicholasCreativeMedia\FedExPHP\Structs\Localization $localization = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setMeterNumber($meterNumber)
            ->setLocalization($localization);
    }
    /**
     * Get AccountNumber value
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountNumber)), __LINE__);
        }
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get MeterNumber value
     * @return string
     */
    public function getMeterNumber()
    {
        return $this->MeterNumber;
    }
    /**
     * Set MeterNumber value
     * @param string $meterNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public function setMeterNumber($meterNumber = null)
    {
        // validation for constraint: string
        if (!is_null($meterNumber) && !is_string($meterNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($meterNumber)), __LINE__);
        }
        $this->MeterNumber = $meterNumber;
        return $this;
    }
    /**
     * Get Localization value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Localization $localization
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
     */
    public function setLocalization(\NicholasCreativeMedia\FedExPHP\Structs\Localization $localization = null)
    {
        $this->Localization = $localization;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ClientDetail
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
