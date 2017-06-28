<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modification de Fichier</title>
</head>
<body>

    <?php

if(isset($_POST['fichier']) 
	&& isset($_POST['contenu'])) {


$fileName = $_POST['fichier'];
$content = $_POST['contenu'];

if(is_file("posts/".$fileName)){

    $file = fopen("posts/".$fileName, "w");
            fwrite($file, $content);
	        fclose($file);

echo 'Vous avez modifie le fichier';
        }
    }

if(isset($_GET['fichier'])){
    $contenu = $_GET['fichier'];

if(is_file("posts/".$contenu)){

            echo '<h2>'.basename($contenu, ".txt").'<h2>';
    $content = file_get_contents('posts/'.$contenu);

            echo '<form method="post" action="">';
	        
	        echo '<input type="hidden" name="fichier" '
	        .'value="'.$contenu.'">';
	        echo '<textarea name="contenu">'
	                .$content.'</textarea>';
	        echo '<button>Modifier</button>';
	        echo '</form>';
	    }
	    
	}

?>

<a href="index.php">Retour</a>
	
    </body>

</html>



