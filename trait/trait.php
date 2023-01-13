<?php

trait message {
    public function msg() {
        echo " la POO c'est cool <br>";
    }
}

trait message2 {
    public function msg2() {
        echo " la programation fonctionnel c'est mieux <br>";
    }
}

class Bonjour {
    use message ;

}

class Bonjour2 {
    use message, message2;

}
// $bj =new Bonjour();
// $bj->msg()

$bj2 =new Bonjour2();
$bj2->msg();
echo "mais <br>";
$bj2->msg2();



?>