<?php

namespace App\app\Models;



class JsonModel{
    // TODO::check static 
    
    public static function addToJson($data){
        $jsonPath = dirname(__DIR__) . "/../assets/data.json";    
        $jsonContent = file_get_contents($jsonPath);
        $jsonContent = json_decode($jsonContent , true);
        $jsonContent[] = $data;
        $jsonContent = json_encode($jsonContent);

        file_put_contents($jsonPath , $jsonContent);

    } 

    public static function getAll(){
        $jsonPath = dirname(__DIR__) . "/../assets/data.json";    
        $jsonContent = file_get_contents($jsonPath);
        $jsonContent = json_decode($jsonContent , true);
        
        return $jsonContent;
    }

    public static function getByID($key){
        $jsonPath = dirname(__DIR__) . "/../assets/data.json";    
        $jsonContent = file_get_contents($jsonPath);
        $jsonContent = json_decode($jsonContent , true);
        
        return [$key => $jsonContent[$key]];
    }
}