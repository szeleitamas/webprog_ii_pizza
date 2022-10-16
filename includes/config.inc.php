<?php
$title = array(
    'title' => 'WEBPROG-II-ZH-I',
);

$header = array(
    'kepforras' => 'handball.png',
    'kepalt' => 'logo',
    'motto' => ''
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'WEBPROG-II-ZH-I.'
);

$pages = array(
    '/' => array('file' => 'cover', 'title' => 'Címlap', 'menun' => array(1,1)),
    'news' => array('file' => 'news', 'title' => 'Híroldal', 'menun' => array(1,0)),
    'login' => array('file' => 'login', 'title' => 'Belépés', 'menun' => array(1,0)),
    'logout' => array('file' => 'logout', 'title' => 'Kilépés', 'menun' => array(0,1)),

    'signup' => array('file' => 'signup', 'title' => '', 'menun' => array(0,0)),
);

$error_page = array ('file' => '404', 'title' => 'A keresett oldal nem található!');
