<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcours de répertoires</title>
    <link rel="stylesheet" href="../../../00_Librairies/01_01_Bootstrap_3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Parcours</h1>

<?php
/**
 * Ce script permet de parcourir des répertoires pour explorer le contenu qui a été déposé.
 * Avec PHP, la navigation des répertoires est très simple à mettre en oeuvre.
 */

define ('SITE_ROOT', realpath(dirname(__FILE__)));

 $rep_courant = SITE_ROOT . '/depots/';
 $rep = opendir($rep_courant);

 echo "<p>Le répertoire des dépôts est : $rep_courant</p>";
 echo "<p>Contenu du répertoire : </p><ul>";
 while (false !== ($fichier = readdir($rep))) {
     // Supprime les deux entrées . et ..
     if ($fichier != "." && $fichier != "..") {
         echo "<li>$fichier</li>";
     }
 }
 echo "</ul>";
 closedir($rep);

 /**
  * Dans l'exemple ci-dessus, la liste des fichiers affichée n'est pas triée.
  *  Si vous souhaitez trier cette liste avant de l'afficher, il faut utiliser la fonction "scandir()" de PHP, que nous verrons par la suite.
  */
 ?>
</div>
</body>
</html>
