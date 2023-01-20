<?php

session_start();
if(!isset($_SESSION['admin_user_name'])){
$user_name = $_SESSION['admin_user_name'];
header("location:admin_login.php");
}
?>
<html>
	<head>
		<link rel="shortcut icon" href="Images/logo.ico">
		<title>Electronic Voting System</title>
		<link rel="stylesheet" href="indexcss.css">
		<link href="menucss.css" rel="stylesheet" type="text/css">
		<link href="side_menucss.css" rel="stylesheet" type="text/css">
	</head>
	<body align = "center">
	<div id = "wrapper">
	<div id= "banner">
	<img src = "images/logo.jpg" height="144px" width="1024" align="left">

	</div>
	<div id = "topmenu">
	<div id='navmenu'>
	<ul>
	   <li><a href="admin_index.php">HOME</a></li>
	   <li><a href="admin_index.php">ADMIN</a></li>
	   <li><a href="add_student.php" target="main">ADD STUDENT</a></li>
	   <li><a href="#">MANAGE</a>
	   <ul>
		   <li><a href="apply_chairperson.php">RESET ELECTIONS</a></li>
		   <li><a href="apply_general_secretary.php">UPDATE STUDENT YEARS</a></li>
		   <li><a href="apply_finance.php">DELETE CLEARED STUDENTS</a></li>
	   </li>
	   </ul>
	   <li><a href="logout.php">LogOut</a></li>
	</ul> 
	Welcome, Admin <?php $user_name = $_SESSION['admin_user_name']; echo $user_name; ?>
	</div>	

	</div>
	<div id = "leftcolumn">
	<div id="cssmenu">
	<ul>
	   <li><a href='admin_index.php'><span>HOME</span></a></li>
	   <li><a href='add_admin.php'><span>ADD ADMIN</span></a></li>
	   <li><a href='view_register.php' target='_parent'><span>VIEW REGISTER</span></a></li>
	   <li><a href='applications.php'><span>APPLICATIONS</span></a></li>
	   <li><a href='success_app.php'><span>SUCCESSFUL APPLICANTS</span></a></li>
	   <li><a href='results.php'><span>DISPLAY RESULTS</span></a></li>
	   <li><a href='feedback.php'><span>FEEDBACK</span></a></li>
	</ul> 
	</div>
	</div>
	
	<div id= "rightcolumn">
	<?php
	echo date('l, d-M-y ');
	?>
	<iframe id = "iframe_r" name="right" src="clock.php">
	
	</iframe>
	<embed src="Flash/voterballo.swf" width="200" height="150" />
	</div>
	<iframe id = "iframe_a" name="main" src="add_student_fail.php">
	
	</iframe>
	<div id = "footer"><br>
	|&nbsp;&nbsp;<a href="member_index.php">HOME</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin_login.php">ADMIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contact.php">CONTACT</a>&nbsp;&nbsp;|
    <br>
    Web Page by Fridah Gaceri<br>
    KIRINYAGA UNIVERSITY&nbsp;&copy;2017 All Rights Reserved
	</div>
	</div>
	</body>
</html>