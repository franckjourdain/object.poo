<?php

function charge($classe) {
    require $classe.".php";
}

spl_autoload_register("charge"); 


// require_once ('Amarable.php');
// require_once ('Port.php');
// require_once "Bateau.php";
// require_once ("Sousmarin.php");
// require_once ('Voilier.php');

$port= new Port("brest");

$voilier1 = new Voilier(30);



$sm1 = new Sousmarin(80);


$port->acceuilEngin($voilier1);
$port->acceuilEngin($sm1);

?>