<?php

$app=[];

$app['config'] = require('database.php');

require('core/Router.php');
require('core/Request.php');
require('database/Connector.php');
require('database/QueryBuilder.php');

//return query builder instance
$app['database'] = new QueryBuilder(Connector::make($app['config']['database']));