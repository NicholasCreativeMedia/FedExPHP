<?php

namespace NicholasCreativeMedia\FedExPHP\Structs;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedPackageDetail Structs
 * @subpackage Structs
 */
class CompletedPackageDetail extends AbstractStructBase
{
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SequenceNumber;
    /**
     * The TrackingIds
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[]
     */
    public $TrackingIds;
    /**
     * The GroupNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used with request containing PACKAGE_GROUPS, to identify which group of identical packages was used to produce a reply item.
     * - minOccurs: 0
     * @var int
     */
    public $GroupNumber;
    /**
     * The OversizeClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OversizeClass;
    /**
     * The PackageRating
     * Meta informations extracted from the WSDL
     * - documentation: All package-level rating data for this package, which may include data for multiple rate types.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PackageRating
     */
    public $PackageRating;
    /**
     * The OperationalDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\PackageOperationalDetail
     */
    public $OperationalDetail;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument
     */
    public $Label;
    /**
     * The PackageDocuments
     * Meta informations extracted from the WSDL
     * - documentation: All package-level shipping documents (other than labels and barcodes). For use in loads after January, 2008.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[]
     */
    public $PackageDocuments;
    /**
     * The CodReturnDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the information associated with this package that has COD special service in a ground shipment.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CodReturnPackageDetail
     */
    public $CodReturnDetail;
    /**
     * The SignatureOption
     * Meta informations extracted from the WSDL
     * - documentation: Actual signature option applied, to allow for cases in which the original value conflicted with other service features in the shipment.
     * - minOccurs: 0
     * @var string
     */
    public $SignatureOption;
    /**
     * The DryIceWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\Weight
     */
    public $DryIceWeight;
    /**
     * The HazardousPackageDetail
     * Meta informations extracted from the WSDL
     * - documentation: Documents the kinds and quantities of all hazardous commodities in the current package, using updated hazardous commodity description data.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousPackageDetail
     */
    public $HazardousPackageDetail;
    /**
     * Constructor method for CompletedPackageDetail
     * @uses CompletedPackageDetail::setSequenceNumber()
     * @uses CompletedPackageDetail::setTrackingIds()
     * @uses CompletedPackageDetail::setGroupNumber()
     * @uses CompletedPackageDetail::setOversizeClass()
     * @uses CompletedPackageDetail::setPackageRating()
     * @uses CompletedPackageDetail::setOperationalDetail()
     * @uses CompletedPackageDetail::setLabel()
     * @uses CompletedPackageDetail::setPackageDocuments()
     * @uses CompletedPackageDetail::setCodReturnDetail()
     * @uses CompletedPackageDetail::setSignatureOption()
     * @uses CompletedPackageDetail::setDryIceWeight()
     * @uses CompletedPackageDetail::setHazardousPackageDetail()
     * @param int $sequenceNumber
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[] $trackingIds
     * @param int $groupNumber
     * @param string $oversizeClass
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageRating $packageRating
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageOperationalDetail $operationalDetail
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $label
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[] $packageDocuments
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CodReturnPackageDetail $codReturnDetail
     * @param string $signatureOption
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $dryIceWeight
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousPackageDetail $hazardousPackageDetail
     */
    public function __construct($sequenceNumber = null, array $trackingIds = array(), $groupNumber = null, $oversizeClass = null, \NicholasCreativeMedia\FedExPHP\Structs\PackageRating $packageRating = null, \NicholasCreativeMedia\FedExPHP\Structs\PackageOperationalDetail $operationalDetail = null, \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $label = null, array $packageDocuments = array(), \NicholasCreativeMedia\FedExPHP\Structs\CodReturnPackageDetail $codReturnDetail = null, $signatureOption = null, \NicholasCreativeMedia\FedExPHP\Structs\Weight $dryIceWeight = null, \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousPackageDetail $hazardousPackageDetail = null)
    {
        $this
            ->setSequenceNumber($sequenceNumber)
            ->setTrackingIds($trackingIds)
            ->setGroupNumber($groupNumber)
            ->setOversizeClass($oversizeClass)
            ->setPackageRating($packageRating)
            ->setOperationalDetail($operationalDetail)
            ->setLabel($label)
            ->setPackageDocuments($packageDocuments)
            ->setCodReturnDetail($codReturnDetail)
            ->setSignatureOption($signatureOption)
            ->setDryIceWeight($dryIceWeight)
            ->setHazardousPackageDetail($hazardousPackageDetail);
    }
    /**
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get TrackingIds value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[]|null
     */
    public function getTrackingIds()
    {
        return $this->TrackingIds;
    }
    /**
     * Set TrackingIds value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId[] $trackingIds
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
     */
    public function setTrackingIds(array $trackingIds = array())
    {
        foreach ($trackingIds as $completedPackageDetailTrackingIdsItem) {
            // validation for constraint: itemType
            if (!$completedPackageDetailTrackingIdsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackingId) {
                throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackingId, "%s" given', is_object($completedPackageDetailTrackingIdsItem) ? get_class($completedPackageDetailTrackingIdsItem) : gettype($completedPackageDetailTrackingIdsItem)), __LINE__);
            }
        }
        $this->TrackingIds = $trackingIds;
        return $this;
    }
    /**
     * Add item to TrackingIds value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\TrackingId $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
     */
    public function addToTrackingIds(\NicholasCreativeMedia\FedExPHP\Structs\TrackingId $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\TrackingId) {
            throw new \InvalidArgumentException(sprintf('The TrackingIds property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\TrackingId, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TrackingIds[] = $item;
        return $this;
    }
    /**
     * Get GroupNumber value
     * @return int|null
     */
    public function getGroupNumber()
    {
        return $this->GroupNumber;
    }
    /**
     * Set GroupNumber value
     * @param int $groupNumber
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
     */
    public function setGroupNumber($groupNumber = null)
    {
        // validation for constraint: int
        if (!is_null($groupNumber) && !is_numeric($groupNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($groupNumber)), __LINE__);
        }
        $this->GroupNumber = $groupNumber;
        return $this;
    }
    /**
     * Get OversizeClass value
     * @return string|null
     */
    public function getOversizeClass()
    {
        return $this->OversizeClass;
    }
    /**
     * Set OversizeClass value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\OversizeClassType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\OversizeClassType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $oversizeClass
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
     */
    public function setOversizeClass($oversizeClass = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\OversizeClassType::valueIsValid($oversizeClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $oversizeClass, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\OversizeClassType::getValidValues())), __LINE__);
        }
        $this->OversizeClass = $oversizeClass;
        return $this;
    }
    /**
     * Get PackageRating value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageRating|null
     */
    public function getPackageRating()
    {
        return $this->PackageRating;
    }
    /**
     * Set PackageRating value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageRating $packageRating
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
     */
    public function setPackageRating(\NicholasCreativeMedia\FedExPHP\Structs\PackageRating $packageRating = null)
    {
        $this->PackageRating = $packageRating;
        return $this;
    }
    /**
     * Get OperationalDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\PackageOperationalDetail|null
     */
    public function getOperationalDetail()
    {
        return $this->OperationalDetail;
    }
    /**
     * Set OperationalDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\PackageOperationalDetail $operationalDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
     */
    public function setOperationalDetail(\NicholasCreativeMedia\FedExPHP\Structs\PackageOperationalDetail $operationalDetail = null)
    {
        $this->OperationalDetail = $operationalDetail;
        return $this;
    }
    /**
     * Get Label value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $label
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
     */
    public function setLabel(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $label = null)
    {
        $this->Label = $label;
        return $this;
    }
    /**
     * Get PackageDocuments value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[]|null
     */
    public function getPackageDocuments()
    {
        return $this->PackageDocuments;
    }
    /**
     * Set PackageDocuments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument[] $packageDocuments
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
     */
    public function setPackageDocuments(array $packageDocuments = array())
    {
        foreach ($packageDocuments as $completedPackageDetailPackageDocumentsItem) {
            // validation for constraint: itemType
            if (!$completedPackageDetailPackageDocumentsItem instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument) {
                throw new \InvalidArgumentException(sprintf('The PackageDocuments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument, "%s" given', is_object($completedPackageDetailPackageDocumentsItem) ? get_class($completedPackageDetailPackageDocumentsItem) : gettype($completedPackageDetailPackageDocumentsItem)), __LINE__);
            }
        }
        $this->PackageDocuments = $packageDocuments;
        return $this;
    }
    /**
     * Add item to PackageDocuments value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $item
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
     */
    public function addToPackageDocuments(\NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument) {
            throw new \InvalidArgumentException(sprintf('The PackageDocuments property can only contain items of \NicholasCreativeMedia\FedExPHP\Structs\ShippingDocument, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PackageDocuments[] = $item;
        return $this;
    }
    /**
     * Get CodReturnDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CodReturnPackageDetail|null
     */
    public function getCodReturnDetail()
    {
        return $this->CodReturnDetail;
    }
    /**
     * Set CodReturnDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CodReturnPackageDetail $codReturnDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
     */
    public function setCodReturnDetail(\NicholasCreativeMedia\FedExPHP\Structs\CodReturnPackageDetail $codReturnDetail = null)
    {
        $this->CodReturnDetail = $codReturnDetail;
        return $this;
    }
    /**
     * Get SignatureOption value
     * @return string|null
     */
    public function getSignatureOption()
    {
        return $this->SignatureOption;
    }
    /**
     * Set SignatureOption value
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\SignatureOptionType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Enums\SignatureOptionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $signatureOption
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
     */
    public function setSignatureOption($signatureOption = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Enums\SignatureOptionType::valueIsValid($signatureOption)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $signatureOption, implode(', ', \NicholasCreativeMedia\FedExPHP\Enums\SignatureOptionType::getValidValues())), __LINE__);
        }
        $this->SignatureOption = $signatureOption;
        return $this;
    }
    /**
     * Get DryIceWeight value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\Weight|null
     */
    public function getDryIceWeight()
    {
        return $this->DryIceWeight;
    }
    /**
     * Set DryIceWeight value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\Weight $dryIceWeight
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
     */
    public function setDryIceWeight(\NicholasCreativeMedia\FedExPHP\Structs\Weight $dryIceWeight = null)
    {
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    /**
     * Get HazardousPackageDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousPackageDetail|null
     */
    public function getHazardousPackageDetail()
    {
        return $this->HazardousPackageDetail;
    }
    /**
     * Set HazardousPackageDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousPackageDetail $hazardousPackageDetail
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
     */
    public function setHazardousPackageDetail(\NicholasCreativeMedia\FedExPHP\Structs\CompletedHazardousPackageDetail $hazardousPackageDetail = null)
    {
        $this->HazardousPackageDetail = $hazardousPackageDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Structs\CompletedPackageDetail
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
