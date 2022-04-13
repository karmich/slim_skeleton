<?php

/**
 * $app: Instance of the application 
 */

/** @var \Slim\App $app */

$app->get("/", [\App\Controllers\IndexController::class, "index"]);
$app->get("/pug", [\App\Controllers\IndexController::class, "indexPug"]);
$app->get("/{id}", [\App\Controllers\IndexController::class, "getById"]);