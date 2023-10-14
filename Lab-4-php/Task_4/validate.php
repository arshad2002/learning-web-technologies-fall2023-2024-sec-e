<?php

$name = $_REQUEST["name"] ?? "";
$email = $_REQUEST["email"] ?? "";
$username = $_REQUEST["username"] ?? "";
$password = $_REQUEST["password"] ?? "";
$confirmPassword = $_REQUEST["confirm_password"] ?? "";
$gender = $_REQUEST["gender"] ?? "";
$dob = $_REQUEST["dob"] ?? "";

if ($_SERVER["REQUEST_METHOD"] == "REQUEST") {
    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($confirmPassword) || empty($gender) || empty($dob)) {
        echo "All fields are required.";
    } else {
        if (strlen($password) < 8 || !preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $password)) {
            echo "Password must be at least 8 characters long and contain at least one letter and one number.";
        } elseif ($password !== $confirmPassword) {
            echo "Passwords do not match.";
        } else {
            echo "Form is validated.";
        }
    }
}
?>
