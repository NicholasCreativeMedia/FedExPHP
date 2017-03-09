<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLabelGraphicEntry StructType
 * Meta informations extracted from the WSDL
 * - documentation: Image to be included from printer's memory, or from a local file for offline clients.
 * @subpackage Structs
 */
class CustomLabelGraphicEntry extends AbstractStructBase
{
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition
     */
    public $Position;
    /**
     * The PrinterGraphicId
     * Meta informations extracted from the WSDL
     * - documentation: Printer-specific index of graphic image to be printed.
     * - minOccurs: 0
     * @var string
     */
    public $PrinterGraphicId;
    /**
     * The FileGraphicFullName
     * Meta informations extracted from the WSDL
     * - documentation: Fully-qualified path and file name for graphic image to be printed.
     * - minOccurs: 0
     * @var string
     */
    public $FileGraphicFullName;
    /**
     * Constructor method for CustomLabelGraphicEntry
     * @uses CustomLabelGraphicEntry::setPosition()
     * @uses CustomLabelGraphicEntry::setPrinterGraphicId()
     * @uses CustomLabelGraphicEntry::setFileGraphicFullName()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition $position
     * @param string $printerGraphicId
     * @param string $fileGraphicFullName
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition $position = null, $printerGraphicId = null, $fileGraphicFullName = null)
    {
        $this
            ->setPosition($position)
            ->setPrinterGraphicId($printerGraphicId)
            ->setFileGraphicFullName($fileGraphicFullName);
    }
    /**
     * Get Position value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition $position
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelGraphicEntry
     */
    public function setPosition(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelPosition $position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get PrinterGraphicId value
     * @return string|null
     */
    public function getPrinterGraphicId()
    {
        return $this->PrinterGraphicId;
    }
    /**
     * Set PrinterGraphicId value
     * @param string $printerGraphicId
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelGraphicEntry
     */
    public function setPrinterGraphicId($printerGraphicId = null)
    {
        // validation for constraint: string
        if (!is_null($printerGraphicId) && !is_string($printerGraphicId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($printerGraphicId)), __LINE__);
        }
        $this->PrinterGraphicId = $printerGraphicId;
        return $this;
    }
    /**
     * Get FileGraphicFullName value
     * @return string|null
     */
    public function getFileGraphicFullName()
    {
        return $this->FileGraphicFullName;
    }
    /**
     * Set FileGraphicFullName value
     * @param string $fileGraphicFullName
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelGraphicEntry
     */
    public function setFileGraphicFullName($fileGraphicFullName = null)
    {
        // validation for constraint: string
        if (!is_null($fileGraphicFullName) && !is_string($fileGraphicFullName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileGraphicFullName)), __LINE__);
        }
        $this->FileGraphicFullName = $fileGraphicFullName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomLabelGraphicEntry
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
