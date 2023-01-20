<?php

session_start();
if(!isset($_SESSION['admin_user_name'])){
header("location:admin_login.php");
}
 include('db_connect.php');

       $sql="SELECT * FROM active_app WHERE success='0'";
       $result=mysql_query($sql,$con);
	   
	   $count=mysql_num_rows($result);


if($count==0)
{
	echo "<script type='text/javascript'>";
	echo "alert('There are no active applications at the moment. Please Check latter.')";
	echo "</script>";	
	echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/admin_index.php', '_parent')  </script>";
}
else
{
		echo "<script type='text/javascript'>";
		echo "alert('Welcome to vetting page. Select the check boxes and take appropriate action below the list...')";
		echo "</script>";
		echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/applications.php', '_parent')  </script>";
}

?>