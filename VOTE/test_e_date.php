<?php

session_start();
if(!isset($_SESSION['reg_no'])){
$reg = $_SESSION['reg_no'];
header("location:login.php");
}
 include('db_connect.php');

       $sql="SELECT * FROM election_date WHERE id='1'";
       $result=mysql_query($sql,$con);

       $row=mysql_fetch_array($result);

       $s_date =$row['s_date'];
	   $s_time =$row['s_time'];
	   $f_date =$row['f_date'];
	   $f_time =$row['f_time'];
	   
	   $start_e_date=$s_date." ".$s_time;
	   $finish_e_date=$f_date." ".$f_time;
	   
	   //echo "".$start_e_date."<br>";
	   //echo "".$finish_e_date."<br>";
	date_default_timezone_set("Africa/Nairobi");
	
	$date=date("Y-m-d");
	$time=date("H:i:s");
	$today=$date." ".$time;
	//echo "".$today;
	//echo $start_e_date-date("Y-m-d H:i:s");

	//$diff = strtotime(($start_e_date)-time());
	//echo $diff;

if($today<$start_e_date)
{
	echo "<script type='text/javascript'>";
	echo "alert('The election date is not yet!!! Be patient..')";
	echo "</script>";	
	echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/member_index.php', '_parent')  </script>";
}
else if($today>$finish_e_date)
{
	echo "<script type='text/javascript'>";
	echo "alert('The election exercise was completed...')";
	echo "</script>";	
	echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/member_index.php', '_parent')  </script>";
}
else
{
		//echo "<script type='text/javascript'>";
		//echo "alert('Elections is an important exercise, Take it serious....')";
		//echo "</script>";
		echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/test_vote.php', '_parent')  </script>";

}
?>
