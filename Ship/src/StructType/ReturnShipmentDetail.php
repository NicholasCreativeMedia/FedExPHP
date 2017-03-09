<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnShipmentDetail StructType
 * @subpackage Structs
 */
class ReturnShipmentDetail extends AbstractStructBase
{
    /**
     * The ReturnType
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $ReturnType;
    /**
     * The Rma
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Rma
     */
    public $Rma;
    /**
     * The ReturnEMailDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnEMailDetail
     */
    public $ReturnEMailDetail;
    /**
     * The ReturnAssociation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnAssociationDetail
     */
    public $ReturnAssociation;
    /**
     * Constructor method for ReturnShipmentDetail
     * @uses ReturnShipmentDetail::setReturnType()
     * @uses ReturnShipmentDetail::setRma()
     * @uses ReturnShipmentDetail::setReturnEMailDetail()
     * @uses ReturnShipmentDetail::setReturnAssociation()
     * @param string $returnType
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Rma $rma
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnEMailDetail $returnEMailDetail
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnAssociationDetail $returnAssociation
     */
    public function __construct($returnType = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Rma $rma = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnEMailDetail $returnEMailDetail = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnAssociationDetail $returnAssociation = null)
    {
        $this
            ->setReturnType($returnType)
            ->setRma($rma)
            ->setReturnEMailDetail($returnEMailDetail)
            ->setReturnAssociation($returnAssociation);
    }
    /**
     * Get ReturnType value
     * @return string
     */
    public function getReturnType()
    {
        return $this->ReturnType;
    }
    /**
     * Set ReturnType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnShipmentDetail
     */
    public function setReturnType($returnType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnType::valueIsValid($returnType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $returnType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnType::getValidValues())), __LINE__);
        }
        $this->ReturnType = $returnType;
        return $this;
    }
    /**
     * Get Rma value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Rma|null
     */
    public function getRma()
    {
        return $this->Rma;
    }
    /**
     * Set Rma value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Rma $rma
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnShipmentDetail
     */
    public function setRma(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Rma $rma = null)
    {
        $this->Rma = $rma;
        return $this;
    }
    /**
     * Get ReturnEMailDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnEMailDetail|null
     */
    public function getReturnEMailDetail()
    {
        return $this->ReturnEMailDetail;
    }
    /**
     * Set ReturnEMailDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnEMailDetail $returnEMailDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnShipmentDetail
     */
    public function setReturnEMailDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnEMailDetail $returnEMailDetail = null)
    {
        $this->ReturnEMailDetail = $returnEMailDetail;
        return $this;
    }
    /**
     * Get ReturnAssociation value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnAssociationDetail|null
     */
    public function getReturnAssociation()
    {
        return $this->ReturnAssociation;
    }
    /**
     * Set ReturnAssociation value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnAssociationDetail $returnAssociation
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnShipmentDetail
     */
    public function setReturnAssociation(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnAssociationDetail $returnAssociation = null)
    {
        $this->ReturnAssociation = $returnAssociation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ReturnShipmentDetail
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
