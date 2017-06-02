<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="create_file.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
        <h1>Nouvelle Entree</h1>
    <div class="form">

        <form action="create_file.php" method="POST">
            <p><label>Titre :</label></p>
            <p><input type="text" name="titre"></p>
            <label>Contenu :</label>

            <p><textarea name="contenu" rows="20" cols="80"></textarea></p>
            <p><button name="create">Envoyer</button></p>
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