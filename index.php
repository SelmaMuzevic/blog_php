<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Mon Blog</h1>

<?php

    $dossier = "/home/selma/dev/blog_php/posts";
    
        if (is_dir($dossier)) {

  if ($file = opendir($dossier)) {
       while (($contenu = readdir($file)) !== false) {
           if( $contenu != '.' && $contenu != '..') {
           echo '<a href="'.$dossier.$contenu.'">'.$contenu.'</a>'.'</br>';
           }
       }
       closedir($file);
   }
}
?>

</body>

</html>



