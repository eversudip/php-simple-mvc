<?php

$builder = require('core/appbootstrap.php');

require Router::load('routes.php')->direct(Request::getUri(), Request::method());
