<?php
namespace Configman\Cli\Commands;

use Configman\Cli\Libs\Config;
use Configman\Cli\Libs\Logger;
use Configman\Cli\Libs\Bootstrap;
use Configman\Cli\Libs\Compiler;

/**
 * CommandHelp
 *
 * Shows compiler help
 */
class CommandHelp extends CommandAbstract {
    const LOGO ='';

    /**
     * Command provided by this command
     *
     * @return string
     */
    public function getCommand() {
        return 'help';
    }

    /**
     * Command usage
     *
     * @return string
     */
    public function getUsage() {
        return 'help';
    }

    /**
     * Returns the description of the command
     *
     * @return string
     */
    public function getDescription() {
        return 'Displays this help';
    }

    /**
     * Executes the command
     * @param Config $config
     * @param Logger $logger
     */
    public function execute(Config $config, Logger $logger) {
        echo self::LOGO, PHP_EOL;
        echo "ConfigTool version " , Compiler::VERSION,  PHP_EOL, PHP_EOL;
        echo "Usage: ", PHP_EOL;
        echo "\tcommand [options]", PHP_EOL;
        echo PHP_EOL;
        echo "Available commands:", PHP_EOL;
        foreach (Bootstrap::getCommands() as $command) {
            echo sprintf("\t%-20s%s\n", $command->getUsage(), $command->getDescription());
        }
        echo PHP_EOL;
    }
    
}
