<?php

$client = new SoapClient('https://lzuec6.szelei.hu/soap/ordercontroll.wsdl');
$kategoriak = $client->getKategoria();
if(isset($_POST['kategoria']) && trim($_POST['kategoria']) != "")
    $pizzak = $client->getPizza($_POST['kategoria']);
?>

<h1>Rendelés ellenőrzés</h1>
<div class="flex-container-ordercontroll">
		<div class="ordercontroll-category">
				<h4>Válasszon kategóriát:</h4>
				<form name="kategoriaselect" method="POST">
						<select name="kategoria" onchange="javascript:kategoriaselect.submit();">
								<option value="">Válasszon kategóriát</option>
								<?php
								foreach($kategoriak->kategoriak as $kategoria)
								{
										echo '<option value="'.$kategoria['nev'].'">'. $kategoria['nev'].'</option>';
								}
								?>
						</select>
				</form>
		</div>
		<div class="ordercontroll-pizza">
				<h4>Válasszon pizza fajtát:</h4>
				<form name="pizzaselect" method="POST">
						<select name="pizza" onchange="javascript:pizzaselect.submit();">
								<option value="">Válasszon pizza fajtát</option>
								<?php
								foreach($pizzak->pizzak as $pizza)
								{
										echo '<option value="'.$pizza['nev'].'">'. $pizza['nev'].'</option>';
								}
								?>
						</select>
				</div>
						<div class="ordercontroll table">
						<?php
						if(isset($_POST['pizza']) && trim($_POST['pizza']) != "")
								$rendelesek = $client->getRendeles($_POST['pizza']);
						if(isset($rendelesek))
						{
								echo "<h4>" .$rendelesek->nev . " pizza kiszállítási adatlapja: </h4>";
								?>
								<table>
										<th>Rendelés időpontja</th>
										<th>Kiszállítás időpontja</th>
										<th>Mennyiség</th>
										<?php
										foreach($rendelesek->rendelesek as $rendeles)
										{
												print "<tr><td>" . $rendeles['felvetel'] . "</td>"  . " <td>" .$rendeles['kiszallitas'] . "</td>"  .  " <td>" . $rendeles['darab'] . "</td></tr>";
										} ?>
								</table>
						<?php }
						?>
				</form>
		</div>
</div>

