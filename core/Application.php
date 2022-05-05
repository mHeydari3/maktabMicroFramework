<?php

namespace App\core;


use App\core\Router;
use App\core\Request;
class Application{
    public static string $ROOT;
    public Router $router;
    public Request $request;

    public function __construct($root)
    {
        self::$ROOT = $root;
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run(){
       
        echo $this->router->resolve(); 
    }
}