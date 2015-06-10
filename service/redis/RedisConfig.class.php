<?php
namespace Configman\Service\Redis;

use Configman\Service\ServiceConfig;

class RedisConfig extends ServiceConfig {
	
	public function add($data) {
		
	}
	
	public function parse($configure) {
		$rs_config = array();
		
		foreach($configure as $config) {
			$redis_config = explode(' ', $config);
			
			$host = explode('=', $redis_config[0]);
			$port = explode('=', $redis_config[1]);

			$rs_config[] = array($host[1], $port[1]);
		}
		
		return $rs_config;
	}
	
}