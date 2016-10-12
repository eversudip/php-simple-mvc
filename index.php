<?php

$builder = require('core/appbootstrap.php');


$uri = trim($_SERVER['REQUEST_URI'],'/');


require Router::load('routes.php')->direct($uri);
