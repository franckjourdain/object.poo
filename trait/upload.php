<?php


//test form -file
echo "<pre>";
print_r($_FILES);

$ext =pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);

$extPermises = ['png','jpeg','gif','jpg'];

$poid =[$_FILES['fichier']['size'];PATHINFO_EXTENSION];




$dossier ="uploads/";
$fichier = $_FILES['fichier']['name'];
if(in_array(strtolower($ext),$extPermises)){

if ((move_uploaded_file($_FILES['fichier']['tmp_name'], $dossier.$fichier)) && ($poid < 1000000) ){
    echo "upload effectuer avec succes"; // televersement
}
  else {
   echo "erreur de upload";
}
} else { 
    echo "seul un fichier image est autorisé";
}
?>