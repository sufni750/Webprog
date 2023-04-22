<?php

$MAPPA = './galeria/';
$TIPUSOK = array ('.jpg', '.png', '.webp');
$MEDIATIPUSOK = array('image/jpeg', 'image/png', 'image/webp');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 2048*2048;

$ablakcim = array(
    'cim' => 'FilaMentor',
);

$fejlec = array(
    'kepforras' => 'FilaMentor.png',
    'kepalt' => 'logo',
	'cim' => '3D nyomtatás',
	'motto' => 'Hobbi, tudásbázis, talnulás'
);

$lablec = array(
    'copyright' => 'B4FHPS Copyright '.date("Y").'.',
    'ceg' => 'FilaMentor 3D Hobbi oldal'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
    'kalkulator' => array('fajl' => 'kalkulator', 'szoveg' => 'Kalkulátor', 'menun' => array(1,1)),
    'blog' => array('fajl' => 'blog', 'szoveg' => 'Blog', 'menun' => array(1,1)),
	/*'cikkek' => array('fajl' => 'cikkek', 'szoveg' => 'Cikkek', 'menun' => array(1,1)),*/
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
    'videok' => array('fajl' => 'videok', 'szoveg' => 'Videók', 'menun' => array(1,1)),
    'feltolt' => array('fajl' => 'feltolt', 'szoveg' => 'Képfeltöltés', 'menun' => array(0,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'Ajjaj, valamit elírtál! Vagy én... :D ');
?>