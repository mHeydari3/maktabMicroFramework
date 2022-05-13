<?php 

namespace App\app\Models;
use App\core\Model;
class Todos extends Model{
    public function getTable()
    {
        return "todos";
    }
}