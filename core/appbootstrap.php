<?php

$app=[];

$app['config'] = require('database.php');
$app['database'] = new QueryBuilder(Connector::make($app['config']['database']));