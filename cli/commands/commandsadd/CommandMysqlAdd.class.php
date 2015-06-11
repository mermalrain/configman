<?php
namespace Configman\Cli\Commands\Commandsadd;

use Configman\Api\BaseServiceConfig;

class CommandMysqlAdd {
	
	public function execute($args) {
		$mysql_config = array();
		
		echo 'db: ';
		$mysql_config['db'] = trim(fgets(STDIN));
		
		echo 'host: ';
		$mysql_config['host'] = trim(fgets(STDIN));
		
		echo 'port: ';
		$mysql_config['port'] = trim(fgets(STDIN));
		
		if(!$mysql_config['port']) {
			$mysql_config['port'] = 3306;
		}
		
		$mysql_config['weight'] = 1;
		
		echo 'username: ';
		$mysql_config['user'] = trim(fgets(STDIN));
		
		echo 'password: ';
		$mysql_config['pass'] = trim(fgets(STDIN));
		
		echo 'is_master: ';
		$mysql_config['master'] = trim(fgets(STDIN));

		return BaseServiceConfig::getService('mysql')->setConfigKey($args['mysql'])->add($mysql_config);
	}
	 
}