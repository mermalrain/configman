<?php
namespace Configman\Cli\Commands;

use Configman\Cli\Libs\Config;
use Configman\Cli\Libs\Logger;

/**
 * CommandInterface
 *
 * Provides an interface to build commands
 */
interface CommandInterface {

    /**
     * Command provided by this command
     *
     * @return string
     */
    public function getCommand();

    /**
     * Command usage
     *
     * @return string
     */
    public function getUsage();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * Returns parameter named parameterName if specified
     * on the commmand line else null
     * @param string $parameterName
     * @return string
     */
    public function getParameter($parameterName);

    /**
     * Executes the command
     * @param Config $config
     * @param Logger $logger
     */
    public function execute(Config $config, Logger $logger);
}
