<?php

class SignupContr {

    private $firstname;
    private $lastname;
    private $loginname;
    private $email;
    private $password;

    /**
     * @param $firstname
     * @param $lastname
     * @param $loginname
     * @param $email
     * @param $password
     */
    public function __construct($firstname, $lastname, $loginname, $email, $password) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->loginname = $loginname;
        $this->email = $email;
        $this->password = $password;
    }

    private function regUser() {
        if ($this->emptyInput() == false) {
            exit();
        }
        if ($this->invalidLoginName() == false)
    }


    //üres beviteli mező vizsgálata
    private function emptyInput() {
        $result;
        if(empty($this->firstname) || empty($this->lastname) || empty($this->loginname) ||
            empty($this->email) || empty($this->password)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
    //nem megfelelő érték vizsgálata
    private function invalidLoginName() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->loginname)) {
            $result = false;
        }
        else {
            $result =true;
        }
        return $result;
    }

    //email vizsgálata
    private function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }


}