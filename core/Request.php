<?php

namespace App\core;

class Request{
    public static $instance = null;
    private function __construct()
    {
        
    } 
    public function getPath(){
        $path = $_SERVER['REQUEST_URI'];
        $position = strpos($path , '?');
        if ($position === false){
            return $path;
        }
        return substr($path , 0 , $position);
    }

    public function getMethod(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
    public static function  getInstance(){
        if(self::$instance==null)
            self::$instance=new self;
        return self::$instance;
    }

}