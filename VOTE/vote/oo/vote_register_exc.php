<?php
include('db_connect.php');

	if(isset($_POST['reg_no'])){
			$reg_no = $_POST['reg_no'];
		}
		if(isset($_POST['fname'])){
			$fname = $_POST['fname'];
		}
		if(isset($_POST['sname'])){
			$sname = $_POST['sname'];
	   }
	   if(isset($_POST['user_name'])){
			$user_name = $_POST['user_name'];
	   }
	   if(isset($_POST['year'])){
			$year = $_POST['year'];
		}
	   if(isset($_POST['email'])){
			$email = $_POST['email'];
			
		}
		if(isset($_POST['password'])){
			$password = sha1($_POST['password']);
	   }
	   	if(isset($_POST['cpassword'])){
			$cpassword = sha1($_POST['cpassword']);
	   }
	   $vote_status=false;
	   //$reg_date=date("y-m-d H:i:s");
	   //$sql=mysql_query("insert into tablename set date=current_timestamp") or die(mysql_error()); 
	   //$sql=mysql_query("update db.tablename set insert_time=now() where username='".$somename."'");
	   
	   //check password matching.
	 if ($_POST['password']!= $_POST['cpassword'])
	 {
	 ?>
	 		<script type="text/javascript">
			alert("Oops! Password did not match! Try again.");
			window.location.href='register_fail.php';
			</script>
	<?php
	exit();
	 }
if(empty($reg_no) || empty($fname) || empty($sname)|| empty($year)||empty($email) || empty($password)||empty($user_name)) 
{
			echo "<script type=\"text/javascript\">  window.alert('Please fill in all the fields!')  </script>";
			header("location:register_fail.php");
			?>
			
<?php
exit();

}
	 $sql_1 = "INSERT INTO vote_register(reg_no,fname,sname,year,email,vote_status) 
	 VALUES('$reg_no','$fname','$sname','$year','$email','$vote_status')";
     $result_1 = mysql_query($sql_1);
	 
	 $sql_2 = "INSERT INTO vote.students_login(reg_no,user_name,password,vote_status) 
	 VALUES('$reg_no','$user_name','$password','$vote_status')";
     $result_2 = mysql_query($sql_2);
	 
if(!($result_1 && $result_2))
{
?>
	<script type="text/javascript">
	alert("Your registration failed!! please repeat using your valid creditentials. (check out your registration number)");
	</script>
<?php
	 echo mysql_error();
	 exit();
}
	  else
?>
			<script type="text/javascript">
			alert("You Have Successfully Registered!");
			</script>
<?php
echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/index.php', '_parent')  </script>";
?>