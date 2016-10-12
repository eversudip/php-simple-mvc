<?php


$users = App::get('database')->selectAllRecords('userlists');


require ('views/index.tpl.php');