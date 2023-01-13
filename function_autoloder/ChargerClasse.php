<?php

function ChargerClasse($classe) {
    require_once $nomClasse . '.php';    //on inclut la classe corespondante au parametre passé

}

ChargerClasse('Personnage');

$perso =new Personnage("polo","jean",66);  // instanciation de la classe Personnage

$perso->parler('youpi');

?>