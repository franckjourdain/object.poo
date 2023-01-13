<?php
// datas accesible par this
class DB {
// attrbut
private $pdo;


//methode
function __construct($dbname,$dbhost ,$dbuser ,$password ) {

  
$this->pdo = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=UTF8", $dbuser , $password) ;
// $pdo est la connection à la BDD 3 arguments pour PDO(host+dbname , user , password)
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // gestion des erreurs
}

 public function vaChercherTousLes($nomdetable) {
   $sql= $this->pdo->prepare("SELECT * FROM " .$nomdetable );
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_ASSOC);
 }
    
public function vaChercherLe($table,$id) {
    $sql= $this->pdo->prepare("SELECT * FROM " .$table. " WHERE id=" .$id );
    $sql->execute();
    return $sql->fetch(PDO::FETCH_ASSOC);
}


public function VaChercherProduit($table) {
    $sql= $this->pdo->prepare("SELECT * FROM ".$table);
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}



public function vaChercherJointure($requete) {
    $sql= $this->pdo->prepare($requete);
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}
}

?>