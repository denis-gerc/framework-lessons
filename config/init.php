<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/ishop/core');
define("LIBS", ROOT . '/vendor/ishop/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'watches');

$protocol = 'http://';

if (isset($_SERVER['HTTPS'])) {
	$protocol = 'https://';
}
// http://framework-lessons/public/index.php
$app_path = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

// http://framework-lessons/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);

// url home page
$app_path = str_replace('/public/', '', $app_path);

define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';