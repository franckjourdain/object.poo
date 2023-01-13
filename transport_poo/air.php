<?php
require_once 'Vehicule_transport.php';

class Air extends Vehicule_transport  {

    public function makeNoise()
    {
        echo "boum , zzzzzzzzzzzzzzzzziiiii pouf <br>";
    }

    public function inconvenient()
    {
        echo "j'ai pas le permis aerien<br>"; 
    }

}