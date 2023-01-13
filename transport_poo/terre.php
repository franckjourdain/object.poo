<?php
require_once 'Vehicule_transport.php';

class Terre extends Vehicule_transport  {



    public function makeNoise()
    {
        echo "tut pouet gros pouet <br>";
    }

    public function inconvenient()
    {
        echo "il faut une voie de circulation<br>"; 
    }

}