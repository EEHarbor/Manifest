<?php

require_once 'vendor/autoload.php';

class Manifest
{
    protected static $isLoaded = false;

    public function __construct()
    {
        $config = include 'addon.setup.php';
        $this->module_name = $config['name'];
        $this->version = $config['version'];
    }

    /**
     * Load environment variables
     *
     * @return void
     */
    public static function load()
    {
        if (!static::$isLoaded) {
            try {
                Dotenv::load(SYSPATH . 'user/config/');
                static::$isLoaded = true;
            } catch (Exception $e) {
                if (DEBUG) {
                    echo $e->getMessage();
                }
            }
        }
    }

    /**
     * Get an environment variable with optional
     * fallback value
     *
     * @param  string $key
     * @param  string $default
     * @return string
     */
    public static function get($key, $default='')
    {
        $value = getenv($key);
        return ($value) ?: $default;
    }
}
