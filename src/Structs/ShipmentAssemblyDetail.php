<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentAssemblyDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specification for assembly performed on shipment.
 * @subpackage Structs
 */
class ShipmentAssemblyDetail extends AbstractStructBase
{
    /**
     * The PieceCount
     * Meta informations extracted from the WSDL
     * - documentation: Number of pieces or packages to be assembled
     * - minOccurs: 0
     * @var int
     */
    public $PieceCount;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - documentation: Total weight of pieces or packages to be assembled
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $Weight;
    /**
     * Constructor method for ShipmentAssemblyDetail
     * @uses ShipmentAssemblyDetail::setPieceCount()
     * @uses ShipmentAssemblyDetail::setWeight()
     * @param int $pieceCount
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $weight
     */
    public function __construct($pieceCount = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $weight = null)
    {
        $this
            ->setPieceCount($pieceCount)
            ->setWeight($weight);
    }
    /**
     * Get PieceCount value
     * @return int|null
     */
    public function getPieceCount()
    {
        return $this->PieceCount;
    }
    /**
     * Set PieceCount value
     * @param int $pieceCount
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAssemblyDetail
     */
    public function setPieceCount($pieceCount = null)
    {
        // validation for constraint: int
        if (!is_null($pieceCount) && !is_numeric($pieceCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pieceCount)), __LINE__);
        }
        $this->PieceCount = $pieceCount;
        return $this;
    }
    /**
     * Get Weight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $weight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAssemblyDetail
     */
    public function setWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShipmentAssemblyDetail
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
