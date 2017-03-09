<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomsDeclarationStatementDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: This provides the information necessary to identify the different statements, declarations, acts, and/or certifications that apply to this shipment.
 * @subpackage Structs
 */
class CustomsDeclarationStatementDetail extends AbstractStructBase
{
    /**
     * The Types
     * Meta informations extracted from the WSDL
     * - documentation: This indicates the different statements, declarations, acts, and/or certifications that apply to this shipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Types;
    /**
     * The NaftaLowValueStatementDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the NAFTA low value statement information.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\NaftaLowValueStatementDetail
     */
    public $NaftaLowValueStatementDetail;
    /**
     * Constructor method for CustomsDeclarationStatementDetail
     * @uses CustomsDeclarationStatementDetail::setTypes()
     * @uses CustomsDeclarationStatementDetail::setNaftaLowValueStatementDetail()
     * @param string[] $types
     * @param \NicholasCreativeMedia\FedExPHP\Structs\NaftaLowValueStatementDetail $naftaLowValueStatementDetail
     */
    public function __construct(array $types = array(), \NicholasCreativeMedia\FedExPHP\Structs\NaftaLowValueStatementDetail $naftaLowValueStatementDetail = null)
    {
        $this
            ->setTypes($types)
            ->setNaftaLowValueStatementDetail($naftaLowValueStatementDetail);
    }
    /**
     * Get Types value
     * @return string[]|null
     */
    public function getTypes()
    {
        return $this->Types;
    }
    /**
     * Set Types value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CustomsDeclarationStatementType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CustomsDeclarationStatementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $types
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomsDeclarationStatementDetail
     */
    public function setTypes(array $types = array())
    {
        $invalidValues = array();
        foreach ($types as $customsDeclarationStatementDetailTypesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Enums\CustomsDeclarationStatementType::valueIsValid($customsDeclarationStatementDetailTypesItem)) {
                $invalidValues[] = var_export($customsDeclarationStatementDetailTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CustomsDeclarationStatementType::getValidValues())), __LINE__);
        }
        $this->Types = $types;
        return $this;
    }
    /**
     * Add item to Types value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CustomsDeclarationStatementType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\CustomsDeclarationStatementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomsDeclarationStatementDetail
     */
    public function addToTypes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\CustomsDeclarationStatementType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\CustomsDeclarationStatementType::getValidValues())), __LINE__);
        }
        $this->Types[] = $item;
        return $this;
    }
    /**
     * Get NaftaLowValueStatementDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\NaftaLowValueStatementDetail|null
     */
    public function getNaftaLowValueStatementDetail()
    {
        return $this->NaftaLowValueStatementDetail;
    }
    /**
     * Set NaftaLowValueStatementDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\NaftaLowValueStatementDetail $naftaLowValueStatementDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomsDeclarationStatementDetail
     */
    public function setNaftaLowValueStatementDetail(\NicholasCreativeMedia\FedExPHP\Structs\NaftaLowValueStatementDetail $naftaLowValueStatementDetail = null)
    {
        $this->NaftaLowValueStatementDetail = $naftaLowValueStatementDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CustomsDeclarationStatementDetail
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
