<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once("../controller/authCheck.php");
checkLoggedIn();
checkUserType("admin", "login.html");
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
</section>

</body>
</html>
