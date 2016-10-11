<?php

$builder = require('core/appbootstrap.php');
$users = $builder->selectAllRecords('userlists');


require ('views/index.tpl.php');