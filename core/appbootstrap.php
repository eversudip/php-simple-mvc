<?php

//Bind config key
App::bind('config', require 'database.php');

//Bind database key
App::bind('database', new QueryBuilder(
	Connector::make(
		App::get('config')['database'])
	)
);

function view($file, $data=[])
{
	extract($data);
	return require("views/{$file}.tpl.php");
}

function redirect($path)
{
	return header("Location: /{$path}");
}
