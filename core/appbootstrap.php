<?php

//Bind config key
App::bind('config', require 'database.php');

//Bind database key
App::bind('database', new QueryBuilder(
	Connector::make(
		App::get('config')['database'])
	)
);
