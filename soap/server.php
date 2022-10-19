<?php
require("pizza.classes.php");
$server = new SoapServer("pizza.wsdl");
$server->setClass("Pizza");
$server->handle();
