<?php

class RegController extends RegModel
{
    private $vezeteknev;
    private $utonev;
    private $felhasznalonev;
    private $jelszo;

    public function __construct($vezeteknev, $utonev, $felhasznalonev, $jelszo)
    {
        $this->vezeteknev = $vezeteknev;
        $this->utonev = $utonev;
        $this->felhasznalonev = $felhasznalonev;
        $this->jelszo = $jelszo;
    }

    public function meghiv_reg() {
        $this->regUser();
        /*
        $nezet = new RegView();
        $usercheck = $this->checkUser();
        if (isset($usercheck) && $usercheck) {
            $userreg = $this->regUser();
            if (isset($userreg) && $userreg) {
                $nezet->regUserRendben();
            } elseif (isset($userreg) && !$userreg) {
                $nezet->regUserHiba();
            }
        } elseif (isset($usercheck) && !$usercheck) {
            $nezet->checkUserHiba();
        }
        */
    }
}