<?php

require '../vendor/autoload.php';
require '../helpers.php';

$container = \Core\Container::getInstance();

require ("../config/container.php");

$app = \DI\Bridge\Slim\Bridge::create($container); 

require ("../config/routes.php");

$app->run();
