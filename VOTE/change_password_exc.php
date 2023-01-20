<html>
<head>
<link rel="shortcut icon" href="Images/logo.ico">
<link rel="stylesheet" href="style.css">
</head>
<?php
	 include('db_connect.php');
	 session_start();
	$reg_no = $_POST['reg_no'];
	
			if(isset($_POST['password']))
			{
				$password = $_POST['password'];
			}
			if(isset($_POST['new_password']))
			{
				$new_password = $_POST['new_password'];
			}
			if(isset($_POST['cnew_password']))
			{
				$cnew_password = $_POST['cnew_password'];
			}
	
	if(empty($reg_no) || empty($password) || empty($new_password)||empty($cnew_password)) 
	{
				echo "<script type=\"text/javascript\">  window.alert('Please fill in all the fields!')  </script>";
				echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/change_password.php', '_self')  </script>";

	exit();

	}
	
	$password = sha1($_POST['password']);
	$new_password = sha1($_POST['new_password']);
	$cnew_password = sha1($_POST['cnew_password']);
	 
	$result = mysql_query("SELECT password FROM students_login WHERE reg_no='$reg_no' AND password='$password'");
	$row=mysql_fetch_array($result);
	
	$password_1=$row['password'];
	 
	    if($password != $password_1){
	        echo "<img src='images/error.gif'><font color='red'><h2>"."The Registration and the password you entered does not match!"."</h2></font>";
	    
		?>
	     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"  onclick="location.href='change_password.php'">Repeat</a>
		 <?php
		 }
	    else if($new_password == $cnew_password){
	        $sql = mysql_query("UPDATE students_login SET password = '$new_password' WHERE reg_no = '$reg_no'");      
	    
	     
	    if($sql){
	        echo "<img src='images/info.jpg'><font color='magenta'><h2>"."Congratulations, Your password was successfully changed!"."</h2></font>";
			echo "Continue To Login Page....";
			session_destroy();
		?><br><br>
	     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"  onclick="location.href='member_index.php'">LogIn</a>
		 <?php
		 }	 
     }
	 else{
	        echo "<img src='images/error.gif'><font color='red'><h2>"."New password and confirm password must be the same!"."</h2></font>";	 
		?>
	     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="button"  onclick="location.href='change_password.php'">Repeat</a>
		 <?php			
		}
?>
</html>