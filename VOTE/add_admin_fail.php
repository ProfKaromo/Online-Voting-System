<html>
	<head>
		<link rel="shortcut icon" href="Images/logo.ico">
		<link rel="stylesheet" href="style.css">
		<title>Add admin</title>
		<script>
		function focus_field()
		{
			frmAddAdmin.staff_no.focus();
		}
		function testLength()
		{
			var textBox = document.getElementById('password');
			var textLength = textBox.value.length;
			
			if(textBox.value=='' || textLength < 8)
			{
				alert('Password must have eight characters or more...');
				frmAddAdmin.password.focus();
				frmAddAdmin.password.value='';
				
			}
		}
		
		</script>
	</head>
	<body align="center" onload="focus_field()">
	<br>
	<table border = "1" align = "center">
	<form  name="frmAddAdmin" method="post" action="add_admin_exc.php">
	<tr>
		<td align = "center" id="h3">ENTER VALID CREDITENTIALS!</td>
	</tr>
	<tr>
		<td>
			<table border = "0">
			<tr><td rowspan = "9"><img src = "images/admin.jpeg" height="230px" width = "200px" align = "center"></td></rt>
			<tr><td>Staff Number (PF No.):</td><td><input type = "text" name = "staff_no"class= "txtField"></td></tr>
			<tr><td>User Name:</td><td><input type = "text" name = "admin_user_name"class= "txtField"></td></tr>
			<tr><td>Password:</td><td><input type = "password" name = "password" id ="password" onchange="testLength()" class= "txtField"></td></tr>
			<tr><td>Confirm Password:</td><td><input type = "password" name = "cpassword" class= "txtField"></td></tr>
			</table>
		</td>
	</tr>
	<tr><td align = "center"><input type = "submit" value = "Add Admin" class="button"><input type="reset" value="Clear" class="button"></form><button class="button"  onclick="location.href='admin_index.php'">Quit</button></td></tr>
	</table>
	<br>
</body>
</html>