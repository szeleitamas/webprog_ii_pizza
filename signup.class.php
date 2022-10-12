<?php

class Signup extends Dbh {

    protected function checkUser($loginname) {
        $sql = "SELECT user_id FROM users WHERE user_loginname = ?";
        $sth = $this->connect()->prepare($sql);
        $sth->execute(array($loginname));
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
}