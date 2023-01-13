<?php
require_once ("Specialite.php");
require_once ("Professeur.php");


$spec1= new Specialite("S01","go");
$spec2= new Specialite("S02","php");
$spec3= new Specialite("S03","html");


$prof1 = new Professeur ("Maboule","jacqson","maboule@jaqson.com");
$prof1->setSpecialite($spec1);
$prof1->setSpecialite($spec2);
$prof1->setSpecialite($spec3);

echo "<pre>";
print_r($prof1);
echo "</pre>";

$prof1->afficheProfesseur();





?>