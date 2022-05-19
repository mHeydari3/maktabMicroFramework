<?php

namespace App\core;


use App\core\Router;
use App\core\Request;
use App\core\Response;
class Application{
    public static string $ROOT;
    public Router $router;
    public Request $request;
    public Response $response;
    public View $view;
    public static $app;

    public function __construct($root)
    {
        self::$ROOT = $root;
        $this->request = Request::getInstance();
        $this->router = new Router($this->request);
        $this->response = Response::getInstance();
        $this->view=view::getInstance();
        self::$app=$this;
    }

    public function run(){
       
        $this->router->resolve(); 
    }
}