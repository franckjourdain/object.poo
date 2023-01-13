<?php
require_once 'Vehicule_transport.php';

class Mer extends Vehicule_transport  {

    public function makeNoise()
    {
        echo "flutch, gros pouet + flutch<br>";
    }

    public function inconvenient()
    {
        echo "il faut une voie de navigation<br>"; 
    }

}