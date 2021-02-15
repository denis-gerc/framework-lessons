<?php

use ishop\Router;

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONFIG . '/routes.php';

new \ishop\App();

debug(\ishop\Router::getRoutes());