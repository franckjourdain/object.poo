<?php
spl_autoload_register("ChargeClasse");


class Produit {
    // private $nom_produit;
    // private $description;
    // private $photo;
    // private $prix;
    // private $tva;


    // function __construct($nom_produit,$description ,$photo ,$photo ,$prix, $tva ) {
    //     $this->nom_produit = $nom_produit;
    //     $this->description = $description;
    //     $this->photo = $photo;
    //     $this->prix = $prix;
    //     $this->tva = $tva;
    // }

   public function AfficheTousProduit($tableprod) {
        $bdd =  new DB("magasin2","127.0.0.1","root","");
        $caca = $bdd->getPDO();
        $sql = $caca->prepare("SELECT * FROM $tableprod ");
        $sql->execute();
        $test3= $sql->fetchAll(PDO::FETCH_ASSOC);
        return  $test3;
        

   }


    public function Affiche1Produit($table,$id) {
        $bdd =  new DB("magasin2","127.0.0.1","root","");
        $caca = $bdd->getPDO();
        $sql = $caca->prepare("SELECT * FROM $table WHERE id = ".$id);
        $sql->execute();
        $test2= $sql->fetch(PDO::FETCH_ASSOC);

        return $test2;
        // echo $test2['nom_produit'];
        // echo "<br>";
        // echo $test2['description'];
        // echo "<br>";
        // echo $test2['photo'];
        // echo "<br>";
        // echo $test2['prix'];
        // echo "<br>";
        // echo $test2['tva'];
        // echo "<br>";
    }
}
          



?>