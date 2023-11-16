<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
</head>

<body>
    <?php
      require("../controller/errorShowing.php");
    ?>    
    <table cellspacing="0" align="center">
        <tr height="10%">
            <td>
           
            <fieldset>
              <legend> <h2>Sign Up</h2></legend>
              <form action="../controller/checkSignup.php" method="post">
                  <label for="username">username:</label><br>
                  <input type="text" id="username" name="username" required><br><br>

                  <label for="email">Email:</label><br>
                  <input type="email" id="email" name="email" required><br><br>

                  <label for="password">Password:</label><br>
                  <input type="password" id="password" name="password" required><br><br>
                  <label for="repassword">ReTypePassword:</label><br>
                  <input type="password" id="repassword" name="repassword" required><br><br>

                  <label for="user_type">User Type:</label><br>
                  <select id="user_type" name="user_type" required>
                    <option value="client">Client</option>
                    <option value="freelancer">Freelancer</option>
                    <option value="admin">Admin</option>
                  </select><br><br>

                  <input type="submit" value="Sign Up">
                  <a href="login.php">Login</a>
              </form>
            </fieldset>
            </td>
            
    </table> 
</body>
</html>
