<?php


public function redirect()
{
    return $this->redirect($this->generateUrl('get_server', [
        'port' => '8080'
    ]));
}

