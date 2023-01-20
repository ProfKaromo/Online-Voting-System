<?php

include('db_connect.php');

$sql="SELECT * FROM vote_register";
$result=mysql_query($sql);

$increment=1;

$sql1="UPDATE vote_register SET year=(year+$increment) ";
$result1=mysql_query($sql1);

$sql2="SELECT * FROM school_db";
$result2=mysql_query($sql2);

$sql3="UPDATE school_db SET year=(year+$increment) ";
$result3=mysql_query($sql3);

//deactivating students have cleared(four years for this case) by setting their active status to 0.
$sql4="SELECT * FROM school_db";
$result4=mysql_query($sql4);
$i=0;
while($row=mysql_fetch_array($result4))
{
	$reg_no=$row['reg_no'];
	if($row['year']>4)
	{
		$sql5="UPDATE school_db SET active_status='0' WHERE reg_no='$reg_no' ";
		$result5=mysql_query($sql5);
		
		if($row['year']>7)
		{
			$sql6="DELETE FROM school_db WHERE reg_no='$reg_no' ";
			$result6=mysql_query($sql6);
			
			$sql7="DELETE FROM students_login WHERE reg_no='$reg_no' ";
			$result7=mysql_query($sql7);
			
			$sql8="DELETE FROM vote_register WHERE reg_no='$reg_no' ";
			$result8=mysql_query($sql8);
		}
		else
		{
			//do nothing
		}	
	}
	else
	{
		//do nothing
	}

	$i++;
}


if($result1 AND $result3)
{
	echo "<script type=\"text/javascript\">  window.alert('You have successfully updated students years')  </script>";
	echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/admin_index.php', '_parent')  </script>";
	exit();
}
else
{
	echo "<script type=\"text/javascript\">  window.alert('Something went wrong while updating years!')  </script>";
	echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/admin_index.php', '_parent')  </script>";
	exit();
}

?>