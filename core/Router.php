<?php

namespace App\core;
use App\Core\Request;
class Router{
    public $routes = [];
    public Request $request ; 

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function get($path , $callback){
       

        $this->routes['get'][$path] = $callback;

    }

    public function post($path , $callback){
        $this->routes['post'][$path] = $callback;
    }



    // public function put($path , $callback){

    // }
    

    public function resolve(){
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        
        
        $callback = $this->routes[$method][$path] ?? false;
        
        if ($callback === false){
            die("Not found");
        }
        if(is_string($callback)){
           return $this->renderView($callback);
        }
    
        return $callback();
    }
    public function renderView($view)
    {
        $layoutContent = $this->layoutContent();
        require_once Application::$ROOT . "/../view/$view.php";
    }
    protected function layoutContent(){
        require_once Application::$ROOT . "/../view/layout/main.php";
    }
}