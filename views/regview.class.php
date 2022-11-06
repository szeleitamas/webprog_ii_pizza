<?php

class RegView extends RegModel
{
    public function m() {
        include ("../templates/pages/regisztracio.tpl.php");
    }

    public function regUserRendben()
    {
        echo "A regisztráció sikeres!";
    }

    public function regUserHiba()
    {
        echo "A regisztráció nem sikerült!";
    }

    public function checkUserHiba()
    {
        echo "Van már ilyen nevű felhasználó!";
    }
}