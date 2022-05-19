<?php 

namespace App\app\Models;
use App\core\Model;
class Users extends Model{
    public function getTable()
    {
        return "users";
    }
}