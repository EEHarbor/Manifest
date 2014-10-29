<?php

require_once('vendor/autoload.php');

class Manifest {

	protected static $isLoaded = false;

	/**
	 * Load environment variables
	 *
	 * @return void
	 */
	public static function load()
	{
		if(!static::$isLoaded)
		{
			try {
				Dotenv::load(APPPATH);
				static::$isLoaded = true;
			}
			catch(Exception $e)
			{
				if(DEBUG)
					echo $e->getMessage();
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
