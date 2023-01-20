    <?php
	$success=$_POST['vet'];
	
	include('db_connect.php');
	
	if($success==1)
	{
		$rowCount = count($_POST["applicants"]);
		for($i=0;$i<$rowCount;$i++) {
		mysql_query("UPDATE active_app SET success='1' WHERE reg_no='" . $_POST["applicants"][$i] . "'");
		}
		header("Location:applications.php");
	}
	elseif($success==2)
	{
		$rowCount = count($_POST["applicants"]);
		for($i=0;$i<$rowCount;$i++) {
		mysql_query("UPDATE active_app SET success='2' WHERE reg_no='" . $_POST["applicants"][$i] . "'");
		}
	}
	 
// close while loop
	header("location:app_update.php");
?>