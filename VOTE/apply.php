<?php

session_start();
if(!isset($_SESSION['reg_no'])){
$reg = $_SESSION['reg_no'];
header("location:login.php");
}
$user_name = $_SESSION['user_name'];
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
	   <li><a href="member_index.php">HOME</a></li>
	   <li><a href="admin_login.php">ADMIN</a></li>
	   <li><a href="contact.php">CONTACT</a></li>
	   <li><a href="apply.php">APPLY</a>
	   <ul>
		   <li><a href="apply_chairperson.php">CHAIRPERSON</a></li>
		   <li><a href="apply_general_secretary.php">SECRETARY</a></li>
		   <li><a href="apply_finance.php">FINANCE</a></li>
	   </li>
	   </ul>
	   <li><a href="logout.php">LogOut</a></li>
	</ul> 
	Welcome, <?php $user_name = $_SESSION['user_name']; echo $user_name; ?>
	</div>	

	</div>
	<div id = "leftcolumn">
	<div id="cssmenu">
	<ul>
	   <li><a href='member_index.php'><span>HOME</span></a></li>
	   <li><a href='admin.php'><span>ADMIN</span></a></li>
	   <li><a href='apply.php'><span>APPLY</span></a></li>
	   <li><a href='success_app.php'><span>SUCCESSFUL APPLICANTS</span></a></li>
	   <li><a href='vote.php'><span>VOTE</span></a></li>
	   <li><a href='contact.php'><span>CONTACT</span></a></li>
	</ul> 
	</div>
	</div>
	
	<div id= "rightcolumn">
	<?php
	echo date('l, d-M-y ');
	?>
	<embed src="Flash/voterballo.swf" width="200" height="150" />
	</div>
	<div id = "content">
	<h3>Click on the post you want to apply for in the list below</h3>
	<form>
	<input type="button" onclick "href='apply_chairperson.php'" value ="Chairperson">
	<input type="button" onclick "apply_general_secretary.php" value="Secretary General">
	<input type="button" onclick "apply_finance.php" value = "Minister of Finance">
	</form>
	</div>
	<div id = "footer">
	|&nbsp;&nbsp;<a href="member_index.php">HOME</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin.php">ADMIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contact.php">CONTACT</a>&nbsp;&nbsp;|
    <br>
    Web Page by Fridah Gaceri<br>
    KIRINYAGA UNIVERSITY&nbsp;&copy;2017 All Rights Reserved
	</div>
	</div>
	</body>
</html>