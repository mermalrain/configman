<?php
namespace Configman\Service\Mysql;

use Configman\Service\ServiceConfig;

class MySQLConfig extends ServiceConfig {
	
	public function add($config) {
		$config_arr = array();
		
		foreach($config as $k => $item) {
			$config_arr[] = $k.'='.$item;
		}
		
		file_put_contents($this->file, implode(' ', $config_arr)."\r\n", FILE_APPEND);
	}
	
	public function parse($configure) {
		$rs_config = array();
		
		foreach($configure as $config) {
			$db_config = explode(' ', $config);
			
			$db = explode('=', $db_config[0]);
			$host = explode('=', $db_config[1]);
			$port = explode('=', $db_config[2]);
			$weight = explode('=', $db_config[3]);
			$user = explode('=', $db_config[4]);
			$password = explode('=', $db_config[5]);
			$is_master = explode('=', $db_config[6]);

			$rs_config[$db[1]][$is_master[1]][] = array($host[1], $port[1], $weight[1], $user[1], $password[1]);
		}
		
		return $rs_config;
	}
	
}