<?php
require_once("db.php");

function updateUserEmail($username, $newEmail) {
    $conn = getConnection();
    $query = "UPDATE users SET email = ? WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $newEmail, $username);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

function updateUserPassword($username, $newPassword) {
    $conn = getConnection();
    $query = "UPDATE users SET password = ? WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $newPassword, $username);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
