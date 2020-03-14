<?php

class page 
{
    public $contenu;
    public $titre = 'TLA Consulting Consulting Pty Ltd';
    public $mots_cles = "TLA Consulting, Three Letter Abbreviation, les moteurs de recherche sont mes amis";

    public $buttons = array(
        'Accueil' => 'accueil.php',
        'Contacts' => 'contacts.php',
        'Services' => 'services.php',
        'Carte du site' => 'carte.php'
    );

    // Opérations  de la classe Page :
    public function __set($nom, $valeur)
    {
        $this->$nom = $valeur;
    }

    public function Afficher()
    {
        echo "<html>\n<head>\n";
        $this->AfficherTitre();
        $this->AfficherMotsCles();
        $this->AfficherStyles();
        echo "</head>\n<body>\n";
        $this->AfficherEntete();
        $this->AfficherMenu($this->buttons);
        echo $this->contenu;
        $this->AfficherPied();
        echo "</body>\n</html>\n";
    }

    public function AfficherTitre()
    {
        echo "<title>" . $this->titre . "</title>";
    }

    public function AfficherMotsCles()
    {
        echo '<meta name="keywords" content="' . $this->mots_cles . '"/>"';
    }

    public function AfficherStyles()
    { ?>
        <style>
            h1 {
                color: white; font-size: 24pt; text-align: center;
                font-family: Arial, Helvetica, sans-serif;
            }
            .menu {
                color: white; font-size: 12pt; text-align: center;
                font-family: Arial, Helvetica, sans-serif; font-weight: bold;
            }
            td {
                background: black;
            }
            p {
                color: black; font-size: 12pt; text-align: justify;
                font-family: Arial, Helvetica, sans-serif; 
            }
            p.foot {
                color: white; font-size: 9pt; text-align: center;
                font-family: Arial, Helvetica, sans-serif; font-weight: bold;
            }
            a:link, a:visited, a:active {
                color:white;
            }
        </style>
    <?php
    }

    public function AfficherEntete()
    { ?>
        <table width="100%" cellpadding="12" cellspacing="0" border="0">
            <tr bgcolor="black">
                <td align="left"><img src="./img/logo.JPG" height="190px" /></td>
                <td>
                    <h1>TLA Consulting</h1>
                </td>
                <td align="right"><img src="./img/logo2.JPG" height="190px" /></td>
            </tr>
        </table>
    <?php
    }

    public function AfficherMenu($boutons)
    {
        echo '<table width="100%" bgcolor="white" cellpadding="4" cellspacing="4">';
        echo "\n<tr>\n";

        // Calcul de la taille des boutons :
        $largeur = 100 / count($boutons);

        foreach ($boutons as $nom => $url) {
            $this->AfficherBouton($largeur, $nom, $url, !$this->EstPageCourante($url));
        }
        
        echo "</tr>\n";
        echo "</table>\n";
    }

    public function EstPageCourante($url)
    {
        // L'url communiquée n'est pas celle du Fichier courant :
        if(strpos($_SERVER['PHP_SELF'], $url) == false) {
            return false;
        } else {
            return true;
        }
    }

    public function AfficherBouton($largeur, $nom, $url, $active = true)
    {
        if ($active) {
            echo    "<td width=\"" . $largeur . "%\">
                        <a href=\"" . $url . "\">
                            <img src=\"./img/s-logo.gif\" alt=\" " . $nom . "\" border=\"0\" />
                        </a>
                        <a href=\"" . $url . "\">
                            <span class=\"menu\">" . $nom . "</span>
                        </a>
                    </td>";

        } else {
            echo    "<td width=\"" . $largeur . "%\">
                        <img src=\"./img/side-logo.gif\" />
                        <span class=\"menu\">" . $nom . "</span>
                    </td>";
        }
    }

    public function AfficherPied()
    { ?>
        <table width="100%" bgcolor="black" cellpadding="12" border="0">
            <tr>
                <td>
                    <p class="foot">&copy; TLA Consulting.</p>
                    <p class="foot">Consultez notre <a href="">page d'informations légales</a></p>
                </td>
            </tr>
        </table>
    <?php
    }

}