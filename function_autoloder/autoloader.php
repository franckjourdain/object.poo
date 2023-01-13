<?php

function ChargerClasse($classe)
{
    require_once $classe . '.php';   // on inclut la classe corespondante au parametre
}

spl_autoload_register('ChargerClasse'); 
// on enregistre la fonction en autoload pour qu'elle sois appelé 
//des qu'on instanciera une classe non déclarré

$perso = new Personnage ("polo","jean",66); // instanciation de la classe personnage qui n'est pas déclaré
$perso->parler('essaie');

$employe = new Employe("john","carpenter",55);

$employe->setEmploi("soudeur")->setSalaire(2000);
$employe->parler(" <br> je suis un employé et je m'apelle " .$employe->getNom());




?>