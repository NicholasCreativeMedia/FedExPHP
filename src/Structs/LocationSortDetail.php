<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationSortDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the criterion and order to be used to sort the location details.
 * @subpackage Structs
 */
class LocationSortDetail extends AbstractStructBase
{
    /**
     * The Criterion
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the criterion to be used to sort the location details.
     * - minOccurs: 0
     * @var string
     */
    public $Criterion;
    /**
     * The Order
     * Meta informations extracted from the WSDL
     * - documentation: Specifies sort order of the location details.
     * - minOccurs: 0
     * @var string
     */
    public $Order;
    /**
     * Constructor method for LocationSortDetail
     * @uses LocationSortDetail::setCriterion()
     * @uses LocationSortDetail::setOrder()
     * @param string $criterion
     * @param string $order
     */
    public function __construct($criterion = null, $order = null)
    {
        $this
            ->setCriterion($criterion)
            ->setOrder($order);
    }
    /**
     * Get Criterion value
     * @return string|null
     */
    public function getCriterion()
    {
        return $this->Criterion;
    }
    /**
     * Set Criterion value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationSortCriteriaType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationSortCriteriaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $criterion
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationSortDetail
     */
    public function setCriterion($criterion = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\LocationSortCriteriaType::valueIsValid($criterion)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $criterion, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LocationSortCriteriaType::getValidValues())), __LINE__);
        }
        $this->Criterion = $criterion;
        return $this;
    }
    /**
     * Get Order value
     * @return string|null
     */
    public function getOrder()
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationSortOrderType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\LocationSortOrderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $order
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationSortDetail
     */
    public function setOrder($order = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\LocationSortOrderType::valueIsValid($order)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $order, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\LocationSortOrderType::getValidValues())), __LINE__);
        }
        $this->Order = $order;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\LocationSortDetail
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
