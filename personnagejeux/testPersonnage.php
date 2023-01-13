<?php

require_once ('Personnage.php');

$personnages= [new Nain("jean") , new Guerrier("paul") , new Archer("jack")];

// print_r($personnages);

foreach ( $personnages as $p) {
    $p->Combattre($personnages);
}


?>