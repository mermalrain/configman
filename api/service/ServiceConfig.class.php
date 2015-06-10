<?php
namespace Configman\Api\Service;

use Configman\Api\BaseServiceConfig;

abstract class ServiceConfig extends BaseServiceConfig {
	
	public $file;
	
	public function setConfigKey($key) {
		if($key) {
			$this->file = $this->config_path.$this->service.'/'.$key.'.'.$this->service.'.ini';
		} else {
			$this->file = $this->config_path.$this->service.'.ini';
		}
	
		return $this;
	}
	
	public function write() {
		
	}
	
	public function read() {
		$configure = file($this->file);
		$config = $this->parse($configure);

		return $config;
	}
	
	abstract public function parse($configure);
	
}