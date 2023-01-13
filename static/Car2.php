<?php
require "Car.php";

Abstract class Car2 {
    private $model;
    private $color;
    abstract public function Gaz();

    abstract public function Brake();

    public function Hello() {
        echo "bonjour <br>";
    }

}

class Berline extends Car2 {
    public function Gaz() {
        echo "fioul<br>";
}

    public function Brake() {
        echo "stop <br>";

}

}
$berline = new Berline();
$berline->gaz();
$berline->brake();

?>