<?php
require_once("../model/productModel.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["seller_name"])) {
        $sellerName = $_GET["seller_name"];
        $productList = getProductsBySellerName($sellerName);

        while ($row = $productList->fetch_assoc()) {
            echo '<div class="product-item" data-product-id="' . $row['product_id'] . '">';
            echo $row['name'] . ' - $' . $row['price'];
            echo '</div>';
        }
    } else {
        echo "Seller name parameter is missing.";
    }
} else {
    echo "Invalid request method.";
}


?>