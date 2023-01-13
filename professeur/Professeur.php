<?php

class Professeur {

    private $nom ;
    private $prenom;
    private $email;
    private $specialites = array();   // propriété AS-MANY (le professeur A-UNE spécialité) COMPOSITION.


    public function __construct($nom, $prenom , $email) {
        $this->nom =$nom;
        $this->prenom =$prenom;
        $this->email =$email;
    }

    public function afficheProfesseur() {
        echo "<p> $this->nom $this->prenom </p>";
        echo "<p><a href=mailto:".$this->email.">".$this->email."</a></p>";
        $this->afficheSpecialite();
    }    

    public function setSpecialite(Specialite $spe) {
        $this->specialites[] = $spe ;

    }

    public function afficheSpecialite() {
        echo"spécialitées:<br/>";
        echo"<ul>";
        foreach ($this->specialites as $specialite ) {
            echo"<li>".$specialite->afficheSpecialite()."</li>";

    }
        echo"</ul>";
    }

}