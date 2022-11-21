<?php

class RegView extends RegModel
{
    public function kiir()
    {
        $regcheck = $this->RegUser();
        if (isset($regcheck) && $regcheck)
        {
            echo "A regisztráció sikeres!";
        }
        elseif (isset($regcheck) && !$regcheck)
        {
            echo "A regisztráció nem sikerült, kérem próbálja újra!";
        }
    }
}
