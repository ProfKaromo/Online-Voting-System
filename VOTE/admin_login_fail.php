<?php

session_start();
session_destroy();
?>
<html>
	<head>
		<link rel="shortcut icon" href="Images/logo.ico">
		<link rel="stylesheet" href="style.css">
		<title>Admin Login Page</title>
		<script>
		function focus_field()
		{
			frmAdminLogin.admin_user_name.focus();
		}
		
		</script>
	</head>
	<body align="center" onload="focus_field()">
	<br>
	<table border = "1" align = "center">
	<tr>
		<td><img src = "images/log.jpeg" height="150px" width = "270px" align = "center"></td>
	</tr>
	<form  name="frmAdminLogin" method="post" action="admin_login_exc.php">
	<tr>
		<td align = "center"><h3 id="h3">ADMIN-USE VALID CREDENTIALS!!</h3><img src = "images/unlock.png"></td>
	</tr>
	<tr>
		<td>
			<table border = "0" align = "center">
			<tr><td>User name:</td><td><input type = "text" name = "admin_user_name" class= "txtField" tabindex="1"></td></tr>
			<tr><td>Password:</td><td><input type = "password" name = "password" class= "txtField" tabindex="2"></td></tr>
			</table>
		</td>
	</tr>
	<tr><td align = "center"><input type = "submit" value = "LogIn" class="button" tabindex="3"><input type="reset" value="Clear" class="button"tabindex="4"></td></tr>
	</form>
	</table>
</body>
</html>