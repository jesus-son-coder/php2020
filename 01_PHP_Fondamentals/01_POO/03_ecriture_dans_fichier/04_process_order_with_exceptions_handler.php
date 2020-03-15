<?php

require_once("03_exceptions_fichiers.php");

// Crée des noms de variables abrégées :
$qte_pneus = $_POST['qte_pneus'];
$qte_huiles = $_POST['qte_huiles'];
$qte_bougies = $_POST['qte_bougies'];
$adresse = $_POST['adresse'];

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'] . "/01_PHP_Fondamentals/01_POO/03_ecriture_dans_fichier/orders";
?>

<html>
    <head>
        <title>Le garage de Bob - R&eacute;sultats de la Commande</title>
    </head>
    <body>
        <h1>Le garage de Bob</h1>
        <h2>R&eacute;sultats de la Commande</h2>
        <?php
        $date = date('H:i, \l\e j-m-Y');
        echo '<p>Commande trait&eacute;e &agrave; ';
        echo $date;
        echo '</p>';

        echo '<p>Récapitulatif de vore commande : </p>';

        $qte_totale = 0;
        $qte_totale = $qte_pneus + $qte_huiles + $qte_bougies;
        echo 'Articles command&eacute;s : ' . $qte_totale . '<br/>';

        if($qte_totale == 0) {
            echo "Vous n'avez rien commandé !<br/>";
        }
        else {
            if ($qte_pneus > 0)
                echo $qte_pneus . ' pneus<br/>';
            if ($qte_huiles > 0)
                echo $qte_huiles . " bidons d'huiles<br/>";
            if ($qte_bougies > 0)
                echo $qte_bougies . ' bougies<br/>';
        }

        $montant_total = 0.00;

        define('PRIX_PNEUS', 100);
        define('PRIX_HUILES', 10);
        define('PRIX_BOUGIES', 4);

        $montant_total = $qte_pneus * PRIX_PNEUS
                        + $qte_huiles * PRIX_HUILES
                        + $qte_bougies * PRIX_BOUGIES;

        $montant_total = number_format($montant_total, 2, '.', ' ');

        echo '<p>Total de la commande : ' . $montant_total . '</p>';
        echo '<p>Adresse de livraison : '  . $adresse . '</p>';

        $chaine_sortie = "$date\t$qte_pneus pneus\t$qte_huiles bidons " .
                        "d'huile\t$qte_bougies\t$montant_total €\t" .
                        "$adresse\n";

        // Ouverture du fichier en mode ajout :
        try { 
            if (!($fp = @fopen($DOCUMENT_ROOT . "/orders.txt", 'ab'))) {
                throw new ExceptionOuvertureFichier();
            }
            if (!flock($fp, LOCK_EX)) {
                throw new ExceptionVerrouillageFichier();
            }
            if (!fwrite($fp, $chaine_sortie, strlen($chaine_sortie))) {
                throw new ExceptionEcritureFichier();
            }
            // Déverouillage du fichier :
            flock($fp, LOCK_UN);
            fclose($fp);
            echo '<p>Commande sauvegardée</p>';
        }
        catch(ExceptionOuvertureFichier $ex_of) {
            echo "<p><strong>Impossible d'ouvrir le fichier des commandes. 
                    Contactez le webmaster pour plus de renseignements.</strong></p>";
        }
        catch(Exception $ex) {
            echo "<p><strong>Nous ne pouvons pas traiter vore commande pour le moment. Réessayez plus tard.</strong></p>";
        }

        ?>
    </body>
</html>