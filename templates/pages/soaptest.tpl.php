<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>Rendelés fv. ellenőrzés</title>
  </head>

  <?php
     $options = array(
   
   'keep_alive' => false,
    //'trace' =>true,
    //'connection_timeout' => 5000,
    //'cache_wsdl' => WSDL_CACHE_NONE,
   );
  $client = new SoapClient('http://localhost/pizza/soap/ordercontroll.wsdl',$options);
  
  $kategoriak = $client->getKategoria();
  echo "<pre>";
  print_r($kategoriak);
  echo "</pre>";
  
  $pizzak = $client->getPizza('főnemes');
  echo "<pre>";
  print_r($pizzak);
  echo "</pre>";

	$rendelesek = $client->getRendeles('Csabesz');
	echo "<pre>";
  print_r($rendelesek);
  echo "</pre>";
	?>
    
  <body>
  </body>
</html>