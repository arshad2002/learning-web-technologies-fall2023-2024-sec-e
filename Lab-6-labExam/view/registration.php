<center>
<form method="post" action="../controller/checkRegistration.php">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text" name="Id"><br/>
					Password<br/><input type="password" name="password"><br/>
					Confirm Password<br/><input type="password"><br/>
					Name<br/><input type="text" name="name"><br/>
					User Type<hr/>
					<input type="radio" name="usertype" value="User" />User
					<input type="radio" name="usertype" value="Admin" />Admin
					<hr/>
					<input type="submit" value="Sign Up">
					<a href="login.php">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
<?php
if(isset($_POST['Id']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['usertype'])){
    if($_POST['password'] !== $_POST['confirmPassword']) {
        echo "<p style='color: red;'>Passwords do not match.</p>";
    }
}
?>
