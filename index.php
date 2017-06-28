<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon Blog</title>
</head>
    <body>
   
<?php require_once('header.php'); ?>
	    <h1>Mon super blog !</h1>
	    <a href="create.php">Ajouter</a>
	    <?php
$dossier = scandir("posts");
foreach($dossier as $contenu) {
    if (!is_dir('posts/'.$contenu)) {
        // continue;

        echo '<h2>'.basename($contenu, ".txt").'</h2>';
	    $content = file_get_contents('posts/'.$contenu);

	    echo '<p>'.$content.'</p>';
	    echo '<form method="post" action="delete_file.php">';
	    echo '<input type="hidden" name="fichier" value="' . $contenu .'">';
	    echo '<button>Supprimer</button>';

	    echo '</form>';

	    echo '<a href="change-file.php?fichier='.$contenu.'">Modifier</a>';
	    }
    }

?>

    </body>

</html>




