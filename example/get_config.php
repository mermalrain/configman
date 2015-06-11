<?php
define('ROOT_PATH', __DIR__ . '/..');
require_once(ROOT_PATH . '/configman.php');

use Configman\Api\BaseServiceConfig;

$config = BaseServiceConfig::getService('mysql')->setConfigKey('service')->read();
print_r($config);