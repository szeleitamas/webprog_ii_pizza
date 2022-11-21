<?php
	//error_reporting(0);
	require '../classes/soap.class.php';
	require 'WSDLDocument/WSDLDocument.php';
	$wsdl = new WSDLDocument('OrderControll',
		"https://lzuec6.szelei.hu/soap/server.php",
		"https://lzuec6.szelei.hu/soap/");
	$wsdl->formatOutput = true;
	$wsdlfile = $wsdl->saveXML();
	echo $wsdlfile;
	file_put_contents ("ordercontroll.wsdl" , $wsdlfile);
?>
