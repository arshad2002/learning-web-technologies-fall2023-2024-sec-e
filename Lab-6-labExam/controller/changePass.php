<?php
session_start();

$folder = '../model/userData/';
$userFileName = $folder . $_SESSION['userId'] . '.txt';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $retypeNewPassword = $_POST['retypeNewPassword'];

    if ($newPassword !== $retypeNewPassword) {
        echo "New passwords do not match.";
    } else {
        $fileData = file_get_contents($userFileName);
        $userData = explode("\n", $fileData);
        $userData[1] = "Password: " . $newPassword;
        $updatedData = implode("\n", $userData);
        file_put_contents($userFileName, $updatedData);
        echo "Password updated successfully.";
        header("Location: ../view/change_password.php");
    }
}
?>