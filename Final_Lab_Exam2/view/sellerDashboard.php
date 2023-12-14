<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once("../controller/authCheck.php");
checkLoggedIn();
checkUserType("seller", "login.html");
?>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
<nav align="right">
    <a href="sellerDashboard.php">Home</a>|
    <a href="profile.php">Profile</a>|
    <a href="../controller/logoutCheck.php">Logout</a>
    <br><br>
</nav>

<section>
    <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>

    <h3>Add a New Product</h3>
    <form action="../controller/insertProduct.php" method="post">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required><br>

        <label for="stock_quantity">Stock Quantity:</label>
        <input type="number" id="stock_quantity" name="stock_quantity" required><br>

        <input type="hidden" name="client_id" value="<?php echo $_SESSION['user_id']; ?>">

        <input type="submit" value="Add Product">
    </form>
</section>

</body>
</html>
