<?php
	session_start();
	if(!isset($_SESSION['admin_user_name'])){
	header("location:index.php");
	}
	else{
	include('db_connect.php');
  
  $sql="SELECT * FROM active_app WHERE success='0'";
  $result=mysql_query($sql,$con);

?>
<html>
	<head>
		<link rel="shortcut icon" href="Images/logo.ico">
		<link rel="stylesheet" href="style.css">
		<title>Active Applications</title>
	</head>
	<body align="center">
	<br>
<?php
	
	date_default_timezone_set("Africa/Nairobi");
	$as_at=date("y-m-d H:i:s");


	echo "<h1 align='center'>ACTIVE APPLICANTS OF THE KYUC STUDENTS' ELECTIONS<br>AS AT <font color = 'red'>".$as_at."</font></h1>";
?>
	<form name="frmVetting" method="post" action="vet_exc.php">
	<table border = "1" align = "center" width="80%">
	<tr>
      <th colspan="8"><font size="4">These Are The Active Applications For The Different Posts</font></th>
    </tr>
    <tr><th width="5%">Select</th><th width="8%">Reg No.</th><th width="8%">First Name</th><th width="8%">Second Name</th><th width="2%">Year</th>
	<th width="8%">Post</th><th width="15%">Reason</th>
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
	   <td><input type="checkbox" name="applicants[]" value="<?php echo $row["reg_no"]; ?>" ></td>
       <td><?php echo $row['reg_no'];?></td>
	   <td><?php echo $row['fname']; ?></td>
	   <td><?php echo $row['sname']; ?></td>
	   <td><?php echo $row['year']; ?></td>
	   <td><?php echo $row['post']; ?></td>
	   <td><?php echo $row['reason']; ?></td>
    </tr>
    
    
    <?php
	$i++;
// close while loop
}
}
?>
<tr><td colspan="8">---List end---</td></tr>
</table> <br><br>
<h1>Action to Take With Selected Records: <label><input type="radio" name="vet" value="1"><font color = 'magenta'>Approve</font></label> or <label><input type="radio" name="vet" value="2"><font color = 'red'>Decline</font></label> the Application.</h1>

<br><br>
<br>
<button class="button"><input type="submit" value="SUBMIT"></button>
</form>
<button class="button"  onclick="location.href='admin_index.php'">Home</button>
<br><br>
<div id="bottom">
    |&nbsp;&nbsp;<a href="admin_index.php">HOME</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin_login.php">ADMIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contact.php">CONTACT</a>&nbsp;&nbsp;|
    <br>
    Web Page by Fridah Gaceri<br>
    KIRINYAGA UNIVERSITY&nbsp;&copy;2017 All Rights Reserved
</div>
	</body>

</html>
