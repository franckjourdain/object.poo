<?php

class Piece {
    private $top;
    private $left;
    private $longueur;
    private $largeur;
    private $nom;
    // private $superficie;
    private $nbfenetre;
    private $nbportes;
   


 public function __construct($nom, $top, $left, $longueur, $largeur,  $nbfenetre, $nbportes) {
    $this->nom =$nom;
    $this->top = $top;
    $this->left = $left;
    $this->longueur = $longueur;
    $this->largeur = $largeur;
    // $this->superficie = $superficie;
    $this->nbfenetre = $nbfenetre;
    $this->nbportes = $nbportes;

}
public function setTop($nb) {
    $this->top = $nb;
    return $this;
}
public function setLeft($nb) {
    $this->left =$nb;
    return $this;
}
public function setLongueur($nb) {
    $this->longueur = $nb;
    return $this;
}
public function setLargeur($nb) {
    $this->largeur = $nb;
    return $this;
}
public function setNom($nb) {
    $this->nom = $nb;
    return $this;

}

public function getTop() {
    return $this->top;
}
public function getLeft() {
    return $this->left;
}
public function getLongueur() {
    return $this->longueur;
}
public function getLargeur() {
    return $this->largeur;
}
public function getNom() {
    return $this->nom;
}

}
class Cuisine extends Piece {
private $arrivee_gaz;
private $arrivee_eau;
public function setGaz($nb) {
$this->arrivee_gaz =$nb;
}


public function setEau($nb) {
        $this->arrivee_eau = $nb ;
    }
}


class Sdb extends Piece {

    private $arrivee_eau;

    public function setEau($nb) {
            $this->arrivee_eau = $nb ;
        }
}

class Chambre extends Piece {

    private $nb_lits;

    public function setNbLits($nb) {
            $this->nb_lits = $nb;
        }
}

class Maison {
    private $longueur;
    private $largeur;
    private $cuisine;
    private $sdb;
    private $chambre = array(); // tableau qui contiendra des object chambre

    public function __construct($longueur,$largeur, $cuisine, $sdb) {
        $this->cuisine = $cuisine;
        $this->sdb = $sdb;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
        // pour chaque piece 
        // <rect x="50" y="50" width="300" height="100" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
    public function addChambre($ch) {
    $this->chambre[] = $ch;
    }


    public function setLongueur($nb) {
        $this->longueur = $nb;
        return $this;
    }
    public function setLargeur($nb) {
        $this->largeur = $nb;
        return $this;
    }


    public function getLongueur() {
        return $this->longueur;
    }
    public function getLargeur() {
        return $this->largeur;
    }
    
        public function plan2d() { ?>
    
            <svg width="<?= $this->getLargeur() ?>" height="<?= $this->getLongueur() ?>">
       <?php 
            foreach($this->chambre as $c) {
                ?>
                <rect x="<?= $c->getTop() ?>" y="<?= $c->getLeft() ?>" width="<?= $c->getLongueur() ?>" height="<?= $c->getLargeur() ?>" style="fill:blue;stroke:pink;stroke-width:2;fill-opacity:1;stroke-opacity:1" />
                <text x="<?php echo $c->getTop()+20 ;?>" y="<?php echo $c->getLeft()+20 ;?>"><?= $c->getNom();  ?></text>
   <?php   }
         ?> 

        <rect x="<?= $this->cuisine->getTop() ?>" y="<?= $this->cuisine->getLeft(); ?>" width="<?= $this->cuisine->getLongueur() ?>" height="<?= $this->cuisine->getLargeur() ?>" style="fill:red;stroke:pink;stroke-width:2;fill-opacity:1;stroke-opacity:1" />
        
        <text x="<?php echo $this->cuisine->getTop()+20 ;?>" y="<?php echo  $this->cuisine->getLeft()+20 ;?>"><?=  $this->cuisine->getNom();  ?></text>
       
        <rect x="<?= $this->sdb->getTop() ?>" y="<?= $this->sdb->getLeft() ?>" width="<?= $this->sdb->getLongueur() ?>" height="<?= $this->sdb->getLargeur() ?>" style="fill:green;stroke:pink;stroke-width:2;fill-opacity:1;stroke-opacity:1" />
        
        <text x="<?php echo $this->sdb->getTop()+20;?>" y="<?php echo $this->sdb->getLeft()+20 ;?>"><?= $this->sdb->getNom();  ?></text>
    </svg>
        
        <?php }
           
           
     }
    



// considerons que notre maison possede une cuisine une sdb et plusieurs chambres
// $cuisine = new Cuisine (15,2,2);
// $cuisine->setGaz(1);
// $cuisine->setEau(2);




// $sdb = new Sdb (10,1,1);

// $sdb->setEau(3);

// $chambre1 = new Chambre (12,1,2);
// $chambre1->setNbLits(1);

// $chambre2 = new Chambre (12,1,2);
// $chambre2->setNbLits(1);

// $house = new Maison($cuisine,$sdb);
// $house->addChambre($chambre1);
// $house->addChambre($chambre2);






// echo"<pre>";
// print_r ($house);

// echo"</pre>";