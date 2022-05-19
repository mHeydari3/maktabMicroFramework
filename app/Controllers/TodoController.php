<?php

namespace App\app\Controllers;

use App\app\Models\JsonModel;
use App\core\View;
use App\app\Models\Todos;
use App\core\Controller;

class TodoController extends Controller
{
    public function GetAll()
    {
        $res = Todos::do()->select();


        ($this-> view)->renderView('GetAll', $res);
    }
    public function GetById()
    {
        ($this->view)->renderView('GetById');
    }
    public function GetByID_Post()
    {
        $id = $_POST['todoID'];
        $res = Todos::do()->find($id, "id");


        ($this->view)->renderView('ShowByID', [$res]);
    }
    public function GetByID_Get()
    {
        $id = $_GET['todoID']??null;
        $res = Todos::do()->find($id, "id");


        ($this->view)->renderView('ShowByID', [$res]);
    }
    public function AddTODO()
    {
        // die("a");
        ($this->view)->renderView('AddTODO');
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
        ($this->view)->renderView('Toggle');
    }
    public function edit(){
        $id=$_GET["todoID"];
        // var_dump($id);
        $res = Todos::do()->find($id, "id");
        // var_dump($res);
        // die("a");
        ($this->view)->renderView('edit',[$res]);

    }
    public function delete(){
        $id=$_GET["todoID"];
        //todo drop as databse
        ($this->view)->renderView('delete');
        header("Location:/GetAll" );
    }
    public function submitEdit(){
        
        $res = Todos::do()->update($_POST);

        // (new View)->renderView('GetAll');
        header("Location:/GetAll" );
        
    }
}