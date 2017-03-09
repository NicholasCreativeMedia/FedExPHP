<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageRating StructType
 * Meta informations extracted from the WSDL
 * - documentation: This class groups together for a single package all package-level rate data (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 * @subpackage Structs
 */
class PackageRating extends AbstractStructBase
{
    /**
     * The ActualRateType
     * Meta informations extracted from the WSDL
     * - documentation: This rate type identifies which entry in the following array is considered as presenting the "actual" rates for the package.
     * - minOccurs: 0
     * @var string
     */
    public $ActualRateType;
    /**
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The "list" net charge minus "actual" net charge.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The PackageRateDetails
     * Meta informations extracted from the WSDL
     * - documentation: Each element of this field provides package-level rate data for a specific rate type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRateDetail[]
     */
    public $PackageRateDetails;
    /**
     * Constructor method for PackageRating
     * @uses PackageRating::setActualRateType()
     * @uses PackageRating::setEffectiveNetDiscount()
     * @uses PackageRating::setPackageRateDetails()
     * @param string $actualRateType
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $effectiveNetDiscount
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRateDetail[] $packageRateDetails
     */
    public function __construct($actualRateType = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $effectiveNetDiscount = null, array $packageRateDetails = array())
    {
        $this
            ->setActualRateType($actualRateType)
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setPackageRateDetails($packageRateDetails);
    }
    /**
     * Get ActualRateType value
     * @return string|null
     */
    public function getActualRateType()
    {
        return $this->ActualRateType;
    }
    /**
     * Set ActualRateType value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnedRateType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnedRateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $actualRateType
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRating
     */
    public function setActualRateType($actualRateType = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnedRateType::valueIsValid($actualRateType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actualRateType, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ReturnedRateType::getValidValues())), __LINE__);
        }
        $this->ActualRateType = $actualRateType;
        return $this;
    }
    /**
     * Get EffectiveNetDiscount value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getEffectiveNetDiscount()
    {
        return $this->EffectiveNetDiscount;
    }
    /**
     * Set EffectiveNetDiscount value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $effectiveNetDiscount
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRating
     */
    public function setEffectiveNetDiscount(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $effectiveNetDiscount = null)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * Get PackageRateDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRateDetail[]|null
     */
    public function getPackageRateDetails()
    {
        return $this->PackageRateDetails;
    }
    /**
     * Set PackageRateDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRateDetail[] $packageRateDetails
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRating
     */
    public function setPackageRateDetails(array $packageRateDetails = array())
    {
        foreach ($packageRateDetails as $packageRatingPackageRateDetailsItem) {
            // validation for constraint: itemType
            if (!$packageRatingPackageRateDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRateDetail) {
                throw new \InvalidArgumentException(sprintf('The PackageRateDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRateDetail, "%s" given', is_object($packageRatingPackageRateDetailsItem) ? get_class($packageRatingPackageRateDetailsItem) : gettype($packageRatingPackageRateDetailsItem)), __LINE__);
            }
        }
        $this->PackageRateDetails = $packageRateDetails;
        return $this;
    }
    /**
     * Add item to PackageRateDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRateDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRating
     */
    public function addToPackageRateDetails(\NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRateDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRateDetail) {
            throw new \InvalidArgumentException(sprintf('The PackageRateDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRateDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PackageRateDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\PackageRating
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
