<?php

namespace App\Controllers;

use GuzzleHttp\Psr7\Response;

class IndexController
{
    public function index(\Pug\Pug $pug)
    {
        return new Response(200, [], $pug->render(APP_DIR . '/src/Views/index.pug'));
    }
    
    public function getById($id)
    {
        return new Response(200, [], 'Hello, ' . $id);
    }
}
