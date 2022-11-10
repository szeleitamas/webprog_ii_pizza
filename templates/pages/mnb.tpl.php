<pre>
<?php
	$client = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
	$currency = (array)simplexml_load_string($client->GetCurrencies()->GetCurrenciesResult);

	$penznem = array();


								foreach($currency as $currency => $currencies) {
                   foreach ($currencies as $key => $item) {
											 $penznem[] = $item;
                   }
                }
								?>

<h3>Dátum választás</h3>
<form action="?page=mnb2" method="post">


    <fieldset>
        <legend>Dátum választás</legend>
        <br>
		<label>Pénznem 1: <select name="penz1">
						<?php foreach($penznem as $penz) { ?>
								<option value="<?php echo $penz ?>"><?php echo $penz ?></option>
            <?php } ?>
				</select></label>
														<label>Pénznem 2: <select name="penz2">
						<?php foreach($penznem as $penz) { ?>
								<option value="<?php echo $penz ?>"><?php echo $penz ?></option>
            <?php } ?>
																</select></label>
<label>Év: <select name="ev">
<?php for ($ev=1900; $ev<=2022; $ev++) { ?>
		<option value="<?php echo $ev ?>"><?php echo $ev ?></option>
<?php } ?>
</select></label>
<label>Hónap: <select name="honap">
<?php for ($ho=1; $ho<=12; $ho++) { ?>
		<option value="<?php echo $ho ?>"><?php echo $ho ?></option>
<?php } ?>
</select></label>
<label>Nap: <select name="nap">
<?php for ($nap=1; $nap<=31; $nap++) { ?>
		<option value="<?php echo $nap ?>"><?php echo $nap ?></option>
<?php } ?>

</select></label>
				<input type="submit" name="mnb" value="Küldés">
		</fieldset>
</form>





<?php
/*
$startdate = "2016-11-14";
$enddate = "2016-11-16";
$client = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
$currencies3 = (array)simplexml_load_string($client->GetExchangeRates(array('startDate' => $ev.'-'.$honap.'-'.$nap, 'endDate' => $enddate, 'currencyNames' => $item1,$item2))->GetExchangeRatesResult);

print_r($currencies3);

*/

?>
</pre>
