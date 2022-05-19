<?php

namespace App\app\Controllers;

use App\app\Models\JsonModel;
use App\core\View;
use App\app\Models\Todos;
use App\app\utility\Redirect;
use App\core\Controller;

class TodoController extends Controller
{
    public function GetAll()
    {
        $res = Todos::do()->select();


        ($this->view)->renderView('GetAll', $res);
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
        $id = $_GET['todoID'] ?? null;
        $res = Todos::do()->find($id, "id");


        ($this->view)->renderView('ShowByID', [$res]);
    }
    public function AddTODO()
    {
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
        Redirect::to("/GetAll");
    }
    public function Toggle()
    {
        ($this->view)->renderView('Toggle');
    }
    public function edit()
    {
        $id = $_GET["todoID"];
        $res = Todos::do()->find($id, "id");

        ($this->view)->renderView('edit', [$res]);
    }
    public function delete()
    {
        $id = $_GET["todoID"];
        Todos::do()->delete($id);
        Redirect::to("/GetAll");
    }
    public function submitEdit()
    {
       
        $res = Todos::do()->update($_POST,$_GET['id']);
        Redirect::to("/GetAll");
    }
    public function update()
    {
        extract($_POST);
        $res = Todos::do()->find($id, "id");
        $res->status = 'done';
        $res = (array)$res;
        Todos::do()->update($res, $id);
        Redirect::to("/GetAll");
        
    }
}