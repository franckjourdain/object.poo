<?php

class DB {

   private $pdo;


    function __construct($dbname,$dbhost,$dbuser,$password) {

        $this->pdo = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=UTF8", $dbuser , $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this;
        
    }


    function getPDO() {
        return $this->pdo;
    }
}


?>