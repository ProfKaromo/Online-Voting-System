<html>
	<head>
		<link rel="shortcut icon" href="Images/logo.ico">
		<title>Electronic Voting System</title>
		<link rel="stylesheet" href="indexcss.css">
		<link href="menucss.css" rel="stylesheet" type="text/css">
	</head>
	<body align = "center">
	<div id = "wrapper">
	<div id= "banner">
	<img src = "images/logo.jpg" height="144px" width="1024" align="left">
	</div>
	<div id = "topmenu">
	<div id='navmenu'>
	<ul>
	   <li><a href="index.php">HOME</a></li>
	   <li><a href="admin_login.php" target="main">ADMIN</a></li>
	   <li><a href="contact.php" target="main">CONTACT</a></li>
	   <li><a href="login.php" target="main">LogIn/Register</a></li>
	</ul> 
	</div>	
	<?php
	echo date('l, d-M-y ');
	?>

	</div>
	<iframe name="main" src="vote/slider.html">
	
	</iframe>

	</div>
	<div id = "footer_1"><br>
	|&nbsp;&nbsp;<a href="index.php">HOME</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin_login.php" target="main">ADMIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contact.php" target="main">CONTACT</a>&nbsp;&nbsp;|
    <br>
    Web Page by Fridah Gaceri<br>
    KIRINYAGA UNIVERSITY&nbsp;&copy;2017 All Rights Reserved
	</div>
	</body>
</html>