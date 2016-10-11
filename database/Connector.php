<?php

class Connector
{
	/**
	 * Make and return the database connection
	 */
	public static function make()
	{
		try {
		    return  new PDO('mysql:host=127.0.0.1; dbname=users' , 'root', '');
		} catch(PDOException $e) {
		    die($e->getMessage());
		}
	}
}