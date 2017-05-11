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

  public function __construct(array $wsdlOptions = array(), $resetSoapClient = true, $mode = 'test') {
    if ($mode === false) $mode = 'test';
    if ($mode === true) $mode = 'live';
    parent::__construct($wsdlOptions,$resetSoapClient);
        if ($mode == 'live') $this->setLocation('https://ws.fedex.com:443/web-services');
        if ($mode == 'test') $this->setLocation('https://wsbeta.fedex.com:443/web-services');
  }

  public static function version() {
    $service = new static;
    return $service->version;
  }

}