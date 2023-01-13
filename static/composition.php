<?php

class Head {
    // atributs
    private $yeux;
    private $couleur;
    private $bouche;
    private $nez;

    // methodes

    public function __construct($y,$c,$b,$n) {
        $this->yeux = $y;
        $this->couleur = $c;
        $this->bouche = $b;
        $this->nez = $n;
    }
}


    class Tronc {
        private $tlongueur;

        public function __construct($tlongueur) {
            $this->tlongueur = $tlongueur;
        }
    }


    class Jambes {
        private $longueur1;
        private $largeur;

        public function __construct($jlongueur,$jlargeur ) {
                  $this->jlongueur = $jlongueur;
                 $this->jlargeur = $jlargeur;
        }
                }
            
    


    class Humain {
        private $head;
        private $tronc;
        private $jambes ;

        public function __construct(Head $head, Tronc $tronc, Jambes $jambes) {

            $this->head = $head;
            $this->tronc = $tronc;
            $this->jambes = $jambes;
        }
    }

    $tete = new Head(2,"vert","cousue","crochu");
    $tronc= new Tronc(90);
    $jambes = new jambes(120,30);

    $bob = new Humain($tete,$tronc,$jambes);

    var_dump($bob);

    
       
        







?>