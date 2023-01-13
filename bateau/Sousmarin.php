<?php
require_once "Bateau.php";

class Sousmarin extends Bateau implements Amarable {
   


    public function nbCordes() {
        // pour rendre amarable ce bateau il faudra nbcordes
        // defini ainsi 

        return $this->masse / 5;
    }

public function FondNecessaire() {

      return 11;

        
    
}
}
?>