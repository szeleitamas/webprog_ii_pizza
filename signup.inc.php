<?php

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['loginname']) && isset($_POST['email']) && isset($_POST['password'])) {

    //grabbing the data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $loginname = $_POST['loginname'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    //instantiate SignUpControll class
    include "signup.class.php";
    include "signupContr.class.php";
    $signup = new SignupContr($firstname, $lastname, $loginname, $email, $password);
    //running error handlers and user signup

    //going to back to front page

}
