<?php

require_once "Animal.php"; 

class Canin extends Animal {

    public function makeNoise()
    {
        echo "ouaf<br>";
    }
    public function inconvenient() {
        echo "mord<br>";
    }

}


?>