<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>
<body>
    <table width="100%"  border="1" cellspacing="0" >
        <tr>
            <td colspan="2">
                <img src="../asset/X.png" alt="" height="25px"><b>Company</b>
                <table align="right">     
                    <td align="right"">
                        <label for="" align="right">
                            Logged in as <a href="profile.php">Bob</a>
                            
                            <a href="login.php">Logout</a>
                        </label>
            </td></table>           
            </td>
    
        </tr>
        <tr>
            <td width="30%" > 
                <b>Account</b>
                <hr>
                <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profile.php">View Profile</a></li>
                    <li><a href="profileedit.php">Edit Profile</a></li>
                    <li><a href="profilepicture.php">Change Profile Picture</a></li>
                    <li><a href="changepass.php">Change Password</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </td>
            <td > <?php require("../template/profile.html") ?></td>
        
        </tr>
        <tr>
            <td colspan="2" align="middle">Copyright © 2017</td>
        </tr>
    </table>
    
</body>
</html>

