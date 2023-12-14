 <?php
    session_start();
    require_once("../controller/AuthCheck.php");
    checkLoggedIn();
    checkUserType("admin", "Login.php");
?> 
<html>
<head>
    
    <title>Admin DashBoard</title>
    <script src = "../asset/js/ajaxForViewUser.js"></script>
    <link rel="stylesheet" href="../asset/css/index.css">
</head>
    
<body>
    <nav align="right">
        <a href = "AdminDashboard.php">Home |</a>
        <a href="profile.php">Profile |</a>
        <!-- <a href="inbox.php">Message</a>| -->
        <a href="Settings.php">Settings |</a>
        <a href="../controller/logoutCheck.php">Logout</a>
    </nav>

    <h3> Welcome <?php echo $_SESSION['username']; ?> !!</h3>

    
    <a href="viewUser.php">View and Edit Users</a> <br> <br>
    <a href="insertUser.php">Insert User</a>

</body>
</html>