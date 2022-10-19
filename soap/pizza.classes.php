<?php
class Pizza {
    /**
     * @return Kategoria
     */
    public function getKategoria() {
        $eredmeny = array("hibakod" => 0,
                        "uzenet" => "",
                        "kategoriak" => Array());

        try {
            $dbh = new PDO('mysql:host=szelei.hu;dbname=szeleihu_pizza','szeleihu_pizza', 'pY67ZdFQNQnZ',
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

            $sql = "select nev from kategoria order by nev";
            $sth = $dbh->prepare($sql);
            $sth->execute(array());
            $eredmeny['kategoriak'] = $sth->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
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