<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

use ishop\Router;

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONFIG . '/routes.php';

new \ishop\App();

// debug(\ishop\Router::getRoute());
