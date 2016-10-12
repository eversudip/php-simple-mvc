<?php

$config = require('database.php');
require('core/Router.php');
require('core/Request.php');
require('database/Connector.php');
require('database/QueryBuilder.php');

//return query builder instance
return new QueryBuilder(Connector::make($config['database']));