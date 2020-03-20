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
    <h1>Parcours avec la class Dir</h1>

<?php

 define ('SITE_ROOT', realpath(dirname(__FILE__)));
 $rep_courant = SITE_ROOT . '/depots/';

 $rep = dir($rep_courant);

 echo "<p>Le répertoire des dépôts est : $rep->handle</p>";
 echo "<p>Contenu du répertoire :</p><ul>";

 while (false !== ($fichier = $rep->read())) {
     // supprime les deux entrées . et ..
     if ($fichier != "." && $fichier != "..") {
         echo "<li>$fichier</li>";
     }
 }
 echo '</ul>';

 $rep->close();

?>
</div>
</body>
</html>