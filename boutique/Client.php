<?php
 spl_autoload_register("ChargeClasse");



    class Client  {
    
        private $prenom ;
        private $nom;
        private $email;
        private $password;

public function __construct()
{

}
    
        public function AfficheForm() {
                ?>
                   <h1>formulaire d'inscription</h1>
    <form action="testClient.php" method="POST">
        <input type="email" name="email" placeholder="adresse email" require>
        <input type="text" name ="nom" placeholder="votre nom" require>
        <input type="text" name="prenom" placeholder="votre prenom" require>
        <input type="password" name="password" placeholder=" mot de passe" require>
        <input type="hidden" name="action" value="Inscription">
       
      
       <button type="submit">valider</button>
    </form>
    <?php 
    }

        
        public function Inscription($email,$nom,$prenom, $password){

            $bdd = new DB("magasin2","127.0.0.1","root","");
    
            $pdo= $bdd->getPDO();
            
    
            try{
    
                $sql = $pdo->prepare(" SELECT * FROM client WHERE email= ? ");
                 $sql->execute([$email]);
              
                $cpt = $sql->rowCount();
                
                if($cpt==0){
                    $hp = password_hash($password,PASSWORD_DEFAULT);
    
                    $sql=$pdo->prepare(" INSERT INTO client (email,nom,prenom,password) VALUES(?,?,?,?) ");
                    $sql->execute([$email,$nom,$prenom,$hp]);
                
                    $sql2=$pdo->prepare(" SELECT * FROM client WHERE email= ? " );
                    $sql2->execute([$email]);
                    
                    $client=$sql2->fetch();
                    
                    $_SESSION["nom"] = $client['nom'];
                    $_SESSION["prenom"] = $client['prenom'];
                    $_SESSION['id']=$client['id'];
                }
            }
             // un commentaire pour le test de github
            catch (Exception $e) {
                echo $e->getMessage();
            }
        
        }     


    public function Connexion($email,$password) {
            // session_start();
        $bdd =  new DB("magasin2","127.0.0.1","root","");
        $caca = $bdd->getPDO();
        $sql = $caca->prepare("SELECT * FROM client WHERE email =?");
        $sql->execute([$email]);

            if($sql->rowCount() == 1) {

        $info = $sql->fetch(PDO::FETCH_ASSOC);
         
        

           

            if (password_verify($password,$info['password'])) {

            $_SESSION['nom'] = $info['nom'];
            $_SESSION['prenom'] = $info['prenom'];
            $_SESSION['email'] = $email;
            $_SESSION['id'] =$info['id'];

            return $info;
            
            }else {
                echo" vos identifiant pu la merde , ou c'est surement le gars qui a codé sa";
            }
            
      }
    } 

    public function Deconnexion () {
        session_destroy();
    }


    public function AfficheTousClient($tablecli) {
        $bdd =  new DB("magasin2","127.0.0.1","root","");
        $caca = $bdd->getPDO();
        $sql = $caca->prepare("SELECT * FROM $tablecli ");
        $sql->execute();
        $test3= $sql->fetchAll(PDO::FETCH_ASSOC);
        return  $test3;
        

   }

    public function Affiche1($table,$id) {
        $bdd =  new DB("magasin2","127.0.0.1","root","");
        $caca = $bdd->getPDO();
        $sql = $caca->prepare("SELECT * FROM $table WHERE id = ".$id);
        $sql->execute();
        $test= $sql->fetch();
        // echo $test['email'];
        // echo $test['nom'];
        // echo $test['prenom'];
        // echo $test['password'];
        }
    }


?>