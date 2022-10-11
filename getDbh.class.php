<?php

class GetDbh extends Dbh {

    public function login($loginname, $password) {
        try {
            $sql = "SELECT * FROM users WHERE user_loginname = ? AND user_password = ?";
            $sth = $this->connect()->prepare($sql);
            $sth->execute([$loginname, $password]);
            $row = $sth->fetch(PDO::FETCH_ASSOC);
            return $row;
        }
        catch (PDOException $exception) {
            echo "Hiba: " .$exception->getMessage();
        }
    }
}