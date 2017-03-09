<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMailLabelDetail StructType
 * @subpackage Structs
 */
class EMailLabelDetail extends AbstractStructBase
{
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: Content of the email message.
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The Recipients
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient[]
     */
    public $Recipients;
    /**
     * Constructor method for EMailLabelDetail
     * @uses EMailLabelDetail::setMessage()
     * @uses EMailLabelDetail::setRecipients()
     * @param string $message
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient[] $recipients
     */
    public function __construct($message = null, array $recipients = array())
    {
        $this
            ->setMessage($message)
            ->setRecipients($recipients);
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailLabelDetail
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get Recipients value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient[]|null
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient[] $recipients
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailLabelDetail
     */
    public function setRecipients(array $recipients = array())
    {
        foreach ($recipients as $eMailLabelDetailRecipientsItem) {
            // validation for constraint: itemType
            if (!$eMailLabelDetailRecipientsItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient) {
                throw new \InvalidArgumentException(sprintf('The Recipients property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient, "%s" given', is_object($eMailLabelDetailRecipientsItem) ? get_class($eMailLabelDetailRecipientsItem) : gettype($eMailLabelDetailRecipientsItem)), __LINE__);
            }
        }
        $this->Recipients = $recipients;
        return $this;
    }
    /**
     * Add item to Recipients value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailLabelDetail
     */
    public function addToRecipients(\NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient) {
            throw new \InvalidArgumentException(sprintf('The Recipients property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailRecipient, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Recipients[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\EMailLabelDetail
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
