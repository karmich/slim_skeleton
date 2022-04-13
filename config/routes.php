<?php

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

/**
 * $app: Instance of the application 
 */

/** @var \Slim\App $app */

$app->get("/", [\App\Controllers\IndexController::class, "index"]);
$app->get("/json", [\App\Controllers\IndexController::class, "json"]);
$app->get("/{id}", [\App\Controllers\IndexController::class, "getById"]);

