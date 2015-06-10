<?php
namespace Configman\Cli\Commands;

use Configman\Cli\Libs\Config;
use Configman\Cli\Libs\Logger;
use Configman\Cli\Libs\Bootstrap;

/**
 * CommandHelp
 *
 * Shows compiler help
 */
class CommandRemove extends CommandAbstract {

    /**
     * Command provided by this command
     *
     * @return string
     */
    public function getCommand() {
        return 'remove';
    }

    /**
     * Command usage
     *
     * @return string
     */
    public function getUsage() {
        return 'remove';
    }

    /**
     * Returns the description of the command
     *
     * @return string
     */
    public function getDescription() {
        return 'Remove config item';
    }

    /**
     * Executes the command
     * @param Config $config
     * @param Logger $logger
     */
    public function execute(Config $config, Logger $logger) {
    	
    }
    
}
