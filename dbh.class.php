<?php

class Dbh {
    private $hostName = "szelei.hu";
    private $dbName = "szeleihu_pizza";
    private $userName = "szeleihu_pizza";
    private $password = "pY67ZdFQNQnZ";

    protected function connect() {
        try {
            $dsn = 'mysql:host=' .$this->hostName .';dbname=' .$this->dbName;
            $pdo = new PDO($dsn, $this->userName, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            //echo "Adatbáziskapcsolat Ok";
            return $pdo;
        }
        catch (PDOException $exception) {
            echo "Nincs adatbáziskapcsolat!" . $exception->getMessage();
        }
    }
}