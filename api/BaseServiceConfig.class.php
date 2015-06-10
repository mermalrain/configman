<?php
namespace Configman\Api;

define('ROOT_PATH', __DIR__ . '/..');
require('Autoloader.class.php');

abstract class BaseServiceConfig {
	
	public $service;
	public $return_type = 1; //1: 成员变量 2: 常量
	
	public $config_path;
	
	public static $class_mapping = array(
		'mysql' => array(
			1 => 'MySQLConfig',
			2 => 'MySQLConstantConfig'
		),
		'redis' => array(
			1 => 'RedisConfig'
		),
		'memcache' => array(
			1 => 'MemcacheConfig'
		),
		'rabbitmq' => array(
			1 => 'RabbitmqConfig'
		)
	);
	
	public function __construct($service, $type = 1) {
		require('../config/config.inc.php');
		
		$this->service = $service;
		$this->return_type = $type;
		$this->config_path = CONF_PATH;
	}
	
	public static function getService($service, $type = 1) {
		$service_class = '\\Configman\\Api\\Service\\'.ucfirst($service).'\\'.self::$class_mapping[$service][$type];
		
		return new $service_class($service);
	} 
	
}