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
    <h1>Parcours avec Scandir</h1>

<?php

 define ('SITE_ROOT', realpath(dirname(__FILE__)));
 $rep_courant = SITE_ROOT . '/depots/';

 $fichiers1 = scandir($rep);
 $fichiers2 = scandir($rep, 1);

 echo "<p>Le répertoire des dépôts est : $rep</p>";
 echo "<p>Contenu du répertoire par ordre alphabétique croissant&nbsp;:</p><ul>";

 foreach ($fichiers1 as $fichier) {
     if($fichier != "." && $fichier != "..") {
         echo "<li>$fichier</li>";
     }
 }

 echo "</ul>";

 echo "<p>Le répertoire des dépôts est : $rep</p>";
 echo "<p>Contenu du répertoire par ordre alphabétique décroissant&nbsp;:</p><ul>";

 foreach ($fichiers12 as $fichier) {
     if($fichier != "." && $fichier != "..") {
         echo "<li>$fichier</li>";
     }
 }

 echo "</ul>";

?>
</div>
</body>
</html>