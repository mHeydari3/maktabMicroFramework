<?php

namespace App\app;

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
        (new View)->renderView('SendForm');
    }
    public function Toggle(){
        (new View)->renderView('Toggle');
    }


}