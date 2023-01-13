<?php



class Car {
    private $model;
    private $color;
    static $data = 'Essai';
    static $count = 0 ;

    public function __construct() {
        self::$count++ ;
    }

    public static function hello() {
        echo "hello world <br>";
    }
    public function affiche() {
                echo self::$data."<br>";
    }


}

Car::hello() ;


echo "acces sans instancier <hr>";
echo Car::$count;
echo "\n";

echo "instanciation de la classe avec une reference x <br>";

$x = new Car();
echo $x::$count."<br>";

echo "instanciation de la classe avec une reference y <br>";
$y = new Car();
echo $x::$count."<br>";
?>