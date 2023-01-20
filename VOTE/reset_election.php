	<?php
	include('db_connect.php');

	$sql="SELECT * FROM vote_chair";
	$result=mysql_query($sql);

	$sql1="DELETE FROM vote_chair";
	$result1=mysql_query($sql1);

	$sql2="SELECT * FROM vote_sec";
	$result2=mysql_query($sql2);

	$sql3="DELETE FROM vote_sec";
	$result3=mysql_query($sql3);

	$sql4="SELECT * FROM vote_finance";
	$resul4=mysql_query($sql4);

	$sql5="DELETE FROM vote_finance ";
	$result5=mysql_query($sql5);

	$sql6="SELECT * FROM apply_chairperson";
	$result6=mysql_query($sql6);

	$sql7="DELETE FROM apply_chairperson";
	$result7=mysql_query($sql7);

	$sql8="SELECT * FROM apply_general_sec";
	$result8=mysql_query($sql8);

	$sql9="DELETE FROM apply_general_sec";
	$result9=mysql_query($sql9);

	$sql10="SELECT * FROM apply_finance";
	$resul10=mysql_query($sql10);

	$sql11="DELETE FROM apply_finance ";
	$result11=mysql_query($sql11);

	$sql12="SELECT * FROM active_app";
	$result12=mysql_query($sql12);

	$sql13="DELETE FROM active_app";
	$result13=mysql_query($sql13);

	$sql14="SELECT * FROM declined_app";
	$resul14=mysql_query($sql14);

	$sql15="DELETE FROM declined_app ";
	$result15=mysql_query($sql15);

	$sql16="SELECT * FROM total_votes";
	$resul16=mysql_query($sql16);
	$row=mysql_affected_rows($resul16);

	$i=1;
	do{
		$sql17="UPDATE total_votes SET total='0' WHERE id='$i' ";
		$result17=mysql_query($sql17);
		
		$i++;
	}while($i<=3);
	
	$sql18="SELECT * FROM vote_register";
	$resul18=mysql_query($sql18);

	for($j=0;$j<count(mysql_affected_rows($resul18));$j++)
	{
		$sql19="UPDATE vote_register SET vote_status='0' WHERE vote_status='1' ";
		$result19=mysql_query($sql19);
	}
	
	$sql20="SELECT * FROM students_login";
	$resul20=mysql_query($sql20);

	$k=0;
	while($k<count(mysql_affected_rows($resul18)))
	{
		$sql21="UPDATE students_login SET vote_status='0' WHERE vote_status='1' ";
		$result21=mysql_query($sql21);
		
		$k++;
	}

	header("location:admin_index.php");

	?>
