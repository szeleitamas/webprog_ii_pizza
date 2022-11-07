<?php
$title = array(
    'title' => 'WEBPROG-II-ZH-I',
);

$header = array(
    'banner' => 'pizza_banner.jpg',
    'banneralt' => 'pizza banner',
    'text' => 'Neumann Pizza',
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
    'hiroldal' => array('file' => 'hiroldal', 'title' => 'Híroldal', 'menun' => array(0,1)),
    'soap' => array('file' => 'soap', 'title' => 'SOAP', 'menun' => array(1,1)),
    'soaptest' => array('file' => 'soaptest', 'title' => 'SOAP tesztelés', 'menun' => array(1,1)),
    'mnb' => array('file' => 'mnb', 'title' => 'MNB', 'menun' => array(1,1)),
    'belreg' => array('file' => 'belreg', 'title' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('file' => 'kilepes', 'title' => 'Kilépés', 'menun' => array(0,1)),
    'regisztracio' => array('file' => 'regisztracio', 'title' => '', 'menun' => array(0,0)),
    'belepes' => array('file' => 'belepes', 'title' => '', 'menun' => array(0,0)),
);

$error_page = array ('file' => '404', 'title' => 'A keresett oldal nem található!');
