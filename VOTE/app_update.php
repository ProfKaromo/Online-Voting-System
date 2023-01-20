<?php
	session_start();
	if(!isset($_SESSION['admin_user_name'])){
	header("location:admin_login.php");
	}
	else{
	include('db_connect.php');

	$sql="SELECT * FROM active_app WHERE success!='0'";
	$result=mysql_query($sql,$con);
	
	$i=0;
	while($row=mysql_fetch_array($result)){
	if($row['success']==1)
	{	
		$cname=$row['fname']." ".$row['sname'];
		$reg_no=$row['reg_no'];
		$fname=$row['fname'];
		$sname=$row['sname'];
		$year=$row['year'];
		$reason=$row['reason'];
		$success=1;
		$image_caption=$row['image_caption'];
		$image=$row['image'];
		
		if($row['post']=="chairperson")
		{
			$result="INSERT INTO vote.vote_chair(reg_no,cname) VALUES('$reg_no','$cname')";
			$result1=mysql_query($result,$con);
			
			$result2="INSERT INTO vote.apply_chairperson(reg_no,fname,sname,year,reason,success,image_caption,image)
			VALUES('$reg_no','$fname','$sname','$year','$reason','$success','$image_caption','$image')";
			$result3=mysql_query($result2,$con);
			
			if($result1 AND $result3){
				$result4="DELETE FROM active_app WHERE reg_no='$reg_no'";
				$result5=mysql_query($result4,$con);
			}
		}
		elseif($row['post']=="secretary")
		{
			$result6="INSERT INTO vote.vote_sec(reg_no,cname) VALUES('$reg_no','$cname')";
			$result7=mysql_query($result6,$con);
			
			$result8="INSERT INTO vote.apply_general_sec(reg_no,fname,sname,year,reason,success,image_caption,image)
			VALUES('$reg_no','$fname','$sname','$year','$reason','$success','$image_caption','$image')";
			$result9=mysql_query($result8,$con);
			
			if($result7 AND $result9){
				$result10="DELETE FROM active_app WHERE reg_no='$reg_no'";
				$result11=mysql_query($result10,$con);
			}
		}
		elseif($row['post']=="finance")
		{
			$result12="INSERT INTO vote.vote_finance(reg_no,cname) VALUES('$reg_no','$cname')";
			$result13=mysql_query($result12,$con);
			
			$result14="INSERT INTO vote.apply_finance(reg_no,fname,sname,year,reason,success,image_caption,image)
			VALUES('$reg_no','$fname','$sname','$year','$reason','$success','$image_caption','$image')";
			$result15=mysql_query($result14,$con);
			
			if($result13 AND $result15){
				$result16="DELETE FROM active_app WHERE reg_no='$reg_no'";
				$result17=mysql_query($result16,$con);
			}
		}
	}
	elseif($row['success']==2)
	{
		$reg_no=$row['reg_no'];
		$fname=$row['fname'];
		$sname=$row['sname'];
		$year=$row['year'];
		$reason=$row['reason'];
		$success=0;
		$image_caption=$row['image_caption'];
		$image=$row['image'];
		
		$result18="INSERT INTO vote.declined_app(reg_no,fname,sname,year,post,reason,success,image_caption,image)
		VALUES('$reg_no','$fname','$sname','$year','$post','$reason','$success','$image_caption','$image')";
		$result19=mysql_query($result18,$con);
		
		if($result19){
			$result20="DELETE FROM active_app WHERE reg_no='$reg_no'";
			$result21=mysql_query($result20,$con);
		}
	}
	
	$i++;
// close while loop
}
header("location:applications.php");
}
?>
