<?php

$users = $app['database']->selectAllRecords('userlists');


require ('views/index.tpl.php');