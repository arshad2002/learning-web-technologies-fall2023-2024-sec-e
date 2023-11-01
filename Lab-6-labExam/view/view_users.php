<?php
include '../controller/checkSession.php';
?>
<center>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr><td colspan="4" align="CENTER">Users</td></tr>
        <tr>
            <td>ID</td><td>NAME</td><td>USER TYPE</td>
        </tr>
        <?php
        $folder = '../model/userData/';

        $files = array_diff(scandir($folder), array('..', '.'));

        foreach ($files as $file) {
            $userFileName = $folder . $file;
            $fileData = file_get_contents($userFileName);
            $userData = explode("\n", $fileData);
            $id = explode(": ", $userData[0])[1];
            $name = explode(": ", $userData[2])[1];
            $userType = explode(": ", $userData[3])[1];
            echo "<tr><td>$id</td><td>$name</td><td>$userType</td></tr>";
        }
        ?>
        <tr>
            <td colspan="3" align="right">
                <a href="home_admin.php">Go Home</a>
            </td>
        </tr>
    </table>			
</center>
