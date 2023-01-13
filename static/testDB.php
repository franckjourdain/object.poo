<?php


require ('DB.php');

$testdb = new DB("magasin2","127.0.0.1","root","");

$lesUsers = $testdb->vaChercherTousLes("client");

$Panier = $testdb->VaChercherProduit("produit");

$req = "SELECT produit.* FROM produit, commande WHERE produit.id =commande.id_produit , commande =1";

$commande = $testdb->vaChercherJointure($req);

echo "<pre>";
var_dump($commande);
echo "</pre>";


// echo "<pre>";
// var_dump($lesUsers);
// echo "</pre>";

// $leUser = $testdb->vaChercherLe("client",4);

// echo "<pre>";
// var_dump($leUser);
// echo "</pre>";



// echo "<pre>";
// var_dump($Panier);
// echo "</pre>";

?>