<!DOCTYPE html>
   <?php
	include('db_connect.php');
	
	$sql=mysql_query("SELECT COUNT(*) FROM election_date");

?>
<html>
<head>
	<title>Select Date</title>
		<link rel="shortcut icon" href="Images/logo.ico">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet"type = "text/css" href="formcss.css">
		<script>
		function clearDefault(a)
		{
			if(a.defaultValue==a.value)
			{
				a.value="";
			}
		}
		</script>
</head>

<body>
	<p>
		<h2>Set The Election Date.</h2>
		Click on the input box then from the right most coner click on the launcher icon to select the election dates. <br>
		(You may also opt to input manually using the fomart shown in the input box.)<br><br>
		<table>
		<form name="frmDate" method="post" action="date_exc.php">
		<tr>
		<td>Input Election Start Date:</td><td><input type="date" name="s_date"></td>
		<td> And Time:</td><td><input type="time" name="s_time"></td>
		</tr>
		<tr>
		<td>Input Election End Date:</td><td><input type="date" name="f_date"></td>
		<td> And Time:</td><td><input type="time" name="f_time"></td>
		</tr>
		<tr><td colspan="2" align="center"><input class="button" type="submit" value="SET"></td></tr>
		</form>
		</table>
	</p>
		<pre>
	
	
	
	
	
	
	
	
	
	
	
	
	
	</pre>



</body>
</html>
