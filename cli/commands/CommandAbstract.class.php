<?php
namespace Configman\Cli\Commands;

use Configman\Cli\Libs\CommandArgumentParser;
use Configman\Cli\Libs\Config;
use Configman\Cli\Libs\Logger;
use Configman\Cli\Libs\Compiler;

/**
 * CommandAbstract
 *
 * Provides a superclass for commands
 */
abstract class CommandAbstract implements CommandInterface {
    private $_parameters = null;

    /**
     * Returns parameter named $name if specified
     * on the command line else null
     *
     * @param string $name
     * @param string $value
     * @return void
     */
    protected function setParameter($name, $value)
    {
        if (!isset($this->_parameters)) {
            $this->_parameters = array();
        }
        $this->_parameters[$name] = $value;
    }

    /**
     * Returns parameter named $name if specified
     * on the command line else null
     * @param string $name
     * @return string
     */
    public function getParameter($name)
    {
        return (isset($this->_parameters[$name])) ? $this->_parameters[$name] : null;
    }


    /**
     * Parse the input arguments for the command and returns theme as an associative array
     * @return array the list of the parameters
     */
    public function parseArguments()
    {

        if (count($_SERVER['argv']) > 2) {
            $commandArgs = array_slice($_SERVER['argv'], 2);
            $parser = new CommandArgumentParser();
            $params = $parser->parseArgs(array_merge(array("command"), $commandArgs));
        } else {
            $params = array();
        }

        return $params;

    }

    /**
     * Executes the command
     * @param Config $config
     * @param Logger $logger
     */
    abstract public function execute(Config $config, Logger $logger);
    
}
