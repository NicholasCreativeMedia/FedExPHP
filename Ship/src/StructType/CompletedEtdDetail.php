<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompletedEtdDetail StructType
 * @subpackage Structs
 */
class CompletedEtdDetail extends AbstractStructBase
{
    /**
     * The FolderId
     * Meta informations extracted from the WSDL
     * - documentation: The identifier for all clearance documents associated with this shipment.
     * - minOccurs: 0
     * @var string
     */
    public $FolderId;
    /**
     * The UploadDocumentReferenceDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail[]
     */
    public $UploadDocumentReferenceDetails;
    /**
     * Constructor method for CompletedEtdDetail
     * @uses CompletedEtdDetail::setFolderId()
     * @uses CompletedEtdDetail::setUploadDocumentReferenceDetails()
     * @param string $folderId
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail[] $uploadDocumentReferenceDetails
     */
    public function __construct($folderId = null, array $uploadDocumentReferenceDetails = array())
    {
        $this
            ->setFolderId($folderId)
            ->setUploadDocumentReferenceDetails($uploadDocumentReferenceDetails);
    }
    /**
     * Get FolderId value
     * @return string|null
     */
    public function getFolderId()
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param string $folderId
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedEtdDetail
     */
    public function setFolderId($folderId = null)
    {
        // validation for constraint: string
        if (!is_null($folderId) && !is_string($folderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($folderId)), __LINE__);
        }
        $this->FolderId = $folderId;
        return $this;
    }
    /**
     * Get UploadDocumentReferenceDetails value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail[]|null
     */
    public function getUploadDocumentReferenceDetails()
    {
        return $this->UploadDocumentReferenceDetails;
    }
    /**
     * Set UploadDocumentReferenceDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail[] $uploadDocumentReferenceDetails
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedEtdDetail
     */
    public function setUploadDocumentReferenceDetails(array $uploadDocumentReferenceDetails = array())
    {
        foreach ($uploadDocumentReferenceDetails as $completedEtdDetailUploadDocumentReferenceDetailsItem) {
            // validation for constraint: itemType
            if (!$completedEtdDetailUploadDocumentReferenceDetailsItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail) {
                throw new \InvalidArgumentException(sprintf('The UploadDocumentReferenceDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail, "%s" given', is_object($completedEtdDetailUploadDocumentReferenceDetailsItem) ? get_class($completedEtdDetailUploadDocumentReferenceDetailsItem) : gettype($completedEtdDetailUploadDocumentReferenceDetailsItem)), __LINE__);
            }
        }
        $this->UploadDocumentReferenceDetails = $uploadDocumentReferenceDetails;
        return $this;
    }
    /**
     * Add item to UploadDocumentReferenceDetails value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedEtdDetail
     */
    public function addToUploadDocumentReferenceDetails(\NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail) {
            throw new \InvalidArgumentException(sprintf('The UploadDocumentReferenceDetails property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\UploadDocumentReferenceDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UploadDocumentReferenceDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CompletedEtdDetail
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
