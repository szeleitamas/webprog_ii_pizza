<?php

class LogView extends LogModel
{
    public function kiir() {
        $logcheck = $this->logUser();
        if (isset($logcheck) && $logcheck)
        {
            echo "A belépés sikerült!";
        }
        elseif (isset($logcheck) && !$logcheck)
        {
            echo "A belépés nem sikerült, próbálja újra!";
        }
    }
}
