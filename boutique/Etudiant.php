<?php
require_once "Inscription.php";


class Etudiant extends Inscription {


    public function __construct($nom, $prenom, $email) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
                                            // a voir si il ne manque pas le mdp apres root 
        $this->pdo = new PDO("mysql:host= 127.0.0.1 ;dbname= formation;charset=UTF8, root ") ;
        // $pdo est la connection à la BDD 3 arguments pour PDO(host+dbname , user , password)
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // gestion des erreurs

    }

    public function Creer($nom, $prenom,$email) {
        $sql = $this->pdo->prepare("INSERT INTO student (lastname,firstname,email) VALUES (?,?,?)");
        $sql->execute([$nom,$prenom,$email]);

        echo "Etudiant créé";

    }

    public function Supprimer($nom, $prenom, $email) {
        $sql = $this->pdo->prepare("DELETE FROM student WHERE lastname = $nom AND firstname = $prenom AND email = $email");
        $sql->execute();
    
     }
    
    public function Modifier($id) {
        $sql = $this->pdo->prepare("UPDATE student SET student.lastname = $nom, student.firstname= $prenom , student.email = $email WHERE id = $id");
        $sql->execute();

    }
    public function Afficher($table) {
        $sql = $this->pdo->prepare("SELECT * FROM $table");
        $sql->execute();

    }

    public function AfficherUn($table,$id) {
        $sql = $this->pdo->prepare("SELECT * FROM $table WHERE id = $id");
    $sql->execute();
    $affiche= $sql->fetchAll(PDO::FETCH_ASSOC);


    }
    }



?>