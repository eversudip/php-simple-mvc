<?php

$router->get('', 'PagesController@showHomePage');
$router->get('about', 'PagesController@showAboutPage');
$router->get('contact', 'PagesController@showContactPage');
$router->post('addname', 'PagesController@addUsers');
