<?php

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['loginname']) && isset($_POST['email']) && isset($_POST['password'])) {

    //grabbing the data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $loginname = $_POST['loginname'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    //instantiate SignUpControll class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signupContr.classes.php";
    $signup = new SignupContr($firstname, $lastname, $loginname, $email, $password);
    //running error handlers and user signup
    $signup->signUpUser();
}


