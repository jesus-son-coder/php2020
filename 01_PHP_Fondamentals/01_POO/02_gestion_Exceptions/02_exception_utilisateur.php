<?php

class MonException extends Exception 
{
    function __toString()
    {
        return "<table border=\"1\">
                    <tr>
                        <td><strong>Exception " . $this->getCode()
                        . "</strong> : " . $this->getMessage() . "<br/>" . " dans "
                        . $this->getFile() . " en ligne " . $this->getLine()
                        . "</td>
                    </tr>
                </table><br/>";
    }
}

try {
    throw new MonException("Une erreur terrible s'est produite", 42);
}
catch (MonException $m) {
    echo $m;
}