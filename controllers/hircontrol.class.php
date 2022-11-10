<?php

class HirControl extends HirModel
{
    private $ertekeles;
    private $uzenet;

    public function __construct($ertekeles, $uzenet)
    {
        $this->ertekeles = $ertekeles;
        $this->uzenet = $uzenet;
    }


    public function meghiv_hir()
    {
        $this->hirReg();

    }
}