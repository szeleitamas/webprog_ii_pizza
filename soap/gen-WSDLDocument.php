<?php
	//error_reporting(0);
	require 'pizza.classes.php';
	require 'WSDLDocument/WSDLDocument.php';
	$wsdl = new WSDLDocument('Pizza',
		"http://localhost/git/pizza/soap/server.php",
		"http://localhost/git/pizza/soap/");
	$wsdl->formatOutput = true;
	$wsdlfile = $wsdl->saveXML();
	echo $wsdlfile;
	file_put_contents ("pizza.wsdl" , $wsdlfile);
?>
