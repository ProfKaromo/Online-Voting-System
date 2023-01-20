    <?php
	if(isset($_POST['s_date'])){
		$s_date=$_POST['s_date'];
	}
		if(isset($_POST['s_time'])){
		$s_time=$_POST['s_time'];
	}
		if(isset($_POST['f_date'])){
		$f_date=$_POST['f_date'];
	}
		if(isset($_POST['f_time'])){
		$f_time=$_POST['f_time'];
	}
	include('db_connect.php');
	
	date_default_timezone_set("Africa/Nairobi");
	
	$date=date("Y-m-d");
	
	if(empty($s_date)||empty($s_time)||empty($f_date)||empty($f_time)) 
	{
				echo "<script type=\"text/javascript\">  window.alert('Please Input The Date Properly!')  </script>";
				echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/set_date.php', 'main')  </script>";

	exit();

	}
	else if($s_date<$date || $f_date<$date){
			echo "<script type=\"text/javascript\">  window.alert('Please Input a Future Date!')  </script>";
			echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/set_date.php', 'main')  </script>";
	}
	else if($f_date<$s_date){
			echo "<script type=\"text/javascript\">  window.alert('Election Cant end before starting!')  </script>";
			echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/set_date.php', 'main')  </script>";
	}
	else
	{
	
		 $sql = "INSERT INTO vote.election_date(s_date,s_time,f_date,f_time) 
		 VALUES('$s_date','$s_time','$f_date','$f_time')";
		 $result = mysql_query($sql);
		 
		 	if($result)
			{
				echo "<script type='text/javascript'>";
				echo "alert('You Have Successfully Set The Election Date..!!!')";
				echo "</script>";
				echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/admin_index.php', '_parent')  </script>";
			}
			else
			{
				echo "<script type='text/javascript'>";
				echo "<script type=\"text/javascript\">  window.alert('Please Input The Date Properly!')  </script>";
				echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/set_date.php', 'main')  </script>";
			}
	}
?>