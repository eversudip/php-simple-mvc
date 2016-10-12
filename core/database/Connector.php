<?php

namespace App\Core\Database;
use PDO;

class Connector
{
	/**
	 * Make and return the database connection
	 */
	public static function make($config)
	{
		try {
		    return new PDO(
			    	$config['connection']. ';dbname='. $config['dbname'],
			    	$config['user'],
			    	$config['password'],
			    	$config['options']
		    	);
		} catch(PDOException $e) {
		    die($e->getMessage());
		}
	}
}