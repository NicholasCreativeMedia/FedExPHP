<?php

namespace NicholasCreativeMedia\FedExPHP\Track\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackReturnDetail StructType
 * @subpackage Structs
 */
class TrackReturnDetail extends AbstractStructBase
{
    /**
     * The MovementStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MovementStatus;
    /**
     * The LabelType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LabelType;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The AuthorizationName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AuthorizationName;
    /**
     * Constructor method for TrackReturnDetail
     * @uses TrackReturnDetail::setMovementStatus()
     * @uses TrackReturnDetail::setLabelType()
     * @uses TrackReturnDetail::setDescription()
     * @uses TrackReturnDetail::setAuthorizationName()
     * @param string $movementStatus
     * @param string $labelType
     * @param string $description
     * @param string $authorizationName
     */
    public function __construct($movementStatus = null, $labelType = null, $description = null, $authorizationName = null)
    {
        $this
            ->setMovementStatus($movementStatus)
            ->setLabelType($labelType)
            ->setDescription($description)
            ->setAuthorizationName($authorizationName);
    }
    /**
     * Get MovementStatus value
     * @return string|null
     */
    public function getMovementStatus()
    {
        return $this->MovementStatus;
    }
    /**
     * Set MovementStatus value
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackReturnMovementStatusType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackReturnMovementStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $movementStatus
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackReturnDetail
     */
    public function setMovementStatus($movementStatus = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackReturnMovementStatusType::valueIsValid($movementStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $movementStatus, implode(', ', \NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackReturnMovementStatusType::getValidValues())), __LINE__);
        }
        $this->MovementStatus = $movementStatus;
        return $this;
    }
    /**
     * Get LabelType value
     * @return string|null
     */
    public function getLabelType()
    {
        return $this->LabelType;
    }
    /**
     * Set LabelType value
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackReturnLabelType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackReturnLabelType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $labelType
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackReturnDetail
     */
    public function setLabelType($labelType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackReturnLabelType::valueIsValid($labelType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $labelType, implode(', ', \NicholasCreativeMedia\FedExPHP\Track\EnumType\TrackReturnLabelType::getValidValues())), __LINE__);
        }
        $this->LabelType = $labelType;
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
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackReturnDetail
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
     * Get AuthorizationName value
     * @return string|null
     */
    public function getAuthorizationName()
    {
        return $this->AuthorizationName;
    }
    /**
     * Set AuthorizationName value
     * @param string $authorizationName
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackReturnDetail
     */
    public function setAuthorizationName($authorizationName = null)
    {
        // validation for constraint: string
        if (!is_null($authorizationName) && !is_string($authorizationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorizationName)), __LINE__);
        }
        $this->AuthorizationName = $authorizationName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TrackReturnDetail
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
