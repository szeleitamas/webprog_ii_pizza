<?php
require("../classes/dbh.classes.php");
require("../classes/pizza.classes.php");
$server = new SoapServer("pizza.wsdl");
$server->setClass("Pizza");
$server->handle();
