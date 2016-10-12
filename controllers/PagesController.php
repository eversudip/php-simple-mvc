<?php

class PagesController
{
	public function showHomePage()
	{
		$users = App::get('database')->selectAllRecords('userlists');
		require ('views/index.tpl.php');
	}

	public function showAboutPage()
	{
		require('views/about.tpl.php');
	}

	public function showContactPage()
	{
		require('views/contact.tpl.php');
	}

	public function addUsers()
	{
		App::get('database')->insert('userlists',[
		'name' => $_POST['name'],
		'address' => $_POST['address']
		]);

		header('Location: /');
	}
}