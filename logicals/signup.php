<?php

include "../classes/registration.classes.php";


if (isset($_POST['vezeteknev']) && isset($_POST['utonev']) && isset($_POST['felhasznalonev']) && isset($_POST['jelszo'])) {
    $vezeteknev = $_POST['vezeteknev'];
    $utonev = $_POST['utonev'];
    $felhasznalonev = $_POST['felhasznalonev'];
    $jelszo = $_POST['jelszo'];

    $controllers = new RegController($vezeteknev, $utonev, $felhasznalonev, $jelszo);
    $controllers->meghiv();
    $v = new RegView();
    $v->kiir();
}


