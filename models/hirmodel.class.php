<?php

include "./classes/dbh.class.php";

class HirModel extends Dbh
{
    public function hirReg() {
        $sql = "INSERT INTO hiroldal(id, ertekeles, uzenet, bekuldo)
        values(0, :ertekeles, :uzenet, :bekuldo)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array(':ertekeles' => $_POST['ertekeles'], ':uzenet' => $_POST['uzenet'], ':bekuldo' => $_SESSION['login']));
        if ($stmt->rowCount()) {
            $reg = true;
        } else {
            $reg = false;
        }
        return $reg;
    }

    public function hirCheck() {
        $sql = "SELECT * FROM hiroldal";
        $sth = $this->connect()->query($sql);
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}