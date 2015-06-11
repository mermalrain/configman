<?php
namespace Configman;

$autoloader = Autoloader::register();

class Autoloader {

    /**
     * Singleton.
     */
    public static function register() {
        static $singleton = NULL;
        is_null($singleton) && $singleton = new self();
        return $singleton;
    }

    /**
     * Constructor method. Identify IO's base path and set user specified
     * path settings. Also register self's load() method.
     */
    private function __construct() {
        spl_autoload_register(array($this, 'autoload'));
    }

    /**
     * Get file path of source file.
     */
    private function getFilepath($class_name) {
        // class name contains namespaces
        $pieces = explode('\\', $class_name);

        $root_path = ROOT_PATH;

        $class_name = array_pop($pieces);
        $base_path = $root_path . DIRECTORY_SEPARATOR . strtolower(implode(DIRECTORY_SEPARATOR, $pieces));

        return $base_path . "/{$class_name}.class.php";
    }

    /**
     * The method that actually triggers require_once().
     */
    private function autoload($class_name) {
        $filepath = $this->getFilepath($class_name);
        if (file_exists($filepath)) {
            require_once($filepath);
        } else {
            $filepath = ROOT_PATH.'/../'.  str_replace('\\','/',lcfirst($class_name)) . '.class.php';
            if (file_exists($filepath)) {
                require_once($filepath);
            }
        }
    }

}
