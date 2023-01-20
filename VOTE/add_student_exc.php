<?php
include('db_connect.php');

	if(isset($_POST['reg_no'])){
			$reg_no = $_POST['reg_no'];
		}
		if(isset($_POST['surname'])){
			$surname = $_POST['surname'];
		}

		if(isset($_POST['fname'])){
			$fname = $_POST['fname'];
	   }
	   	if(isset($_POST['sname'])){
			$sname = $_POST['sname'];
	   }
	   if(isset($_POST['phone_no'])){
			$phone_no = $_POST['phone_no'];
	   }
	   if(isset($_POST['course'])){
			$course = $_POST['course'];
	   }
	   if(isset($_POST['year'])){
			$year = $_POST['year'];
	   }
	   
	   $active_status=true;

if(empty($reg_no) || empty($fname) || empty($sname) || empty($course) || empty($year)) 
{
	echo "<script type=\"text/javascript\">  window.alert('All fields with * are required!')  </script>";
	echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/add_student_fail_1.php', '_parent')  </script>";
	exit();
}
	
	 $sql_1 = "INSERT INTO school_db(reg_no,surname,fname,sname,phone_no,course,year,active_status) 
	 VALUES('$reg_no','$surname','$fname','$sname','$phone_no','$course','$year','$active_status')";
     $result_1 = mysql_query($sql_1);
	 
	 
if(!($result_1))
{
?>
	<script type="text/javascript">
	alert("The registration failed!! please repeat using valid creditentials. (Be keen on the registration number.)");
	</script>
<?php
	 echo mysql_error();
	 exit();
}
	  else
?>
			<script type="text/javascript">
			alert("You Have Successfully Added a new Student!");
			</script>
<?php
echo "<script type=\"text/javascript\">  window.open('http://127.0.0.1/vote/admin_index.php', '_parent')  </script>";
?>