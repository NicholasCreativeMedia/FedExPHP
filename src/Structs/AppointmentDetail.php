<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AppointmentDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the different appointment times on a specific date.
 * @subpackage Structs
 */
class AppointmentDetail extends AbstractStructBase
{
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * The WindowDetails
     * Meta informations extracted from the WSDL
     * - documentation: Different appointment time windows on the date specified.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\AppointmentTimeDetail[]
     */
    public $WindowDetails;
    /**
     * Constructor method for AppointmentDetail
     * @uses AppointmentDetail::setDate()
     * @uses AppointmentDetail::setWindowDetails()
     * @param string $date
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AppointmentTimeDetail[] $windowDetails
     */
    public function __construct($date = null, array $windowDetails = array())
    {
        $this
            ->setDate($date)
            ->setWindowDetails($windowDetails);
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AppointmentDetail
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get WindowDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AppointmentTimeDetail[]|null
     */
    public function getWindowDetails()
    {
        return $this->WindowDetails;
    }
    /**
     * Set WindowDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AppointmentTimeDetail[] $windowDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AppointmentDetail
     */
    public function setWindowDetails(array $windowDetails = array())
    {
        foreach ($windowDetails as $appointmentDetailWindowDetailsItem) {
            // validation for constraint: itemType
            if (!$appointmentDetailWindowDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\AppointmentTimeDetail) {
                throw new \InvalidArgumentException(sprintf('The WindowDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AppointmentTimeDetail, "%s" given', is_object($appointmentDetailWindowDetailsItem) ? get_class($appointmentDetailWindowDetailsItem) : gettype($appointmentDetailWindowDetailsItem)), __LINE__);
            }
        }
        $this->WindowDetails = $windowDetails;
        return $this;
    }
    /**
     * Add item to WindowDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\AppointmentTimeDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AppointmentDetail
     */
    public function addToWindowDetails(\NicholasCreativeMedia\FedExPHP\Structs\AppointmentTimeDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\AppointmentTimeDetail) {
            throw new \InvalidArgumentException(sprintf('The WindowDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\AppointmentTimeDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WindowDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\AppointmentDetail
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
