<?php

function emptyInputSignup( $name, $email, $username, $password, $confirmpassword ){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($password) || empty($confirmpassword))
    $result =true;
}
else {
    $result = false;
}
return $result;
}

function invalidUn($username){
    
}