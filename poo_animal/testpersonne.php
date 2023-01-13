<?php

require "car.php";
require_once 'personne.php';

$adr1 = new Adresse ("5" , "la garenne","29430", "plounevez-locrhist");
$car1 =new car("renault", "black",  "essence");

$p1 = new Personne("smith","john",$adr1, $car1 );
$p1->affiche();


?>