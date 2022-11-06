<pre>
<?php
	print_r($_POST);
	$client = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
	$currency = (array)simplexml_load_string($client->GetCurrencies()->GetCurrenciesResult);
?>
		<?php
/*
		<h4>Válasszon Pénznemet:</h4>
		<form name="currenciesselect" method="POST">
						<select name="currencies" onchange="javascript:currenciesselect.submit();">
								<option value="">Válasszon pénznemet</option>
								<?php

								foreach($currency as $currency => $currencies) {
                   foreach ($currencies as $key => $item) {
                       echo '<option value="' . $item . '">' . $item . '</option>';
                   }
                }
                $currency1 = $_POST['currencies'];
								?>
						</select>
		</form>
*/?>
		<h4>Válasszon másik pénznemet:</h4>
		<form name="currencies2select" method="POST">
						<select name="currencies2" onchange="javascript:currencies2select.submit();">
								<option value="">Válasszon pénznemet</option>
								<?php

                foreach($currency as $currency => $currencies2) {
                    foreach ($currencies2 as $key => $item) {
                        echo '<option value="' . $item . '">' . $item . '</option>';
                    }
                }
                $currency2 = $_POST['currencies'];
                ?>
						</select>
		</form>
<?php
$startdate = "2016-11-14";
$enddate = "2016-11-16";
$client = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
$currencies3 = (array)simplexml_load_string($client->GetExchangeRates(array('startDate' => $startdate, 'endDate' => $enddate, 'currencyNames' => $currency1,$currency2))->GetExchangeRatesResult);

print_r($currencies3);



?>
</pre>
