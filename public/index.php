<?php
define('APP_DIR', dirname(__DIR__));

require APP_DIR . '/vendor/autoload.php';
require APP_DIR . '/helpers.php';

$container = \Core\Container::getInstance();

require (APP_DIR . "/config/container.php");

$app = \DI\Bridge\Slim\Bridge::create($container); 

require (APP_DIR . "/config/api_routes.php");
require (APP_DIR . "/config/web_routes.php");

$app->run();
