<?php
    echo'<pre>';
    var_dump($_FILES);

    echo '</pre>';
/* a vérifier:
1/ erreur =0
le répertoire est stocké dans un fichier temporaire, si le fichier n'est pas récupéré, il disparait
*/

echo'<pre>';
    //print_r($_FILES);
    print_r($_FILES['fichier']);

    echo '</pre>';

/*
Exercice 1:
Vérifier que:
    - il n'y a pas d'erreurs lors du transfert
    - que le fichier n'est pas trop volumineux (créer une variable, par exemple $maxfilesize pour faire le test)*/

$maxfilesize=15655554;
//le nombre est sans unité car directement en octet
// 1 Ko = 1024 octets
// 1 Mo = 1048576 octets
// 1 Go = 1 073 741 824 octets
// 1 To = 1 099 511 627 776 octets
$error=$_FILES['fichier']['error'];
$taillefichier=$_FILES['fichier']['size'];



if($error===0){
   
   if($taillefichier<=$maxfilesize){ 
    echo'fichier transmis<br>';
   }else{
    echo'fichier trop gros!<br>';
   }
}else{
       echo'Une erreur s\'est produite, veuillez recommencer<br>';
   }


//pour tester l'extension du fichier 
$fileInfo = pathinfo($_FILES['fichier']['name']);
print_r($fileInfo);


/*Exercice 2:
N'accepter que des images .png , .jpg, .gif'*/


if($fileInfo['extension'] == 'jpg' OR $fileInfo['extension'] == 'png' OR $fileInfo['extension'] == 'gif' OR $fileInfo['extension'] == 'jpeg'){
    echo'bon format<br>';
}else{
    echo 'mauvais format<br>';
}


$extensions_autorisees = array('jpg', 'jpeg', 'png', 'gif');
$fileInfo = pathinfo($_FILES['fichier']['name']);
$extension = $fileInfo['extension'];

if(in_array($extension, $extensions_autorisees)){
    echo 'fichier transmis<br>';
    //transférer d"finitivement le fichier sur le serveur 
move_uploaded_file($_FILES['fichier']['tmp_name'], $_FILES['fichier']['name']);
    
    
    
}else{
    echo 'l\extension n\'est pas autorisée';
}

//transférer d"finitivement le fichier sur le serveur 
move_uploaded_file($_FILES['fichier']['tmp_name'], $_FILES['fichier']['name']);




?>