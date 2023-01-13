<?php

class Employe extends Personnage {
    private $emploi;
    private $salaire;

    public function setEmploi($emp)  {
        $this->emploi = $emp;
        return $this;
    }
    public function setSalaire($montant)  {
        $this->salaire = $montant;
        return $this;

    }
    public function getEmploi($emp)  {
       return $this->emploi;
    }
    public function getSalaire($montant)  {
       
        return $this->salaire;

    }
    
}

?>