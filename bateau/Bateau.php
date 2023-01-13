<?php

class Bateau  {
    protected $masse ;

    public function __construct($m) {
        $this->masse = $m;
    }

    public function Affiche() {

        echo "<h2> je suis une instance de " .__CLASS__. "</h2>";
    }

    public function getMasse() {
        print $this->masse;
       return $this->masse;
       
    }
}
    

?>