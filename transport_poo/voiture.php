<?php
require_once 'terre.php';

class Voiture extends Terre  {

    public function makeNoise2()
    {
        echo "tuuuuuut tuuuuut <br>";
    }

    public function inconvenient()
    {
        echo "le reservoir est trop petit<br>"; 
    }

}