<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Party StructType
 * @subpackage Structs
 */
class Party extends AbstractStructBase
{
    /**
     * The AccountNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccountNumber;
    /**
     * The Tins
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\TaxpayerIdentification[]
     */
    public $Tins;
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact
     */
    public $Contact;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Address
     */
    public $Address;
    /**
     * Constructor method for Party
     * @uses Party::setAccountNumber()
     * @uses Party::setTins()
     * @uses Party::setContact()
     * @uses Party::setAddress()
     * @param string $accountNumber
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\TaxpayerIdentification[] $tins
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact $contact
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Address $address
     */
    public function __construct($accountNumber = null, array $tins = array(), \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact $contact = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\Address $address = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setTins($tins)
            ->setContact($contact)
            ->setAddress($address);
    }
    /**
     * Get AccountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    /**
     * Set AccountNumber value
     * @param string $accountNumber
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Party
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
     * Get Tins value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\TaxpayerIdentification[]|null
     */
    public function getTins()
    {
        return $this->Tins;
    }
    /**
     * Set Tins value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\TaxpayerIdentification[] $tins
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Party
     */
    public function setTins(array $tins = array())
    {
        foreach ($tins as $partyTinsItem) {
            // validation for constraint: itemType
            if (!$partyTinsItem instanceof \NicholasCreativeMedia\FedExPHP\Rate\StructType\TaxpayerIdentification) {
                throw new \InvalidArgumentException(sprintf('The Tins property can only contain items of \NicholasCreativeMedia\FedExPHP\Rate\StructType\TaxpayerIdentification, "%s" given', is_object($partyTinsItem) ? get_class($partyTinsItem) : gettype($partyTinsItem)), __LINE__);
            }
        }
        $this->Tins = $tins;
        return $this;
    }
    /**
     * Add item to Tins value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\TaxpayerIdentification $item
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Party
     */
    public function addToTins(\NicholasCreativeMedia\FedExPHP\Rate\StructType\TaxpayerIdentification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Rate\StructType\TaxpayerIdentification) {
            throw new \InvalidArgumentException(sprintf('The Tins property can only contain items of \NicholasCreativeMedia\FedExPHP\Rate\StructType\TaxpayerIdentification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Tins[] = $item;
        return $this;
    }
    /**
     * Get Contact value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact $contact
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Party
     */
    public function setContact(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Contact $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get Address value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Address $address
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Party
     */
    public function setAddress(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Party
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
