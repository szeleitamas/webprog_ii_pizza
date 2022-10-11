<?php

include "dbh.class.php";

class SetDbh extends Dbh {

    public function registration($firstname, $lastname, $loginname, $email, $password) {
        try {
            $sql = "INSERT INTO users (user_firstname, user_lastname, user_loginname, user_email, user_password) 
                    VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname, $lastname, $loginname, $email, $password]);
            echo "Az adatbevitel sikeres!";
        }
        catch (PDOException $exception) {
            echo "Hiba: " .$exception->getMessage();
        }
    }
}