<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dépôt...</title>
    <link rel="stylesheet" href="../../../00_Librairies/01_01_Bootstrap_3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Dépôt de fichier...</h1>
   

<?php
/*
    Script PHP récupérant les fichiers déposés via le formulaire HTML
*/

if ($_FILES['fichier']['error'] > 0) {
    echo 'Problème : ';
    switch ($_FILES['fichier']['error']) {
        // case 0 => "UPLOAD_ERROR_OK", valeur 0, signifie qu'aucune erreur ne s'est produite.
        
        case 1: echo 'Le fichier dépasse upload_max_filesize'; break; // 'UPLOAD_ERR_INI_SIZE'
        
        case 2: echo 'Le fichier dépasse max_file_size'; break; // 'UPLOAD_ERR_FORM_SIZE'
        
        case 3: echo 'Dépôt incomplet'; break; // 'UPLOAD_ERR_FORM_SIZE'
        
        case 4: echo "Le dépôt n'a pas été effectué"; break; // 'UPLOAD_ERR_NO_FILE'
        
        case 6: echo "Dépôt impossible : vous n'avez pas indiqué de répertoire temporaire"; break; // 'UPLOAD_ERR_NO_TMP_DIR'
        
        case 7: echo "Echec du dépôt : impossible d'écrire sur le disque."; break; // 'UPLOAD_ERR_CANT_WRITE'
    }
    exit;
}

// Le fichier possède-t-il le bon MIME ?
if ($_FILES['fichier']['type'] != 'text/plain') {
    echo "Problème : le fichier n'est du text brut";
    exit;
}

define ('SITE_ROOT', realpath(dirname(__FILE__)));

// $dir = getcwd();

// Placement du fichier à l'emplacement désiré :
$fichier = SITE_ROOT . '/depots/' . $_FILES['fichier']['name'];

/*
    "is_uploaded_file()" : 
        The filename being checked.
        Tells whether the file was uploaded via HTTP POST.

    "move_uploaded_file()" :
        Moves an uploaded file to a new location.
*/
if (is_uploaded_file($_FILES['fichier']['tmp_name'])) { 
    if (! move_uploaded_file($_FILES['fichier']['tmp_name'], $fichier)) {
        echo "Problème : Impossible de déplacer le fichier dans son 
                répertoire de destination";
        exit;
    }
}
else {
    echo "Problème : Attaque possible par le fichier ";
    echo $_FILES['fichier']['name'];
    exit;
}

echo "Le fichier a été déposé correctement.<br/><br/>";

// Suppression des éventuelles balises HTML et PHP du contenu du fichier :
/*
    "file_get_contents()" :
        Reads entire file into a string.

    "file_put_contents()" :
        Write a string to a file.        

    "strip_tags()" :
        Strip HTML and PHP tags from a string.
*/
$fp = fopen($fichier, 'r+');
$contenu = file_get_contents($fichier);
$contenu = strip_tags($contenu);
file_put_contents($fichier, $contenu);
fclose($fp);

// Affiche ce qui a été transféré :
echo 'Prévisualisation du contenu du fichier déposé : <br/><hr/>';
echo $contenu;
echo '<br /><hr/>';

?>
 </div>

</body>
</html>
