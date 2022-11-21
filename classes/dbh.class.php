<?php

class Dbh
{
    private $hostName = "localhost";
    private $dbName = "szeleihu_pizza";
    private $userName = "szeleihu_pizza";
    private $password = "pY67ZdFQNQnZ";

    protected function connect() {
        try {
            $dsn = 'mysql:host=' .$this->hostName .';dbname=' .$this->dbName;
            $pdo = new PDO($dsn, $this->userName, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
            return $pdo;
        }
        catch (PDOException $exception) {
            echo "Nincs adatbáziskapcsolat!". $exception->getMessage();
        }
    }
}