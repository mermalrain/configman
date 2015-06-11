<?php
namespace Configman\Cli\Commands;

use Configman\Cli\Libs\Config;
use Configman\Cli\Libs\Logger;
use Configman\Cli\Libs\Bootstrap;
use Configman\Api\BaseServiceConfig;

/**
 * CommandList
 *
 * Shows compiler list
 */
class CommandList extends CommandAbstract {

    /**
     * Command provided by this command
     *
     * @return string
     */
    public function getCommand() {
        return 'list';
    }

    /**
     * Command usage
     *
     * @return string
     */
    public function getUsage() {
        return 'list';
    }

    /**
     * Returns the description of the command
     *
     * @return string
     */
    public function getDescription() {
        return 'Show config list';
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
    	
    	$list = BaseServiceConfig::getService($param)->setConfigKey($args[$param])->show();
    	foreach($list as $item) {
    		echo $item;
    	}
    }
    
}
