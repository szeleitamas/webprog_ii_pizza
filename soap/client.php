<?php
?>

<!DOCTYPE HTML>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <title>Kategóriak</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/styles.css" type="text/css">
</head>

<?php
$client = new SoapClient('http://localhost/git/pizza/soap/pizza.wsdl');
$kategoriak = $client->getKategoria();
?>

<body>
<div class="main">
<h1>Kategoriak</h1>
<form name="kategoriaselect" method="POST">
    <select name="kategoria" onchange="javascript:kategoriaselect.submit();">
        <option value="">Válasszon ...</option>
        <?php
        foreach($kategoriak->kategoriak as $kategoria)
        {
            echo '<option value="'.$kategoria['nev'].'">'.$kategoria['nev'].'</option>';
        }
        ?>
		</select>
</form>
</div>
</body>
</html>
