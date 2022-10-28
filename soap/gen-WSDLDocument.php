<?php
	//error_reporting(0);
	require '../classes/ordercontroll.classes.php';
	require 'WSDLDocument/WSDLDocument.php';
	$wsdl = new WSDLDocument('OrderControll',
		"http://localhost/git/pizza/soap/server.php",
		"http://localhost/git/pizza/soap/");
	$wsdl->formatOutput = true;
	$wsdlfile = $wsdl->saveXML();
	echo $wsdlfile;
	file_put_contents ("ordercontroll.wsdl" , $wsdlfile);
?>
