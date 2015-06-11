<?php
namespace Configman\Cli\Commands;

use Configman\Cli\Libs\Config;
use Configman\Cli\Libs\Logger;
use Configman\Cli\Libs\Bootstrap;
use Configman\Api\BaseServiceConfig;

class CommandPush extends CommandAbstract {

    /**
     * Command provided by this command
     *
     * @return string
     */
    public function getCommand() {
        return 'push';
    }

    /**
     * Command usage
     *
     * @return string
     */
    public function getUsage() {
        return 'push';
    }

    /**
     * Returns the description of the command
     *
     * @return string
     */
    public function getDescription() {
        return 'Push config to servers';
    }

    /**
     * Executes the command
     * @param Config $config
     * @param Logger $logger
     */
    public function execute(Config $config, Logger $logger) {
    	$args = $this->parseArguments();
    	
    	$param_arr = array_keys($args);
    	$param = $param_arr[0];
    	
    	if($param == 'app') {
    		$list = BaseServiceConfig::getService('server')->setConfigKey($args['server'])->show();
    		foreach($list as $item) {
    			echo $item;
    		}
    	}
    }
    
}
