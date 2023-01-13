<?php

class Inscription {
    protected $nom;
    protected $prenom;
    protected $email;
    
    protected $pdo;



    public function __construct($nom, $prenom, $email) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
                                            // a voir si il ne manque pas le mdp apres root 
        $this->pdo = new PDO("mysql:host= 127.0.0.1 ;dbname= formation ;charset=UTF8, root ") ;
        // $pdo est la connection à la BDD 3 arguments pour PDO(host+dbname , user , password)
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // gestion des erreurs

    }
}



?>