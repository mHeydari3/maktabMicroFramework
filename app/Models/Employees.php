<?php

namespace App\app\Models;

use App\core\Model;

class Employees extends Model
{
    public function getTable()
    {
        return "employees";
    }
}