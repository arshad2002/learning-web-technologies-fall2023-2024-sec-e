<?php
require_once("../model/userModel.php");
require_once("../model/userCheckModel.php");
function isPasswordStrong($password) {
    return strlen($password) >= 8 && preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password) && preg_match('/\d/', $password);
}

$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $user_type = $_POST["user_type"];

    if (isUsernameExists($username)) {
        $errorMessage = 'Username already exists.';
    } elseif ($password != $repassword) {
        $errorMessage = "Passwords do not match.";
    } else {
        if (!isPasswordStrong($password)) {
            $errorMessage .= "Password does not meet the required criteria. It should be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one digit.<br>";
        } else {
            insertUser($username, $email, $password, $user_type);
            header("location: ../view/login.php");
            exit();
        }
    }
}

if (!empty($errorMessage)) {
    header("location: ../view/signup.php?error=" . urlencode($errorMessage));
    exit();
}


?>
