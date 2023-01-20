<?php

 include('db_connect.php');

// username and password sent from form

$admin_user_name=$_POST['admin_user_name'];
$password=sha1($_POST['password']);




// To protect MySQL injection (more detail about MySQL injection)
$admin_user_name = stripslashes($admin_user_name);
$password = stripslashes($password);

$admin_user_name = mysql_real_escape_string($admin_user_name);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM admin_login WHERE admin_user_name='$admin_user_name' AND password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
        
        session_start();
        $_SESSION['admin_user_name'] = $admin_user_name;
        $_SESSION['password'] = $password;
        
  // header("location:admin_index.php");
   echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/admin_index.php', '_parent')  </script>";
 } else {
       // header("location:admin_login_fail.php");
		echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/admin_login_fail.php','_parent')  </script>";
}

?>