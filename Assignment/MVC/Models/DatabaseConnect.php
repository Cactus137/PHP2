<?php

namespace MVC\Config;

use PDO;
use PDOException;

require_once __DIR__ . '/DatabaseConfig.php';

class DatabaseConnect extends DatabaseConfig
{
    protected function connect()
    {
        try {
            $pdo = new PDO(
                "mysql:host=" . $this->DBHOST
                    . ";dbname=" . $this->DBNAME
                    . ";charset=" . $this->DBCHARSET,
                $this->DBUSER,
                $this->DBPASS
            ); 
            return $pdo;
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public function getData($query, $getAll = true)
    {
        $conn = $this->connect();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }
} 
