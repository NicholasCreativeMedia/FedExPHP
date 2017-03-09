<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationControlDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Data required to complete the Destionation Control Statement for US exports.
 * @subpackage Structs
 */
class DestinationControlDetail extends AbstractStructBase
{
    /**
     * The StatementTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $StatementTypes;
    /**
     * The DestinationCountries
     * Meta informations extracted from the WSDL
     * - documentation: Comma-separated list of up to four country codes, required for DEPARTMENT_OF_STATE statement.
     * - minOccurs: 0
     * @var string
     */
    public $DestinationCountries;
    /**
     * The EndUser
     * Meta informations extracted from the WSDL
     * - documentation: Name of end user, required for DEPARTMENT_OF_STATE statement.
     * - minOccurs: 0
     * @var string
     */
    public $EndUser;
    /**
     * Constructor method for DestinationControlDetail
     * @uses DestinationControlDetail::setStatementTypes()
     * @uses DestinationControlDetail::setDestinationCountries()
     * @uses DestinationControlDetail::setEndUser()
     * @param string[] $statementTypes
     * @param string $destinationCountries
     * @param string $endUser
     */
    public function __construct(array $statementTypes = array(), $destinationCountries = null, $endUser = null)
    {
        $this
            ->setStatementTypes($statementTypes)
            ->setDestinationCountries($destinationCountries)
            ->setEndUser($endUser);
    }
    /**
     * Get StatementTypes value
     * @return string[]|null
     */
    public function getStatementTypes()
    {
        return $this->StatementTypes;
    }
    /**
     * Set StatementTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DestinationControlStatementType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DestinationControlStatementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $statementTypes
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DestinationControlDetail
     */
    public function setStatementTypes(array $statementTypes = array())
    {
        $invalidValues = array();
        foreach ($statementTypes as $destinationControlDetailStatementTypesItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\DestinationControlStatementType::valueIsValid($destinationControlDetailStatementTypesItem)) {
                $invalidValues[] = var_export($destinationControlDetailStatementTypesItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DestinationControlStatementType::getValidValues())), __LINE__);
        }
        $this->StatementTypes = $statementTypes;
        return $this;
    }
    /**
     * Add item to StatementTypes value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DestinationControlStatementType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DestinationControlStatementType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DestinationControlDetail
     */
    public function addToStatementTypes($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\DestinationControlStatementType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DestinationControlStatementType::getValidValues())), __LINE__);
        }
        $this->StatementTypes[] = $item;
        return $this;
    }
    /**
     * Get DestinationCountries value
     * @return string|null
     */
    public function getDestinationCountries()
    {
        return $this->DestinationCountries;
    }
    /**
     * Set DestinationCountries value
     * @param string $destinationCountries
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DestinationControlDetail
     */
    public function setDestinationCountries($destinationCountries = null)
    {
        // validation for constraint: string
        if (!is_null($destinationCountries) && !is_string($destinationCountries)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationCountries)), __LINE__);
        }
        $this->DestinationCountries = $destinationCountries;
        return $this;
    }
    /**
     * Get EndUser value
     * @return string|null
     */
    public function getEndUser()
    {
        return $this->EndUser;
    }
    /**
     * Set EndUser value
     * @param string $endUser
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DestinationControlDetail
     */
    public function setEndUser($endUser = null)
    {
        // validation for constraint: string
        if (!is_null($endUser) && !is_string($endUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endUser)), __LINE__);
        }
        $this->EndUser = $endUser;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DestinationControlDetail
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
