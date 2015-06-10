<?php
namespace Configman\Cli\Libs;

/**
 * Manages compiler global configuration
 *
 * Class Config
 */
class Config {
    /**
     * Default configuration for project
     *
     * @var array
     */
    protected $config = array(
        'namespace'   => '',
        'name'        => '',
        'description' => '',
        'author'      => '',
        'version'     => '0.0.1',
        'verbose'     => false
    );

    /**
     * Is config changed?
     *
     * @var bool
     */
    protected $changed = false;

    /**
     * Config constructor
     *
     * @throws Exception
     */
    public function __construct() {}

    /**
     * Retrieves a configuration setting
     *
     * @param $key
     * @param null $namespace
     * @return mixed
     */
    public function get($key, $namespace = null)
    {
        if ($namespace !== null) {
            if (isset($this->config[$namespace][$key])) {
                return $this->config[$namespace][$key];
            } else {
                //new \Exception('Option [' . $namespace . '][' . $key . '] not exists');
            }
        } else {
            if (isset($this->config[$key])) {
                return $this->config[$key];
            } else {
                //new \Exception('Option [' . $key . '] not exists');
            }
        }

        return null;
    }

    /**
     * Changes a configuration setting
     *
     * @param $key
     * @param $value
     * @param null $namespace
     */
    public function set($key, $value, $namespace = null)
    {
        if ($namespace !== null) {
            $this->config[$namespace][$key] = $value;
        } else {
            $this->config[$key] = $value;
        }

        $this->changed = true;
    }

    /**
     * Writes the configuration if it has been changed
     */
    public function saveOnExit()
    {
        if ($this->changed && !file_exists('config.json')) {
            if (defined('JSON_PRETTY_PRINT')) {
                $config = json_encode($this->config, JSON_PRETTY_PRINT);
            } else {
                $config = json_encode($this->config);
            }
            file_put_contents('config.json', $config);
        }
    }
}
