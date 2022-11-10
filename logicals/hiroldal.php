<?php

include "./models/hirmodel.class.php";
include "./controllers/hircontrol.class.php";
include "./views/hirview.class.php";

if (isset($_POST['ertekeles']) && isset($_POST['uzenet'])) {
    $ertekeles = $_POST['ertekeles'];
    $uzenet = $_POST['uzenet'];

    $controllers = new HirControl($ertekeles, $uzenet);
    $controllers->meghiv_hir();
}
