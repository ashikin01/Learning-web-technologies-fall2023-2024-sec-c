<?php
 session_start();
 $username=$_REQUEST['username'];
 $password=$_REQUEST['password'];


 if ($username == "" || $password == "") {
    echo "Null Username or password". "\n";
    $isValidUsername = false;
} 

else {

    if($password != $confirmPassword){
    echo "password doesn't match" . "\n";

    $isValidPassword = false;
    }

    } 

if (strlen($username) < 2) {
    echo "Username must contain at least two characters." . "\n";
    $isValidUsername = false;
} 
    
else {
    for ($i = 0; $i < strlen($username); $i++) {
        $char = $username[$i];

        if (!ctype_alnum($char) && $char != '.' && $char != '-' && $char != '_') {
            echo "Username can contain alphanumeric characters, period, dash, or underscore only.";
            $isValidUsername = false;
            break;
        }
    }
}


if (strlen($password) < 8) {
    echo "Password must not be less than eight characters." . "\n";
    $isValidPassword = false;
} 

else {
    $hasSpecialChar = false;
    for ($i = 0; $i < strlen($password); $i++) {
        $char = $password[$i];

        if ($char == '@' || $char == '#' || $char == '$' || $char == '%') {
            $hasSpecialChar = true;
            break;
        }
    }

    if (!$hasSpecialChar) {
        echo "Password must contain at least one of the special characters (@, #, $, %)." . "\n";
        $isValidPassword = false;
    }
}

if ($isValidUsername && $isValidPassword) {
    
    if($username==$_SESSION['user']['usename'] && $username==$_SESSION['user']['password']){
   
    header('location:home.html');
    }
}
}

 
?>