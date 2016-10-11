<?php

$config = require('core/database.php');
require('core/database/Connector.php');
require('core/database/QueryBuilder.php');

//return query builder instance
return new QueryBuilder(Connector::make($config['database']));