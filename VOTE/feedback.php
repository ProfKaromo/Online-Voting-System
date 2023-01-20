<?php
	session_start();
	if(!isset($_SESSION['admin_user_name'])){
	header("location:index.php");
	}
	else{
	include('db_connect.php');
	
  $sql="SELECT * FROM contact";
  $result=mysql_query($sql,$con);
  
?>
<html>
	<head>
		<link rel="shortcut icon" href="Images/logo.ico">
		<link rel="stylesheet" href="style.css">
		<title>Feedback Page</title>
	</head>
	<body align="center">
	<br>
<?php
	
	date_default_timezone_set("Africa/Nairobi");
	$as_at=date("y-m-d H:i:s");


	echo "<h1 align='center'>AVAILABLE FEEDBACK AND MESSAGES<br>AS AT <font color = 'red'>".$as_at."</font></h1>";
?>
<table border = "1" align = "center" width="80%">

    <tr><th width="8%">Serial No.</th><th width="10%">Name</th><th width="7%">Phone No.</th><th width="13%">Email</th><th width="40%">Message</th>
    </tr>
	
	    <?php

// Start looping rows in mysql database.
$i=0;
while($row=mysql_fetch_array($result)){
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
    
   
    <tr class="<?php if(isset($classname)) echo $classname;?>">
       <td><?php echo ($i+1);?></td><td><?php echo $row['name']; ?></td><td><?php echo $row['phone_no']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['message']; ?></td>
    </tr>  
    
    
    <?php
	$i++;
// close while loop
}
}
?>
<tr><th colspan="7">---List end---</th></tr>
</table>      
<br><br>
<?php
	echo "<font color = 'magenta' size=6>"."THE TOTAL NUMBER OF AVAILABLE MESSAGE(S) IS "."</font><font color = 'red' size=6>".$i."</mark></font>.";
?>
<br>
<button class="button" onclick="location.href='admin_index.php'">Home</button>
<br><br>
<div id="bottom">
    |&nbsp;&nbsp;<a href="admin_index.php">HOME</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin_login.php">ADMIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contact.php">CONTACT</a>&nbsp;&nbsp;|
    <br>
    Web Page by Fridah Gaceri<br>
    KIRINYAGA UNIVERSITY&nbsp;&copy;2017 All Rights Reserved
</div>
	</body>

</html>
