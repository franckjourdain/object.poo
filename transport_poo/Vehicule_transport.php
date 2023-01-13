<?php 

class Vehicule_transport {
 private string $picture ;
 private string $carburant;



 public function __construct($pic,$c)
 {
    $this->picture = $pic ;
    $this->carburant = $c ;
    

 }


 public function makeNoise(){
    echo "le vehicule fait du bruit<br>";
}

public function inconvenient() {
   echo "il faut l'acheter<br>";
}

public function affiche() {
   ?>
   <h1><?= $this->picture ?> <?= $this->carburant ?> </h1>
   <?php
}
}

?>