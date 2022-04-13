<?php

namespace App\Controllers;

use Core\Response\HTML;
use Core\Response\Json;
use GuzzleHttp\Psr7\Response;

class IndexController
{
    public function index(\Pug\Pug $pug)
    {
        return new HTML($pug->render(APP_DIR . '/src/Views/index.pug'));
    }
    
    public function getById($id)
    {
        return new Response(200, [], 'Hello, ' . $id);
    }

    public function json()
    {
        return new Json(['key' => 'value']);
    }
}
