<?php
namespace Configman\Api\Service\Mysql;

use Configman\Api\Service\ServiceConfig;

class MysqlConfig extends ServiceConfig {
	
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