<?php

class PagesController
{
	public function showHomePage()
	{
		$users = App::get('database')->selectAllRecords('userlists');
		return view('index', compact('users'));
	}

	public function showAboutPage()
	{
		return view('about');
	}

	public function showContactPage()
	{
		return view('about');
	}

	public function addUsers()
	{
		App::get('database')->insert('userlists',[
		'name' => $_POST['name'],
		'address' => $_POST['address']
		]);

		return redirect('');
	}
}