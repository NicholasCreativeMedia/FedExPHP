<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionDetail StructType
 * @subpackage Structs
 */
class TransactionDetail extends AbstractStructBase
{
    /**
     * The CustomerTransactionId
     * Meta informations extracted from the WSDL
     * - documentation: Free form text to be echoed back in the reply. Used to match requests and replies.
     * - minOccurs: 0
     * @var string
     */
    public $CustomerTransactionId;
    /**
     * The Localization
     * Meta informations extracted from the WSDL
     * - documentation: Governs data payload language/translations (contrasted with ClientDetail.localization, which governs Notification.localizedMessage language selection).
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Localization
     */
    public $Localization;
    /**
     * Constructor method for TransactionDetail
     * @uses TransactionDetail::setCustomerTransactionId()
     * @uses TransactionDetail::setLocalization()
     * @param string $customerTransactionId
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Localization $localization
     */
    public function __construct($customerTransactionId = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\Localization $localization = null)
    {
        $this
            ->setCustomerTransactionId($customerTransactionId)
            ->setLocalization($localization);
    }
    /**
     * Get CustomerTransactionId value
     * @return string|null
     */
    public function getCustomerTransactionId()
    {
        return $this->CustomerTransactionId;
    }
    /**
     * Set CustomerTransactionId value
     * @param string $customerTransactionId
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\TransactionDetail
     */
    public function setCustomerTransactionId($customerTransactionId = null)
    {
        // validation for constraint: string
        if (!is_null($customerTransactionId) && !is_string($customerTransactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerTransactionId)), __LINE__);
        }
        $this->CustomerTransactionId = $customerTransactionId;
        return $this;
    }
    /**
     * Get Localization value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Localization|null
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    /**
     * Set Localization value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Localization $localization
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\TransactionDetail
     */
    public function setLocalization(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Localization $localization = null)
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
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\TransactionDetail
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
