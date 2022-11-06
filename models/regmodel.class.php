<?php

include ("../classes/dbh.class.php");

class RegModel extends Dbh
{
    public function checkUser()
    {
        $sql = "SELECT id FROM users WHERE felhasznalonev = :felhasznalo";
        $sth = $this->connect()->prepare($sql);
        $sth->execute(array(':felhasznalo' => $_POST['felhasznalonev']));
        if ($sth->rowCount() > 0) {
            $check = false;
        } else {
            $check = true;
        }
        return $check;
    }

    public function regUser()
    {
        $sql = "INSERT INTO users(id, vezeteknev, utonev, felhasznalonev, jelszo)
        values(0, :csaladinev, :keresztnev, :felhasznalo, :jelszo)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array(':csaladinev' => $_POST['vezeteknev'], ':keresztnev' => $_POST['utonev'],
            ':felhasznalo' => $_POST['felhasznalonev'], ':jelszo' => sha1($_POST['jelszo'])));
        if ($stmt->rowCount()) {
            $reg = true;
        } else {
            $reg = false;
        }
        return $reg;
    }
}