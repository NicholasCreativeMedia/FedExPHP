<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackStatusDetail Structs
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the details about the status of the track information for the shipments being tracked.
 * @subpackage Structs
 */
class TrackStatusDetail extends AbstractStructBase
{
    /**
     * The CreationTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreationTime;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Address
     */
    public $Location;
    /**
     * The AncillaryDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusAncillaryDetail[]
     */
    public $AncillaryDetails;
    /**
     * Constructor method for TrackStatusDetail
     * @uses TrackStatusDetail::setCreationTime()
     * @uses TrackStatusDetail::setCode()
     * @uses TrackStatusDetail::setDescription()
     * @uses TrackStatusDetail::setLocation()
     * @uses TrackStatusDetail::setAncillaryDetails()
     * @param string $creationTime
     * @param string $code
     * @param string $description
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $location
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusAncillaryDetail[] $ancillaryDetails
     */
    public function __construct($creationTime = null, $code = null, $description = null, \NicholasCreativeMedia\FedExPHP\Structs\Address $location = null, array $ancillaryDetails = array())
    {
        $this
            ->setCreationTime($creationTime)
            ->setCode($code)
            ->setDescription($description)
            ->setLocation($location)
            ->setAncillaryDetails($ancillaryDetails);
    }
    /**
     * Get CreationTime value
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusDetail
     */
    public function setCreationTime($creationTime = null)
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusDetail
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
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
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusDetail
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
     * Get Location value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Address|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Address $location
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusDetail
     */
    public function setLocation(\NicholasCreativeMedia\FedExPHP\Structs\Address $location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get AncillaryDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusAncillaryDetail[]|null
     */
    public function getAncillaryDetails()
    {
        return $this->AncillaryDetails;
    }
    /**
     * Set AncillaryDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusAncillaryDetail[] $ancillaryDetails
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusDetail
     */
    public function setAncillaryDetails(array $ancillaryDetails = array())
    {
        foreach ($ancillaryDetails as $trackStatusDetailAncillaryDetailsItem) {
            // validation for constraint: itemType
            if (!$trackStatusDetailAncillaryDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusAncillaryDetail) {
                throw new \InvalidArgumentException(sprintf('The AncillaryDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusAncillaryDetail, "%s" given', is_object($trackStatusDetailAncillaryDetailsItem) ? get_class($trackStatusDetailAncillaryDetailsItem) : gettype($trackStatusDetailAncillaryDetailsItem)), __LINE__);
            }
        }
        $this->AncillaryDetails = $ancillaryDetails;
        return $this;
    }
    /**
     * Add item to AncillaryDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusAncillaryDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusDetail
     */
    public function addToAncillaryDetails(\NicholasCreativeMedia\FedExPHP\Structs\TrackStatusAncillaryDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusAncillaryDetail) {
            throw new \InvalidArgumentException(sprintf('The AncillaryDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusAncillaryDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AncillaryDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackStatusDetail
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
