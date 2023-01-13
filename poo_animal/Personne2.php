<?php 

class Personne {
// attributs

private string $nom ;
private string $prenom ;
private Adresse $adresse ; // cet attribut sera une référence à l'objet adresse
                    // INJECTION DE DEPENDANCE -> on injecte l'objet adresse.    
public function __construct(string $nom,string $prenom, Adresse $adresse )
{
       $this->nom = $nom ;
       $this->prenom = $prenom ;
       $this->adresse = $adresse ;
}

public function affiche(){ ?>
    <h1><?= $this->nom ?> <?= $this->prenom ?></h1>
    <?= $this->adresse->afficheAdresse() ?>
<?php }
} ?>
