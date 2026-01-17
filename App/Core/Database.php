<?php

namespace App\Core;

use PDO;
use PDOException;
 
class Database
{
    private  PDO $conn;

    public function __construct() {
              try {
                $this->conn = new PDO( "mysql:host=localhost;dbname=mvc","root","");
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             } catch (PDOException $e) {
                echo "errur in data base" . $e->getMessage();
            }
    }

    public  function getConn(): PDO
    {
        return $this->conn;
    }
}

