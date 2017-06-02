<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
   <!--formulaire d'envoi de fichier(s) rajouter enctype="multipart/form-data" method="post" obligatoire-->
   <form method="post" action="traitement_upload.php" enctype="multipart/form-data">
       <input type="file" name="fichier">
        <button type="submit">Envoyer</button>   
    </form>
    
    <script src=""></script>
</body>
</html>
