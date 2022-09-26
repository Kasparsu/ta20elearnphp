<?php

namespace App;

class Router {
    public static $routes = [];
    public $path;
    public function __construct($path)
    {
        $this->path = $path;
    }

    public function match(){
        foreach(self::$routes as $route){
            if($route['path'] === $this->path){
                return $route;
            }
        }
    }

    public static function addRoute($path, $action){
        self::$routes[] = ['path' => $path, 'action' => $action];
    }
}