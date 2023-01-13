<?php
require_once 'vehicule_transport.php';
require_once 'terre.php';
require_once 'mer.php';
require_once 'air.php';
require_once 'voiture.php';
require_once 'camion.php';
require_once 'train.php';
require_once 'voilier.php';
require_once 'paquebot.php';
require_once 'avion.php';
require_once 'dirigeable.php';

$car= new Voiture("twingo.png" , "essence");
$car->affiche();
$car->makeNoise2();
$car->inconvenient();

$petrolier= new Paquebot("petrolier.jpg" , "mazout");
$petrolier->affiche();
$petrolier->makeNoise();
$petrolier->makeNoise2();
$petrolier->inconvenient2();


$dirigeable= new Dirigeable("dirigeable.jpg" , "gaz inflammable XD");
$dirigeable->affiche();
$dirigeable->makeNoise2();
$dirigeable->inconvenient2();
$dirigeable->inconvenient3();
?>