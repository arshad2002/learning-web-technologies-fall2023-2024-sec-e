<?php

require_once("db.php");

function insertProduct($name, $description, $price, $stock_quantity, $client_id) {
    $conn = getConnection();
    $sql = "INSERT INTO Product (name, description, price, stock_quantity, client_id) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdii", $name, $description, $price, $stock_quantity, $client_id);
    $result = $stmt->execute();

    if ($stmt->errno) {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();

    return $result;
}
function getAllProducts() {
    $conn = getConnection();
    $sql = "SELECT * FROM Product";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
function getProductsBySellerName($sellerName) {
    $conn = getConnection();
    $sql = "SELECT * FROM product 
            JOIN users ON product.client_id = users.user_id
            WHERE users.username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $sellerName);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $conn->close();
    return $result;
}
?>
