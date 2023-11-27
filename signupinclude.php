<?php

if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["un"];
    $password = $_POST["PW"];
    $confirmpassword = $_POST["PWC"];

    require_once  'DBHinclude.php';
    require_once  'Functionsinclude.php';

    if (emptyInputSignup( $name, $email, $username, $password, $confirmpassword ) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUn($username) !== false){
        header("location: ../signup.php?error=invalidusername");
        exit();
    } 
    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (passwordmatch($password, $confirmpassword) !== false){
        header("location: ../signup.php?error=incorrectpassword");
        exit();
    }
    if (UnExists($conn, $username, $email) !== false){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $password);
}
else{
      header("location: ../signup.php"); 
      exit();
}
