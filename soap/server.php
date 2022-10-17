<?php
require ("pizza.php");
$server = new SoapServer("pizza.wsdl");
$server->setClass("Pizza");
$server->handle();
