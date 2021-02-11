<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/ishop/core');
define("LIBS", ROOT . '/vendor/ishop/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'default');

$protocol = 'http://';

if (isset($_SERVER['HTTPS'])) {
	$protocol = 'https://';
}

$app_path = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

// $name_script = end(explode('/', $app_path));
// $app_path = str_replace($name_script, '', $app_path);

$app_path = $protocol . $_SERVER['HTTP_HOST'];

define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';