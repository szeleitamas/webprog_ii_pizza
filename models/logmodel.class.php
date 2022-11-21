<?php

include "./classes/dbh.class.php";

class LogModel extends Dbh
{
    public $log;
    public function logUser()
    {
        $sql = "SELECT id, vezeteknev, utonev FROM users WHERE felhasznalonev = :felhasznalo and jelszo = sha1(:jelszo)";
        $sth = $this->connect()->prepare($sql);
        $sth->execute(array(':felhasznalo' => $_POST['felhasznalonev'], ':jelszo' => $_POST['jelszo']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $_SESSION['csn'] = $row['vezeteknev'];
            $_SESSION['un'] = $row['utonev'];
            $_SESSION['login'] = $_POST['felhasznalonev'];
            $log = true;
        } else {
        //if(isset($row) && !$row){
            $log = false;
            session_unset();
        }
        return $log;

    }
}