<?php

require ('house.php');



$cuisine = new Cuisine ("la couisine",0,200,350,200,2,2);
$cuisine->setGaz(1);
$cuisine->setEau(2);

$sdb = new Sdb ("sdb",350,200,150,200,0,3);
$sdb->setEau(3);

$chambre1 = new Chambre ("chambre1",0,0,300,200,2,3);
$chambre1->setNbLits(1);

$chambre2 = new Chambre ("chambre2",300,0,200,200,2,2);
$chambre2->setNbLits(1);

$house = new Maison(500,500,$cuisine,$sdb);
$house->addChambre($chambre1);
$house->addChambre($chambre2);


$house->plan2d();
// echo"<pre>";
// print_r($house);

// print_r (plan2d($house));

// echo"</pre>";


// $sdb = new Sdb (10,1,1);

// $sdb->setEau(3);



// $house = new Maison($cuisine,$sdb);
// $house->addChambre($chambre1);
// $house->addChambre($chambre2);






// echo"<pre>";
// print_r ($cuisine);

// echo"</pre>";