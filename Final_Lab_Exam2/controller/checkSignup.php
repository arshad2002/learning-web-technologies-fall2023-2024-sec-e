<?php
require_once("../model/userModel.php");
function isPasswordStrong($password) {
    $lengthCheck = strlen($password) >= 8;
    $uppercaseCheck = false;
    $lowercaseCheck = false;
    $digitCheck = false;
    $specialCharCheck = false;

    for ($i = 0; $i < strlen($password); $i++) {
        $char = $password[$i];

        if (ctype_upper($char)) {
            $uppercaseCheck = true;
        } elseif (ctype_lower($char)) {
            $lowercaseCheck = true;
        } elseif (ctype_digit($char)) {
            $digitCheck = true;
        } else {
            $specialCharCheck = true;
        }
    }

    return $lengthCheck && $uppercaseCheck && $lowercaseCheck && $digitCheck && $specialCharCheck;
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
            $errorMessage .= "Password does not meet the required criteria. It should be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one digit.";
        } else {
            insertUser($username, $email, $password, $user_type);
            echo '<script>window.location.href = "../view/login.html";</script>';
            exit();
        }
    }
}

if (!empty($errorMessage)) {
    $response = array('error' => $errorMessage);
    echo json_encode($response);
    exit();
}
?>
