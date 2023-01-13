<?php

class Client {
    private $prenom ;
    private $nom;
    private $email;
    private $password;



    public function __construct($nom,$prenom ,$email,$password ) {
    
}




class Etudiant implements Inscription {
    private $nom;
    private $email;
    private $motdepasse;
    private $pdo;

    public function __construct($nom, $prenom, $email) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;

        $this->pdo = new PDO("mysql:host= 127.0.0.1 ;dbname= etudiants;charset=UTF8, root ") ;
        // $pdo est la connection à la BDD 3 arguments pour PDO(host+dbname , user , password)
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // gestion des erreurs

    }

    public function Creer($nom, $prenom,$email,$table) {
        $sql = $this->pdo->prepare("INSERT INTO $table (nom,prenom,email) VALUES ($nom, $prenom, $email)");
        $sql->execute();
        echo "Etudiant créé";

    }

    public function Supprimer($nom, $prenom, $email) {
        $sql = $this->pdo->prepare("DELETE FROM $table WHERE nom = $nom AND prenom = $prenom AND email = $email");
        $sql->execute();
    

    }
 
    
}

}
?>