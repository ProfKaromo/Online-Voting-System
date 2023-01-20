<html>
	<head>
		<link rel="shortcut icon" href="Images/logo.ico">
		<link rel="stylesheet" href="style.css">
		<title>Students Login Page</title>
		<script>
		function focus_field()
		{
			frmlogin.reg_no.focus();
		}
		
		</script>
	</head>
	<body align="center" onload="focus_field()">
	<br>
	<table border = "1" align = "center">
	<tr>
		<td><img src = "images/log.jpeg" height="144px" align = "center"></td>
	</tr>
	<form  name="frmlogin" method="post" action="login_exc.php">
	<tr>
		<td align = "center">STUDENT-PLEASE LOGIN HERE <img src = "images/unlock.png"></td>
	</tr>
	<tr>
		<td>
			<table border = "0" align = "center">
			<tr><td>Reg No.:</td><td><input type = "text" name = "reg_no" onkeyup = "this.value=this.value.toUpperCase();" class= "txtField" tabindex="1"></td></tr>
			<tr><td>Password:</td><td><input type = "password" name = "password" class= "txtField" tabindex="2"></td></tr>
			</table>
		</td>
	</tr>
	<tr><td align = "center"><input type = "submit" value = "LogIn" class="button" tabindex="3"><input type="reset" value="Clear" class="button"tabindex="4"></td></tr>
	<tr><td align = "center"><input type = "button" value = "Register" class="button" onclick="location.href='register.php'" tabindex="5"></td></tr>
	</form>
	</table>
	<br>
</body>
</html>