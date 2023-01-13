
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    
    <label for="name">Nom :</label>
    <input type="text" id="name" name="name"><br><br>


    <input type="file" name="fichier">upload<br><br>


<input type="submit" value="Envoyer">
</form> 
</body>
</html>


<?php
?>