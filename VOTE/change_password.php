<?php

session_start();
if(!isset($_SESSION['reg_no'])){
$reg = $_SESSION['reg_no'];
header("location:login.php");
}

?>
<html>
	<head>
		<link rel="shortcut icon" href="Images/logo.ico">
		<link rel="stylesheet" href="style.css">
		<title>Password Changing Page</title>
		<script>
		function focus_field()
		{
			frmChangePassword.password.focus();
		}
		function testLength()
		{
			var textBox = document.getElementById('password');
			var textLength = textBox.value.length;
			
			if(textBox.value=='' || textLength < 8)
			{
				alert('Password must have eight characters or more...');
				frmChangePassword.new_password.focus();
				frmChangePassword.new_password.value='';
				
			}
		}
		</script>
	</head>
	<body align="center" onload="focus_field()">
	<br>
	<table border = "1" align = "center">
	<tr>
		<td><img src = "images/kyu.jpg" height="144px" align = "center"></td>
	</tr>
	<form  name="frmChangePassword" method="post" action="change_password_exc.php">
	<tr>
		<td align = "center">CHANGE YOUR PASSWORD HERE <img src = "images/unlock.png"></td>
	</tr>
	<tr>
		<td>
			<table border = "0">
			<tr><td>Reg No.:</td><td><input type = "text" name = "reg_no" value="<?php echo $_SESSION['reg_no']; ?>" onkeyup = "this.value=this.value.toUpperCase();" class= "txtField" readonly></td></tr>
			<tr><td>Current Password:</td><td><input type = "password" name = "password" class= "txtField" tabindex="2"></td></tr>
			<tr><td>New Password:</td><td><input type = "password" name = "new_password" class= "txtField" tabindex="2" id ="password" onchange="testLength()"></td></tr>
			<tr><td>Confirm Password:</td><td><input type = "password" name = "cnew_password" class= "txtField" tabindex="2"></td></tr>
			</table>
		</td>
	</tr>
	<tr><td align = "center"><input type = "submit" value = "Submit" class="button" tabindex="3"><input type="reset" value="Clear" class="button"tabindex="4"></td></tr>
	</form>
	</table>
	<br>
</body>
</html>