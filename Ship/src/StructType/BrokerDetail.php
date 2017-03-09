<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrokerDetail StructType
 * @subpackage Structs
 */
class BrokerDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Broker
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party
     */
    public $Broker;
    /**
     * Constructor method for BrokerDetail
     * @uses BrokerDetail::setType()
     * @uses BrokerDetail::setBroker()
     * @param string $type
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $broker
     */
    public function __construct($type = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $broker = null)
    {
        $this
            ->setType($type)
            ->setBroker($broker);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\BrokerType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\BrokerType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\BrokerDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\BrokerType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\BrokerType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Broker value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party|null
     */
    public function getBroker()
    {
        return $this->Broker;
    }
    /**
     * Set Broker value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $broker
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\BrokerDetail
     */
    public function setBroker(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $broker = null)
    {
        $this->Broker = $broker;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\BrokerDetail
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
