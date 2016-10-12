<?php


App::get('database')->insert('userlists',[
	'name' => $_POST['name'],
	'address' => $_POST['address']
	]);

header('Location: /');