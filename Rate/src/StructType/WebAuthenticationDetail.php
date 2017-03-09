<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebAuthenticationDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used in authentication of the sender's identity.
 * @subpackage Structs
 */
class WebAuthenticationDetail extends AbstractStructBase
{
    /**
     * The UserCredential
     * Meta informations extracted from the WSDL
     * - documentation: Credential used to authenticate a specific software application. This value is provided by FedEx after registration.
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationCredential
     */
    public $UserCredential;
    /**
     * The ParentCredential
     * Meta informations extracted from the WSDL
     * - documentation: This was renamed from cspCredential.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationCredential
     */
    public $ParentCredential;
    /**
     * Constructor method for WebAuthenticationDetail
     * @uses WebAuthenticationDetail::setUserCredential()
     * @uses WebAuthenticationDetail::setParentCredential()
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationCredential $userCredential
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationCredential $parentCredential
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationCredential $userCredential = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationCredential $parentCredential = null)
    {
        $this
            ->setUserCredential($userCredential)
            ->setParentCredential($parentCredential);
    }
    /**
     * Get UserCredential value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationCredential
     */
    public function getUserCredential()
    {
        return $this->UserCredential;
    }
    /**
     * Set UserCredential value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationCredential $userCredential
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationDetail
     */
    public function setUserCredential(\NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationCredential $userCredential = null)
    {
        $this->UserCredential = $userCredential;
        return $this;
    }
    /**
     * Get ParentCredential value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationCredential|null
     */
    public function getParentCredential()
    {
        return $this->ParentCredential;
    }
    /**
     * Set ParentCredential value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationCredential $parentCredential
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationDetail
     */
    public function setParentCredential(\NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationCredential $parentCredential = null)
    {
        $this->ParentCredential = $parentCredential;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\WebAuthenticationDetail
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
