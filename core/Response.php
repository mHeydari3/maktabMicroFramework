<?php
namespace App\core;


class Response{

    public static $instance = null;
    private function __construct()
    {
        
    }

    public function setStatusCode(int $number):void{

        http_response_code($number);
        
    }



    public static function  getInstance(): Response
    {
        if (self::$instance == null)
            self::$instance = new self;
        return self::$instance;
    }
    
    
}