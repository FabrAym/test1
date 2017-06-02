<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    

<?php
 try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=jointure;charset=utf8', 'root', '');  
    }
    catch(Exception $e){
        die('Erreur :'.$e -> getMessage());
    }
    

    $reponse=$bdd->prepare('SELECT*FROM images');
    $reponse->execute();
    while($donnees = $reponse->fetch()){
        ?>
        <div>
          <img src="uploads/<?php echo $donnees['nom']; ?>">
           <img src="uploads/thumbnails/<?php echo $donnees['nom']; ?>">
          <?php echo $donnees['nom']; ?>  
        </div>
       <?php 
        
        
    }


  $reponse->closeCursor();  
    
    
?>

</body>
</html>
