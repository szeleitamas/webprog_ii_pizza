<?php
	require("../classes/ordercontroll.classes.php");
	$server = new SoapServer("ordercontroll.wsdl");
	$server->setClass('OrderControll');
	$server->handle();
?>
