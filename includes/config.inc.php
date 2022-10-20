<?php
$title = array(
    'title' => 'WEBPROG-II-ZH-I',
);

$header = array(
    'logo' => 'pizza_header.webp',
    'logoalt' => 'logo',
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'WEBPROG-II-ZH-I.',
    'phoneicon' => 'phone_icon.png',
    'phonealt' => 'telefon',
    'phone' => '+36 80 000 0000',
    'mailicon' => 'mail_icon.png',
    'mailalt' => 'mail',
    'mail' => '00@00000.hu',
    'gpsicon' => 'gps_icon.png',
    'gpsalt' => 'hely',
    'gps' => '6000 Kecskemét, 000 utca 000.',
);

$pages = array(
    '/' => array('file' => 'cover', 'title' => 'Címlap', 'menun' => array(1,1)),
    'news' => array('file' => 'news', 'title' => 'Híroldal', 'menun' => array(1,0)),
    'ordercontroll' => array('file' => 'ordercontroll', 'title' => 'Rendelés ellenőrzés (SOAP)', 'menun' => array(1,0)),
    'soaptest' => array('file' => 'soaptest', 'title' => 'SOAP tesztelés', 'menun' => array(1,0)),
    'mnb' => array('file' => 'mnb', 'title' => 'MNB', 'menun' => array(1,0)),
    'login' => array('file' => 'login', 'title' => 'Belépés', 'menun' => array(1,0)),
    'logout' => array('file' => 'logout', 'title' => 'Kilépés', 'menun' => array(0,1)),

    'signup' => array('file' => 'signup', 'title' => '', 'menun' => array(0,0)),
);

$error_page = array ('file' => '404', 'title' => 'A keresett oldal nem található!');
