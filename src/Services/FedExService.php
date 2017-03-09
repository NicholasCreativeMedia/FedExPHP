<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 3/9/17
 * Time: 8:56 AM
 */

namespace NicholasCreativeMedia\FedExPHP\Services;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * Class FedExService
 * @package NicholasCreativeMedia\FedExPHP\Services
 */
class FedExService extends AbstractSoapClientBase
{
  public $version;

  public function __construct(array $wsdlOptions = array(), $resetSoapClient = true, $beta = false) {
    parent::__construct($wsdlOptions,$resetSoapClient);
    if ( !$beta ) $this->setLocation('https://ws.fedex.com:443/web-services');
  }

  public static function version() {
    $service = new static;
    return $service->version;
  }

}