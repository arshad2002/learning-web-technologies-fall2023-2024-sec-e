<!-- buyerDashboard.php -->
<?php
session_start();
require_once("../controller/authCheck.php");
checkLoggedIn();
checkUserType("buyer", "login.html");
?>
<html>
<head>
    <title>Buyer Dashboard</title>
    <script src="../asset/js/buyerDashboard.js" defer></script>
</head>
<body>
    <nav align="right">
        <a href="buyerDashboard.php">Home</a>|
        <a href="profile.php">Profile</a>|
        <a href="settings.php">Settings</a>|
        <a href="../controller/logoutCheck.php">Logout</a>
        <br><br>
    </nav>

    <section>
        <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
        <label for="sellerName">View Products by Seller:</label>
        <input type="text" id="sellerName" name="sellerName" placeholder="Enter Seller Name">
        <button onclick="loadProductsBySeller()">View Products</button>
        <div id="productList"></div>
    </section>
</body>
</html>
