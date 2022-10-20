<?php
	//error_reporting(0);
    require '../classes/dbh.classes.php';
	require '../classes/pizza.classes.php';
	require './WSDLDocument/WSDLDocument.php';
	$wsdl = new WSDLDocument('Pizza',
		"http://localhost/pizza/soap/server.php",
		"http://localhost/pizza/soap/");
	$wsdl->formatOutput = true;
	$wsdlfile = $wsdl->saveXML();
	echo $wsdlfile;
	file_put_contents ("pizza.wsdl" , $wsdlfile);

