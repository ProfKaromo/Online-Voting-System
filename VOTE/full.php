<!DOCTYPE html>
   <?php
	include('db_connect.php');
	
	$sql=mysql_query("SELECT COUNT(*) FROM election_date");

	if($sql ==1 )
	{
?>
<html>
<head>
	<title>Select Date</title>
</head>

<body>
	<p>
		<h2>Set The Elections</h2><br>
		<table>
		<form name="frmDate" method="post" action="date_exc.php">
		<tr><td>Select Election Date:</td><td><input name="date" value ="DD-MM-YY HH:MM"type="text"></td></tr>
		<tr><td colspan="2" align="center"><input class="button" type="submit" value="SET"></td></tr>
		</form>
	</p>

</body>
</html>
