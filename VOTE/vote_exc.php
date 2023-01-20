<?php

session_start();
if(!isset($_SESSION['reg_no'])){
header("location:login.php");
}
 include('db_connect.php');
	if(isset($_POST['chair'])){
		$mychair=$_POST['chair'];
	}
	if(isset($_POST['sec'])){
		$mysec=$_POST['sec'];
	}
	if(isset($_POST['finance'])){
		$myfinance=$_POST['finance'];
	}

	if(empty($mychair) || empty($mysec) || empty($myfinance)) 
	{
		echo "<script type=\"text/javascript\">  window.alert('Please vote in every category!')  </script>";
		echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/vote.php', '_parent')  </script>";
		exit();
	}
        $reg_no=($_SESSION['reg_no']);

       $sql5="SELECT * FROM vote_register WHERE reg_no='$reg_no'";
       $result5=mysql_query($sql5,$con);

       $row=mysql_fetch_array($result5);

       $vote =$row['vote_status'];
	   $reg_no=$row['reg_no'];

if($vote!='1'){
 /*for chairperson*/      
$sql="SELECT vcount FROM vote_chair WHERE reg_no='$mychair' ";
$result=mysql_query($sql,$con);

$row=mysql_fetch_array($result);

$Ccount1 =$row['vcount'];

$Ccount1++;

$sql1="UPDATE vote_chair SET vcount=$Ccount1 WHERE reg_no='$mychair'";
$result1=mysql_query($sql1,$con);

/*updating the totals for chairperson*/
if(isset($_POST['chair'])){
$sql_1="SELECT * FROM total_votes WHERE id='1' ";
$result_1=mysql_query($sql_1,$con);

$row=mysql_fetch_array($result_1);

$total_1 =$row['total'];

$total_1++;

$sqlc="UPDATE total_votes SET total= '$total_1' WHERE id='1'";
$result_chair=mysql_query($sqlc,$con);
}
/*calculate percentage for chairperson*/
$sqlp="SELECT * FROM vote_chair WHERE reg_no='$mychair'";
$resultsp=mysql_query($sqlp,$con);
$row1=mysql_fetch_array($resultsp);
$val1=$row1['vcount'];

$sqlt="SELECT * FROM total_votes WHERE id='1'";
$resultst=mysql_query($sqlt,$con);
$row2=mysql_fetch_array($resultst);
$val2=$row2['total'];

$val3=(($val1/$val2)*100);

$sql_sp="UPDATE vote_chair SET percent= '$val3' WHERE reg_no='$mychair'";
$results_sp=mysql_query($sql_sp,$con);

/*for secretary general*/
$sql="SELECT vcount FROM vote_sec WHERE reg_no='$mysec' ";
$result2=mysql_query($sql,$con);

$row=mysql_fetch_array($result2);

$Ccount1 =$row['vcount'];

$Ccount1++;

$sql1="UPDATE vote_sec SET vcount=$Ccount1 WHERE reg_no='$mysec'";
$result3=mysql_query($sql1,$con);

/*updating the totals for secretary general*/
if(isset($_POST['sec'])){
$sql_2="SELECT * FROM total_votes WHERE id='2' ";
$result_2=mysql_query($sql_2,$con);

$row=mysql_fetch_array($result_2);

$total_2 =$row['total'];

$total_2++;

$sqls="UPDATE total_votes SET total= '$total_2' WHERE id='2'";
$result_sec=mysql_query($sqls,$con);
}

/*calculate percentage for secretary general*/
$sqlp_1="SELECT * FROM vote_sec WHERE reg_no='$mysec'";
$resultsp_1=mysql_query($sqlp_1,$con);
$row3=mysql_fetch_array($resultsp_1);
$val4=$row3['vcount'];

$sqlt_2="SELECT * FROM total_votes WHERE id='2'";
$resultst_2=mysql_query($sqlt_2,$con);
$row4=mysql_fetch_array($resultst_2);
$val5=$row4['total'];

$val6=(($val4/$val5)*100);

$sql_sp1="UPDATE vote_sec SET percent= '$val6' WHERE reg_no='$mysec'";
$results_sp1=mysql_query($sql_sp1,$con);

/*for finance*/
$sql="SELECT vcount FROM vote_finance WHERE reg_no='$myfinance' ";
$result4=mysql_query($sql,$con);

$row=mysql_fetch_array($result4);

$Ccount1 =$row['vcount'];

$Ccount1++;

$sql1="UPDATE vote_finance SET vcount=$Ccount1 WHERE reg_no='$myfinance'";
$result5=mysql_query($sql1,$con);

/*updating the totals for finance minister*/
if(isset($_POST['finance'])){
$sql_3="SELECT * FROM total_votes WHERE id='3' ";
$result_3=mysql_query($sql_3,$con);

$row=mysql_fetch_array($result_3);

$total_3 =$row['total'];

$total_3++;

$sqlf="UPDATE total_votes SET total= '$total_3' WHERE id='3'";
$result_finance=mysql_query($sqlf,$con);
}

/*calculate percentage for finance minister*/
$sqlp_2="SELECT * FROM vote_finance WHERE reg_no='$myfinance'";
$resultsp_2=mysql_query($sqlp_2,$con);
$row5=mysql_fetch_array($resultsp_2);
$val7=$row5['vcount'];

$sqlt_3="SELECT * FROM total_votes WHERE id='3'";
$resultst_3=mysql_query($sqlt_3,$con);
$row6=mysql_fetch_array($resultst_3);
$val8=$row6['total'];

$val9=(($val7/$val8)*100);

$sql_sp2="UPDATE vote_finance SET percent= '$val9' WHERE reg_no='$myfinance'";
$results_sp2=mysql_query($sql_sp2,$con);


//$myreg_no=($_SESSION['reg_no']);

$sql2="UPDATE vote_register SET vote_status='1' WHERE reg_no='$reg_no' ";
$sql3="UPDATE students_login SET vote_status='1' WHERE reg_no='$reg_no' ";
$result5=mysql_query($sql2,$con);
$result6=mysql_query($sql3,$con);

	if($result1 AND $result3 AND $result5 AND $result6)
	{
				echo "<script type='text/javascript'>";
				echo "alert('You Have Successfuly Casted Your Vote...')";
				echo "</script>";
				echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/member_index.php', '_parent')  </script>";
	}
}
	else
	{
				echo "<script type='text/javascript'>";
				echo "alert('You Had Already Casted Your Vote...No Voting Twice!!!')";
				echo "</script>";	
				echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/member_index.php', '_parent')  </script>";
	}

?>