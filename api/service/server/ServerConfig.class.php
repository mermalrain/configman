<?php
namespace Configman\Api\Service\Server;

use Configman\Api\Service\ServiceConfig;

class ServerConfig extends ServiceConfig {
	
	public function parse($configure) {
		$rs_config = array();
		
		foreach($configure as $item) {
			$rs_config[] = $item;
		}
		
		return $rs_config;
	}
	
}