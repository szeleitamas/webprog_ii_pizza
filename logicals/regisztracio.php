<?php

include ("./models/regmodel.class.php");
include ("./controllers/regcontrol.class.php");
include ("./views/regview.class.php");

if (isset($_POST['vezeteknev']) && isset($_POST['utonev']) && isset($_POST['felhasznalonev']) && isset($_POST['jelszo'])) {
    $vezeteknev = $_POST['vezeteknev'];
    $utonev = $_POST['utonev'];
    $felhasznalonev = $_POST['felhasznalonev'];
    $jelszo = $_POST['jelszo'];



    $controllers = new RegController($vezeteknev, $utonev, $felhasznalonev, $jelszo);
    $controllers->meghiv_reg();
    $m = new RegView();
    $m->m();
}


