<?php

/**
 * $container: Instance of the application's container
 */
/** @var \DI\Container $container */

$container->set('APP_DIR', APP_DIR);
$container->set('APP_NAME', "SlimSkeleton");

$container->set(\Pug\Pug::class, function($c){
    return new \Pug\Pug([
        'cache' => $c->get('APP_DIR') . '/cache/pug'
    ]);
});

$container->set(\Slim\Views\PhpRenderer::class, function($c){
    return new \Slim\Views\PhpRenderer();
});
