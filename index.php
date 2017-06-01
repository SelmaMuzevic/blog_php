<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon Blog</title>
</head>
    <body>
   
            <h1>Mon Blog</h1>

<?php

$dossier = scandir("posts");
foreach($dossier as $contenu) {
    if (!is_dir($contenu)) {

        echo '<h2>'.basename($contenu, ".txt").'</h2>'."\n";
        $content = file_get_contents('posts/'.$contenu);
        echo '<p>'.$content.'</p>'."\n";

        echo '<form action="delete.php" method="GET">
        <input type="hidden" name="filename" value = "' . $contenu . '">
        <input type="submit" value="Delete">
    </form>'."\n";

    }
    
}

?>

    </body>

</html>




