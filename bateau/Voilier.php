


<?php


require_once "Bateau.php";


class Voilier extends Bateau implements Amarable {
   
    public function nbCordes() {
        // pour rendre amarable ce bateau il faudra nbcordes
        // defini ainsi 

        return $this->masse / 10;
        
    }
public function FondNecessaire() {

      return 6;

        
    
}
}

?>
