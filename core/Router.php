<?php

class Router
{
	protected $routes = [
		'GET' => [],
		'POST' => []
	];

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
	 * get the routes with get request
	 */
	public function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
	}

	/**
	 * get the routes with post request
	 */
	public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}


	/**
	 * directing the routes to the controller
	 */
	public function direct($uri, $requestType)
	{
		if(array_key_exists($uri, $this->routes[$requestType]))
		{
			return $this->routes[$requestType][$uri];
		}
		throw new Exception("No routes found");
		
	}


}