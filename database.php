<?php

return [

	'database'=> [
		'user' => 'root',
		'password' => '',
		'dbname' => 'users',
		'connection' => 'mysql:host=127.0.0.1',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
	
];