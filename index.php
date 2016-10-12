<?php

require('vendor/autoload.php');
require('core/appbootstrap.php');

Router::load('routes.php')->direct(Request::getUri(), Request::method());
