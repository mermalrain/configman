<?php
namespace Configman\Api\Service\Memcache;

use Configman\Api\Service\ServiceConfig;

class MemcacheConfig extends ServiceConfig {
	
	public function parse($configure) {
		$rs_config = array();
		
		foreach($configure as $config) {
			$memcache_config = explode(' ', $config);
			
			$host = explode('=', $memcache_config[0]);
			$port = explode('=', $memcache_config[1]);

			$rs_config[] = array($host[1], $port[1]);
		}
		
		return $rs_config;
	}
	
}