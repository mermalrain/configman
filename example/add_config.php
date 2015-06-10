<?php
require '../api/BaseServiceConfig.class.php';

use Configman\Api\BaseServiceConfig;

$mysql_config = array(
	'db' => 'db_service',
	'host' => '',
	'port' => 3306,
	'weight' => 1, 
	'user' => '***',
	'pass' => '******',
	'master' => 1
);

$rs = BaseServiceConfig::getService('mysql')->setConfigKey('service')->add($mysql_config);

