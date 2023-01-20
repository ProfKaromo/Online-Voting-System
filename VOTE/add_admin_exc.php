<?php
include('db_connect.php');

	if(isset($_POST['staff_no'])){
			$staff_no = $_POST['staff_no'];
		}
		if(isset($_POST['admin_user_name'])){
			$admin_user_name = $_POST['admin_user_name'];
		}

		if(isset($_POST['password'])){
			$password = sha1($_POST['password']);
	   }
	   	if(isset($_POST['cpassword'])){
			$cpassword = sha1($_POST['cpassword']);
	   }
	   $vote_status=false;
	   
	   //check password matching.
	 if ($_POST['password']!= $_POST['cpassword'])
	 {
	 ?>
	 		<script type="text/javascript">
			alert("Oops! Password did not match! Try again.");
			window.location.href='add_admin_fail.php';
			</script>
	<?php
	exit();
	 }
if(empty($staff_no) || empty($admin_user_name) || empty($password)) 
{
			echo "<script type=\"text/javascript\">  window.alert('Please fill in all the fields!')  </script>";
			header("location:add_admin_fail.php");
			?>
			
<?php
exit();
}
	 $sql_1 = "INSERT INTO admin_login(staff_no,admin_user_name,password) 
	 VALUES('$staff_no','$admin_user_name','$password')";
     $result_1 = mysql_query($sql_1);
	 
	 
if(!($result_1))
{
?>
	<script type="text/javascript">
	alert("Admin addition failed!! please repeat using your valid creditentials. (check out the staff number)");
	</script>
<?php
	 echo mysql_error();
	 exit();
}
	  else
?>
			<script type="text/javascript">
			alert("You Have Successfully Added a new Admin!");
			</script>
<?php
echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/admin_index.php', '_parent')  </script>";
?>