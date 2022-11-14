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

<form action="?page=mnblekeres" method="post">
    <fieldset>
			<legend>Pénznem</legend>
      <br>
		<label>Pénznem 1: </label><select name="penz1">
			<?php foreach($penznem as $penz) { ?>
				<option value="<?php echo $penz ?>"><?php echo $penz ?></option>
      <?php } ?>
		</select>
		<label>Pénznem 2: </label><select name="penz2">
			<?php foreach($penznem as $penz) { ?>
				<option value="<?php echo $penz ?>"><?php echo $penz ?></option>
  	  <?php } ?>
		</select>
		</fieldset>
		<fieldset>
		<legend>Kezdő dátum</legend>
		<label>Év: </label><select name="kev">
			<?php for ($ev=2000; $ev<=2022; $ev++) { ?>
				<option value="<?php echo $ev ?>"><?php echo $ev ?></option>
			<?php } ?>
		</select>
		<label>Hónap: </label><select name="kho">
			<?php for ($ho=1; $ho<=12; $ho++) { ?>
				<option value="<?php echo $ho ?>"><?php echo $ho ?></option>
			<?php } ?>
		</select>
		<label>Nap: </label><select name="knap">
			<?php for ($nap=1; $nap<=31; $nap++) { ?>
				<option value="<?php echo $nap ?>"><?php echo $nap ?></option>
		<?php } ?>
		</select>
		</fieldset>
		<fieldset>
		<legend>Záró dátum</legend>
		<label>Év: </label><select name="zev">
			<?php for ($ev=2000; $ev<=2022; $ev++) { ?>
					<option value="<?php echo $ev ?>"><?php echo $ev ?></option>
      <?php } ?>
		</select>
		<label>Hónap: </label><select name="zho">
			<?php for ($ho=1; $ho<=12; $ho++) { ?>
					<option value="<?php echo $ho ?>"><?php echo $ho ?></option>
      <?php } ?>
		</select>
		<label>Nap: </label><select name="znap">
			<?php for ($nap=1; $nap<=31; $nap++) { ?>
					<option value="<?php echo $nap ?>"><?php echo $nap ?></option>
      <?php } ?>
		</select>
		</fieldset>
		<input type="submit" name="mnb" value="Küldés">
</form>
</pre>
