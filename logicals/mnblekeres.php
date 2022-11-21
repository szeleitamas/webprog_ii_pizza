<pre>
<?php

if (isset($_POST['kev']) && isset($_POST['kho']) && isset($_POST['knap']) &&
    isset($_POST['zev']) && isset($_POST['zho']) && isset($_POST['znap']) &&
        isset($_POST['penz1']) && isset($_POST['penz2'])) {

    $kev = $_POST['kev'];
    $kho = $_POST['kho'];
    $knap = $_POST['knap'];
    $zev = $_POST['zev'];
    $zho = $_POST['zho'];
    $znap = $_POST['znap'];
    $penz1 = $_POST['penz1'];
    $penz2 = $_POST['penz2'];

    $enddate = "2022-11-16";
    $client = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
    $currencies3 = (array)simplexml_load_string($client->GetExchangeRates(array('startDate' => $kev . '-' . $kho . '-' . $knap, 'endDate' => $enddate, 'currencyNames' => $penz1, $penz2))->GetExchangeRatesResult);

    print_r($currencies3);
} ?>
</pre>