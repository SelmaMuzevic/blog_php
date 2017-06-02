<?php

$contenu = $_GET["filename"];
if(isset($_GET["filename"])){
        unlink("posts/". $contenu);
        header("location: index.php");
}else{
    echo "<p> Desolee, il y a une erreur ! </p>";
}
?>