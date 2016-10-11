<?php

require('database/Connector.php');
require('database/QueryBuilder.php');
$pdo = Connector::make();

$builder = new QueryBuilder($pdo);
$users = $builder->selectAllRecords('userlists');


require ('index.tpl.php');