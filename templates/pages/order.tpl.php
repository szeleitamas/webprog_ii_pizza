<?php
?>

<!DOCTYPE HTML>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <title>Kategóriak</title>
</head>

<?php
$client = new SoapClient('http://localhost/git/pizza/soap/pizza.wsdl');
$kategoriak = $client->getKategoria();
?>

<body>
<h1>Kategóriak</h1>
<form name="kategoriaselect" method="POST">
    <select name="kategoria" onchange="javascript:kategoriaselect.submit();">
        <option value="">Válasszon ...</option>
        <?php
        foreach($kategoriak->kategoriak as $kategoria)
        {
            echo '<option value="'.$kategoria['nev'].'">'.$kategoria['nev'].'</option>';
        }
        ?>

</form>
</body>
</html>
