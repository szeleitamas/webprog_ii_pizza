<?php

class HirLekeres extends HirModel
{
    private $ertekeles;
    private $uzenet;

    public function __construct($ertekeles, $uzenet)
    {
        $this->ertekeles = $ertekeles;
        $this->uzenet = $uzenet;
    }


    public function leker_hir()
    {
        $this->hirCheck();
    }
}