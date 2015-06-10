<?php
namespace Configman\Cli\Libs;

use Configman\Cli\Commands\CommandInterface;
use Configman\Cli\Commands\CommandGenerate;
use Configman\Cli\FileSystem\HardDisk as FileSystem;

/**
 * Compiler
 *
 * Main compiler
 */
class Compiler {
    const VERSION = '0.0.1';

    /**
     * @var CompilerFile[]
     */
    protected $files = array();

    /**
     * @var array|string[]
     */
    protected $anonymousFiles = array();

    /**
     * Additional initializer code
     * used for static property initialization
     * @var array
     */
    protected $internalInitializers = array();

    /**
     * @var ClassDefinition[]
     */
    protected $definitions = array();

    /**
     * @var FunctionDefinition[]
     */
    public $functionDefinitions = array();

    /**
     * @var array|string[]
     */
    protected $compiledFiles = array();

    protected $constants = array();

    /**
     * Extension globals
     *
     * @var array
     */
    protected $globals = array();

    /**
     * External dependencies
     *
     * @var array
     */
    protected $externalDependencies = array();

    /**
     * @var StringsManager
     */
    protected $stringManager;

    /**
     * @var Config
     */
    protected $config;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var \ReflectionClass[]
     */
    protected static $internalDefinitions = array();

    /**
     * @var boolean
     */
    protected static $loadedPrototypes = false;

    /**
     * @var array
     */
    protected $extraFiles = array();

    /**
     * Compiler constructor
     *
     * @param Config $config
     * @param Logger $logger
     */
    public function __construct(Config $config, Logger $logger) {
        $this->config = $config;
        $this->logger = $logger;
    }

}
