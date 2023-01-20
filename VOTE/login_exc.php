<?php

 include('db_connect.php');

// username and password sent from form

$reg_no=$_POST['reg_no'];
$password=sha1($_POST['password']);




// To protect MySQL injection (more detail about MySQL injection)
$reg_no = stripslashes($reg_no);
$password = stripslashes($password);

$reg_no = mysql_real_escape_string($reg_no);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM students_login WHERE reg_no='$reg_no' AND password='$password'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result)){
$user_name= $row["user_name"];
}
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
        
        session_start();
        $_SESSION['reg_no'] = $reg_no;
        $_SESSION['password'] = $password;
		$_SESSION['user_name'] = $user_name;
        
		echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/member_index.php', '_parent')  </script>";

 } else {
        header("location:student_login_fail.php");
}

?>