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
	   <li><a href="admin_login.php" target="main">ADMIN</a></li>
	   <li><a href="contact.php" target="main">CONTACT</a></li>
	   <li><a href="#">APPLY</a>
	   <ul>
		   <li><a href="apply_chairperson.php" target="main">CHAIRPERSON</a></li>
		   <li><a href="apply_general_secretary.php" target="main">SECRETARY</a></li>
		   <li><a href="apply_finance.php" target="main">FINANCE</a></li>
	   </li>
	   </ul>
	   <li><a href="logout.php">LogOut</a></li>
	</ul> 
	  
	</div>	
	Hi,
	<div class="chip">
  <img src="images/p.jpg" alt="Person" width="96" height="96">
  <?php $user_name = $_SESSION['user_name']; echo $user_name; ?>.
</div>
	</div>
	<div id = "leftcolumn">
	<?php
	date_default_timezone_set("Africa/Nairobi");
	echo date('l, d-M-y ');
	?>
	<div id="cssmenu">
	<ul>
	   <li><a href='member_index.php'><span>HOME</span></a></li>
	   <li><a href='change_password.php' target="main"><span>CHANGE PASSWORD</span></a></li>
	   <li><a href='success_app.php' target='_blank'><span>SUCCESSFUL APPLICANTS</span></a></li>
	   <li><a href='vote_chairperson.php'><span>CANDIDATE'S PICTURES</span></a></li>
	   <li><a href='test_e_date.php'><span>VOTE</span></a></li>
	   <li><a href='contact.php' target="main"><span>CONTACT</span></a></li>
	</ul> 
	</div>
	</div>
	<iframe id = "iframe_1" name="main" src="vote/slider_1.php">
	
	</iframe>
	<div id = "footer"><br>
	|&nbsp;&nbsp;<a href="member_index.php">HOME</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin_login.php" target="_blank">ADMIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contact.php" target="main">CONTACT</a>&nbsp;&nbsp;|
    <br>
    Web Page by Fridah Gaceri<br>
    KIRINYAGA UNIVERSITY&nbsp;&copy;2017 All Rights Reserved
	</div>
	</div>
	</body>
</html>