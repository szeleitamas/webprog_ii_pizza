<?php

class LogControl extends LogModel
{
    private $felhasznalonev;
    private $jelszo;

    public function __construct($felhasznalonev, $jelszo)
    {
        $this->felhasznalonev = $felhasznalonev;
        $this->jelszo = $jelszo;
    }

    public function meghiv_log() {
        $this->logUser();
    }


}