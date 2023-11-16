<?php

require_once("db.php");

function insertUser($username, $email, $hashedPassword, $user_type) {
    $conn = getConnection();

    $insertQuery = "INSERT INTO users (USERNAME, EMAIL, PASSWORD, USER_TYPE) VALUES (?, ?, ?, ?)";
    $insertStmt = $conn->prepare($insertQuery);

    $insertStmt->bind_param("ssss", $username, $email, $hashedPassword, $user_type);
    $insertStmt->execute();
}
?>
