<?php 

require "Adresse2.php";
require "Personne2.php";

$adr1 = new Adresse("5bis","Armand Rousseau","29200","BREST");

$p1 = new Personne("Smith","Jhon",$adr1) ;
$p1->affiche();

?>