<?php
require('page.inc.php');

$page_accueil = new Page();

$page_accueil->contenu = "<p>Bienvenue sur le site de TLA Consulting. Prenez le temps de nous connaître.</p>
<p>Nous sommes spécialisés dans l'aide aux décisions et nous espérons que vous ferez bientôt appel à nous.</p>";

$page_accueil->Afficher();