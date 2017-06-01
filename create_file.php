<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="create_file.php" method="POST">
        <label>Titre :</label>
        <input type="text" name="titre">
        <label>Contenu :</label>
        <textarea name="contenu" rows="25" cols="25"></textarea>
        <button name="create">Envoyer</button>
    </form>

<?php

    if(isset($_POST["create"])){
        $titre = $_POST ["titre"];
        $contenu = $_POST ["contenu"];

    if(!is_dir("posts")){
        mkdir("posts");
}

        $fichier = fopen ("posts/" .$titre . ".txt", "w");
        fwrite($fichier, $contenu);
        fclose($fichier);

    echo "<p>Bravo tu as ecrit un fichier</p>";


} else {
    echo "<p> formulaire non envoye </p>";
}

?>
    
  </body>
    
</html>