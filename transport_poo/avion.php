<?php


require_once 'air.php';

class Avion extends Air  {

    public function makeNoise()
    {
        echo "nothing <br>";
    }

    public function inconvenient()
    {
        echo "air france est actuellement en grève XD <br>"; 
    }

}
?>