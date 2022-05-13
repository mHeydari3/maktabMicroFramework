<?php

namespace App\app\Controllers;

use App\app\Models\JsonModel;
use App\Core\View;
use App\app\Models\Todos;


class TodoController
{
    public function GetAll()
    {
        $res = Todos::do()->select();


        (new View)->renderView('GetAll', $res);
    }
    public function GetById()
    {
        (new View)->renderView('GetById');
    }
    public function GetByID_Post()
    {
        $id = $_POST['todoID'];
        $res = Todos::do()->find($id, "id");


        (new View)->renderView('ShowByID', [$res]);
    }
    public function GetByID_Get()
    {
        $id = $_GET['todoID'];
        $res = Todos::do()->find($id, "id");


        (new View)->renderView('ShowByID', [$res]);
    }
    public function AddTODO()
    {
        (new View)->renderView('AddTODO');
    }
    public function SendForm()
    {
        extract($_POST);


        $res = Todos::do()->create([
            'title' =>           $todoTitle,
            'description' =>     $description,
            'deadline' =>        $date,
            'color' =>           $color,
            'status' =>          $status
        ]);

        /* JsonModel::addToJson($userInput); */
        header("Location: /GetAll");
        /* (new View)->renderView('SendForm' , []); */
    }
    public function Toggle()
    {
        (new View)->renderView('Toggle');
    }
}
