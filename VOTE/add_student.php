<html>
	<head>
		<link rel="shortcut icon" href="Images/logo.ico">
		<link rel="stylesheet" href="style.css">
		<title>Registration for Online Voting</title>
		<script>
		function focus_field()
		{
			frmAddStudent.reg_no.focus();
		}
		
		</script>
	</head>
	<body align="center" onload="focus_field()">
	<br>
	<table border = "1" align = "center">
	<form  name="frmAddStudent" method="post" action="add_student_exc.php">
	<tr>
		<td align = "center">FILL IN THE DETAILS OF THE STUDENT TO REGISTER</td>
	</tr>
	<tr>
		<td>
			<table border = "0">
			<tr><td rowspan = "9"><img src = "images/register.png" height="230px" width = "200px" align = "center"></td></rt>
			<tr><td>Reg No.:</td><td><input type = "text" name = "reg_no" onkeyup = "this.value=this.value.toUpperCase();" class= "txtField"><font color="red"> *</font></td></tr>
			<tr><td>Surname:</td><td><input type = "text" name = "surname" onkeyup = "this.value=this.value.toUpperCase();" class= "txtField"> <td></tr>
			<tr><td>First Name:</td><td><input type = "text" name = "fname" onkeyup = "this.value=this.value.toUpperCase();" class= "txtField"><font color="red"> *</font></td></tr>
			<tr><td>Second Name:</td><td><input type = "text" name = "sname" onkeyup = "this.value=this.value.toUpperCase();" class= "txtField"><font color="red"> *</font></td></tr>
			<tr><td>Phone Number:</td><td><input type = "text" name = "phone_no" class= "txtField"></td></tr>
			<tr><td colspan="2">Course:<select name = "course" class= "txtField">
			<option value = "">--------Select Your Course--------</option>
			<option value = "BSC INFORMATION TECHNOLOGY">BSc Information Technology</option>
			<option value = "BSC MATHEMATICS AND COMPUTER SCIENCE">BSc Mathematics and Computer Science</option>
			<option value = "BSC STATISTICS">BSc Statistics</option>
			<option value = "BACHELOR OF COMMERCE">Bachelor of Commerce</option>
			<option value = "BSC ENTREPRENEURSHIP">BSc Entrepreneurship</option>
			<option value = "HUMAN RESOURCE MANAGEMENT">Human Resource Management</option>
			</select><font color="red"> *</font>
			</td></tr>
			<tr><td>Year of Study:</td><td><select name = "year" class= "txtField">
			<option value = "">--------year of study--------</option>
			<option value = "4">4</option>
			<option value = "3">3</option>
			<option value = "2">2</option>
			<option value = "1">1</option>
			</select><font color="red"> *</font>
			</td></tr>
			</table>
		</td>
	</tr>
	<tr><td align = "center"><input type = "submit" value = "Register" class="button"><input type="reset" value="Clear" class="button"></td></tr>
	</form>
	</table>
	<br>
</body>
</html>