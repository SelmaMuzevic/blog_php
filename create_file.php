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
    header("location: index.php");


} else {
    echo "<p> formulaire non envoye </p>";
}

?>