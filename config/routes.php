<?php

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

/**
 * $app: Instance of the application 
 */

$app->get("/", [\App\Controllers\IndexController::class, "index"]);
$app->get("/{id}", [\App\Controllers\IndexController::class, "getbyId"]);

