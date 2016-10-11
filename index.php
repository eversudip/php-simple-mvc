<?php

$builder = require('appbootstrap.php');
$users = $builder->selectAllRecords('userlists');


require ('index.tpl.php');