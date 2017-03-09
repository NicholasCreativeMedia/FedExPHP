<?php

namespace NicholasCreativeMedia\FedExPHP\Track\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackingDateOrTimestamp StructType
 * @subpackage Structs
 */
class TrackingDateOrTimestamp extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The DateOrTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DateOrTimestamp;
    /**
     * Constructor method for TrackingDateOrTimestamp
     * @uses TrackingDateOrTimestamp::setType()
     * @uses TrackingDateOrTimestamp::setDateOrTimestamp()
     * @param string $type
     * @param string $dateOrTimestamp
     */
    public function __construct($type = null, $dateOrTimestamp = null)
    {
        $this
            ->setType($type)
            ->setDateOrTimestamp($dateOrTimestamp);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackingDateOrTimestampType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackingDateOrTimestampType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackingDateOrTimestamp
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackingDateOrTimestampType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackingDateOrTimestampType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get DateOrTimestamp value
     * @return string|null
     */
    public function getDateOrTimestamp()
    {
        return $this->DateOrTimestamp;
    }
    /**
     * Set DateOrTimestamp value
     * @param string $dateOrTimestamp
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackingDateOrTimestamp
     */
    public function setDateOrTimestamp($dateOrTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($dateOrTimestamp) && !is_string($dateOrTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOrTimestamp)), __LINE__);
        }
        $this->DateOrTimestamp = $dateOrTimestamp;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackingDateOrTimestamp
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
