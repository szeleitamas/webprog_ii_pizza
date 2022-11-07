<?php

include "dbh.classes.php";

class RegModel extends Dbh
{
    public function registration()
    {
        $sql = "select id from users where felhasznalonev = :felhasznalo";
        $sth = $this->connect()->prepare($sql);
        $sth->execute(array(':felhasznalo' => $_POST['felhasznalonev']));
        if ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $reg = false;
        } else {
            $sql = "INSERT INTO users(id, vezeteknev, utonev, felhasznalonev, jelszo)
                                  values(0, :csaladinev, :keresztnev, :felhasznalo, :jelszo)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute(array(':csaladinev' => $_POST['vezeteknev'], ':keresztnev' => $_POST['utonev'],
                ':felhasznalo' => $_POST['felhasznalonev'], ':jelszo' => sha1($_POST['jelszo'])));
            if ($row = $stmt->rowCount()) {
                $reg = true;
            } else {
                $reg = false;
            }
        }
        return $reg;
    }
}

class RegController extends RegModel
{
    private $vezeteknev;
    private $utonev;
    private $felhasznalonev;
    private $jelszo;

    public function __construct($vezeteknev, $utonev, $felhasznalonev, $jelszo)
    {
        $this->vezeteknev = $vezeteknev;
        $this->utonev = $utonev;
        $this->felhasznalonev = $felhasznalonev;
        $this->jelszo = $jelszo;
    }

    public function meghiv() {
        $this->registration();
    }
}

class RegView extends RegModel
{

    public function kiir()
    {
        $eredmeny = $this->registration();
        if (isset($eredmeny) && $eredmeny) {
            echo "A regisztráció sikeres!";
        } elseif (isset($eredmeny) && !$eredmeny) {
            echo "A regisztráció nem sikerült!";
        }
    }
}