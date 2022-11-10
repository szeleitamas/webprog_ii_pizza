<?php

if(isset($_POST['ev']) && isset($_POST['ho']) && isset($_POST['nap']) && isset($_POST['penz1']) && isset($_POST['penz2'])) {
    $ev = $_POST['ev'];
    $ho = $_POST['ho'];
    $nap = $_POST['nap'];
    $penz1 = $_POST['penz1'];
    $penz2 = $_POST['penz2'];

    $enddate = "2022-11-16";
    $client = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
    $currencies3 = (array)simplexml_load_string($client->GetExchangeRates(array('startDate' => $ev . '-' . $ho . '-' . $nap, 'endDate' => $enddate, 'currencyNames' => $penz1, $penz2))->GetExchangeRatesResult);

    print_r($currencies3);
}
