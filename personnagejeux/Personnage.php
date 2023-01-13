<?php

abstract class Personnage {

    private $nom;

    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
        $this->nom = $nom;
    }

    abstract public function Combattre(); //classe déclaré et non definie
                                            // toute classe qui heritera de personnage
                                            // devra definir cette fonction
    
}

class Nain extends Personnage {
    public function Combattre() {
        echo "moi le nain je tape avec une masse<br>";
    }
}
    class Guerrier extends Personnage {
    public function Combattre() {
        echo "moi le guerier je tranche avec une hache<br>";
}
    }

    class Archer extends Personnage {
        public function Combattre() {
                    echo "moi l'archer je cible avec mes fleches<br>";
         }
      }



            

?>