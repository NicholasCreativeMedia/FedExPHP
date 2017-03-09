<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payor Structs
 * @subpackage Structs
 */
class Payor extends AbstractStructBase
{
    /**
     * The ResponsibleParty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Party
     */
    public $ResponsibleParty;
    /**
     * Constructor method for Payor
     * @uses Payor::setResponsibleParty()
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $responsibleParty
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Structs\Party $responsibleParty = null)
    {
        $this
            ->setResponsibleParty($responsibleParty);
    }
    /**
     * Get ResponsibleParty value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Party|null
     */
    public function getResponsibleParty()
    {
        return $this->ResponsibleParty;
    }
    /**
     * Set ResponsibleParty value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Party $responsibleParty
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Payor
     */
    public function setResponsibleParty(\NicholasCreativeMedia\FedExPHP\Structs\Party $responsibleParty = null)
    {
        $this->ResponsibleParty = $responsibleParty;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Payor
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
