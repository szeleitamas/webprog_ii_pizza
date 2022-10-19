<?php
?>

<!DOCTYPE HTML>
<html lang="hu">
  <head>
  <meta charset="utf-8">
  <title>Pizzák</title>
  </head>

  <?php
     $options = array(

   'keep_alive' => false,
    'trace' =>true,
    'connection_timeout' => 5000,
    'cache_wsdl' => WSDL_CACHE_NONE,
   );
  $client = new SoapClient('http://localhost/git/pizza/soap/pizza.wsdl',$options);

  $kategoriak = $client->getKategoria();
  echo "<pre>";
  print_r($kategoriak);
  echo "</pre>";

  ?>

  <body>
  </body>
</html>