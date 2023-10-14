<?php
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if (!preg_match('/^[a-zA-Z0-9._-]{2,}$/', $username)) {
        echo "Invalid Username format. User Name can contain alpha numeric characters, period, dash, or underscore only and must be at least two characters long.";
    } 

    else if (strlen($password) < 8 || !preg_match('/[@#$%]/', $password)) {
        echo "Invalid Password format. Password must be at least eight characters long and contain at least one of the special characters (@, #, $, %).";
    } else {
        echo "Login Successful!";
    }
?>