<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once("../controller/authCheck.php");
checkLoggedIn();
checkUserType("freelancer", "login.php");
?>

<html>
<head>
    <title>Freelancer Dashboard</title>
    <link rel="stylesheet" href="../asset/css/index.css">
</head>
<body>
<nav align="right">
    <a href="freelancerDashboard.php">Home</a>|
    <a href="profile.php">Profile</a>|
    <!-- <a href="inbox.php">Message</a>| -->
    <a href="settings.php">Settings</a>|
    <a href="../controller/logoutCheck.php">Logout</a>
    <br>
    <form action="../controller/searchJobController.php" method="GET">
        <label for="search"><strong>Search Jobs:</strong></label>
        <input type="text" id="search" name="search" placeholder="Enter Job you are searching">
        <input type="submit" value="Search">
    </form>
</nav>

<section>
    <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
</section>
<section>
    <fieldset>
        <legend><h2>Posted Jobs</h2></legend>
        <div id="jobList"></div>
    </fieldset>
</section>
<script src="../asset/js/clientPostedJob.js"></script>
</body>
</html>
