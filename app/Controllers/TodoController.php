<?php

namespace App\app\Controllers;

use App\app\Models\JsonModel;
use App\Core\View;

class TodoController{
    public function GetAll(){
        
        (new View)->renderView('GetAll' , JsonModel::getAll());
    }
    public function GetById(){
        (new View)->renderView('GetById');
    }
    public function GetByID_Post(){
        $id = $_POST['todoID'];
        (new View)->renderView('ShowByID' , JsonModel::getByID($id));

    }
    public function AddTODO(){
        (new View)->renderView('AddTODO');
    }
    public function SendForm(){
        $userInput = $_REQUEST['todoTitle'];
        JsonModel::addToJson($userInput);
        //header("Location: /GetAll" );
        /* (new View)->renderView('SendForm' , []); */
    }
    public function Toggle(){
        (new View)->renderView('Toggle');
    }
    


}