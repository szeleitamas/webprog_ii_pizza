<!DOCTYPE HTML>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <title>Pizza</title>
</head>

<?php
include "../classes/dbh.classes.php";
include "../classes/pizza.classes.php";

$client = new SoapClient('http://localhost/pizza/soap/pizza.wsdl');
$kategoriak = $client->getkategoria();
if(isset($_POST['kategoria']) && trim($_POST['kategoria']) != "")
    $modellek = $client->getmodellek($_POST['kategoria']);
?>

<body>
<h1>Kategória</h1>
<form name="kategoriaselect" method="POST">
    <select name="kategoria" onchange="javascript:kategoriaselect.submit();">
        <option value="">Válasszon ...</option>
        <?php
        foreach($kategoriak->kategoriak as $kategoria)
        {
            echo '<option value="'.$kategoria['nev'].'">'.$kategoria['ar'].'</option>';
        }
        ?>
    </select>
</form>
</body>
</html>
