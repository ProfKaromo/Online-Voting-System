<?php

session_start();
if(!isset($_SESSION['admin_user_name'])){
$user_name = $_SESSION['admin_user_name'];
header("location:admin_login.php");
}
	else{
	include('db_connect.php');
	
  $sql="SELECT * FROM vote_chair order by vcount DESC";
  $result=mysql_query($sql,$con);
  
  $sql1="SELECT * FROM vote_sec order by vcount DESC";
  $result1=mysql_query($sql1,$con);
  
  $sql2="SELECT * FROM vote_finance order by vcount DESC";
  $result2=mysql_query($sql2,$con);
  
  /*calculating the percentage for chairperson*/
  $sql_1="SELECT * FROM vote_chair";
  $result_1=mysql_query($sql_1,$con);
  while($row=mysql_fetch_array($result_1)){
	$val1=$row['vcount'];
	$sqlt="SELECT * FROM total_votes WHERE id='1'";
	$resultst=mysql_query($sqlt,$con);
	$row2=mysql_fetch_array($resultst);
	$val2=$row2['total'];

	error_reporting(E_ERROR | E_PARSE);
	
	$val3=number_format(($val1/$val2)*100,4);
	$gc=$val3;
	$reg_no=$row['reg_no'];

	$sql_sp="UPDATE vote_chair SET percent= '$val3' WHERE reg_no='$reg_no'";
	$results_sp=mysql_query($sql_sp,$con);
}

  /*calculating the percentage for secretary general*/
  $sql_2="SELECT * FROM vote_sec";
  $result_2=mysql_query($sql_2,$con);
  while($row=mysql_fetch_array($result_2)){
	$val4=$row['vcount'];
	$sqls="SELECT * FROM total_votes WHERE id='2'";
	$resultst_1=mysql_query($sqls,$con);
	$row3=mysql_fetch_array($resultst_1);
	$val5=$row3['total'];

	$val6=number_format(($val4/$val5)*100,4);
	$reg_no=$row['reg_no'];

	$sql_sp="UPDATE vote_sec SET percent= '$val6' WHERE reg_no='$reg_no'";
	$results_sp=mysql_query($sql_sp,$con);
}

  /*calculating the percentage for finance minister*/
  $sql_3="SELECT * FROM vote_finance";
  $result_3=mysql_query($sql_3,$con);
  while($row=mysql_fetch_array($result_3)){
	$val7=$row['vcount'];
	$sqls="SELECT * FROM total_votes WHERE id='3'";
	$resultst_2=mysql_query($sqls,$con);
	$row4=mysql_fetch_array($resultst_2);
	$val8=$row4['total'];

	$val9=number_format(($val7/$val8)*100,4);
	$reg_no=$row['reg_no'];

	$sql_sp="UPDATE vote_finance SET percent= '$val9' WHERE reg_no='$reg_no'";
	$results_sp=mysql_query($sql_sp,$con);
}

/*graphs*/

?>
<html>
	<head>
		<link rel="shortcut icon" href="Images/logo.ico">
		<link rel="stylesheet" href="style.css">
		<title>Provisional Results</title>
	</head>
	<body align="center">
<?php
	date_default_timezone_set("Africa/Nairobi");
	//$as_at=date("H:i:sa");
	echo "<h1>PROVISIONAL RESULTS FOR THE KYU STUDENTS ELECTIONS<br>AS AT <font color = 'red'>".date("Hi")."hrs</font></h1>";
?>
	<table border = "1" align = "center" width="80%">
	<tr>
      <th colspan="5"><font size="4">Results for Chairperson</font></th>
    </tr>
    <tr><th width="10%">Reg No.</th><th width="15%">Candidate Name</th><th width="10%">Total Votes</th><th width="10%">Percentage Votes</th><th width="25%">Graph</th>
    </tr>
	
	    <?php

// Start looping rows in mysql database.
$i=0;
$tv_c=0;
while($row=mysql_fetch_array($result)){
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";

$width=$row['percent'];
$imgHeight=20;
$imgwidth=$row['percent']*2;
$imgTagchair = "<IMG SRC = 'images/red.jpg' height=".$imgHeight." width=".$imgwidth.">";
$imgup = "<IMG SRC = 'images/up.jpeg' height='18' width='20'>";

?>
   
	<tr class="<?php if(isset($classname)) echo $classname;?>">
       <td><?php echo $row['reg_no'];?></td><td><?php echo $row['cname']; ?></td><td><?php echo $row['vcount'];?></td><td style="color:red;"><?php echo $row['percent'];?>%</td><td style="text-align:left;"><?php echo $imgTagchair; if($i==0) echo " $imgup Provisional Winner"?></td>
    </tr>  
    
    
    <?php
	$tv_c=$tv_c+$row['vcount'];
	$i++;
// close while loop
}

?>
<tr><th colspan="2">TOTAL</th><th><?php echo $tv_c;?></th><th>100%</th></tr>
</table> 
<br><br>
<table border = "1" align = "center" width="80%">
	<tr>
      <th colspan="5"><font size="4">Results for Secretary General</font></th>
    </tr>
    <tr><th width="10%">Reg No.</th><th width="15%">Candidate Name</th><th width="10%">Total Votes</th><th width="10%">Percentage Votes</th><th width="25%">Graph</th>
    </tr>
	
	    <?php

// Start looping rows in mysql database.
$i=0;
$tv_s=0;
while($row=mysql_fetch_array($result1)){
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";

$width=$row['percent'];
$imgHeight=20;
$imgwidth=$row['percent']*2;
$imgTagsec = "<IMG SRC = 'images/green.jpg' height=".$imgHeight." width=".$imgwidth.">";
?>
    <tr class="<?php if(isset($classname)) echo $classname;?>">
       <td><?php echo $row['reg_no'];?></td><td><?php echo $row['cname']; ?></td><td><?php echo $row['vcount'];?></td><td style="color:red;"><?php echo $row['percent'];?>%</td><td style="text-align:left;"><?php echo $imgTagsec;if($i==0) echo " Provisional Winner"?></td>
    </tr>  
    
    
    <?php
	$tv_s=$tv_s+$row['vcount'];
	$i++;
// close while loop
}

?>
<tr><th colspan="2">TOTAL</th><th><?php echo $tv_s;?></th><th>100%</th></tr>
</table>  
<br><br> 
<table border = "1" align = "center" width="80%">
	<tr>
      <th colspan="5"><font size="4">Results for Finance Minister</font></th>
    </tr>
    <tr><th width="10%">Reg No.</th><th width="15%">Candidate Name</th><th width="10%">Total Votes</th><th width="10%">Percentage Votes</th><th width="25%">Graph</th>
    </tr>
	
	    <?php

// Start looping rows in mysql database.
$i=0;
$tv_f=0;
while($row=mysql_fetch_array($result2)){
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";

$width=$row['percent'];
$imgHeight=20;
$imgwidth=$row['percent']*2;
$imgTagfinance = "<IMG SRC = 'images/blue.jpg' height=".$imgHeight." width=".$imgwidth.">";
?>
   
    <tr class="<?php if(isset($classname)) echo $classname;?>">
       <td><?php echo $row['reg_no'];?></td><td><?php echo $row['cname']; ?></td><td><?php echo $row['vcount'];?></td><td style="color:red;"><?php echo $row['percent'];?>%</td><td style="text-align:left;"><?php echo $imgTagfinance; if($i==0) echo " Provisional Winner"?></td>
    </tr>  
    
    
    <?php
	$tv_f=$tv_f+$row['vcount'];
	$i++;
// close while loop
}
}
?>
<tr><th colspan="2">TOTAL</th><th><?php echo $tv_f;?></th><th>100%</th></tr>
</table><br>  
<button class="button"  onclick="location.href='admin_index.php'">Home</a></button>
<br><br>
<div id="bottom">
    |&nbsp;&nbsp;<a href="admin_index.php">HOME</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="admin_login.php">ADMIN</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="contact.php">CONTACT</a>&nbsp;&nbsp;|
    <br>
    Web Page by Fridah Gaceri<br>
    KIRINYAGA UNIVERSITY&nbsp;&copy;2017 All Rights Reserved
	</div>
	</body>

</html>
