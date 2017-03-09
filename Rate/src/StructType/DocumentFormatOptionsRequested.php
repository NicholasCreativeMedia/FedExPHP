<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentFormatOptionsRequested StructType
 * @subpackage Structs
 */
class DocumentFormatOptionsRequested extends AbstractStructBase
{
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Options;
    /**
     * Constructor method for DocumentFormatOptionsRequested
     * @uses DocumentFormatOptionsRequested::setOptions()
     * @param string[] $options
     */
    public function __construct(array $options = array())
    {
        $this
            ->setOptions($options);
    }
    /**
     * Get Options value
     * @return string[]|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DocumentFormatOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DocumentFormatOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $options
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DocumentFormatOptionsRequested
     */
    public function setOptions(array $options = array())
    {
        $invalidValues = array();
        foreach ($options as $documentFormatOptionsRequestedOptionsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\DocumentFormatOptionType::valueIsValid($documentFormatOptionsRequestedOptionsItem)) {
                $invalidValues[] = var_export($documentFormatOptionsRequestedOptionsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DocumentFormatOptionType::getValidValues())), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
    /**
     * Add item to Options value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DocumentFormatOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DocumentFormatOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DocumentFormatOptionsRequested
     */
    public function addToOptions($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\DocumentFormatOptionType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\DocumentFormatOptionType::getValidValues())), __LINE__);
        }
        $this->Options[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\DocumentFormatOptionsRequested
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
