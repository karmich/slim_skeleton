<?php

namespace Core;

class Container
{
    private static $instance = null;
    
    private function __construct()
    {
        
    }
    
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new \DI\Container;
        }
        
        return self::$instance;
    }
}
