<?php

class OrderControll
{
    /**
     * @return Kategoriak
     */
    public function getKategoria()
    {

        $eredmeny = array("hibakod" => 0,
            "uzenet" => "",
            "kategoriak" => array());

        try {
            $dbh = new PDO('mysql:host=szelei.hu;dbname=szeleihu_pizza', 'szeleihu_pizza', 'pY67ZdFQNQnZ',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

            $sql = "select nev, ar from kategoria order by nev";
            $sth = $dbh->prepare($sql);
            $sth->execute(array());
            $eredmeny['kategoriak'] = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $eredmeny["hibakod"] = 1;
            $eredmeny["uzenet"] = $e->getMessage();
        }

        return $eredmeny;
    }


    /**
     * @param string $nev
     * @return Pizzak
     */
    function getPizza($nev)
    {

        $eredmeny = array("hibakod" => 0,
            "uzenet" => "",
            "ar" => "",
            "nev" => "",
            "pizzak" => array());

        try {
            $dbh = new PDO('mysql:host=szelei.hu;dbname=szeleihu_pizza', 'szeleihu_pizza', 'pY67ZdFQNQnZ',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

            $eredmeny["nev"] = $nev;

            $sql = "select nev, ar from kategoria where nev = :nev";
            $sth = $dbh->prepare($sql);
            $sth->execute(array(":nev" => $nev));
            $kategoria = $sth->fetch(PDO::FETCH_ASSOC);
            $kategorianev = $kategoria["nev"];
            $eredmeny["nev"] = $kategoria["nev"];

            $sql = "select nev, vegetarianus from pizza where kategorianev = :kategorianev order by nev";
            $sth = $dbh->prepare($sql);
            $sth->execute(array(":kategorianev" => $kategorianev));
            $eredmeny['pizzak'] = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $eredmeny["hibakod"] = 1;
            $eredmeny["uzenet"] = $e->getMessage();
        }

        return $eredmeny;
    }

    /**
     * @param string $nev
     * @return Rendelesek
     */
    function getRendeles($nev)
    {

        $eredmeny = array("hibakod" => 0,
            "uzenet" => "",
            "ar" => "",
            "nev" => "",
            "darab" => "",
            "felvetel" => "",
            "kiszallitas" => "",
            "rendelesek" => array());

        try {
            $dbh = new PDO('mysql:host=szelei.hu;dbname=szeleihu_pizza', 'szeleihu_pizza', 'pY67ZdFQNQnZ',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

            $eredmeny["nev"] = $nev;

            $sql = "select nev, vegetarianus from pizza where nev = :nev";
            $sth = $dbh->prepare($sql);
            $sth->execute(array(":nev" => $nev));
            $rendeles = $sth->fetch(PDO::FETCH_ASSOC);
            $pizzanev = $rendeles["nev"];
            $eredmeny["nev"] = $rendeles["nev"];

            $sql = "select darab, felvetel, kiszallitas from rendeles where pizzanev = :pizzanev";
            $sth = $dbh->prepare($sql);
            $sth->execute(array(":pizzanev" => $pizzanev));
            $eredmeny['rendelesek'] = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $eredmeny["hibakod"] = 1;
            $eredmeny["uzenet"] = $e->getMessage();
        }

        return $eredmeny;
    }


}

class Kategoria {
    /**
     * @var string
     */
    public $nev;

    /**
     * @var int
     */
    public $ar;
}

class Kategoriak {
    /**
     * @var integer
     */
    public $hibakod;

    /**
     * @var string
     */
    public $uzenet;

    /**
     * @var Kategoria[]
     */
    public $kategoriak;
}
class Pizza {
    /**
     * @var string
     */
    public $nev;

    /**
     * @var boolean
     */
    public $vegetarianus;
}

class Pizzak {
    /**
     * @var integer
     */
    public $hibakod;

    /**
     * @var string
     */
    public $uzenet;

    /**
     * @var string
     */
    public $nev;

    /**
     * @var int
     */
    public $ar;

    /**
     * @var Pizza[]
     */
    public $pizzak;
}

Class Rendeles {
    /**
     * @var int
     */
    public $az;

    /**
     * @var int
     */
    public $darab;

    /**
     * @var string
     */
    public $felvetel;

    /**
     * @var string
     */
    public $kiszallitas;
}

class Rendelesek {
    /**
     * @var integer
     */
    public $hibakod;

    /**
     * @var string
     */
    public $uzenet;

    /**
     * @var string
     */
    public $nev;

    /**
     * @var boolean
     */
    public $vegetarianus;

    /**
     * @var Rendeles[]
     */
    public $rendelesek;
}