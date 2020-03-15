<?php

class ExceptionOuvertureFichier extends Exception
{
    public function __toString() {
        return  " ExceptionOuvertureFichier " . $this->getCode()
                . ": " . $this->getMessage() . "<br/>" . " dans "
                . $this->getFile() . " en ligne " . $this->getLine()
                . "<br/>";
    }
}

class ExceptionEcritureFichier extends Exception 
{
    public function __toString() {
        return  " ExceptionEcritureFichier " . $this->getCode()
        . ": " . $this->getMessage() . "<br/>" . " dans "
        . $this->getFile() . " en ligne " . $this->getLine()
        . "<br/>";
    }
}

class ExceptionVerrouillageFichier extends Exception
{
    public function __toString() {
        return  " ExceptionVerrouillageFichier " . $this->getCode()
        . ": " . $this->getMessage() . "<br/>" . " dans "
        . $this->getFile() . " en ligne " . $this->getLine()
        . "<br/>";
    }
}