<?php
	//error_reporting(0);
	require 'mobilok.php';
	require 'WSDLDocument/WSDLDocument.php';
	$wsdl = new WSDLDocument('Mobilok', "http://localhost/feladat/szerver/szerver.php", "http://localhost/feladat/szerver/");
	$wsdl->formatOutput = true;
	$wsdlfile = $wsdl->saveXML();
	echo $wsdlfile;
	file_put_contents ("mobilok.wsdl" , $wsdlfile);
?>
