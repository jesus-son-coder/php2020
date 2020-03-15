<?php

class Exception 
{
    /* Propriétés */
    protected  $message = "Unknown exception" ; // Message de l'exception
    protected  $code = 0 ; // code d'exception défini par l'utilisateur
    protected  $file ; // chemin complet du fichier source de l'exception
    protected  $line  ; // ligne source de l'exception
    
    private $trace ; // trace d'exécution de l'exception
    private $string ; // usage interne uniquement !!


    /* Méthodes */
    public function __construct (string $message = NULL , int $code = 0 )
    {
        if (func_num_args()) {
            $this->message = $message;
        }
        $this->code = $code;
        $this->file = __FILE__ ;
        $this->line = __LINE__ ;
        $this->trace = debug_backtrace();
        $this->string = self::StringFormat($this);
    }
    // Renvoie le message tel qu'il a été passé au constructeur :
    final function getMessage ( ) {
        return $this->message;
    }

    // Renvoie le code tel qu'il a été passé au constructeur :
    final function getCode ( ) {
        return $this->code;    
    }

    // Renvoie le chemin d'accès complet au fichier dans lequel l'exception a été levée :
    final function getFile ( ) {
        return $this->file;
    }

    // Renvoie le numéro de ligne du fichier dans lequel l'exception a été levée :
    final function getLine ( ) {
        return $this->line;
    }

    // Renvoie un tableau contenant un trace d'exécution de l'endroit où l'exception a été levée. 
    // Une "trace d'exécution" indique quelles fonctions s'exécutaient au moment où l'exception a été levée :
    final function getTrace ( ) {
        return $this->trace;
    }

    // Renvoie les mêmes informations que "getTrace", formatées sous forme de chaîne :
    final function getTraceAsString ( ) {
        return self::TraceFormat($this);
    }
    
    // Permet d'effectuer un simple echo d'un objet Exception, en fournissant toutes les informations des méthodes précédentes :
    public function __toString ( ) {
        return $this->string;
    }

    static private function StringFormat(Exception $exception) {
        // ... fonction non disponible dans les scripts PHP
        // qui renvoie toutes les infos pertinentes sous forme de chaîne
    }

    static private function TraceFormat(Exception $exception) {
        // ... fonction non disponible dans les scripts PHP
        // qui renvoie la trace d'exécution sous forme de chaîne
    }
}