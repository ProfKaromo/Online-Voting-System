<?php

session_start();
if(!isset($_SESSION['admin_user_name'])){
header("location:admin_login.php");
}
 include('db_connect.php');

        $admin_user_name=($_SESSION['admin_user_name']);

       $sql="SELECT * FROM admin_login WHERE admin_user_name='$admin_user_name'";
       $result=mysql_query($sql,$con);

       $row=mysql_fetch_array($result);

       $level =$row['admin_level'];

if($level !='1')
{
	echo "<script type='text/javascript'>";
	echo "alert('You don\'t have the prevalege of adding a new admin. Consult the system administrator!!!')";
	echo "</script>";	
	echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/admin_index.php', '_parent')  </script>";
}
else
{
		echo "<script type='text/javascript'>";
		echo "alert('You are about to add a new admin....')";
		echo "</script>";
		echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/add_admin.php', '_parent')  </script>";

}

?>