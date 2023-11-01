<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['Id'];
    $password = $_POST['password'];
    $folder = '../model/userData/';
    $userFileName = $folder . $userId . '.txt';

    if (file_exists($userFileName)) {
        $fileData = file_get_contents($userFileName);
        $userData = explode("\n", $fileData);
        $storedUserId = explode(": ", $userData[0])[1];
        $storedPassword = explode(": ", $userData[1])[1];
        $userType = explode(": ", $userData[3])[1];

        if ($userId === $storedUserId && $password === $storedPassword) {
            $_SESSION['userId'] = $userId;
            if ($userType === "Admin") {
                header("Location: ../view/home_admin.php");
            } else {
                header("Location: ../view/home_user.php");
            }
            exit;
        } else {
            echo "Invalid user credentials. Please try again.";
        }
    } else {
        echo "User not found. Please register first.";
    }
}
?>
