<?php
class Specialite {
    private $code;
    private $libelle;


    public function __construct($code,$libelle) {
        $this->code = $code;
        $this->libelle = $libelle;
    }

  public function afficheSpecialite() {
    echo $this->code." ".$this->libelle;
  }
}

?>