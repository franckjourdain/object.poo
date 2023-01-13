<?php

class Port {
    public $port;

    public function __construct($p) {
        $this->port = $p;
        echo "ici c'est le port de ". $p. "<br>";

    }
    public function getPort() {
        return $this->port;

}

public function acceuilEngin(Amarable $a) {
    if ($a->FondNecessaire() > 10) {

        echo "je n'ai pas assez de fond pour ammarer";
    } else{
    echo ":<h3>".__CLASS__.  "  :  ok , il faut que j'emmene " .$a->nbCordes() . "  cordes </h3>";
    }
}
}
?>