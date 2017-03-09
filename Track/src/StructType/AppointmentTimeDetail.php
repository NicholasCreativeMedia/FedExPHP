<?php

namespace NicholasCreativeMedia\FedExPHP\Track\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AppointmentTimeDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the details about the appointment time window.
 * @subpackage Structs
 */
class AppointmentTimeDetail extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: The description that FedEx Ground uses for the appointment window being specified.
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Window
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the window of time for an appointment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Track\StructType\LocalTimeRange
     */
    public $Window;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * Constructor method for AppointmentTimeDetail
     * @uses AppointmentTimeDetail::setType()
     * @uses AppointmentTimeDetail::setWindow()
     * @uses AppointmentTimeDetail::setDescription()
     * @param string $type
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\LocalTimeRange $window
     * @param string $description
     */
    public function __construct($type = null, \NicholasCreativeMedia\FedExPHP\Track\StructType\LocalTimeRange $window = null, $description = null)
    {
        $this
            ->setType($type)
            ->setWindow($window)
            ->setDescription($description);
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
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\AppointmentWindowType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\AppointmentWindowType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\AppointmentTimeDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Track\EnumType\AppointmentWindowType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Track\EnumType\AppointmentWindowType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Window value
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\LocalTimeRange|null
     */
    public function getWindow()
    {
        return $this->Window;
    }
    /**
     * Set Window value
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\LocalTimeRange $window
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\AppointmentTimeDetail
     */
    public function setWindow(\NicholasCreativeMedia\FedExPHP\Track\StructType\LocalTimeRange $window = null)
    {
        $this->Window = $window;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\AppointmentTimeDetail
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\AppointmentTimeDetail
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
