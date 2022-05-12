<?php

namespace App\core;

use App\core\DB\Connection\ConnectionInterface;
use App\core\DB\MySqlDatabase;
use stdClass;
use App\core\DB\DatabaseInterface;

abstract class  Model
{

    protected  $db;
    protected $query;
    public function __construct()
    {
        $this->db = MySqlDatabase::do();
        $this->query = $this->db->table($this->getTable());
    }
    public static function do()
    { //!return my child class
        return new static;
    }
    public  abstract function getTable();
    public function create(array $fields)
    {
        return $this->query->insert($fields)->exec();
    }
    public function find($value, $col = 'id')
    {

        return $this->query->select()->where($col, $value)->fetch();
    }
    
    // SELECT array $cols from table then fetch or fetchAll
    public function select(array $cols = ['*'])
    {
    
        return $this->query->select($cols)->fetchAll();
    }
}