
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../asset/css/index.css">
    <link rel="stylesheet" href="../asset/css/login.css">
</head>
<body>
    <table cellspacing="0" align="center">
        <tr height="10%">
            <td>
                <fieldset>
                    <legend><h2>Login</h2></legend>
                    <form action="../controller/checkLogin.php" method="post">
                        <b>UserName:</b>
                        <input type="text" name="username"><br>
                        <b>Password :</b>
                        <input type="password" name="password"><br>
                        <?php require("../controller/errorShowing.php");?>
                        <hr>
                        <input type="submit" value="Login">
                        <a href="../view/signup.php">Signup</a>
                </form>
                </fieldset>
            </td>
    </table> 
</body>
</html>

