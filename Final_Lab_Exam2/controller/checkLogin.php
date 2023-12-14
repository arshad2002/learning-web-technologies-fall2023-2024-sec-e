<?php
session_start();

require_once("../model/userModel.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = getUserByUsername($username);

    if ($user) {
        if ($password == $user['PASSWORD']) {
            $_SESSION['username'] = $username;
            $_SESSION['user_type'] = $user['user_type'];
            $_SESSION['user_id'] = $user['user_id'];

            if ($user['user_type'] == 'buyer') {
                header("location: ../view/buyerDashboard.php");
            } elseif ($user['user_type'] == 'seller') {
                header("location: ../view/sellerDashboard.php");
            } elseif ($user['user_type'] == 'admin') {
                header("location: ../view/adminDashboard.php");
            }else{}
            exit();
        } else {
            $errorMessage = "Invalid password";
        }
    } else {
        $errorMessage = "Invalid username";
    }

    header("location: ../view/login.html?error=" . urlencode($errorMessage));
    exit();
} else {
    header("location: ../view/login.html");
    exit();
}
?>
