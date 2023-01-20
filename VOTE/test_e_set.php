<?php

session_start();
if(!isset($_SESSION['admin_user_name'])){
$user_name = $_SESSION['admin_user_name'];
header("location:admin_login.php");
}
?>
<html>
	<head>
		<title>
		</title>
		<script>
		//$.alerts.okButton = ' Yes ';
		//$.alerts.cancelButton = ' No ';
			function myFunction() {
				var ans = confirm("Are you sure want to delete the existing election date?");
				
					if(ans==true)
					{
						window.open("http://127.0.0.1/vote/delete_election.php", "_parent");
					}
					else
					{
						window.open("http://127.0.0.1/vote/admin_index.php", "_parent");
					}
			}

		</script>
	</head>
<body>
<?php
 include('db_connect.php');

       $sql="SELECT * FROM election_date WHERE id='1'";
       $result=mysql_query($sql,$con);

       $row=mysql_fetch_array($result);

if($row!='0')
{
		//var ans = confirm("There is an election that is set. Do you wish to delete it?!");
		//echo "<script type=\"text/javascript\">  var ans = window.confirm('There is an election that is set. Do you wish to delete it!?')  </script>";

		echo "<form>";
		echo "<input type='button' value='Election date exist. Click to confirm your action.' onclick='myFunction()' />";
		echo "</form>";


}
else
{
	echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/set_date.php', 'main')  </script>";
}
?>
</body>
</html>