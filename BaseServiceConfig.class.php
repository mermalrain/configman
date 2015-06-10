<?php
namespace Configman;

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
		)
	);
	
	public function __construct($service, $type = 1) {
		require('config/config.inc.php');
		
		$this->service = $service;
		$this->return_type = $type;
		$this->config_path = CONF_PATH;
	}
	
	public static function getService($service, $type = 1) {
		$service_class = '\\\Configman\\Configure\\'.ucfirst($service).'\\'.self::$class_mapping[$service][$type];
		
		return new $service_class($service);
	} 
	
}