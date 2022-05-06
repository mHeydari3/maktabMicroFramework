<?php

namespace App\app\Controllers;

use App\Core\View;

class TodoController{
    public function GetAll(){
        (new View)->renderView('GetAll');
    }
    public function GetById(){
        (new View)->renderView('GetById');
    }
    public function AddTODO(){
        (new View)->renderView('AddTODO');
    }
    public function SendForm(){
        /* var_dump($_REQUEST); */
        /* (new View)->renderView('SendForm' , $_POST); */
    }
    public function Toggle(){
        (new View)->renderView('Toggle');
    }
    public function mohammad(){
        /* var_dump($_REQUEST); */
    }


}