<?php

class Request
{
	/**
	 * Get the current uri of the request
	 */
	public static function getUri()
	{
		return trim($_SERVER['REQUEST_URI'],'/');
	}
}
