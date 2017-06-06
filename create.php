<?php
$filename="";
$document="";
    if (isset($_GET["filename"])){
$filename = $_GET["filename"];
$document = file_get_contents("posts" . "/" .$filename);
}
?><!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="create.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Nouvelle Entree</h1>
    
        <form action="create_file.php" method="POST">
            <p><label>Titre :</label></p>
            <input type="text" name="titre" value="<?php echo $filename;?>"/>
           <p><label>Contenu :</label></p>

            <p><textarea name="contenu" rows="20" cols="80"><?php echo $document;?></textarea></p>
            <p><button name="create">Envoyer</button></p>

        </form>
   
</body>

</html>