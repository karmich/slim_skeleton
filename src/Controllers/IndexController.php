<?php

namespace App\Controllers;

use Core\Response\HTML;
use Core\Response\Json;
use GuzzleHttp\Psr7\Response;

class IndexController
{
    public function index(\Slim\Views\PhpRenderer $renderer)
    {
        return $renderer->render(new HTML(), APP_DIR . '/src/Views/index.php');
    }

    public function indexPug(\Pug\Pug $pug)
    {
        return new HTML($pug->render(APP_DIR . '/src/Views/index.pug'));
    }
    
    public function getById($id)
    {
        return new HTML('Hello, ' . $id);
    }

    public function json()
    {
        return new Json(['key' => 'value']);
    }
}
