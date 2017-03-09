<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageBarcodes StructType
 * Meta informations extracted from the WSDL
 * - documentation: Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
 * @subpackage Structs
 */
class PackageBarcodes extends AbstractStructBase
{
    /**
     * The BinaryBarcodes
     * Meta informations extracted from the WSDL
     * - documentation: Binary-style barcodes for this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\BinaryBarcode[]
     */
    public $BinaryBarcodes;
    /**
     * The StringBarcodes
     * Meta informations extracted from the WSDL
     * - documentation: String-style barcodes for this package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\StringBarcode[]
     */
    public $StringBarcodes;
    /**
     * Constructor method for PackageBarcodes
     * @uses PackageBarcodes::setBinaryBarcodes()
     * @uses PackageBarcodes::setStringBarcodes()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\BinaryBarcode[] $binaryBarcodes
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\StringBarcode[] $stringBarcodes
     */
    public function __construct(array $binaryBarcodes = array(), array $stringBarcodes = array())
    {
        $this
            ->setBinaryBarcodes($binaryBarcodes)
            ->setStringBarcodes($stringBarcodes);
    }
    /**
     * Get BinaryBarcodes value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\BinaryBarcode[]|null
     */
    public function getBinaryBarcodes()
    {
        return $this->BinaryBarcodes;
    }
    /**
     * Set BinaryBarcodes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\BinaryBarcode[] $binaryBarcodes
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageBarcodes
     */
    public function setBinaryBarcodes(array $binaryBarcodes = array())
    {
        foreach ($binaryBarcodes as $packageBarcodesBinaryBarcodesItem) {
            // validation for constraint: itemType
            if (!$packageBarcodesBinaryBarcodesItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\BinaryBarcode) {
                throw new \InvalidArgumentException(sprintf('The BinaryBarcodes property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\BinaryBarcode, "%s" given', is_object($packageBarcodesBinaryBarcodesItem) ? get_class($packageBarcodesBinaryBarcodesItem) : gettype($packageBarcodesBinaryBarcodesItem)), __LINE__);
            }
        }
        $this->BinaryBarcodes = $binaryBarcodes;
        return $this;
    }
    /**
     * Add item to BinaryBarcodes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\BinaryBarcode $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageBarcodes
     */
    public function addToBinaryBarcodes(\NicholasCreativeMedia\FedExPHP\Ship\StructType\BinaryBarcode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\BinaryBarcode) {
            throw new \InvalidArgumentException(sprintf('The BinaryBarcodes property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\BinaryBarcode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BinaryBarcodes[] = $item;
        return $this;
    }
    /**
     * Get StringBarcodes value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\StringBarcode[]|null
     */
    public function getStringBarcodes()
    {
        return $this->StringBarcodes;
    }
    /**
     * Set StringBarcodes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\StringBarcode[] $stringBarcodes
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageBarcodes
     */
    public function setStringBarcodes(array $stringBarcodes = array())
    {
        foreach ($stringBarcodes as $packageBarcodesStringBarcodesItem) {
            // validation for constraint: itemType
            if (!$packageBarcodesStringBarcodesItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\StringBarcode) {
                throw new \InvalidArgumentException(sprintf('The StringBarcodes property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\StringBarcode, "%s" given', is_object($packageBarcodesStringBarcodesItem) ? get_class($packageBarcodesStringBarcodesItem) : gettype($packageBarcodesStringBarcodesItem)), __LINE__);
            }
        }
        $this->StringBarcodes = $stringBarcodes;
        return $this;
    }
    /**
     * Add item to StringBarcodes value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\StringBarcode $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageBarcodes
     */
    public function addToStringBarcodes(\NicholasCreativeMedia\FedExPHP\Ship\StructType\StringBarcode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\StringBarcode) {
            throw new \InvalidArgumentException(sprintf('The StringBarcodes property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\StringBarcode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->StringBarcodes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageBarcodes
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
