<?php

include('db_connect.php');

$sql="SELECT * FROM school_db WHERE active_status='0' ";
$result=mysql_query($sql);
$no=0;
$i=0;
while($row=mysql_fetch_array($result))
{
	$reg_no=$row['reg_no'];
	$sql1="SELECT * FROM students_login WHERE reg_no='$reg_no' ";
	$result1=mysql_query($sql1);
	//delete from students login table
	$sql2="DELETE * FROM students_login WHERE reg_no='$reg_no' ";
	$result2=mysql_query($sql2);
	
	$sql3="SELECT * FROM vote_register WHERE reg_no='$reg_no' ";
	$result3=mysql_query($sql3);
	//delete from voter register table
	$sql4="DELETE * FROM vote_register WHERE reg_no='$reg_no' ";
	$result4=mysql_query($sql4);
	
	if($result2 && $result4)
	{
		$no=$no+1;
		break;
	}
	$i++;
}

if($no==0)
{
	echo "<script type=\"text/javascript\">  window.alert('No student to clear.')  </script>";
	echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/admin_index.php', '_parent')  </script>";
	exit();
}
else
{
	echo "<script type=\"text/javascript\">  window.alert('You have successfully deleted the cleared student. The number of students deleted is $no')</script>";
	echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/admin_index.php', '_parent')  </script>";
	exit();
}
?>