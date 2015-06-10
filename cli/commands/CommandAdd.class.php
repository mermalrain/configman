<?php
namespace Configman\Cli\Commands;

use Configman\Cli\Libs\Config;
use Configman\Cli\Libs\Logger;
use Configman\Cli\Libs\Bootstrap;

/**
 * CommandList
 *
 * Shows compiler list
 */
class CommandAdd extends CommandAbstract {

    /**
     * Command provided by this command
     *
     * @return string
     */
    public function getCommand() {
        return 'add';
    }

    /**
     * Command usage
     *
     * @return string
     */
    public function getUsage() {
        return 'add';
    }

    /**
     * Returns the description of the command
     *
     * @return string
     */
    public function getDescription() {
        return 'Add config item';
    }

    /**
     * Executes the command
     * @param Config $config
     * @param Logger $logger
     */
    public function execute(Config $config, Logger $logger) {
    	
    }
    
}
