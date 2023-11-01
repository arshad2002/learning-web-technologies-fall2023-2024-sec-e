<?php
include '../controller/checkSession.php';
$folder = '../model/userData/';
$userFileName = $folder . $_SESSION['userId'] . '.txt';

if (file_exists($userFileName)) {
    $fileData = file_get_contents($userFileName);
    $userData = explode("\n", $fileData);
    $id = explode(": ", $userData[0])[1];
    $name = explode(": ", $userData[2])[1];
    $userType = explode(": ", $userData[3])[1];
	$userNa=strtolower($userType);
	$userpage = "home_$userNa.php";
}
?>
<center>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr><td colspan="2" align="CENTER">Profile</td></tr>
        <tr><td>ID</td><td><?php echo $id; ?></td></tr>
        <tr><td>NAME</td><td><?php echo $name; ?></td></tr>    
        <tr><td>USER TYPE</td><td><?php echo $userType; ?></td></tr>
        <tr><td colspan="2" align="right"><a href="<?php echo $userpage?>">Go Home</a></td></tr>
    </table>			 
</center>
