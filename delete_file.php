<?php


if(isset($_POST["fichier"])){
        $contenu = $_POST["fichier"];
        unlink("posts/". $contenu);
        header("location: index.php");
}else{
    echo "<p> Desolee, il y a une erreur ! </p>";
}

echo '<a href="index.php">Retour</a>';
	
?>