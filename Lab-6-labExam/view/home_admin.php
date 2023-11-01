<?php
include '../controller/checkSession.php';

$folder = '../model/userData/';
$userFileName = $folder . $_SESSION['userId'] . '.txt';

if (file_exists($userFileName)) {
    $fileData = file_get_contents($userFileName);
    $userData = explode("\n", $fileData);
    $name = explode(": ", $userData[2])[1];
}
?>

<center>
    <h1>Welcome <?php echo $name; ?>!</h1>
    <a href="profile.php">Profile</a>
    <br/>
    <a href="change_password.php">Change Password</a>
    <br/>
    <a href="view_users.php">View Users</a>
    <br/>
    <a href="../controller/checkLogout.php">Logout</a>
</center>
