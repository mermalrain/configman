<?php
require '../api/BaseServiceConfig.class.php';

use Configman\Api\BaseServiceConfig;

$config = BaseServiceConfig::getService('mysql')->setConfigKey('service')->read();
print_r($config);