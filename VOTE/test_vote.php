<?php

session_start();
if(!isset($_SESSION['reg_no'])){
header("location:login.php");
}
 include('db_connect.php');

        $reg_no=($_SESSION['reg_no']);

       $sql="SELECT * FROM vote_register WHERE reg_no='$reg_no'";
       $result=mysql_query($sql,$con);

       $row=mysql_fetch_array($result);

       $vote =$row['vote_status'];
//check if student have voted. Objective 2
if($vote!='1')
{
		echo "<script type='text/javascript'>";
		echo "alert('Be careful as you vote. Remember you can only vote once....')";
		echo "</script>";
		echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/vote.php', '_parent')  </script>";

}
else
{
	echo "<script type='text/javascript'>";
	echo "alert('You Had Already Casted Your Vote...No Voting Twice!!!')";
	echo "</script>";	
	echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/member_index.php', '_parent')  </script>";
}

?>