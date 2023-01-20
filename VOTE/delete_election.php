	<?php
	include('db_connect.php');

	$sql="SELECT * FROM election_date";
	$result=mysql_query($sql);

	$sql1="DELETE FROM election_date";
	$result1=mysql_query($sql1);
	
			if($result1)
			{
				echo "<script type='text/javascript'>";
				echo "alert('You Have Successfuly Deleted The Election. Now You Can Set Another ELection Date..!!!')";
				echo "</script>";
				echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/admin_index.php', '_parent')  </script>";
			}
			else
			{
				echo "<script type='text/javascript'>";
				echo "alert('Failed To Delete The Election..Seek Technical Assistance)')";
				echo "</script>";	
				echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/admin_index.php', '_parent')  </script>";
			}
	?>