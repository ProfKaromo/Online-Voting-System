<html>
	<head>
		<link rel="shortcut icon" href="Images/logo.ico">
		<link rel="stylesheet" href="style.css">
		<title>Registration for Online Voting</title>
		<script>
		function focus_field()
		{
			frmRegister.reg_no.focus();
		}
		function clearDefault(a)
		{
			if(a.defaultValue==a.value)
			{
				a.value="";
			}
		}
		function testLength()
		{
			var textBox = document.getElementById('password');
			var textLength = textBox.value.length;
			
			if(textBox.value=='' || textLength < 8)
			{
				alert('Password must have eight characters or more...');
				frmRegister.password.focus();
				frmRegister.password.value='';
				
			}
		}
		</script>
	</head>
	<body align="center" onload="focus_field()">
	<br>
	<table border = "1" align = "center">
	<form  name="frmRegister" method="post" action="vote_register_exc.php">
	<tr>
		<td align = "center" id="h3">ENTER VALID CREDITENTIALS!</td>
	</tr>
	<tr>
		<td>
			<table border = "0">
			<tr><td rowspan = "9"><img src = "images/reg.jpeg" height="230px" width = "200px" align = "center"></td></rt>
			<tr><td>Reg No.:</td><td><input type = "text" name = "reg_no" onkeyup = "this.value=this.value.toUpperCase();" class= "txtField"></td></tr>
			<tr><td>First Name:</td><td><input type = "text" name = "fname" onkeyup = "this.value=this.value.toUpperCase();" class= "txtField"></td></tr>
			<tr><td>Second Name:</td><td><input type = "text" name = "sname" onkeyup = "this.value=this.value.toUpperCase();" class= "txtField"></td></tr>
			<tr><td>User Name:</td><td><input type = "text" name = "user_name" class= "txtField"></td></tr>
			<tr><td>Year of Study:</td><td><select name = "year" class= "txtField">
			<option value = "">--------year of study--------</option>
			<option value = "4">4</option>
			<option value = "3">3</option>
			<option value = "2">2</option>
			<option value = "1">1</option>
			</select>
			</td></tr>
			<tr><td>Email:</td><td><input type = "email" name = "email" class= "txtField"  onfocus="clearDefault(this)" value="example@gmail.com"></td></tr>
			<tr><td>Password:</td><td><input type = "password" name = "password"id ="password" onchange="testLength() class= "txtField"></td></tr>
			<tr><td>Confirm Password:</td><td><input type = "password" name = "cpassword" class= "txtField"></td></tr>
			</table>
		</td>
	</tr>
	<tr><td align = "center"><input type = "submit" value = "Register" class="button"><input type="reset" value="Clear" class="button"></td></tr>
	</form>
	</table>
	<br>
</body>
</html>