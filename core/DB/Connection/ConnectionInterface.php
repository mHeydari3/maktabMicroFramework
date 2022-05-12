<?php

namespace App\core\DB\Connection;

interface ConnectionInterface
{
    public static function getInstance();
    public function getConnection(): \PDO;
}