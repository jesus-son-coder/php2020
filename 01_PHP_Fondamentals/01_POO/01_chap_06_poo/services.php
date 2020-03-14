<?php
require('page.inc.php');

class PageServices extends Page 
{
    private $boutonsLigne2 = array(
        "Re-engineering" => "reengineering.php",
        "Confirmité aux standards" => "standards.php",
        "Respect du Buzz" => "buzzword.php",
        "Missions" => "mission.php"
    );

    public function Afficher()
    {
        echo "<html>\n<head>\n";
        $this->AfficherTitre();
        $this->AfficherMotsCles();
        $this->AfficherStyles();
        echo "</head>\n<body>\n";
        $this->AfficherEntete();
        $this->AfficherMenu($this->buttons);
        $this->AfficherMenu($this->boutonsLigne2);
        echo $this->contenu;
        $this->AfficherPied();
        echo "</body>\n</html>\n";
    }
}

$services = new PageServices();

$services->contenu = "<p>TLA Consulting offre un grand nombre de services. La productivité de vos employés s'améliorerait sûrement si nous réorganisons votre entreprise. Votre société nécessite peut-être une redéfinition de sa mission ou d'un nouveau lot de mots à la mode.</p>";

$services->Afficher();