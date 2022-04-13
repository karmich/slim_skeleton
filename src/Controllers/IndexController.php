<?php

namespace App\Controllers;

use GuzzleHttp\Psr7\Response;

class IndexController
{
    public function index()
    {
        return new Response(200, [], '<html><head><title>' . app()->get('APP_NAME') . '</title></head><body>Hello</body></html>');
    }
    
    public function getById($id)
    {
        return new Response(200, [], 'Hello, ' . $id);
    }
}
