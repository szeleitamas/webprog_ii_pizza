<?php
class Pizza {
    /**
     * @return Pizza
     */
    public function getkategoria() {
        $eredmeny = array("hibakod" => 0,
                        "uzenet" => "",
                        "nevek" => Array());

        try {
            $dbh = new PDO('mysql:host=szelei.hu;dbname=szeleihu_pizza','szeleihu_pizza', 'pY67ZdFQNQnZ',
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

            $sql = "select nev from kategoria order by nev";
            $sth = $dbh->prepare($sql);
            $sth->execute(array());
            $eredmeny['nevek'] = $sth->fetchAll(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            $eredmeny["hibakod"] = 1;
            $eredmeny["uzenet"] = $e->getMessage();
        }

        return $eredmeny;
    }
}