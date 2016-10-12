<?php

class Router
{
	protected $routes = [];

	/**
	 * loading the routes 
	 */
	public static function load($file)
	{
		$router = new static;
		require $file;
		return $router;
	}

	/**
	 * defining the routes
	 */
	public function define($routes)
	{
		$this->routes = $routes;
	}

	/**
	 * directing the routes to the controller
	 */
	public function direct($uri)
	{
		if(array_key_exists($uri, $this->routes))
		{
			return $this->routes[$uri];
		}
		throw new Exception("No routes found");
		
	}
}