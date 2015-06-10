<?php
namespace Configman\Api\Service\Rabbitmq;

use Configman\Api\Service\ServiceConfig;

class RabbitmqConfig extends ServiceConfig {
	
	public function parse($configure) {
		$rs_config = array();
		
		foreach($configure as $config) {
			$rabbit_config = explode(' ', $config);
			
			$host = explode('=', $rabbit_config[0]);
			$port = explode('=', $rabbit_config[1]);
			$user = explode('=', $rabbit_config[2]);
			$password = explode('=', $rabbit_config[3]);
			$vhost = explode('=', $rabbit_config[4]);

			$rs_config = array($host[1], $port[1], $user[1], $password[1], $vhost[1]);
		}
		
		return $rs_config;
	}
	
}