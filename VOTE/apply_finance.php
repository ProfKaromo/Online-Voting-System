<?php

session_start();
if(!isset($_SESSION['reg_no'])){
header("location:login.php");
}
?>
<html>
	<head>
		<link rel="shortcut icon" href="Images/logo.ico">
		<link rel="stylesheet" href="style.css">
		<title>Apply for Finance Minister</title>
		<script>
		function focus_field()
		{
			frmApply.reg_no.focus();
		}
		function clearDefault(a)
		{
			if(a.defaultValue==a.value)
			{
				a.value="";
			}
		}
		
		</script>
	</head>
	<body align="center" onload="focus_field()">
	<br><br><br><br>
	<table border = "1" align = "center">
	<form  name="frmApply" method="post" enctype="multipart/form-data" action="apply_finance_exc.php">
	<tr>
		<td align = "center">APLLY FOR THE POST OF FINANCE MINISTER</td>
	</tr>
	<tr>
		<td>
			<table border = "0">
			<tr><td>Reg No.:</td><td><input type = "text" name = "reg_no" value="<?php echo $_SESSION['reg_no']; ?>" onkeyup = "this.value=this.value.toUpperCase();" class= "txtField" readonly></td></tr>
			<tr><td>First Name:</td><td><input type = "text" name = "fname" onkeyup = "this.value=this.value.toUpperCase();" class= "txtField"></td></tr>
			<tr><td>Second Name:</td><td><input type = "text" name = "sname" onkeyup = "this.value=this.value.toUpperCase();" class= "txtField"></td></tr>
			<tr><td>Year of Study:</td><td><select name = "year" id = "select">
			<option value = "">----year of study----</option>
			<option value = "4">4</option>
			<option value = "3">3</option>
			<option value = "2">2</option>
			<option value = "1">1</option>
			</select>
			</td></tr>
			<tr><td colspan = "2">Reason For Applying For This Post:</td></tr>
			<td colspan = "2"><textarea name = "reason" cols = "37" class= "txtField" onfocus="clearDefault(this)">Please be very brief...</textarea></td></tr>
			<tr><td>Choose a Photo:</td><td><input value="Image"  type="file" name="fileToUploadImage" /></td></tr>
			</table>
		</td>
	</tr>
	<tr><td align = "center"><input type = "submit" value = "Register" class="button"><input type="reset" value="Clear" class="button"></td></tr>
	</form>
	</table>
	<br><br><br><br>

	</body>

</html>