<?php
require_once("../model/productModel.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $productList = getAllProducts();
    
    while ($row = $productList->fetch_assoc()) {
        echo '<div class="product-item" data-product-id="' . $row['product_id'] . '">';
        echo $row['name'] . ' - $' . $row['price'];
        echo '</div>';
    }
} else {
    echo "Invalid request method.";
}
?>
