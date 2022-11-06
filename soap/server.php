<?php
	require("../classes/soap.class.php");
	$server = new SoapServer("ordercontroll.wsdl");
	$server->setClass('OrderControll');
	$server->handle();
?>
