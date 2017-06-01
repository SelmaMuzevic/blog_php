<?php

$contenu = $_GET["filename"];
    if(isset($_GET["filename"])){

    unlink("posts/". $contenu);
}

?>