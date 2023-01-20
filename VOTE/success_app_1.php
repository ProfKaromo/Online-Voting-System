<?php
session_start();
if(!isset($_SESSION['admin_user_name'])){
$user_name = $_SESSION['admin_user_name'];
header("location:admin_login.php");
}
	else{
	include('db_connect.php');
	
  $sql="SELECT * FROM apply_chairperson WHERE success='1'";
  $result=mysql_query($sql,$con);
  
  $sql1="SELECT * FROM apply_general_sec WHERE success='1'";
  $result1=mysql_query($sql1,$con);
  
  $sql2="SELECT * FROM apply_finance WHERE success='1'";
  $result2=mysql_query($sql2,$con);
?>
<html>
	<head>
		<link rel="shortcut icon" href="Images/logo.ico">
		<link rel="stylesheet" href="style.css">
		<title>Successful Applications</title>
	</head>
	<body align="center">
	<div id="page">
	<br>
	<div id="top1">
	<h1>SUCCESSFUL APPLICANTS OF THE KYU STUDENTS ELECTIONS</h1>
	</div>
	<table border = "1" align = "center">
	<tr>
      <th colspan="5"><font size="4">These Are The Successful Applicants For the Chairman Post</font></th>
    </tr>
    <tr><th width="5%">Reg No.</th><th width="5%">First Name</th><th width="5%">Second Name</th><th width="2%">Year</th><th width="15%">Reason</th>
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
       <td><?php echo $row['reg_no'];?></td><td><?php echo $row['fname']; ?></td><td><?php echo $row['sname']; ?></td><td><?php echo $row['year']; ?></td><td><?php echo $row['reason']; ?></td>
    </tr>  
    
    
    <?php
	$i++;
// close while loop
}

?>
<tr><td colspan="5">---List end---</td></tr>
</table> 
<br><br>
<table border = "1" align = "center">
	<tr>
      <th colspan="5"><font size="4">These Are The Successful Applicants For the Secretary general Post</font></th>
    </tr>
    <tr><th width="5%">Reg No.</th><th width="5%">First Name</th><th width="5%">Second Name</th><th width="2%">Year</th><th width="15%">Reason</th>
    </tr>
	
	    <?php

// Start looping rows in mysql database.
$i=0;
while($row=mysql_fetch_array($result1)){
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
    <tr class="<?php if(isset($classname)) echo $classname;?>">
       <td><?php echo $row['reg_no'];?></td><td><?php echo $row['fname']; ?></td><td><?php echo $row['sname']; ?></td><td><?php echo $row['year']; ?></td><td><?php echo $row['reason']; ?></td>
    </tr>  
    
    
    <?php
	$i++;
// close while loop
}

?>
<tr><td colspan="5">---List end---</td></tr>
</table>  
<br><br> 
<table border = "1" align = "center">
	<tr>
      <th colspan="5"><font size="4">These Are The Successful Applicants For the Minister of finance Post</font></th>
    </tr>
    <tr><th width="5%">Reg No.</th><th width="5%">First Name</th><th width="5%">Second Name</th><th width="2%">Year</th><th width="15%">Reason</th>
    </tr>
	
	    <?php

// Start looping rows in mysql database.
$i=0;
while($row=mysql_fetch_array($result2)){
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
    
   
    <tr class="<?php if(isset($classname)) echo $classname;?>">
       <td><?php echo $row['reg_no'];?></td><td><?php echo $row['fname']; ?></td><td><?php echo $row['sname']; ?></td><td><?php echo $row['year']; ?></td><td><?php echo $row['reason']; ?></td>
    </tr>  
    
    
    <?php
	$i++;
// close while loop
}
}
?>
<tr><td colspan="5">---List end---</td></tr>
</table>      
<br>
<button class="button" onclick="location.href='admin_index.php'">Home</button>
</div>
<div id="bottom">
    |&nbsp;&nbsp;<a href="admin_index.php">HOME</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin_login.php" target="_blank">ADMIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contact.php">CONTACT</a>&nbsp;&nbsp;|
    <br>
    Web Page by Fridah Gaceri<br>
    KIRINYAGA UNIVERSITY&nbsp;&copy;2017 All Rights Reserved
</div>
	</body>

</html>
