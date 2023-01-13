<?php


// spl_autoload_register("ChargerClasse");

class Panier{
    private $id;


    public function AffichePanier($id) {
        $bdd= new DB("magasin2","127.0.0.1","root","");
        $recup = $bdd->getPDO();
        $sql = $recup->prepare("SELECT * FROM panier, commande, client, produit WHERE panier.id_panier =$id AND panier.id_commande= commande.id_client");  
        $sql->execute();
        $res = $sql->fetch(PDO::FETCH_ASSOC);
        return $res;

    }
}

?>