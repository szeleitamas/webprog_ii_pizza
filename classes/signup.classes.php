<?php

class Signup extends Dbh {

    protected function checkUser($loginname) {
        $sql = "SELECT user_id FROM users WHERE user_loginname = ?";
        $sth = $this->connect()->prepare($sql);
        $sth->execute([$loginname]);
        if ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $sth = null;
            exit();
        }

        $resultCheck;
        if ($sth->rowCount() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

    protected function setUser($firstname, $lastname, $loginname, $email, $password) {
        try {
            $sql = "INSERT INTO users (user_firstname, user_lastname, user_loginname, user_email, user_password) 
                    VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname, $lastname, $loginname, $email, $password]);
        }
        catch (PDOException $exception) {
            echo "Hiba: " .$exception->getMessage();
        }
    }

}