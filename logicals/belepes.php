<?php

include "./models/logmodel.class.php";
include "./controllers/logcontrol.class.php";
include "./views/logview.class.php";

if (isset($_POST['felhasznalonev']) && isset($_POST['jelszo'])) {
    $felhasznalonev = $_POST['felhasznalonev'];
    $jelszo = $_POST['jelszo'];

    $controllers = new LogControl($felhasznalonev, $jelszo);
    $controllers->meghiv_log();
}
