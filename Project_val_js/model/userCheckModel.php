<?php
require_once("db.php");
function isUsernameExists($username) {
    $conn = getConnection();
    $query = "SELECT * FROM users WHERE USERNAME = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}
function getUserByUsername($username) {
    $conn = getConnection();
    $query = "SELECT * FROM users WHERE USERNAME = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
function getUserById($user_id) {
    $conn = getConnection();
    $query = "SELECT * FROM users WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
?>
