<?php

$config = require('database.php');
require('database/Connector.php');
require('database/QueryBuilder.php');

//return query builder instance
return new QueryBuilder(Connector::make($config['database']));