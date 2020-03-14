<?php
require_once('page.inc.php');

class Math
{
    // Constantes de classes :
    // -----------------------
    const pi = 3.14159;


    // Méthode statique :
    // ------------------
    static function carre($valeur)
    {
        return $valeur * $valeur;
    }

    
}

echo "Math::pi = " . Math::pi . "\n";
echo "</br>";
echo "Carré de 8 = " . Math::carre(8) . "\n";

/*
    Conversion de classe en chaîne :
    --------------------------------
*/    
class Affichable
{
    public $testUn;
    public $testDeux;

    public function __toString()
    {
        return (var_export($this , TRUE));
    }
}

echo "<br>Afficher une classe :<br>";
$p = new Affichable();
echo $p;
echo "</br>";

/* API d'introspection : */
$classe = new ReflectionClass("Page");
echo "<pre>";
echo $classe;
echo "</pre>";
echo "<br><br>";


class A
{

}

class B extends A
{

}

// Vérification du Type de classe :
$b = new B();
if($b instanceof B) { echo "<br>ok !<br/>"; }
if($b instanceof A) { echo "ok !<br/>"; }