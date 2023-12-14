<?php
    session_start();
    require_once("../controller/authCheck.php");
    checkLoggedIn();
?>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="../asset/css/index.css">
</head>
<body>

    <nav align="right">
    <a href="<?php
    if ($_SESSION['user_type'] === 'client') {
        echo 'clientDashboard.php';
    } elseif ($_SESSION['user_type'] === 'freelancer') {
        echo 'freelancerDashboard.php';
    } elseif ($_SESSION['user_type'] === 'admin') {
        echo 'adminDashboard.php';
    } else {
    }
    ?>">Home</a>|
          <a href="profile.php">Profile</a>|
          <a href="settings.php">Settings</a>|
          <a href="../controller/logoutCheck.php">Logout</a>
    </nav>

    <section align="center">
        <h2>User Profile</h2>
    </section>
    <div>
        <?php
            require_once("../model/userModel.php");
            $username = $_SESSION['username'];
            $user = getUserByUsername($username);
            if ($user) {
                echo "<p><strong>Username:</strong> " . $user['username'] . "</p>";
                echo "<p><strong>Email:</strong> " . $user['email'] . "</p>";
                echo "<p><strong>User Type:</strong> " . $user['user_type'] . "</p>";
            } else {
                echo "<p>Error: User not found.</p>";
            }
        ?>
    </div>

</body>
</html>
