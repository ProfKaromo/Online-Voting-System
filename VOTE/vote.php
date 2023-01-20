<?php

session_start();
if(!isset($_SESSION['reg_no'])){
$reg = $_SESSION['reg_no'];
header("location:login.php");
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
		<title>Students Login Page</title>
	</head>
<body align="center">
	<form name="frm_vote" method="POST" action="vote_exc.php" onSubmit="return validate(this)"> 
	<br>

	<h1>SELECT ONE CANDIDATE IN EACH CATEGORY</h1>
	<table border = "1" align = "center" width="80%">
	<tr>
      <th colspan="5"><font size="4">Select your Favourite Chairperson</font></th>
    </tr>
    <tr><th width="5%">Reg No.</th><th width="5%">First Name</th><th width="5%">Second Name</th><th width="2%">Year</th><th width="15%">Vote</th>
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
       <td><?php echo $row['reg_no'];?></td><td><?php echo $row['fname']; ?></td><td><?php echo $row['sname']; ?></td><td><?php echo $row['year']; ?></td><td><input type="radio" name="chair" value="<?php echo $row['reg_no'];?>"></td>
    </tr>  
    
    
    <?php
	$i++;
// close while loop
}

?>
<tr><td colspan="5">---List end---</td></tr>
</table> 
<br><br>
<table border = "1" align = "center" width="80%">
	<tr>
      <th colspan="5"><font size="4">Select your Favourite Secretary General</font></th>
    </tr>
    <tr><th width="5%">Reg No.</th><th width="5%">First Name</th><th width="5%">Second Name</th><th width="2%">Year</th><th width="15%">Vote</th>
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
       <td><?php echo $row['reg_no'];?></td><td><?php echo $row['fname']; ?></td><td><?php echo $row['sname']; ?></td><td><?php echo $row['year']; ?></td><td><input type="radio" name="sec" value="<?php echo $row['reg_no'];?>"></td>
    </tr>  
    
    
    <?php
	$i++;
// close while loop
}

?>
<tr><td colspan="5">---List end---</td></tr>
</table>  
<br><br> 
<table border = "1" align = "center" width="80%">
	<tr>
      <th colspan="5"><font size="4">Select your favourite Finance Minister</font></th>
    </tr>
    <tr><th width="5%">Reg No.</th><th width="5%">First Name</th><th width="5%">Second Name</th><th width="2%">Year</th><th width="15%">Vote</th>
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
       <td><?php echo $row['reg_no'];?></td><td><?php echo $row['fname']; ?></td><td><?php echo $row['sname']; ?></td><td><?php echo $row['year']; ?></td><td><input type="radio" name="finance" value="<?php echo $row['reg_no'];?>"></td>
    </tr>  
    
    
    <?php
	$i++;
// close while loop
}
}
?>

<tr><td colspan="5">---List end---</td></tr>
</table><br> 
<input type="submit" class="button" name="submit" value="SUBMIT" onClick="validate(this.f)">
</form>
<button class="button"  onclick="location.href='member_index.php'">QUIT</a></button>
<br><br>
<div id="bottom">
    |&nbsp;&nbsp;<a href="member_index.php">HOME</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin_login.php">ADMIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contact.php">CONTACT</a>&nbsp;&nbsp;|
    <br>
    Web Page by Fridah Gaceri<br>
    KIRINYAGA UNIVERSITY&nbsp;&copy;2017 All Rights Reserved
</div>
	</body>

</html>
