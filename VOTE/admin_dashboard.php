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
<link rel="stylesheet" href="style_2.css">
</head>
<body align = "center">
<?php
	include('db_connect.php');
	
  $sql="SELECT * FROM apply_chairperson WHERE success='1'";
  $result=mysql_query($sql,$con);
  $count=mysql_num_rows($result);
  
  $sql1="SELECT * FROM apply_general_sec WHERE success='1'";
  $result1=mysql_query($sql1,$con);
  $count1=mysql_num_rows($result1);
  
  $sql2="SELECT * FROM apply_finance WHERE success='1'";
  $result2=mysql_query($sql2,$con);
  $count2=mysql_num_rows($result2);
  
  $sql3="SELECT * FROM school_db WHERE active_status='1'";
  $result3=mysql_query($sql3,$con);
  $count3=mysql_num_rows($result3);
  
  $sql4="SELECT * FROM vote_register";
  $result4=mysql_query($sql4,$con);
  $count4=mysql_num_rows($result4);
  
  if($count3==0)
  $percent1=0;
  else
  $percent1=number_format(($count4/$count3)*100,2);
  
  $sql5="SELECT * FROM vote_register WHERE vote_status='1'";
  $result5=mysql_query($sql5,$con);
  $count5=mysql_num_rows($result5);
  
  if($count4==0)
  $percent2=0;
  else
  $percent2=number_format(($count5/$count4)*100,2);
   
  $sql6="SELECT * FROM vote_register WHERE vote_status='0'";
  $result6=mysql_query($sql6,$con);
  $count6=mysql_num_rows($result6);
  
  if($count4==0)
  $percent3=0;
  else
  $percent3=number_format(($count6/$count4)*100,2);
?>
	<table border="1" align="center">
		<tr><th colspan="3">ADMIN DASHBOARD </th></tr>
		<tr><td colspan="2" class="td">Number of students in the school database</td><td><?php echo "<b><font color = 'red'>".$count3."</font></b>" ?></td></tr>
		<tr><th colspan="3">Student elections registration status</th></tr>
		<tr><td colspan="2">Number of registered students</td><td><?php echo "<b><font color = 'red'>".$count4."</font></b>" ?> out of <?php echo "<b><font color = 'red'>".$count3."</font></b>" ?></td></tr>
		<tr><td colspan="2">Percentage of students registered</td><td><?php echo "<b><font color = 'red'>".$percent1."</font></b>" ?>%</td></tr>
		<tr><th colspan="3">Number of contestants in various posts</th></tr>
		<tr><td colspan="2">Chairperson</td><td><?php echo "<b><font color = 'red'>".$count."</font></b>" ?></td></tr>
		<tr><td colspan="2">Secretary General</td><td><?php echo "<b><font color = 'red'>".$count1."</font></b>" ?></td></tr>
		<tr><td colspan="2">Finance</td><td><?php echo "<b><font color = 'red'>".$count2."</font></b>" ?></td></tr>
		<tr><th colspan="3">Student voting at a glance</th></tr>
		<tr><td rowspan="2">Voted</td><td>Number of students who have voted</td><td><?php echo "<b><font color = 'red'>".$count5."</font></b>" ?> out of <?php echo "<b><font color = 'red'>".$count4."</font></b>" ?></td></tr>
		<tr><td>Percentage of students who have voted</td><td><?php echo "<b><font color = 'red'>".$percent2."</font></b>" ?>%</td></tr>
		<tr><td rowspan="2">Not Voted</td><td>Number of students who have not voted</td><td><?php echo "<b><font color = 'red'>".$count6."</font></b>" ?> out of <?php echo "<b><font color = 'red'>".$count4."</font></b>" ?></td></tr>
		<tr><td>Percentage of students who have not voted</td><td><?php echo "<b><font color = 'red'>".$percent3."</font></b>" ?>%</td></tr>
	</table>
</body>
</html>