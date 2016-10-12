<?php
/**
 * Simple container class
 */
class App
{
	protected static $registries = [];

	/**
	 * register key and values in the container
	 */
	public static function bind($key, $value)
	{
		static::$registries[$key] = $value;
	}

	/**
	 * fetch the value from the registries according to the key
	 */
	public static function get($key)
	{
		if(! array_key_exists($key, static::$registries))
		{
			throw new Exception("No {$key} exists in the container");
		}
		return static::$registries[$key];
	}
}