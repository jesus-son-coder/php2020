<?php

class A {
    public $attribut = 'valeur par défaut';

    public function operation() {
        echo 'Quelque chose<br>';
        echo 'La valeur de $attribut est ' . $this->attribut . '<br/>';
    }
}


class B extends A {
    public $attribut = 'valeur différente';

    public function operation() {
        echo 'Autre chose<br/>';
        echo 'La valeur de $attribut est ' . $this->attribut . '<br/>';
    }

    /* Pour appeler l'opération A::operation deouis l'intérieur de la classe B, vous utiliserez le mot-clé "parent" : */
    public function operation2() {
        parent::operation();
    }
    
}


$a = new A();
$a->operation();

$b = new B();
$b->operation2();


