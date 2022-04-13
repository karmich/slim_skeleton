<?php

use Slim\Routing\RouteCollectorProxy;

/**
 * $app: Instance of the application 
 */

/** @var \Slim\App $app */

$app->group("/api", function(RouteCollectorProxy $app){

    $app->get('/test', function(){
        return new \Core\Response\Json(['key' => 'val']);
    });

});

