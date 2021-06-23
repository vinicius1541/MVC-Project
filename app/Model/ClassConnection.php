<?php

namespace App\Model;

abstract class ClassConnection {
    public function connectDB() {
        try {
            $conn = new \PDO("mysql:host=".HOST.";dbname=".DB."","".USER."","".PASS."");
            return $conn;
        } catch(\PDOException $error) {
            return $error->getMessage();
        }
    }
}