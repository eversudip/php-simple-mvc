<?php

namespace App\Core;

class Request
{
	/**
	 * Get the current uri of the request
	 */
	public static function getUri()
	{
		return trim(
			parse_url(
				$_SERVER['REQUEST_URI'], PHP_URL_PATH
				),'/'
			);
	}

	/**
	 * Return the request method
	 */
	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}
}
