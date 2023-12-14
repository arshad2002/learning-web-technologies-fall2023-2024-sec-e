<?php
require_once("../model/productModel.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $description = htmlspecialchars($_POST["description"]);
    $price = floatval($_POST["price"]);
    $stock_quantity = intval($_POST["stock_quantity"]);
    $client_id = intval($_POST["client_id"]);

    $result = insertProduct($name, $description, $price, $stock_quantity, $client_id);

    if ($result) {
        header("location: ../view/sellerDashboard.php");
        exit();
    } else {
        echo "Error adding product. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
