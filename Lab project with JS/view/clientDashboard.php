<?php
    session_start();
    require_once("../controller/authCheck.php");
    checkLoggedIn();
    checkUserType("client","login.php");
   
?>
<!DOCTYPE html>
<html>
<head>
    <title>Client Dashboard</title>
</head>
<body>
<nav align="right">
    <a href="clientDashboard.php">Home</a>|
    <a href="profile.php">Profile</a>|
    <a href="settings.php">Settings</a>|
    <a href="../controller/logoutCheck.php">Logout</a>
    <br><br>
    <form action="../controller/searchFreelancer.php" method="GET">
        <label for="search"><strong>Search Freelancers:</strong></label>
        <input type="text" id="search" name="search" placeholder="Enter username or user ID">
        <input type="submit" value="Search">
    </form>
</nav>


<section>
    <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
    <a href="project.php"><strong> Projects</strong></a><br>
    <a href="jobpost.php"><strong>JobPost</strong></a>
</section>

</body>
</html>
