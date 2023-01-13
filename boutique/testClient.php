<?php
session_start();
function chargeClasse($nomClasse) {
    require_once $nomClasse. ".php";
}
spl_autoload_register("ChargeClasse");



//$client1 = new Client("em.hari@hotmail.com","haritchabalet","emilie","123");
// $client1->Affiche1("client", 2);
// $client1->inscription();

// $produit1 =new Produit();
// $produit2 = new Produit();
//  $client2 = new Client("jean@michel.fr","michel","jean","456");
// $panier = new Panier();
// $prod = $produit1->Affiche1Produit("produit",1);
// echo "<pre>";
// var_dump($prod);
// echo "</pre>";
// echo "<hr>";


// $prods = $produit2->AfficheTousProduit("produit");

// echo "<pre>";
// var_dump($prods);
// echo "</pre>";
// echo "<hr>";

// $cli = $client2->AfficheTousClient("client");
// echo "<pre>";
// var_dump($cli);
// echo "</pre>";
// echo "<hr>";

//  $cli = $client2->Connexion("jean@michel.fr","123");
 
// echo "<pre>";
// var_dump($cli);
// echo "</pre>";
// echo "<hr>";

// $cli = $client2->Inscription();
// echo "il est inscrit";

// $panier1 =$panier->AffichePanier(2);
// print_r($panier1);

$client1= new Client();

if(!isset($_POST['action'])) {
$client1->AfficheForm();
}
    
if((isset($_POST['action']))  &&($_POST['action'] === "Inscription"))  {

        $client1->Inscription($_POST['email'],$_POST['nom'],$_POST['prenom'],$_POST['password']);
    
    }
?>
