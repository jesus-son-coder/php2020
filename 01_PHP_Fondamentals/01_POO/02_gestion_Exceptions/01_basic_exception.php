<?php

try {
    throw new Exception("Une terrible erreur s'est produite", 42);
}
catch(Exception $e) {
    echo "Exception " . $e->getCode() . " : " . $e->getMessage() .
        "dans " . $e->getFile() . " en ligne " . $e->getLine() . " <br />";
}